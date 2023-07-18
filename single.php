<?php get_header(); ?>

<?php
   if (have_posts()):  ?>
<div class='container'>
   <div class="row-card1">

      <?php while (have_posts()): the_post();?>
         <div class="card">
            <div class="card-img">
               
              <div class="card-figure"> 
                <?php the_content()?> 
                 <div class="card-figure-hover"> 
                   <img src="<?php echo get_template_directory_uri() . '/assets/oeil2.png'; ?> " alt="image oeil " class="plein-ecran1" id="plein-ecran-1">
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
              <button id="btn2" class="btn2"> contact </button>
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
                     <div class="fleche-s" id="fleche-ss">
                        <?php previous_post_link('%link', ' &#x2190'); ?>
                     </div>
                    <div class="fleche-p" id="fleche-pp" >
                       <?php next_post_link('%link', '&#x2192'); ?>
                     </div>
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
            'orderby'=> 'date',
            'order'=> 'DESC',
             'paged' => 1,
            'suppress_filters' => true,
            'tax_query'=> [
            [
             'taxonomy'=> 'catégorie',
             'terms'=> $photos,
            ]
            ]
  
            ]);?>
       
         
         <?php include (TEMPLATEPATH . "/templates_parts/photo_block.php"); ?>
        

         
    </div>
 </div>
 
 <!-- afficher plus des photo -->
   <button id="btn3" class="card-link-suite">Toutes les photos </button>
   <div id="publication-list">
      <div  class="pub-list">
        <?php 
        $photoss = array_map(function ($term){
        return $term->term_id;
        }, get_the_terms(get_post(), 'catégorie'));
        $query = new WP_Query([ 
        // 'post__not_in' => [get_the_ID()],
        'post_type' => 'photo',
        'posts_per_page' => 12,
        'orderby'=> 'date',
        'order'=> 'DESC',
         'paged' => 1,
        'suppress_filters' => true,
        'tax_query'=> [
        [
        'taxonomy'=> 'catégorie',
        'terms'=> $photoss,
         ]
         ]
        ]);?>

         <?php if($query->have_posts()): ?>
          <?php include (TEMPLATEPATH . "/templates_parts/photo_block.php"); ?>
      </div>
  </div>
  <?php include (TEMPLATEPATH . "/templates_parts/lightbox_filtre.php"); ?> 
    <?php endif; ?>
    </div>
  </div>
</div>

 <?php endif; ?> 

</div>

<?php wp_reset_postdata(); ?>
<?php get_footer(); ?>