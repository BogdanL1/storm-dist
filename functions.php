<?php
/**
 * kyiv-cards functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package storm
 */

if ( function_exists('add_theme_support') ) {
    add_theme_support('post-thumbnails');
}

function wptuts_styles_with_the_lot()  
{  
    wp_register_style( 'style', get_template_directory_uri() . '/css/styles.min.css', array(), '1', 'all' );  
    wp_register_style( 'style1', get_template_directory_uri() . '/css/jquery.mCustomScrollbar.css', array(), '1', 'all' ); 
    wp_enqueue_style( 'style1' );
    wp_enqueue_style( 'style' );      
    wp_enqueue_style( 'font-awesome' );  
}  
add_action( 'wp_enqueue_scripts', 'wptuts_styles_with_the_lot' );


function wptuts_scripts_important()  
{  
    wp_enqueue_script( 'jquery' );

    wp_register_script( 'jquery-bg', get_template_directory_uri() . '/js/jquery.backgroundvideo.min.js',array() ); 
    wp_enqueue_script( 'jquery-bg' ); 

    wp_register_script( 'jquery-CustomScrollbar', get_template_directory_uri() . '/js/jquery.mCustomScrollbar.concat.min.js',array() ); 
    wp_enqueue_script( 'jquery-CustomScrollbar' );  

    wp_register_script( 'jquery-mousewheel', get_template_directory_uri() . '/js/jquery.mousewheel.min.js',array() ); 
    wp_enqueue_script( 'jquery-mousewheel' );  

    wp_register_script( 'script', get_template_directory_uri() . '/js/script.js',array() ); 
    wp_enqueue_script( 'script' );  

}  
add_action( 'wp_enqueue_scripts', 'wptuts_scripts_important');

remove_filter( 'the_content', 'wpautop' );

/** чтоб РЕДАКТОР не удалял теги span без атрибутов */
function my_adds_alls_elements($init) {
if(current_user_can('unfiltered_html')) {
$init['extended_valid_elements'] = 'span[*]';
}
return $init;
}
add_filter('tiny_mce_before_init', 'my_adds_alls_elements', 20);
/** чтоб РЕДАКТОР не удалял теги span без атрибутов */
