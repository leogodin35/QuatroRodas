<?php

/**************************************
 *  THEME SUPORT
 **************************************/
function add_suport_theme(){
    add_theme_support( 'post-thumbnails' );
}
add_action('after_setup_theme','add_suport_theme');

/**************************************
 * Registro Menu Personalizado
 **************************************/
add_theme_support('menus');

/**************************************
 *  SCRIPTS / CSS
 **************************************/
function wp_teste4rodas_scripts() {
  // Carregando CSS header
  wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
  wp_enqueue_style( 'style', get_stylesheet_uri() );

  // Carregando Scripts header
  wp_enqueue_script('bootstrap-js', get_template_directory_uri().'/assets/js/bootstrap.min.js', array('jquery') );

  //Carregando no footer
  //wp_enqueue_script('functions-js', get_template_directory_uri().'/assets/js/functions.js', array('jquery'), '', true );
}
add_action( 'wp_enqueue_scripts', 'wp_teste4rodas_scripts' );
