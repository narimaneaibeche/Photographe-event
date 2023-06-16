<?php
    $args=array(

      'post-type'=> 'post',
      'posts_per_page' => 2,

    );

    $my_query = new WP_Query(array('post_type'=> 'post'));

    if($my_query-> have_post()):
        while($my_query-> have_post()): $my_query->the_post();

             the_post_thumbnail();
       endwhile;
   endif;
   
wp_reset_postdata();

?>