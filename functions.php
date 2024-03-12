<?php
  add_action( 'wp_enqueue_scripts', 'childhood_scripts' );

  function childhood_scripts() {
    wp_enqueue_style( 'childhood_style', get_stylesheet_uri() );

    wp_enqueue_script( 'childhood_script', get_template_directory_uri() . '/assets/js/main.min.js', array(), null, true );
  }
?>