<?php get_header(); ?>
<div id="primary" class="content-area">
<main id="main" class="site-main" role="main">
<?php
/* Start the Loop */
while ( have_posts() ) :
	the_post();
	get_template_part( 'template-parts/content','page' );

	// If comments are open or there is at least one comment, load up the comment template.
	if ( comments_open() || get_comments_number() ) {
		comments_template();
	}
endwhile; // End of the loop.

?>

    
<?php get_footer(); ?>


