<?php
  add_action('wp_enqueue_scripts', 'childhood_scripts');

  function childhood_scripts() {
    wp_enqueue_style('childhood-style', get_stylesheet_uri());
    // wp_enqueue_style('header-style', get_template_directory_uri() . '/assets/styles/main.min.css'); // connect another styles
    // wp_enqueue_style('animate-style', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css'); // connect styles from cdn
    wp_enqueue_script('childhood-script', get_template_directory_uri() . '/assets/js/main.min.js', array(), null, true);
  };

  add_theme_support( 'custom-logo');
  	
  add_theme_support( 'post-thumbnails' );
  add_theme_support( 'menus' );

  add_filter('nav_menu_link_attributes', 'filter_nav_menu_link_attributes', 10, 3);

  function filter_nav_menu_link_attributes($atts, $item, $args) {
    if($args->menu === 'Main') {
      $atts['class'] = 'header__nav-item';

      if($item->current) {
        $atts['class'] .= ' header__nav-item-active';
      }
     
      if( $item->ID === 166 && ( in_category( 'soft_toys' ) || in_category( 'education_toys' ))){
        $atts['class'] .= ' header__nav-item-active';
      }
    }

    return $atts;
  }
?>