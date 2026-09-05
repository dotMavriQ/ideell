<?php
/**
 * Ideell theme setup.
 *
 * Keep this file lean. Design lives in theme.json; layout lives in templates/,
 * parts/ and patterns/. Add PHP only for behaviour blocks cannot express.
 *
 * @package Ideell
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! defined( 'IDEELL_VERSION' ) ) {
	define( 'IDEELL_VERSION', '0.1.0' );
}

/**
 * Theme setup: i18n and editor styles.
 */
function ideell_setup() {
	load_theme_textdomain( 'ideell', get_template_directory() . '/languages' );
	add_editor_style( 'assets/css/editor.css' );
}
add_action( 'after_setup_theme', 'ideell_setup' );

/**
 * Front-end styles.
 *
 * Only what theme.json cannot express: focus polish, reduced motion, the
 * equal-height card behaviour and the skip link.
 */
function ideell_enqueue_assets() {
	wp_enqueue_style( 'ideell-style', get_stylesheet_uri(), array(), IDEELL_VERSION );

	$app = get_template_directory() . '/assets/css/app.css';
	if ( file_exists( $app ) ) {
		wp_enqueue_style(
			'ideell-app',
			get_template_directory_uri() . '/assets/css/app.css',
			array( 'ideell-style' ),
			(string) filemtime( $app )
		);
	}
}
add_action( 'wp_enqueue_scripts', 'ideell_enqueue_assets' );

/**
 * Preload the body font's latin subset to protect LCP.
 *
 * Only the one file the overwhelming majority of pages actually need; the
 * display serif and the other subsets swap in normally.
 *
 * A child theme that replaces settings.typography.fontFamilies replaces the
 * parent's font files outright, which would leave this preloading a font the
 * page never requests. Filter 'ideell_preload_font_urls' to point at the child's
 * own files, or return an empty array to preload nothing.
 */
function ideell_preload_fonts() {
	$urls = apply_filters(
		'ideell_preload_font_urls',
		array( get_template_directory_uri() . '/assets/fonts/source-sans-3-latin-wght-normal.woff2' )
	);

	foreach ( (array) $urls as $url ) {
		printf(
			'<link rel="preload" href="%s" as="font" type="font/woff2" crossorigin>' . "\n",
			esc_url( $url )
		);
	}
}
add_action( 'wp_head', 'ideell_preload_fonts', 1 );

/**
 * Pattern categories for the inserter.
 */
function ideell_register_pattern_categories() {
	$categories = array(
		'ideell/header'   => __( 'Ideell: Headers', 'ideell' ),
		'ideell/footer'   => __( 'Ideell: Footers', 'ideell' ),
		'ideell/hero'     => __( 'Ideell: Heroes', 'ideell' ),
		'ideell/sections' => __( 'Ideell: Sections', 'ideell' ),
		'ideell/cta'      => __( 'Ideell: Calls to action', 'ideell' ),
		'ideell/posts'    => __( 'Ideell: Posts and archives', 'ideell' ),
		'ideell/pages'    => __( 'Ideell: Page content', 'ideell' ),
	);
	foreach ( $categories as $slug => $label ) {
		register_block_pattern_category( $slug, array( 'label' => $label ) );
	}
}
add_action( 'init', 'ideell_register_pattern_categories' );

/**
 * Register the Section and Card block variations.
 *
 * These are variations of core/group, not new block types: what lands in the
 * database is ordinary core/group markup, so content authored with them stays
 * valid if the site later switches theme. The visual treatment comes from the
 * matching block style variations declared in theme.json.
 */
function ideell_enqueue_block_variations() {
	$asset = get_template_directory() . '/assets/js/variations.js';
	if ( ! file_exists( $asset ) ) {
		return;
	}
	wp_enqueue_script(
		'ideell-variations',
		get_template_directory_uri() . '/assets/js/variations.js',
		array( 'wp-blocks', 'wp-i18n', 'wp-dom-ready' ),
		(string) filemtime( $asset ),
		true
	);
	wp_set_script_translations( 'ideell-variations', 'ideell', get_template_directory() . '/languages' );
}
add_action( 'enqueue_block_editor_assets', 'ideell_enqueue_block_variations' );

/**
 * Unwrap the Page List that core/navigation falls back to when no menu exists.
 *
 * With no menu assigned, core renders core/page-list inside the navigation's
 * own <ul>, producing <ul><ul>...</ul></ul>. A <ul> may only contain <li>, so
 * every page of a freshly installed site carries a serious axe violation
 * ("list: <ul> and <ol> must only directly contain <li>") until someone happens
 * to create a menu. That is precisely the state a theme reviewer sees.
 *
 * The list items themselves are already correct, so lifting them out of the
 * redundant inner <ul> is enough. Once a real menu exists this does nothing.
 */
function ideell_unwrap_navigation_page_list( $content ) {
	if ( false === strpos( $content, 'wp-block-navigation__container' )
		|| false === strpos( $content, '<ul class="wp-block-page-list">' ) ) {
		return $content;
	}

	// Drop the inner opening tag, but only where it sits directly inside the
	// navigation container: a Page List placed anywhere else is legitimate.
	$unwrapped = preg_replace(
		'#(<ul[^>]*wp-block-navigation__container[^>]*>)\s*<ul class="wp-block-page-list">#',
		'$1',
		$content,
		1,
		$count
	);

	if ( ! $count ) {
		return $content;
	}

	// Remove the now-surplus closing tag. The greedy prefix makes this match the
	// last pair in the block, which is where the two lists close together.
	return preg_replace( '#(.*)</ul>(\s*)</ul>#s', '$1</ul>$2', $unwrapped, 1 );
}
add_filter( 'render_block_core/navigation', 'ideell_unwrap_navigation_page_list' );
