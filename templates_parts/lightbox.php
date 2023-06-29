
<div class="lightbox" id="lightbox">
  <button class="lightbox__close" id="close-lightbox">&times;</button>
  <button class="lightbox__next"> <?php previous_post_link('%link', ' &#x2190 Précédente '); ?></button>
  <button class="lightbox__prev"><?php next_post_link('%link', 'Suivante &#x2192'); ?></button>
  <button class="lightbox__next1"> <?php previous_post_link('%link', '&#x2190'); ?></button>
  <button class="lightbox__prev1"><?php next_post_link('%link', '&#x2192'); ?></button>
  
  
  <div class="lightbox__container">
  
   <?php echo get_post_field('post_content', $post->ID); ?>
   
    <div class="lightbox-ref-cat">
      <p> <?php echo get_the_term_list(get_the_ID(),'catégorie',);?></p>
      <h4><?php the_field('référence'); ?></h4>
    </div>
   
 </div>
</div>
