<?php get_header() ?>



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