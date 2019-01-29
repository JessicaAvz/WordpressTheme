<?php

/*-----------------------------------------------------------------------------------*/
/*	Register Menus
/*-----------------------------------------------------------------------------------*/

if( !function_exists( 'tms_register_menus' ) ) :
    function tms_register_menus() {
	    register_nav_menu('tms_main_navigation_menu', __( 'Main Navigation' , THEME_SLUG));
	    register_nav_menu('tms_top_navigation_menu', __( 'Top Menu' , THEME_SLUG));
	   	register_nav_menu('tms_social_menu', __( 'Social menu' , THEME_SLUG));
	    register_nav_menu('tms_footer_menu', __( 'Footer Menu' , THEME_SLUG));
	    register_nav_menu('tms_404_menu', __( '404 Menu' , THEME_SLUG));
    }
endif;

?>