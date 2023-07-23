<?php get_header() ?>

<!-- afficher le hero de la page d'acceuil -->
<div class="main">
   <div class="hero">
      <div class="img-banner">
          <img src="<?php echo get_template_directory_uri() . '/assets/Titre header.png'; ?> " class="img-event"  alt="photographe event" > 
      </div>
      <div class="banner">
           <img src="<?php echo get_template_directory_uri() . '/assets/nathalie-1.jpg'; ?> " class="hero-event" alt="image photograpie" > 
      </div>
  </div>
<!-- select catégorie -->

<div class="cc">
   <div class="inputs">
     <div class="input-tax">
        <div class="input-categorie">
           <?php $categories = get_terms( 'catégorie' );?>
           <select  name="catégorie" id="js-filter-itemm" > 

             <option value="0" selected> CATÉGORIE </option>

            <?php foreach($categories as $cat) : ?>

             <option value= "<?= $cat->term_id; ?>"><?= $cat->name; ?> </option>

             <?php endforeach; ?> 
             

           </select>  
       </div>

<!-- select format -->

        <div class="input-format">
        <?php $format = get_terms( 'format' );?>
           <select name="format" id="format-select">

              <option value="0" class="frm">FORMAT</option>

              <?php foreach($format as $t) : ?>

             <option value="<?= $t->term_id; ?>"><?= $t->name;?></option>

             <?php endforeach;?>
           </select>  
        </div>
      </div>
<!-- select date -->

      <div class="trier">
         <div class="input-trier">
         <?php $date = get_terms( 'date' );?>
           <select name="sort" id="trier-select" >
             <option value="0">TRIER PAR</option>
             <option value="date-desc">Les plus Récentes</option>
             <option value="date-asc">Les Plus Anciennes</option>
           </select>  
        </div>
      </div>
   </div>

 <!-- affichage des photos -->
 <div class="liste">
      <div class="liste-photos">
        <div id="card2-img-plus" >
          <?php
          $args = array(
            'post_type' => 'photo',
            'posts_per_page' => 12,
            'orderby'=> 'date',
            'order'=> 'DESC',
            'paged'=> 1,
            );
          $query = new WP_Query($args);
         ?>

          <?php if($query->have_posts()): ?>
          <div class="card2-img2" >
               <?php include (TEMPLATEPATH . "/templates_parts/photo_block.php"); ?>
          </div>
       </div>  
       <?php endif; ?>
       <?php wp_reset_postdata(); ?>
     </div>
    <div class="suite-liste">
       <button id="btn4"> Charger plus  </button>
    </div>
 </div>  
  </div>              
</div>

          
<?php get_footer() ?>