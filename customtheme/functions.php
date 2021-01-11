<?php
 
function custom_theme_assets() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
}
 
add_action( 'wp_enqueue_scripts', 'custom_theme_assets' );

function wptutsplus_theme_support() {
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'wptutsplus_theme_support' );

function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'extra-menu' => __( 'Extra Menu' )
     )
   );
 }
 add_action( 'init', 'register_my_menus' );