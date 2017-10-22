
<?php 

    function uxstock_service_box_shortcode($atts, $content = null){
     extract( shortcode_atts( array(
        'title' => '',
         'desc' => '',
         'type' => '1',
         'link_to_page'=> '',
         'external_link' => '',
         'link_text' => 'See More',
         'icon_type' => '1',
         'upload_icon' => '',
         'chose_icon' => '',
    ), $atts) );
    
    $uxstock_service_box_markup = '
     <script>
            jQuery(document).ready(function($){
            $(".uxstock-logo-carosual").owlCarousel({
                    margin: 30px,
                    items: 5,
                    loop: '.$loop.',
                    autoplay: '.$autoplay.',
                    autoplayTimeout: '.$autoplayTimeout.',
                    nav: '.$nav.',
                    dots: '.$dots.',
                    navText :["<i class=\'fa fa-angle-left\'></i>", "<i class=\'fa fa-angle-right\'></i>"],
                
            });
            
            
        });
        </script>
    ';
      $uxstock_service_box_markup .='
      
        <div class="uxstock-logo-carosual">';
        foreach ($logo_ids as $logo){
            $logo_array = wp_get_attachment_image_src($logo,'lage');
             $uxstock_service_box_markup .='
            <div class="uxstock-logo-item-table">
                <div class="uxstock-logo-item-tablecell">
                    <img src="'.$logo_array[0].'" alt=""/>
                </div>
            </div>
            ';
        }
        
    $uxstock_service_box_markup .='
    
       </div>
     ';
    
     return  $uxstock_service_box_markup ;
}

add_shortcode('uxstock_logo_carousel','uxstock_service_box_shortcode');


?>














