<?php get_header(); ?>

<?php
   if (have_posts()):  ?>
   <div class="row-card1">

      <?php while (have_posts()): the_post();?>
         <div class="card">
            <div class="card-img">
               <img src="<?php the_post_thumbnail('post-thumbnail');?> " alt="" style="width:100%; height:auto;">
              <div class="card-figure"> <?php the_content()?> 
                 <div class="card-figure-hover"> 
                   <img src="<?php echo get_template_directory_uri() . '/assets/oeil2.png'; ?> " alt="image oeil " id="plein-ecran-1">
                </div>
              </div>
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
            <div class="cnt">
             <div><p> Cette photo vous intéresse ? </p></div>
              <button id="btn2" class="btn2"> <a>contact </a></button>
          </div>
          <?php endwhile ?>
            
              
          <!-- afficher la navigation -->
             <div class="navigation">
                 <div class="navigation-img">
                     <?php 
                        $prev_post = get_previous_post();
                        if($prev_post) {   
                           $prev_post_id = $prev_post->ID;  ?>                          
                           <div class="navigation-img1" id="nav-img1">
                             <?php echo get_post_field('post_content', $prev_post_id);?>
                           </div>     
                        <?php
                        }
				            $next_post = get_next_post();
				            if($next_post) {            
					           $next_post_id = $next_post->ID;?>
                          <div class="navigation-img2" id="nav-img2">
                             <?php echo get_post_field('post_content', $next_post_id); ?>
                          </div>
                        <?php
				            }
			            ?>
                 </div>
                 <div class="navigation-fleche">
                     <span class="fleche-s" id="fleche-ss">
                        <?php previous_post_link('%link', ' &#x2190'); ?>
                     </span>
                    <span class="fleche-p" id="fleche-pp" >
                       <?php next_post_link('%link', '&#x2192'); ?>
                     </span>
                  </div>    
		       </div>
        </div>   
    </div>
 
   
 <div class="row-card2">
    <h3 class="h-plus">VOUS AIMEREZ AUSSI </h3>
<div class="row-card2-photo">
   <div id="card2-img-plus" >
      <div class="card2-img" >
         <?php
          $photos = array_map(function ($term){
           return $term->term_id;
           }, get_the_terms(get_post(), 'catégorie'));
           $query = new WP_Query([
            'post__not_in' => [get_the_ID()],
            'post_type' => 'photo',
            'posts_per_page' => 2,
            'orderby' => 'date',
            'order'  => 'ASC',
            'tax_query'=> [
            [
             'taxonomy'=> 'catégorie',
             'terms'=> $photos,
            ]
            ]
  
            ]);?>
         <?php
            while ($query->have_posts()) : $query->the_post();
         ?>
              <div class="card-link">
                <?php the_post_thumbnail('post-thumbnail');?> 
                <?php the_content()?>
                <?php //var_dump($post->ID) ?>
                
                <div class="card-figure-hover-link"> 
                   <img class="plein-ecran" id="plein-ecran"src="<?php echo get_template_directory_uri() . '/assets/pe.png'; ?> " alt="image oeil " >
                   <a class="permalink" href= "<?php the_permalink()?>"> <img src="<?php echo get_template_directory_uri() . '/assets/oeil2.png'; ?> " alt="image oeil " ></a>
                   <div class="hover-title-cat">
                      <p> <?php echo get_the_term_list(get_the_ID(),'catégorie',);?></p>
                      <h3><?php the_title();?> </h3>
                   </div>
                </div>
              </div>
         <?php endwhile; ?>
    </div>
 </div>
 <!-- afficher plus des photo -->
   <button id="btn3" class="card-link-suite"><a>Toutes les photos </a>  </button>
   <div id="publication-list">
      <div  class="pub-list">
        <?php 
        $photoss = array_map(function ($term){
        return $term->term_id;
        }, get_the_terms(get_post(), 'catégorie'));
        $query = new WP_Query([ 
        // 'post__not_in' => [get_the_ID()],
        'post_type' => 'photo',
        'posts_per_page' => 20,
        'paged' => 1,
        'orderby' => 'date',
        'order' => 'ASC',
        'suppress_filters' => true,
        'tax_query'=> [
        [
        'taxonomy'=> 'catégorie',
        'terms'=> $photoss,
     ]
     ]
   ]);
   ?>

    <?php if($query->have_posts()): ?>
  
    <?php 
      while ($query->have_posts()): $query->the_post();
      ?>
      
          <div class="card-link">
                <?php the_post_thumbnail('post-thumbnail');?> 
                <?php the_content()?>
                <div class="card-figure-hover-link"> 
                <img class="plein-ecran"src="<?php echo get_template_directory_uri() . '/assets/pe.png'; ?> " alt="image oeil " >
                   <a class="permalink" href= "<?php the_permalink()?>"> <img src="<?php echo get_template_directory_uri() . '/assets/oeil2.png'; ?> " alt="image oeil " ></a>
                   <div class="hover-title-cat">
                      <p> <?php echo get_the_term_list(get_the_ID(),'catégorie',);?></p>
                      <h3><?php the_title();?> </h3>
                   </div>
                </div>
              </div>
      <?php endwhile;
    ?>
  </div>
  </div>
  
<?php endif; ?>
<?php wp_reset_postdata(); ?>

<!--ici on arrete -->
    </div>
  </div>
</div>

 <?php endif; ?>  

<?php get_footer(); ?>