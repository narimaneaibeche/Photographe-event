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
    

</div>
<?php
if (have_posts()): ?>
<ul>
    <?php while (have_posts()): the_post();?>
    <li><?php the_title()?> - <?php the_author() ?> </li>
    <?php endwhile ?>
</ul>
<?php else: ?>

    <h1>pas d'arcticle </h1>
    <?php endif; ?>





<?php get_footer() ?>