
<?php 

    function uxstock_logo_carosual_shortcode($atts){
     extract( shortcode_atts( array(
        'logos' =>'',
         'dextop_count' =>5,
         'tablet_count' =>3,
         'mobile_count' =>2,
         'loop'=>'true',
         'autoplay' =>'true',
         'autoplaytimeout' =>3000,
         'nav' =>'true',
         'dots' =>'true',
    ), $atts) );
    
    $logo_ids = explode(',',$logos);
    
    $uxstock_logo_carosual_markup = '
     <script>
            jQuery(window).load(function(){
                jQuery(".uxstock-logo-carosual").owlCarousel({
                    items:5,
                    loop:'.$loop.',
                    autoplay:'.$autoplay.',
                    autoplayTimeout:'.$autoplaytimeout.',
                    nav:'.$nav.',
                    dots:'.$dots.',
                    navText:["<i class=\'fa fa-angle-left\'></i>", "<i class=\'fa fa-angle-right\'></i>"],
                });
            });
        </script>
    ';
      $uxstock_logo_carosual_markup .='
      
        <div class="uxstock-logo-carosual">';
        foreach ($logo_ids as $logo){
            $logo_array = wp_get_attachment_image_src($logo,'lage');
             $uxstock_logo_carosual_markup .='
            <div class="uxstock-logo-item-table">
                <div class="uxstock-logo-item-tablecell">
                    <img src="'.$logo_array[0].'" alt=""/>
                </div>
            </div>
            ';
        }
        
    $uxstock_logo_carosual_markup .='
    
       </div>
     ';
    
     return  $uxstock_logo_carosual_markup ;
}

add_shortcode('uxstock_logo_carousel','uxstock_logo_carosual_shortcode');


?>














