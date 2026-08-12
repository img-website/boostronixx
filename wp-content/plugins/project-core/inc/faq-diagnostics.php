<?php
/**
 * FAQ assistant diagnostics.
 *
 * Answers one question: "is the AI layer actually working?" Run it after
 * adding an API key, from the site root:
 *
 *   php -r 'define("WP_USE_THEMES",false); require "wp-load.php"; bxcore_faq_diagnose();'
 *
 * It reports which providers are configured, which are cooling off, and makes
 * one real end-to-end call so a bad key shows up immediately rather than
 * silently degrading to the no-model path — which is exactly what the rest of
 * this feature is designed to hide from visitors.
 *
 * @package ProjectCore
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Print a readable health report for the FAQ assistant.
 *
 * @param string $question Question to test with.
 * @return void
 */
function bxcore_faq_diagnose( $question = 'mujhe ek website banwani hai' ) {
	$line = str_repeat( '-', 66 ) . "\n";

	echo "\nFAQ assistant — health check\n" . $line;

	// --- knowledge base ---
	$kb = bxcore_kb_get();
	printf( "knowledge base : %d passages, %d terms, built %s ago\n",
		count( $kb['docs'] ),
		count( $kb['df'] ),
		human_time_diff( (int) $kb['built'] )
	);
	$types = array();
	foreach ( $kb['docs'] as $d ) {
		$types[ $d['type'] ] = ( $types[ $d['type'] ] ?? 0 ) + 1;
	}
	foreach ( $types as $t => $n ) {
		printf( "                 %-6s %d\n", $t, $n );
	}

	// --- providers ---
	echo $line . "providers (first one that answers wins)\n";
	$configured = 0;
	foreach ( bxcore_ai_providers() as $p ) {
		$key = bxcore_ai_key( $p['id'] );
		if ( '' === $key ) {
			printf( "  %-12s no key       set BX_AI_%s_KEY in wp-config.php\n", $p['id'], strtoupper( $p['id'] ) );
			continue;
		}
		$configured++;
		printf(
			"  %-12s key ...%s  %s\n",
			$p['id'],
			substr( $key, -4 ),
			bxcore_ai_is_cooling( $p['id'] ) ? 'COOLING OFF (recent failure)' : 'ready'
		);
	}
	if ( ! $configured ) {
		echo "\n  No provider configured. The assistant still answers from site copy,\n";
		echo "  but cannot rephrase or reply in the visitor's language.\n";
	}

	// --- retrieval ---
	echo $line;
	$found = bxcore_kb_search( $question, 4 );
	$conf  = bxcore_kb_confidence( $found );
	printf( "question       : %s\n", $question );
	printf( "confidence     : %s  (exact %d, known %d, coverage %.2f)\n",
		strtoupper( $conf ),
		$found['exact_terms'] ?? 0,
		$found['known_terms'] ?? 0,
		$found['best_coverage'] ?? 0
	);
	foreach ( array_slice( $found['hits'], 0, 3 ) as $h ) {
		printf( "                 - %s\n", mb_substr( $h['title'], 0, 56 ) );
	}

	// --- one real call ---
	if ( $configured ) {
		echo $line . "live call...\n";
		$t   = microtime( true );
		$res = bxcore_ai_complete(
			'Reply with exactly: OK',
			'Say OK.'
		);
		if ( '' !== $res['text'] ) {
			printf( "  answered by %s in %.2fs: %s\n", $res['provider'], microtime( true ) - $t, mb_substr( $res['text'], 0, 40 ) );
			echo "  AI layer is LIVE — visitors now get rephrased, same-language answers.\n";
		} else {
			printf( "  no provider answered (%.2fs). Check the key, then re-run.\n", microtime( true ) - $t );
		}
	}

	echo $line . "\n";
}
