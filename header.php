<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>

    
    <?php wp_head() ?>
   
    
    
</head>
<body>
    <!-- header pour ordinateur-->
      <header class="header-ordinateur">
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
      <!-- header pour mobile-->


    <header id="masthead" class="site-header">
		<nav id="site-navigation" class="main-navigation">

           <ul>
              <li class="site-title"><a href="http://localhost:8888/photographe-event/"><img src="<?php echo get_template_directory_uri() . '/assets/logo.png'; ?> " class="logo"  alt="logo" ></a>  </li>
              <li> <a href="#" id="openBtn" classe="openBtn">
                     <div class="burger-icon">
                       <span class="burger-icon">
                           <span></span>
                           <span></span>
                           <span></span>
                      </span>
                      </div>
                  </a>
                  
                  <a id="closeBtn" href="#" class="close">&times;</a>
              </li>   
           </ul>
     </nav>
      <div id ="backdrop" class="backdrop">
           <ul >
               <li>
                  <?php
                   wp_nav_menu(
                   array(
                   'theme_location' => 'menu-secondaire',
                   'menu_id' => 'seconde-menu',
                    )
                    );
                   ?>
               </li>
           </ul>
      </div>  
    </header>
    
    
   