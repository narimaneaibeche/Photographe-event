
         <?php
            while ($query->have_posts()) : $query->the_post();
         ?>
               <div class="card-link">
              
               <?php the_content()?>
                
                
                <div class="card-figure-hover-link"> 
                   <img class="plein-ecran" id="plein-ecran" src="<?php echo get_template_directory_uri() . '/assets/pe.png'; ?> " alt="image plein ecran " >
                   <div class="ligh-img-titre">
                      <a class="permalink" href= "<?php the_permalink()?>"> <img src="<?php echo get_template_directory_uri() . '/assets/oeil2.png'; ?> " alt="image oeil " > </a>
                      <div class="hover-title-cat">
                          <p id="cat-lightbox"> <?php echo get_the_term_list(get_the_ID(),'catégorie',);?></p>
                          <h3 id="h3-lightbox"><?php the_title();?> </h3>
                          <h4 id="reff-lightbox" ><?php the_field('référence'); ?></h4>
                          
                      </div>
                   </div>
                </div>
              </div>
              
         <?php endwhile; ?>


         