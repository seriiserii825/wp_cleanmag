<?php

function load_style_scripts()
{
	wp_enqueue_style('style', get_template_directory_uri().'/style.css');
	wp_enqueue_script('jquery-custom', get_template_directory_uri().'/js/jquery-1.10.1.min.js');
	wp_enqueue_script('jqFancyTransition', get_template_directory_uri().'/js/jqFancyTransitions.1.8.min.js');
}

add_action( 'wp_enqueue_scripts', 'load_style_scripts');
