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
  define('UXSTOCK_ACC_PATH',  plugin_dir_path(__FILE__));

    function uxstock_toolkit_get_post_list(){

      $args = wp_parse_args(array(
          'post_type'=>'slide',
          'number_posts'=>-1
      ));

      $posts = get_posts($args);
      $post_options = array(esc_html__('--select slide--','uxstock_toolkit')=>'');
      if ($posts) {
        foreach ($posts as $post) {
          $post_options[$post->post_title]=$post->ID;
        }
      }
      return  $post_options;
    }
    
 function uxstock_toolkit_get_page_as_list(){

      $args = wp_parse_args(array(
          'post_type'=>'page',
          'number_posts'=>-1
      ));

      $posts = get_posts($args);
      $post_options = array(esc_html__('--select Page--','uxstock_toolkit')=>'');
      if ($posts) {
        foreach ($posts as $post) {
          $post_options[$post->post_title]=$post->ID;
        }
      }
      return  $post_options;
    }



    add_action('init','Stock_theme_custom_post');
   function Stock_theme_custom_post(){
        register_post_type('slide',
             array(
                   'labels' =>array(
                   'name' =>__('slides'),
                   'singular_name' =>__('slide')
                       ),
                        'supports' =>array('title','thumbnail','editor','page-attributes'),
                        'public' => false,
                        'show_ui' => true,
                       
                 )
             );
    
  }

//  Print Shortcode In Widgets
  add_filter('widget_text','do_shortcode');


// Loading VC addons Insert
require_once(UXSTOCK_ACC_PATH.'vc-addons/vc-blocks-load.php');



//Theme Shortcode Insert
require_once(UXSTOCK_ACC_PATH.'theme-shortcode/slide-shortcode.php');
require_once(UXSTOCK_ACC_PATH.'theme-shortcode/logo-carousel-shortcode.php');
//require_once(UXSTOCK_ACC_PATH.'theme-shortcode/service-shortcode.php');

//Shortcode Dependence On Visual Composer
include_once(ABSPATH.'wp-admin/includes/plugin.php');

if (is_plugin_active('js_composer/js_composer.php')) {

//  include_once(UXSTOCK_ACC_PATH.'theme-shortcodes/staff-shortcode.php');

}
//Register Uxstock Toolkit Files

function uxstock_toolkit_files(){

  wp_enqueue_style('owlCarousel',plugin_dir_url(__FILE__).'assets/css/owl.carousel.css');
  wp_enqueue_style('Uxstock-toolkit',plugin_dir_url(__FILE__).'assets/css/style.css');
  wp_enqueue_script('owlCarousel',plugin_dir_url(__FILE__).'assets/js/owl.carousel.min.js',array('jquery'),'11222',true );
}

add_action('wp_enqueue_scripts','uxstock_toolkit_files');






























