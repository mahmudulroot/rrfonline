<?php

   vc_map( array(
      "name" => __( "Uxstock Logo Carousel", "uxstock" ),
      "base" => "uxstock_logo_carousel",
      "category" => __( "UxStock", "my-text-domain"),
      "params" => array(
         array(
            "type" => "attach_images",
            "heading" => __( "Upload Logo", "my-text-domain" ),
            "param_name" => "logos",
            "description" => __( "Upload Your Logo Here", "my-text-domain" )
         )  ,      
         
        array(
            "type" => "textfield",
            "heading" => __( "Dextop count", "my-text-domain" ),
            "param_name" => "dextop_count",
            "std" => __( "5", "my-text-domain" ),
            "description" => __( "Upload Your Logo Here", "my-text-domain" )

         ) , 
                 array(
            "type" => "textfield",
            "heading" => __( "Tablet count", "my-text-domain" ),
            "param_name" => "tablet_count",
            "std" => __( "3", "my-text-domain" ),
             "description" => __( "Upload Your Logo Here", "my-text-domain" )

         ) , 
                 array(
            "type" => "textfield",
            "heading" => __( "Mobile count", "my-text-domain" ),
            "param_name" => "mobile_count",
            "std" => __( "2", "my-text-domain" ),
             "description" => __( "Upload Your Logo Here", "my-text-domain" )

         ) , 
     array(
            "type" => "dropdown",
            "heading" => __( "Enable loop", "my-text-domain" ),
            "param_name" => "loop",
            "std" => __( "false", "my-text-domain" ),
            "value" => array(
                  'yes'=>'true',
                  'No'=>'false' 

               ),
         "description" => __( "Upload Your Logo Here", "my-text-domain" )       
         ) , 
           array(
            "type" => "dropdown",
            "heading" => __( "Enable autoplay", "my-text-domain" ),
            "param_name" => "autoplay",
            "std" => __( "false", "my-text-domain" ),
            "value" => array(
                  'yes'=>'true',
                  'No'=>'false'

               ),

            "description" => __( "Upload Your Logo Here", "my-text-domain" ),
      
         )   ,

         array(
            "type" => "dropdown",
            "heading" => __( "Select autoplayTimeout", "my-text-domain" ),
            "param_name" => "autoplaytimeout",
            "std" => __( "3000", "my-text-domain" ),
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

            "description" => __( "Select Logo count if you want to unlimited slider than select -1", "my-text-domain" ),
             "dependency"   => array( 
               "element"=>"autoplay",
                "value"=>array("true"),
                
                )
         )  ,  
       array(
            "type" => "dropdown",
            "heading" => __( "Enable Navigation Icon", "my-text-domain" ),
            "param_name" => "nav",
            "std" => __( "false", "my-text-domain" ),
            "value" => array(
                  'yes'=>'true',
                  'No'=>'false'

               ),

            "description" => __( "Select Slide count if you want to unlimited slider than select -1", "my-text-domain" ),
         ) ,    
       array(
            "type" => "dropdown",
            "heading" => __( "Enable dots", "my-text-domain" ),
            "param_name" => "dots",
            "std" => __( "false", "my-text-domain" ),
            "value" => array(
                  'yes'=>'true',
                  'No'=>'false'

               ),

            "description" => __( "Select Slide count if you want to unlimited slider than select -1", "my-text-domain" ),
         )
      )
   )
   
);


?>