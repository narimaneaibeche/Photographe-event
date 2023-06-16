<?php get_header(); ?>

<?php
   if (have_posts()):  while (have_posts()): the_post();
?>
       <h1><?php the_title();?> </h1>
       <h1><?php the_date();?> </h1>
       
       <p>
          <img src="<?php the_post_thumbnail_url('post-thumbnail');?> " alt="">
       </p>
       <?php the_content()?> 
      <?php endwhile ?>
    <?php endif; ?>


    
<?php get_footer(); ?>