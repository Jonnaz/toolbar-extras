<?php

// includes/themes-genesis/items-genesis-metro-pro

/**
 * Prevent direct access to this file.
 *
 * @since 1.0.0
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Sorry, you are not allowed to access this file directly.' );
}


add_filter( 'tbex_filter_items_theme_customizer_deep', 'ddw_tbex_themeitems_metro_pro_customize', 90 );
/**
 * Customize items for Genesis Child Theme:
 *   Metro Pro (Premium, by StudioPress)
 *
 * @since 1.3.2
 * @since 1.4.8 Refactored using filter/array declaration.
 *
 * @param array $items Existing array of params for creating Toolbar nodes.
 * @return array Tweaked array of params for creating Toolbar nodes.
 */
function ddw_tbex_themeitems_metro_pro_customize( array $items ) {

	/** Declare child theme's items */
	$metropro_items = array(
		'colors' => array(
			'type'  => 'section',
			'title' => __( 'Colors', 'toolbar-extras' ),
			'id'    => 'metropro-colors',
		),
		'header_image' => array(
			'type'  => 'section',
			'title' => __( 'Header Image', 'toolbar-extras' ),
			'id'    => 'metropro-header-image',
		),
		'metro-image' => array(
			'type'  => 'section',
			'title' => __( 'Backstretch Image', 'toolbar-extras' ),
			'id'    => 'metropro-backstretch-image',
		),
		'background_image' => array(
			'type'  => 'section',
			'title' => __( 'Background Image', 'toolbar-extras' ),
			'id'    => 'metropro-background-image',
		),
	);

	/** Merge and return with all items */
	return array_merge( $items, $metropro_items );

}  // end function
