<?php

/**
 * load sctipts and styles
 * @return [type] [description]
 */
function load_styles_scripts()
{
  wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
  wp_enqueue_script('jquery_my', get_template_directory_uri() . '/js/jquery-1.10.1.min.js');
  wp_enqueue_script('jqFancyTransitions', get_template_directory_uri() . '/js/jqFancyTransitions.1.8.min.js');
}

add_action('wp_enqueue_scripts', 'load_styles_scripts');

/**
 * Creates a sidebar
 * @param string|array  Builds Sidebar based off of 'name' and 'id' values.
 */
$args = array(
  'name'          => __( 'Меню', 'text-domain' ),
  'id'            => 'header-menu',
  'description'   => '',
  'class'         => '',
  'before_widget' => '',
  'after_widget'  => '',
  /*'before_title'  => '<h2 class="widgettitle">',
  'after_title'   => '</h2>',*/
);

register_sidebar( $args );



