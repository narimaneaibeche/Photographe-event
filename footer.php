</div>
 <?php get_template_part( '/templates_parts/modale' ); ?>
   <?php wp_footer() ?>
  
   <footer>
         <?php
          wp_nav_menu(
          array(
          'theme_location' => 'footer-menu',
          'menu_id' => 'seconde-menu',
            )
            );
         ?>   
      </footer>

</body>
</html>