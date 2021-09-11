<?php
    // webstyle

    // including from external dir to functions
    function webstyle()
    {
        // CSS
        wp_enqueue_style( 'bootstrap', get_theme_file_uri( '/css/bootstrap.css' ) );
        wp_enqueue_style( 'style', get_theme_file_uri( '/style.css' ) );
        // Js
        wp_enqueue_script( 'bootstrap', get_theme_file_uri( '/js/bootstrap.js' ), [], 1.0, true );
    }
    add_action( 'wp_enqueue_scripts', 'webstyle' );  

    
?>