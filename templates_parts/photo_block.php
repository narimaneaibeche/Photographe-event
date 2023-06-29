       <?php
            while ($query->have_posts()) : $query->the_post();
         ?>
              <div class="card-link">
                <?php the_post_thumbnail('post-thumbnail');?> 
                <?php the_content()?>
                <?php //var_dump($post->ID) ?>
                
                <div class="card-figure-hover-link"> 
                   <img class="plein-ecran" id="plein-ecran"src="<?php echo get_template_directory_uri() . '/assets/pe.png'; ?> " alt="image oeil " >
                   <div class="ligh-img-titre">
                      <a class="permalink" href= "<?php the_permalink()?>"> <img src="<?php echo get_template_directory_uri() . '/assets/oeil2.png'; ?> " alt="image oeil " ></a>
                      <div class="hover-title-cat">
                          <p> <?php echo get_the_term_list(get_the_ID(),'catégorie',);?></p>
                          <h3><?php the_title();?> </h3>
                      </div>
                   </div>
                </div>
              </div>
         <?php endwhile; ?>