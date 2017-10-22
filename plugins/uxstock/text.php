
function post_list_shortcode($atts){
    extract( shortcode_atts( array(
        'count' => -1,
    ), $atts) );
     
    $q = new WP_Query(
        array('
        posts_per_page' => $count,
        'post_type' => 'page',
            )
        );      
         
    $list = '<ul>';
    while($q->have_posts()) : $q->the_post();
        $idd = get_the_ID();
        $post_content = get_the_content();
        $list .= '
            <li><a href="'. get_permalink().'">'.get_the_title().'</a></li>
        ';        
    endwhile;
    $list .= '</ul>';
    wp_reset_query();
    return $list;
}
add_shortcode('post_list', 'post_list_shortcode');  
