<?php 
      while ($query->have_posts()): $query->the_post();
      ?>
      
      <div class="card-link">
           <?php the_post_thumbnail('post-thumbnail');?> 
           <?php the_content()?>
        </div>
      <?php endwhile;
    ?>