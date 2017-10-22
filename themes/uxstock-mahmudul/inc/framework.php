<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.

function uxstock_framework_options( $options ) {

  $options      = array(); // remove old options
  
   
   //For Custom Post And Content Title hidden And Show
   
  $options[]    = array(
  'id'        => 'uxsock_page_options',
  'title'     => 'Page Options',
  'post_type' => 'page',
  'context'   => 'normal',
  'priority'  => 'high',
  'sections'  => array(

    // begin: a section
    array(
      'name'  => 'uxstock_page_dection',
      'icon'  => 'fa fa-cog',

      // begin: fields
      'fields' => array(
        array(
          'id'    => 'enable_title',
          'type'  => 'switcher',
          'title' => 'Enable Title',
          'default'=>'true',
          'desc' =>esc_html__('If You Want to Enablr title .','uxstock-selim'),
             ),
        array(
          'id'    => 'enable_content',
          'type'  => 'switcher',
          'title' => 'Enable Title',
          'default'=>'false',
          'desc' =>esc_html__('If You Want to Enablr Content .','uxstock-selim'),
             ),
          ), // end: fields
         ) // end: a section
     ),
 );
//...........
// Slides Options 
//............

$options[]    = array(
  'id'        => 'uxsock_slide_options',
  'title'     => 'Slide Options',
  'post_type' => 'slide',
  'context'   => 'normal',
  'priority'  => 'high',
  'sections'  => array(

    // begin: a section
    array(
      'name'  => 'uxstock_slide_options_meta',

      // begin: fields
      'fields' => array(
          array(
              'id'              => 'buttons',
              'type'            => 'group',
              'title'           => 'Slide buttons',
              'button_title'    => 'Add New',
              'accordion_title' => 'Add New button',
              'fields'          => array(
                  
         array(
                  'id'    => 'type',
                  'type'  => 'select',
                  'title' => 'Buttons Type',
                   'desc'=>'Select Button Type',
                  'options'    =>
                    array(
                         'bordered'    => 'Bordered buttons',
                         'boxed'     => 'Boxed Buttons',
                      
                      ),
                   
                ),
                
                
         array(
                  'id'    => 'text',
                  'type'  => 'text',
                  'title' => 'Buttons Text',
                  'desc'=>'type Button text name',
                  'default' => 'get Free Consultung',
                ),
                
                
         array(
                  'id'    => 'link_type',
                  'type'  => 'select',
                  'title' => 'Link type',
                 'options'    => 
                 array(
                         '1'  => 'WordPress',
                         '2'  => 'Exter Link',
                      
                      ),
                ),
                
                
         array(
                  'id'    => 'link_to_page',
                  'type'  => 'select',
                  'title' => 'Select Page',
                 'options'    => 'page',
                 'dependency'=>array('link_type','==','1' ),
    
                ),
                
        array(
                  'id'    => 'link_to_external',
                  'type'  => 'text',
                  'title' => 'type URL',
                 'dependency'=>array('link_type','==','2' ),
    
                ),
             ),
         ),
     array(
          'id'    => 'enable_overly',
          'type'  => 'switcher',
          'title' => 'Enable Overly',
          'default'=>'true',
          
            
          ),
          
     array(
          'id'    => 'overly_percentage',
          'type'  => 'text',
          'title' => 'Overly Percentage',
          'default'=>'.7',
          'desc'=>'Type overly Percentage in number',
           'dependency'=>array('enable_overly','==','true' ),
            
          ),
          
    array(
          'id'    => 'overly_color',
          'type'  => 'color_picker',
          'title' => 'Overly Color',
          'default'=>'#181a1f',
           'dependency'=>array('enable_overly','==','true' ),
            
          ),
          
         ) // end: a section
    )
    ),
 );



    return $options;
}

add_filter( 'cs_metabox_options', 'uxstock_framework_options' );
