<?php
/**
 * UnderStrap functions and definitions
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$understrap_includes = array(
	'/theme-settings.php',                  // Initialize theme default settings.
	'/setup.php',                           // Theme setup and custom theme supports.
	'/widgets.php',                         // Register widget area.
	'/enqueue.php',                         // Enqueue scripts and styles.
	'/template-tags.php',                   // Custom template tags for this theme.
	'/pagination.php',                      // Custom pagination for this theme.
	'/hooks.php',                           // Custom hooks.
	'/extras.php',                          // Custom functions that act independently of the theme templates.
	'/customizer.php',                      // Customizer additions.
	'/custom-comments.php',                 // Custom Comments file.
	'/jetpack.php',                         // Load Jetpack compatibility file.
	'/class-wp-bootstrap-navwalker.php',    // Load custom WordPress nav walker. Trying to get deeper navigation? Check out: https://github.com/understrap/understrap/issues/567
	'/woocommerce.php',                     // Load WooCommerce functions.
	'/editor.php',                          // Load Editor functions.
	'/deprecated.php',                      // Load deprecated functions.
	'/class-tgm-plugin-activation.php',     // Load TGM Plugin activator class.
	'/understrap-plugin-list.php',           // Load list of plugin that activates when theme activates.
	'/shortcodes.php'
);

foreach ( $understrap_includes as $file ) {
	require_once get_template_directory() . '/inc' . $file;
}
	//function current_paged( $var = '' ) {
	//	if( empty( $var ) ) {
	//		global $wp_query;
	//		if( !isset( $wp_query->max_num_pages ) )
	//			return;
	//		$pages = $wp_query->max_num_pages;
	//	}
	//	else {
	//		global $$var;
	//		if( !is_a( $$var, 'WP_Query' ) )
	//			return;
	//		if( !isset( $$var->max_num_pages ) || !isset( $$var ) )
	//			return;
	//		$pages = absint( $$var->max_num_pages );
	//	}
	//	if( $pages < 1 )
	//		return;
	//	$page = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
	//	echo 'Page ' . $page . ' of ' . $pages;
	//}
