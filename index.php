<?php get_header() ?>


<div class="main">
   <div class="hero">
      <div class="img-banner">
          <img src="<?php echo get_template_directory_uri() . '/assets/Titre header.png'; ?> " class="img-event"  alt="photographe event" > 
      </div>
      <div class="banner">
           <img src="<?php echo get_template_directory_uri() . '/assets/nathalie-1.jpeg'; ?> " class="hero-event"  alt="image photograpie" > 
      </div>
  </div>




  <div>
   <?php $terms = get_terms('catégorie');?>
   <?php foreach($terms as $t):?>
      <a href="<?php echo get_term_link($t->slug,'catégorie');?>"><?php echo $t->name;?></a>
   <?php endforeach;?>
</div>






   <div class="inputs">
     <div class="input-tax">
        <div class="input-categorie">
          <select  name="categorie" id="categorie-select">
             <?php $terms = get_terms('catégorie');?>
             <option value="" class="ctg">CATÉGORIE</option>
             <?php foreach($terms as $t):?>
             <option value="" ><?php echo $t->name;?></option>
             <?php endforeach;?> 
          </select>  
       </div>
        <div class="input-format">
           <select name="format" id="format-select">
              <?php $terms = get_terms('format');?>
              <option value="" class="frm">FORMAT</option>
              <?php foreach($terms as $t):?>
             <option value="format"><?php echo $t->name;?></option>
             <?php endforeach;?>
           </select>  
        </div>
      </div>
      <div class="trier">
         <div class="input-trier">
           <select name="trier" id="trier-select">
             <option value="">TRIER PAR</option>
             <option value="dog">Dog</option>
             <option value="cat">Cat</option>
           </select>  
        </div>
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
                              <a class="permalink" href= "<?php the_permalink()?>"><?php the_content()?></a>
                           </a>
                      </div>
                   <?php endwhile; ?>
             </div>
           </div>  
      </div>
      <div class="suite-liste">
            <button id="btn4"><a>Charger plus </a>  </button>
      </div>
    </div>




</div>





<?php get_footer() ?>