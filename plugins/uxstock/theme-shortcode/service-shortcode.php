
<?php 

    function uxstock_service_box_shortcode($atts, $content = null){
     extract( shortcode_atts( array(
        'title' =>'',
         'desc' =>'',
         'type' =>'1',
         'link_to_page'=>'',
         'external_link' =>'',
         'link_text' =>'See More',
         'icon_type' =>'1',
         'upload_icon' =>'',
         'chose_icon' =>'',
         'box_background' =>''

    ), $atts) );
    
     if ($type == 1) {

        $link_source = get_page_link($link_to_page);

     }else{
            $link_source = $external_link;
     }
     $box_bg_array = wp_get_attachment_image_src($upload_icon, 'medium');

    $uxstock_service_box_markup = '

    <div class="uxstock_service_box">
        <div style="background-image:url('.$box_bg_array.')" class="uxstock_service_icon">
            <div class="uxstock_service_table">
                <div class="uxstock_service_tablecell">';
                if($icon_type == 1 ){

                $service_icon_array = wp_get_attachment_image_src($upload_icon, 'thumbnail');

                $uxstock_service_box_markup .= '<img src="'. $service_icon_array[0].'" alt=""/>'; 

                }else{
                     $uxstock_service_box_markup.='<i class="'.$chose_icon.'"></i>';

                }


                   $uxstock_service_box_markup .= '

                </div>
            </div>    
        </div>
        <div class="uxstock_service_content">
            <h3>'.$title.'</h3>
            '.wpautop($desc).'
            <a href="'.$link_source.'" class="service_more_btn">'.$link_text.'</a>
        </div>
    </div>

    ';
    $uxstock_service_box_markup .= '';
      
     return  $uxstock_service_box_markup ;
}

add_shortcode('uxstock_service_box','uxstock_service_box_shortcode');


?>














