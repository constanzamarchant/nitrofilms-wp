<?php

/**
 * Custom Images Names
 * Adds custom images sizes ready to use on administrator
 *
 * @return array
 * @since  1.0
 */
function dl_image_sizes( $sizes ) {

	$add_sizes = array(
		'slideshow'		=> __( 'Tamaño del slideshow' ),
		'custom_logo'	=> __( 'Tamaño personalizado del logo' )
	);

	return array_merge( $sizes, $add_sizes );

}


/**
 * Custom Images Sizes
 * Adds custom images sizes on posts
 *
 * @return void
 * @since  1.0
 * @see    https://developer.wordpress.org/reference/functions/add_image_size/
 * @see    https://codex.wordpress.org/Plugin_API/Filter_Reference/image_size_names_choose
 */
if ( function_exists( 'add_theme_support' ) ) {

	add_image_size( 'slideshow', 800, 600, true );			// Personalización del tamaño del slideshow
	add_image_size( 'custom_logo', 800, 600, true );		// Personalización del tamaño del logo

	add_filter( 'image_size_names_choose', 'dl_image_sizes' );

}

function portafolio_featured_image_size() {
    add_post_type_support( 'portafolio', 'thumbnails' );
    set_post_thumbnail_size( 'thumb-smallsquare', 400, 400, true );		// Personalización del tamaño thumb
	set_post_thumbnail_size( 'thumb-bigsquare', 800, 800, true );		// Personalización del tamaño thumb
	set_post_thumbnail_size( 'thumb-rectvert', 400, 800, true );		// Personalización del tamaño thumb
	set_post_thumbnail_size( 'thumb-recthor', 800, 400, true );		// Personalización del tamaño thumb +

	add_action( 'init', 'portafolio_featured_image_size' );
}
