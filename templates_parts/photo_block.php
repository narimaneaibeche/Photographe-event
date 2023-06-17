<?php
$query = new WP_Query([
  'post__not_in' => [get_the_ID()],
  'post_type' => 'photo',
  'posts_per_page' => 2,
  
]);

  while ($query->have_posts()) : $query->the_post();
  
 
  ?>
  <div class="col-sm-4">
  
  <?php the_post_thumbnail()?> 
  <?php the_content()?> 
  <?php the_terms(get_the_ID(),'catégorie');?> 
  <?php the_excerpt() ?>
  
  </div>
  <?php endwhile; 
  wp_reset_postdata(); ?>

</div>
   </div>