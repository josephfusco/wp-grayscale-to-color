<?php
/*
Plugin Name:    WP Grayscale To Color
Plugin URI:     http://github.com/josephfusco/wp-grayscale-to-color/
Description:    Make your images grayscale with color on hover.
Version:        1.0
Author:         Joseph Fusco
Author URI:     http://josephfus.co/
License:        GPLv2 or later
License URI:    http://www.gnu.org/licenses/gpl-2.0.html
*/

/**
 * Exit if accessed directly
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Enqueue plugin CSS
 */
function wpg2c_styles() {
	wp_enqueue_style( 'wpg2c', plugins_url( 'style.css', __FILE__ ) );
}

add_action( 'wp_enqueue_scripts', 'wpg2c_styles' );

/**
 * Add plugin body class
 *
 * @param $classes
 *
 * @return array
 */
function wpg2c_classes( $classes ) {
	$classes[] = 'grayscale-to-color';

	return $classes;
}

add_filter( 'body_class', 'wpg2c_classes' );
