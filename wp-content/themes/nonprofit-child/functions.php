<?php

/*-----------------------------------------------------------------------------------*/
/*  Register style.css
/*-----------------------------------------------------------------------------------*/

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
	// Get the theme data
	$the_theme = wp_get_theme();
    wp_enqueue_style( 'child-theme-styles', get_stylesheet_directory_uri() . '/style.css', array(), $the_theme->get( 'Version' ) );
}




/*-----------------------------------------------------------------------------------*/
/*  Custom Functions
/*-----------------------------------------------------------------------------------*/

function awa369_enqueue_styles() {
    // 親テーマの style.css は必ず読み込む
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

    // 子テーマの awa369.css を読み込む
    wp_enqueue_style( 'awa369-style', get_stylesheet_directory_uri() . '/awa369.css', array('parent-style'), '1.0' );
}
add_action( 'wp_enqueue_scripts', 'awa369_enqueue_styles' );

