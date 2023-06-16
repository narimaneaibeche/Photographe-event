<?php get_header(); ?>

<?php
   if (have_posts()):  ?>
   <div class="row-card1">

      <?php while (have_posts()): the_post();?>
         <div class="card">
            <div class="card-img">
               <img src="<?php the_post_thumbnail('post-thumbnail');?> " alt="">
               <?php the_content()?> 
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
                  
                  ANNÉE : <?php the_date(Y);?> </br>
               </p>
               
            </div>
            
         </div> 
         <div class="card-contact">
                  <p> Cette photo vous intéresse ? </p>
                  <button id="btn2"> <a>contact </a></button>

      <?php endwhile ?>
          <p><?php  previous_post_link() ?></p>
      </div>

     </div>
   <?php endif; ?>
   <div class="row-card2">
      <h3>Vous aimerez AUSSI</h3>
   </div>




<?php get_footer(); ?>