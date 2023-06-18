<?php get_header() ?>


<div class="main">
   <div class="hero">
       <div class="img-banner">
          <img src="<?php echo get_template_directory_uri() . '/assets/Titre header.png'; ?> " class="img-event"  alt="photographe event" > 
       </div>
        <div class="banner">
           <img src="<?php echo get_template_directory_uri() . '/assets/nathalie-1.jpeg'; ?> " class="hero-event"  alt="image photograpie" > 
       </div>
       <div class="input">
       </div>

    </div>
 <!-- affichage des photos -->
  <div class="liste">
        <div class="liste-photos">
            <div id="card2-img-plus" >
                <div class="card2-img2" >
                  <?php
                  $query = new WP_Query([
                  'post_type' => 'photo',
                  'posts_per_page' => 8,
                   ]);?>
                  <?php
                   while ($query->have_posts()) : $query->the_post();
                        ?>
                       <div class="card-link">
                            <?php the_post_thumbnail('post-thumbnail');?> 
                           <?php the_content()?>
                      </div>
                   <?php endwhile; ?>
             </div>
           </div>  
      </div>
      <div class="suite-liste">
            <button id="btn4"><a>Toutes les photos </a>  </button>
      </div>
    </div>




</div>





<?php get_footer() ?>