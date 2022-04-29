<?php

function develtio_theme_supp(){
add_theme_support('title-tag');
}
add_action('after_setup_theme', 'develtio_theme_supp');

function develtio_register_styles(){
    $version = wp_get_theme()->get( 'Version' );
    wp_enqueue_style('develtio_style', get_template_directory_uri() . "/style.css", array('develtio_fontawesome'), $version, 'all');
    wp_enqueue_style('develtio_fontawesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css', array(), '4.2.0', 'all');
}
add_action( 'wp_enqueue_scripts', 'develtio_register_styles');

function develtio_register_scripts(){
   
    wp_enqueue_script('develtio_jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js', array(), '2.1.3', true);
    wp_enqueue_script('develtio_scripts', get_template_directory_uri() . "/assets/js/script.js", array(), '1.0', true);
}
add_action( 'wp_enqueue_scripts', 'develtio_register_scripts');
?>