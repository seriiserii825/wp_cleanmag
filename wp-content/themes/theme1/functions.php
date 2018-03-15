<?php

// правильный способ подключить стили и скрипты темы
add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );
function theme_name_scripts() {
	// подключаем файл стилей темы
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	
	// подключаем js файл темы
	wp_enqueue_script( 'jquery-my', get_template_directory_uri() . '/js/jquery-1.10.1.min.js' );
	wp_enqueue_script( 'jquery-transition', get_template_directory_uri() . '/js/jqFancyTransitions.1.8.min.js' );
}

// post-thumbnail support
add_theme_support( 'post-thumbnails' );


/**
 * Creates header-menu
 *
 * @param string|array  Builds Sidebar based off of 'name' and 'id' values.
 */
$args = array(
	'name'          => __( 'Header-menu', 'text-domain' ),
	'id'            => 'header-menu',
	'description'   => '',
	'class'         => '',
	'before_widget' => '',
	'after_widget'  => '',
	/*'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>',*/
);

register_sidebar( $args );

register_sidebar( [
	'name'          => __( 'Sidebar', 'text-domain' ),
	'id'            => 'sidebar',
	'description'   => '',
	'class'         => '',
	'before_widget' => '<div class="sidebar-widget %2$s">',
	'after_widget'  => '</div>',
	'before_title'  => '<h3>',
	'after_title'   => '</h3>',
] );


/**
 *
 * Слайдер
 */
add_action( 'init', 'my_banner' );
function my_banner() {
	register_post_type( 'banner', array(
		'labels'             => array(
			'name'               => 'Баннеры', // Основное название типа записи
			'singular_name'      => 'Баннер', // отдельное название записи типа Book
			'add_new'            => 'Добавить новый баннер',
			'add_new_item'       => 'Добавить новый баннер',
			'edit_item'          => 'Редактировать баннер',
			'new_item'           => 'Новый баннер',
			'view_item'          => 'Посмотреть баннер',
			'search_items'       => 'Найти баннер',
			'not_found'          => 'Баннеров не найдено',
			'not_found_in_trash' => 'В корзине Баннеров не найдено',
			'parent_item_colon'  => '',
			'menu_name'          => 'Баннеры',
		
		),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'thumbnail' ),
	) );
}


/**
 *
 * Слайдер
 */
add_action( 'init', 'my_slider' );
function my_slider() {
	register_post_type( 'slider', array(
		'labels'             => array(
			'name'               => 'Слайдер', // Основное название типа записи
			'singular_name'      => 'Слайдер', // отдельное название записи типа Book
			'add_new'            => 'Добавить новый слайдер',
			'add_new_item'       => 'Добавить новый слайдер',
			'edit_item'          => 'Редактировать слайдер',
			'new_item'           => 'Новый слайдер',
			'view_item'          => 'Посмотреть слайдер',
			'search_items'       => 'Найти слайдер',
			'not_found'          => 'Слайдеров не найдено',
			'not_found_in_trash' => 'В корзине слайдеров не найдено',
			'parent_item_colon'  => '',
			'menu_name'          => 'Слайдер',
		
		),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'thumbnail' ),
	) );
}


