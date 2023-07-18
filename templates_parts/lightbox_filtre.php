
  
  <div class="lightbox" id="lightbox">
  <?php  while ($query->have_posts()) : $query->the_post();?>
  
  <div class="lightbox__container">
      <div id="image-lightbox">
		 <?php the_content()?>
     </div>
     <div class="info-lightbox">
         <p id="cat-light"> <?php echo get_the_term_list(get_the_ID(),'catégorie',);?></p>                 
         <h4 id="reff-light" ><?php the_field('référence'); ?></h4> 
	     <button class="lightbox__next" >  &#x2190 Précédente</button>  
	     <button class="lightbox__prev"> Suivante &#x2192</button>             
     </div>
  </div>
  <button class="lightbox__close" id="close-lightbox">&times;</button>	   
  <?php endwhile; ?>
</div>