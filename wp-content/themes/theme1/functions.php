<?php

/**
 * подключение стилей и скриптов
 */
function load_style_scripts(){
	wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
	wp_enqueue_script('jquery-custom', get_template_directory_uri() . '/js/jquery-1.10.1.min.js');
	wp_enqueue_script('jqFancyTransition', get_template_directory_uri() . '/js/jqFancyTransitions.1.8.min.js');
}
add_action('wp_enqueue_scripts', 'load_style_scripts');


/**
 * Добавлено поддержка миниатюр
 */
add_theme_support('post-thumbnails');


/**
 * Добавлено новый тип "banner"
 */
add_action('init', 'register_banner');
function register_banner(){
	register_post_type('banner', array(
		'label'  => null,
		'labels' => array(
			'name'               => 'Баннер', // основное название для типа записи
			'singular_name'      => 'Баннер', // название для одной записи этого типа
			'add_new'            => 'Добавить баннер', // для добавления новой записи
			'add_new_item'       => 'Добавление баннера', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование баннера', // для редактирования типа записи
			'new_item'           => 'Новое ____', // текст новой записи
			'view_item'          => 'Смотреть ____', // для просмотра записи этого типа.
			'search_items'       => 'Искать ____', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Баннеры', // название меню
		),
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => null, // зависит от public
		'exclude_from_search' => null, // зависит от public
		'show_ui'             => null, // зависит от public
		'show_in_menu'        => null, // показывать ли в меню адмнки
		'show_in_admin_bar'   => null, // по умолчанию значение show_in_menu
		'show_in_nav_menus'   => null, // зависит от public
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => null,
		'menu_icon'           => null,
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => array('title','thumbnail'), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => array(),
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	) );
}

/**
 * регистрация меню
 */
register_nav_menu('header-menu', 'Меню в шапке');


/**
 * социальные иконки в шапке
 */
add_action( 'widgets_init', 'register_socials_icons' );
function register_socials_icons(){
	register_sidebar( array(
		'name'          => 'header-socials',
		'id'            => 'header-socials-id',
		'description'   => 'Добавляйте социальные иконки в шапке с помощью виджет текст',
		'class'         => '',
		'before_widget' => '',
		'after_widget'  => "",
		'before_title'  => '',
		'after_title'   => "",
	) );
}

/**
 * Добавлено новый тип "banner"
 */
add_action('init', 'register_slider');
function register_slider(){
	register_post_type('slider', array(
		'label'  => null,
		'labels' => array(
			'name'               => 'Слайдер', // основное название для типа записи
			'singular_name'      => 'Слайдер', // название для одной записи этого типа
			'add_new'            => 'Добавить слайдер', // для добавления новой записи
			'add_new_item'       => 'Добавление слайдера', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование слайдера', // для редактирования типа записи
			'new_item'           => 'Новое ____', // текст новой записи
			'view_item'          => 'Смотреть ____', // для просмотра записи этого типа.
			'search_items'       => 'Искать ____', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Слайдеры', // название меню
		),
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => null, // зависит от public
		'exclude_from_search' => null, // зависит от public
		'show_ui'             => null, // зависит от public
		'show_in_menu'        => null, // показывать ли в меню адмнки
		'show_in_admin_bar'   => null, // по умолчанию значение show_in_menu
		'show_in_nav_menus'   => null, // зависит от public
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => null,
		'menu_icon'           => null,
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => array('title','thumbnail'), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => array(),
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	) );
}
