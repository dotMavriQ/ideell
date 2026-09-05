<?php
/**
 * Render every theme pattern and audit the resulting HTML.
 *
 * Usage: wp eval-file - <slug-prefix>      e.g. "ideell/"
 *
 * Catches the failures that are invisible in source but obvious in output:
 * a block that never rendered because it is not registered, a skipped heading
 * level, an image with no alt attribute, a link or button with no accessible
 * name. These are the things the accessibility-ready reviewers check by hand.
 */

$prefix = $args[0] ?? 'ideell/';
$fail   = 0;
$total  = 0;

foreach ( WP_Block_Patterns_Registry::get_instance()->get_all_registered() as $pattern ) {
	if ( 0 !== strpos( $pattern['name'], $prefix ) ) {
		continue;
	}
	$total++;
	$name   = $pattern['name'];
	$issues = array();

	$html = do_blocks( $pattern['content'] );

	if ( '' === trim( wp_strip_all_tags( $html ) ) && false === strpos( $html, '<img' ) && false === strpos( $html, '<svg' ) ) {
		$issues[] = 'renders empty';
	}

	// A leftover block comment means a block in the pattern is not registered.
	if ( preg_match_all( '/<!--\s+wp:([a-z0-9\/-]+)/i', $html, $m ) ) {
		$issues[] = 'unrendered block(s): ' . implode( ', ', array_unique( $m[1] ) );
	}

	// Heading order: no level may be skipped as the document descends.
	if ( preg_match_all( '/<h([1-6])\b/i', $html, $hm ) ) {
		$levels = array_map( 'intval', $hm[1] );
		$prev   = 0;
		foreach ( $levels as $lvl ) {
			if ( $prev && $lvl > $prev + 1 ) {
				$issues[] = "heading order jumps h{$prev} to h{$lvl}";
				break;
			}
			$prev = $lvl;
		}
		$h1 = count( array_filter( $levels, static fn( $l ) => 1 === $l ) );
		if ( $h1 > 1 ) {
			$issues[] = "{$h1} h1 elements in one pattern";
		}
	}

	// Every img needs an alt attribute; empty is correct for decorative.
	if ( preg_match_all( '/<img\b[^>]*>/i', $html, $im ) ) {
		foreach ( $im[0] as $tag ) {
			if ( ! preg_match( '/\balt\s*=/i', $tag ) ) {
				$issues[] = 'img without alt attribute';
				break;
			}
		}
	}

	// Links and buttons need an accessible name from somewhere.
	if ( preg_match_all( '/<a\b[^>]*>(.*?)<\/a>/is', $html, $am ) ) {
		foreach ( $am[0] as $i => $tag ) {
			$text = trim( wp_strip_all_tags( $am[1][ $i ] ) );
			$has  = '' !== $text
				|| preg_match( '/aria-label\s*=\s*["\'][^"\']+/i', $tag )
				|| preg_match( '/<img\b[^>]*\balt\s*=\s*["\'][^"\']+/i', $am[1][ $i ] )
				|| preg_match( '/<svg\b/i', $am[1][ $i ] );
			if ( ! $has ) {
				$issues[] = 'link with no accessible name';
				break;
			}
		}
	}

	if ( $issues ) {
		$fail++;
		echo "FAIL  {$name}\n";
		foreach ( $issues as $i ) {
			echo "        - {$i}\n";
		}
	} else {
		printf( "ok    %-34s %6d bytes rendered\n", $name, strlen( $html ) );
	}
}

echo "\n{$total} pattern(s) checked, {$fail} with issues.\n";
