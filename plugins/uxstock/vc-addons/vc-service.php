<?php

   vc_map( array(
      "name" => __( "Uxstock Service Box", "uxstock" ),
      "base" => "uxstock_service_box",
      "category" => __( "UxStock", "my-text-domain"),
      "params" => array(
         array(
            "type" => "textfield",
            "heading" => __( "Title", "my-text-domain" ),
            "param_name" => "title",
            "description" => __( "Write Your Service Title here", "my-text-domain" )
         )  ,      
         
         array(
            "type" => "textarea",
            "heading" => __( "Content", "my-text-domain" ),
            "param_name" => "desc",
            "description" => __( "Write Your Service Description here", "my-text-domain" )
         )  ,   
        array(
            "type" => "dropdown",
            "heading" => __( "Link Type", "my-text-domain" ),
            "param_name" => "type",
            "std" => __( "1", "my-text-domain" ),
            "value" => array(
                  'Link to Page'=>1,
                  'External Link'=>2 ),

         ) , 
                  
      array(
            "type"  => "dropdown",
            "heading" => __( "Link To Page", "my-text-domain" ),
            "param_name" => "link_to_page",
            "value" => uxstock_toolkit_get_page_as_list(),
            "dependency"   => array( 
                "element"=>"type",
                "value"=>array("1"),
                
                )

         ) , 
     array(
            "type" => "textfield",
            "heading" => __( " External Link", "my-text-domain" ),
            "param_name" => "external_link",
            "dependency"   => array( 
                  "element"=>"type",
                  "value"=>array("2"),
                
                )

         ) , 
     array(
            "type" => "textfield",
            "heading" => __( "Link text", "my-text-domain" ),
            "param_name" => "link_text",
            "std" => __( "See More", "my-text-domain" ),

         ) , 
     array(
            "type" => "dropdown",
            "heading" => __( "Icon Type", "my-text-domain" ),
            "param_name" => "icon_type",
            "std" => __( "1", "my-text-domain" ),
            "value" => array(
                  'upload'=>1,
                  'FontAwesome icon'=>2 
                  ),
         ) , 
       array(
            "type" => "attach_image",
            "heading" => __( "Upload Icon", "my-text-domain" ),
            "param_name" => "upload_icon",
            "dependency"   => array( 
                "element"=>"icon_type",
                "value"=>array("1"),
                
                )

         ) , 
      array(
            "type" => "iconpicker",
            "heading" => __( "Chose Icon", "my-text-domain" ),
            "param_name" => "chose_icon",
            "std" => __( "1", "my-text-domain" ),
            "dependency"   => array( 
                  "element"=>"icon_type",
                  "value"=>array("2"),
                
                )

         ) ,  
      array(
            "type" => "attach_image",
            "heading" => __( "Box background", "my-text-domain" ),
            "param_name" => "box_background",
         ) ,   
         
      )
   )
   
);


?>