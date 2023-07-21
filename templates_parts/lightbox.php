
<div class="lightbox" id="lightbox">
  <button class="lightbox__close" id="close-lightbox">&times;</button>

  

  <button class="lightbox__next" >  &#x2190 Précédente</button>
  <button class="lightbox__prev"> Suivante &#x2192</button>

  <button class="lightbox__next1">  &#x2190 </button>
  <button class="lightbox__prev1">&#x2192</button>

 <?php
 
    $args = array(
      'post__not_in' => [get_the_ID()],
      'post_type' => 'photo',
      'posts_per_page' => -1,  
      'paged' => 1,  
     );
    $query = new WP_Query($args);
    ?>
   
  <?php 
      while ($query->have_posts()) : $query->the_post();
   ?>
  
  <div class="lightbox__container">
     <div id="image-lightbox" class="image-lightbox"><?php the_content()?></div>
     <div class="info-lightbox">
       <p id="cat-light"> <?php echo get_the_term_list(get_the_ID(),'catégorie',);?></p>                 
       <h4 id="reff-light" ><?php the_field('référence'); ?></h4>                     
     </div>
  </div>
  <?php endwhile; ?>

    <?php wp_reset_postdata(); ?>
 
</div>
