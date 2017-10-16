<?php

function uxstock_slides_shortcode($atts){
    extract( shortcode_atts( array(
        'count' => 3,
         'loop' => 2,
         'autoplayTimeout' => 5000,
         'nav' => true,
         'dots' => true,
    ), $atts) );
     
    $q = new WP_Query(
        array('posts_per_page' =>$count, 'post_type' => 'slide')
        );      
         
    $list = '
        <script>
            jQuery(document).ready(function($)){

                $(".uxstock_slides").owlcarousel({

                    items:1,
                    loop:'.$loop.',
                    autoplayTimeout:'.$autoplayTimeout.',
                    nav:'.$nav.',
                    dots:'.$dots.',
                    navText:["<i class=\'fa fa-angle-left\'></i>","<i class=\'fa fa-angle-right\'></i>"]
                });
            }
        
        
        </script>
    
    <div class="uxstock_slides">';
    while($q->have_posts()) : $q->the_post();
        $idd = get_the_ID();
        
    if(get_post_meta($idd, 'uxsock_slide_options', true)){
            
            $slide_meta = get_post_meta($idd, 'uxsock_slide_options', true);
            
        }else{
            
            $slide_meta = array();
        }
        
    if(array_key_exists('enable_overly',$slide_meta)){
            
            $enable_overly = $slide_meta['enable_overly'];
            
        }else{
            $enable_overly = true;
            
        }
        
 if(array_key_exists('overly_percentage',$slide_meta)){
            
            $overly_percentage = $slide_meta['overly_percentage'];
            
        }else{
            $overly_percentage = true;
            
        }
 if(array_key_exists('overly_color',$slide_meta)){
            
            $overly_color = $slide_meta['overly_color'];
            
        }else{
            $overly_color = '#181a1f' ;
            
        }  
        
        $post_content = get_the_content();
        $list .= '
        <div style="background-image:url('.get_the_post_thumbnail_url($idd,'lage').')" class="uxstock-slide-item">;
           <div class="uxstock-slide-table">
                <div class="uxstock-slide-tablecell">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                              <h2>'.get_the_title($idd).'</h2> 
         '.wpautop($post_content).'';
         
        if (!empty($slide_meta['buttons'])) {
        $list .= '<div class="uxstock-slides-buttons">';
         foreach ($slide_meta['buttons'] as $button) {

            if ($button['link_type']== 1) {

        $btn_link = get_page_link($button['link_to_page']);
            
            }else{
                $btn_link = $button['link_to_external'];
            }

        $list.='<a href="'.$btn_link.'" class="'.$button['type'].'-btn uxstock-slide-btn"></a>';
         }

        $list .= ' </div>';
                                }

                                $list .= '
                            </div>
                        </div>
                    </div>
                </div>
           </div>
        </div>
        ';        
    endwhile;
    $list.= '</div>';
    wp_reset_query();
    return $list;
}
add_shortcode('uxstock_slides', 'uxstock_slides_shortcode');  

?>