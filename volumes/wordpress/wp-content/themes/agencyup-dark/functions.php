<?php
/**
 * Theme functions and definitions
 *
 * @package Agencyup Dark
 */

if ( ! function_exists( 'agencyup_dark_enqueue_styles' ) ) :

	/**
	 * Load assets.
	 *
	 * @since 1.0.0
	 */
	function agencyup_dark_enqueue_styles() {

		wp_enqueue_style( 'agencyup-style-parent', get_template_directory_uri() . '/style.css' );
		wp_enqueue_style( 'agencyup-dark-style', get_stylesheet_directory_uri() . '/style.css', array( 'agencyup-dark-style-parent' ), '1.0' );
		wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css');
		wp_enqueue_style( 'agencyup-dark-default-css', get_stylesheet_directory_uri()."/css/colors/default.css" );
		wp_dequeue_style( 'default',get_template_directory_uri() .'/css/colors/default.css');
	}

endif;

add_action( 'wp_enqueue_scripts', 'agencyup_dark_enqueue_styles', 99 );


function agencyup_dark_customizer_rid_values($wp_customize) {

  $wp_customize->remove_section('nav_btn_section');
  $wp_customize->remove_section('hide_show_nav_menu_btn');
  $wp_customize->remove_section('menu_btn_label');
}

add_action( 'customize_register', 'agencyup_dark_customizer_rid_values', 1000 );

