<?php 
/*
Plugin Name:Uxstock
*/
//Exit if Access Directly 
if(!defined ('ABSPATH')){
	exit;
}
	// Define
	define('UXSTOCK_ACC_URL',WP_PLUGIN_URL.'/'.plugin_basename(dirname(__FILE__)).'/');
	define('UXSTOCK_ACC_PATH',	plugin_dir_path(__FILE__));

    add_action('init','Stock_theme_custom_post');
   function Stock_theme_custom_post(){
        register_post_type('slide',
             array(
                   'labels' =>array(
                   'name' =>__('slide'),
                   'singular_name' =>__('slide')
                       ),
                        'supports' =>array('title','post-thumbnail','editor','page-attributes'),
                        'public' => false,
                        'show_ui' => true,
                       
                 )
             );
    
  }

//	Print Shortcode In Widgets
  add_filter('widget_text','do_shortcode');


// Loading VC addons Insert
require_once(UXSTOCK_ACC_PATH.'vc-addons/vc-blocks-load.php');


//Theme Shortcode Insert
require_once(UXSTOCK_ACC_PATH.'theme-shortcode/slide-shortcode.php');

//Shortcode Dependence On Visual Composer
include_once(ABSPATH.'wp-admin/includes/plugin.php');

if (is_plugin_active('js_composer/js_composer.php')) {

//	include_once(UXSTOCK_ACC_PATH.'theme-shortcodes/staff-shortcode.php');

}
//Register Uxstock Toolkit Files

function uxstock_toolkit_files(){

	wp_enqueue_style('owl-carousel',plugin_dir_url(__FILE__).'asssets/css/owl.carousel.css');
	wp_enqueue_style('owl-carousel',plugin_dir_url(__FILE__).'asssets/css/owl.carousel.js',array('jquery'),'3.1.7',true );
}

add_action('wp_enqueue_scripts','uxstock_toolkit_files');












