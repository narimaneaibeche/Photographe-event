<?php get_header(); ?>

<?php
   if (have_posts()):  ?>
   <div class="row-card1">

      <?php while (have_posts()): the_post();?>
         <div class="card">
            <div class="card-img">
               <img src="<?php the_post_thumbnail('post-thumbnail');?> " alt="" style="width:100%; height:auto;">
              <span id="ii"> <?php the_content()?> </span>
            </div>
            <div class="card-txt">
               <h2>
                  <?php the_title();?> 
               </h2>
               <p>
                  RÉFÉRENCE :<span id="refref" > <?php the_field('référence'); ?> </span> </br>
                  <?php echo get_the_term_list(get_the_ID(),'catégorie','CATÉGORIE : ',);?><br>
                  <?php echo get_the_term_list(get_the_ID(),'format','FORMAT : ',);?><br>
                  TYPE : <?php the_field('type'); ?></br>
                  ANNÉE : <?php the_date('Y');?> </br>
               </p>  
            </div>
            
         </div> 
         <div class="card-contact">
            <p> Cette photo vous intéresse ? </p>
            <button id="btn2"> <a>contact </a></button>
    <?php endwhile ?>
            
              
              <!-- afficher l'image présedente -->
             <div class="fleche">
                 <?php 
				       $prev_post = get_previous_post();
				        if($prev_post) {
					        $prev_title = strip_tags(str_replace('"', '', $prev_post->post_title));
					        echo '<a rel="prev" href="' . get_permalink($prev_post->ID) . '" title="' . $prev_title. '" > &#x2190 </a>';
					        $prev_post_id = $prev_post->ID;
					        if (has_post_thumbnail($prev_post_id)){?>
                  		  <p>
                             <?php echo get_the_post_thumbnail($prev_post->ID, array(81,71));?>
                          </p>
					 <?php	}
					        else{
						          echo "rien";
					            }
				         }
			        ?>

                  <!-- afficher l'image suivante -->
			        <?php
				         $next_post = get_next_post();
				         if($next_post) {
					         $next_title = strip_tags(str_replace('"', '', $next_post->post_title));
					         echo  '<a rel="next" href="' . get_permalink($next_post->ID) . '" title="' . $next_title. '" > &#x2192 </a>';
					         $next_post_id = $next_post->ID;
                        //echo $next_post_id ; 
					        if (has_post_thumbnail($next_post_id)){?>					                     
						        <p><?php echo get_the_post_thumbnail($next_post->ID, array(81,71));?></p>
					           <?php
					         }
					       else{
						        echo "rien";
					         }
				         }
			         ?>
		       </div>
        </div>   
    </div>
 </div>
   
 <div class="row-card2">
    <h3 class="h-plus">Vous AIMEREZ AUSSI </h3>
<div class="row-card2-photo">
   <div class="card2-img">
    <?php
      $photos = array_map(function ($term){
      return $term->term_id;
      }, get_the_terms(get_post(), 'catégorie'));
      $query = new WP_Query([
         'post__not_in' => [get_the_ID()],
         'post_type' => 'photo',
         'posts_per_page' => 2,
         'tax_query'=> [
         [
             'taxonomy'=> 'catégorie',
             'terms'=> $photos,
         ]
         ]
  
      ]);

      while ($query->have_posts()) : $query->the_post();
    ?>
        <div class="card-link">
           <?php the_post_thumbnail('post-thumbnail');?> 
           <?php the_content()?>
        </div>
    <?php endwhile; ?>
   </div>
   <!-- afficher plus des photo -->
   <button id="btn3"><a href="<?php the_permalink()?>" class="card-link-suite">Toutes les photos </a>  </button>









   
      <?php wp_reset_postdata(); 
    ?>
    </div>
  </div>
</div>

 <?php endif; ?>  

<?php get_footer(); ?>