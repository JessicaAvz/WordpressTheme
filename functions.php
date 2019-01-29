<?php

/*-----------------------------------------------------------------------------------*/
/*	Define Theme Vars
/*-----------------------------------------------------------------------------------*/

define( 'THEME_DIR', trailingslashit( get_template_directory() ) );
define( 'THEME_URI', trailingslashit( get_template_directory_uri() ) );
define( 'THEME_NAME', 'Top Marketing Strategies' );
define( 'THEME_SLUG', 'topmarketingstrategies' );
define( 'THEME_VERSION', '1.0' );
define( 'THEME_OPTIONS', 'tms_settings' );
define( 'JS_URI', THEME_URI . 'js' );
define( 'CSS_URI', THEME_URI . 'css' );
define( 'IMG_DIR', THEME_DIR . 'img' );
define( 'IMG_URI', THEME_URI . 'img' );

if ( !isset( $content_width ) ) {
	$content_width = 810;
}


/*-----------------------------------------------------------------------------------*/
/*	After Theme Setup
/*-----------------------------------------------------------------------------------*/

add_action( 'after_setup_theme', 'tms_theme_setup' );
add_action('widgets_init', 'tms_init_widgets');
/* Register menus */
add_action( 'init', 'tms_register_menus' );


// Theme Support
function tms_theme_setup(){
	/* Add thumbnails support */
    add_theme_support( 'post-thumbnails' );
    /* Support for HTML5 */
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery' ) );
    /* Add theme support for title tag (since wp 4.1) */
    add_theme_support( 'title-tag' );
	/* Add post formats support */
	add_theme_support( 'post-formats', array(
        'audio', 'gallery', 'image', 'video'
    ));
    /* Automatic Feed Links */
    add_theme_support( 'automatic-feed-links' );
    
    /* Nav Menus 
    register_nav_menus(array(
    'primary' => __('Primary Menu'),
    'secondary' => __('Secondary Menu')
    ));*/

}


// Excerpt Length Control
function set_excerpt_length(){
    return 45;
}
add_filter('excerpt_length', 'set_excerpt_length');
// Widget Locations
function tms_init_widgets($id){
        register_sidebar(array(
            'name'  => 'Sidebar',
            'id'    => 'sidebar',
            'before_widget' => '<div class="sidebar-module">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4>',
            'after_title'   => '</h4>'
        ));

        register_sidebar(array(
            'name'  => 'Box1',
            'id'    => 'box1',
            'before_widget' => '<div class="box">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3>',
            'after_title'   => '</h3>'
        ));

        register_sidebar(array(
            'name'  => 'Box2',
            'id'    => 'box2',
            'before_widget' => '<div class="box">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3>',
            'after_title'   => '</h3>'
        ));
        
        register_sidebar(array(
            'name'  => 'Box3',
            'id'    => 'box3',
            'before_widget' => '<div class="box">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3>',
            'after_title'   => '</h3>'
        ));
}

//Customizer File
require THEME_DIR.'/inc/customizer.php';
// Register Nav Walker class_alias
require_once 'class-wp-bootstrap-navwalker.php';
/* Menus */
require_once 'inc/menus.php';
