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



<!--
  <div>
   <?php //$terms = get_terms('catégorie');?>
   <?php //foreach($terms as $t):?>
      <a href="<?php //echo get_term_link($t->slug,'catégorie');?>"><?//php echo $t->name;?></a>
   <?php //endforeach;?>
</div>
   -->





   <div class="inputs">
     <div class="input-tax">
        <div class="input-categorie">
          <select  name="categorie" id="categorie-select">
             <?php $terms = get_terms('catégorie');?>
             <option value="categorie" class="ctg">CATÉGORIE</option>
             <?php foreach($terms as $t):?>
             <option value="categorieType" ><?php echo $t->name;?></option>
             <?php endforeach;?> 
          </select>  
       </div>
        <div class="input-format">
           <select name="format" id="format-select">
              <?php $terms = get_terms('format');?>
              <option value="format" class="frm">FORMAT</option>
              <?php foreach($terms as $t):?>
             <option value="formatType"><?php echo $t->name;?></option>
             <?php endforeach;?>
           </select>  
        </div>
      </div>
      <div class="trier">
         <div class="input-trier">
           <select name="trier" id="trier-select" >
             <option value="trier">TRIER PAR</option>
             <option value="ancienne">Photos Anciennes</option>
             <option value="recente">Photo récentes</option>
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