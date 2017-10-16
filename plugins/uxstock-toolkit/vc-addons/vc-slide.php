<?php

function your_name_integrateWithVC() {
   vc_map( array(
      "name" => __( "uxStock Slider", "my-text-domain" ),
      "base" => "uxstock_slides",
      "category" => __( "UxStock", "my-text-domain"),
      "params" => array(
         array(
            "type" => "textfield",
            "heading" => __( "count", "my-text-domain" ),
            "param_name" => "count",
            "value" => __( "3", "my-text-domain" ),
            "description" => __( "Select Slide count if you want to unlimited slider than select -1", "my-text-domain" )
         )  ,      
          array(
            "type" => "dropdown",
            "heading" => __( "Enable loop", "my-text-domain" ),
            "param_name" => "loop",
            "std" => __( "true", "my-text-domain" ),
            "value" => array(
                  'yes'=>'true',
                  'No'=>'false'

               ),

            "description" => __( "Select Slide count if you want to unlimited slider than select -1", "my-text-domain" ),
         ) ,    

           array(
            "type" => "dropdown",
            "heading" => __( "Enable autoplay", "my-text-domain" ),
            "param_name" => "autoplay",
            "std" => __( "true", "my-text-domain" ),
            "value" => array(
                  'yes'=>'true',
                  'No'=>'false'

               ),

            "description" => __( "Select Slide count if you want to unlimited slider than select -1", "my-text-domain" )
         )   ,

         array(
            "type" => "dropdown",
            "heading" => __( "Select autoplayTimeout", "my-text-domain" ),
            "param_name" => "autoplayTimeout",
            "std" => __( "5000", "my-text-domain" ),
            "value" => array(
                  '1 second'=>'1000',
                  '2 second'=>'2000',
                  '3 second'=>'3000',
                  '4 second'=>'4000',
                  '5 second'=>'5000',
                  '6 second'=>'6000',
                  '7 second'=>'7000',
                  '8 second'=>'8000',
                  '9 second'=>'9000',
                  '10 second'=>'10000',
                  '11 second'=>'11000',
                  '12 second'=>'12000',

               ),

            "description" => __( "Select Slide count if you want to unlimited slider than select -1", "my-text-domain" )
         )  ,  
       array(
            "type" => "dropdown",
            "heading" => __( "Enable Navigation Icon", "my-text-domain" ),
            "param_name" => "nav",
            "std" => __( "true", "my-text-domain" ),
            "value" => array(
                  'yes'=>'true',
                  'No'=>'false'

               ),

            "description" => __( "Select Slide count if you want to unlimited slider than select -1", "my-text-domain" )
         ) ,    
       array(
            "type" => "dropdown",
            "heading" => __( "Enable dots", "my-text-domain" ),
            "param_name" => "dots",
            "std" => __( "true", "my-text-domain" ),
            "value" => array(
                  'yes'=>'true',
                  'No'=>'false'

               ),

            "description" => __( "Select Slide count if you want to unlimited slider than select -1", "my-text-domain" )
         )
      )
   ) );
}

add_action( 'vc_before_init', 'your_name_integrateWithVC' );
?>