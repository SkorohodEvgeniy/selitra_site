<?php


function selitra_scripts() {
	wp_register_style( 'selitra-style', get_template_directory_uri() . '/style.css');
	wp_register_script('selitra-script', get_template_directory_uri() . 'script/script.js');

	wp_enqueue_style('selitra-style');
	wp_enqueue_script('selitra-script');
}
add_action('wp_enqueue_scripts', 'selitra_scripts');

add_theme_support( 'custom-logo', [
	'height'      => 300,
	'width'       => 500,
	'flex-width'  => true,
	'flex-height' => true,
	'header-text' => '',
] );

if( function_exists('acf_add_options_page') ) {

    acf_add_options_page();

}
