<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?php wp_head() ?>
  
    
</head>
<body>
      <header>
          <nav id="navigation">
                <?php
                   wp_nav_menu(
                   array(
                   'theme_location' => 'main-menu',
                   'menu_id' => 'primary-menu',
                    )
                    );
                ?>
            </nav>
         <a href="http://localhost:8888/photographe-event/"><img src="<?php echo get_template_directory_uri() . '/assets/logo.png'; ?> " class="logo"  alt="logo" ></a>   
      </header>
    <div class='container'>
    
