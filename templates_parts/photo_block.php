                   <?php
                   while ($query->have_posts()) : $query->the_post();
                        ?>
                        
                       <div class="card-link">
                            
                              <?php the_post_thumbnail('post-thumbnail');?> 
                              <a class="permalink" href= "<?php the_permalink()?>"><?php the_content()?></a>
                           </a>
                      </div>
                   <?php endwhile; ?>