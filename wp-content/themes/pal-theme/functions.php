<?php

define('ROOT', get_template_directory_uri());
define('IMG', ROOT . '/img');
define('OFFER', ROOT . '/offer');
define('UPSELLS', ROOT . '/upsells');
function IMG(){
  echo IMG;
}
define('VIDEO', ROOT . '/video');

function TYPE(){
  global $post;
  return $post->post_type;
}

function replace_core_jquery_version() {
  wp_deregister_script( 'jquery' );
  wp_register_script( 'jquery', "https://code.jquery.com/jquery-3.1.1.min.js", array(), '3.1.1' );
}
add_action( 'wp_enqueue_scripts', 'replace_core_jquery_version' );

include('include/clear.php');

add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );

function front_scripts() {
  if( is_404() ){
    wp_enqueue_style( 'styles', get_template_directory_uri().'/css/styles-404.css');
  } else if( is_page_template( 'templates/page-blog.php' ) ){
    wp_enqueue_style( 'styles', get_template_directory_uri().'/css/styles-blog.css');
  } else {
    wp_enqueue_style( 'styles', get_template_directory_uri().'/css/styles.css');
    // wp_enqueue_script( 'scripts-vimeo', 'https://cdnjs.cloudflare.com/ajax/libs/vimeo-player/2.15.0/player.min.js', false, false, 'in_footer');
    wp_enqueue_script( 'scripts', ROOT . '/js/scripts.js', false, false, 'in_footer');
  }
}
add_action( 'wp_enqueue_scripts', 'front_scripts' );

if( function_exists('acf_add_options_page') ) {
  acf_add_options_page();
}

function redirect_from_home() {
  if( is_front_page() ){
    wp_redirect('https://ocmd.co');
    exit();
  }
}
add_action('template_redirect', 'redirect_from_home');