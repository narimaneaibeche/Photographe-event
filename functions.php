<?php 

/*function montheme_supports(){

   add_theme_support('title-tag');
   
   add_theme_support('post-thumbnails');
   add_theme_support('menus');
   register_nav_menu('header', 'En tête de menu');
   register_nav_menu('footer','pied de page');
   add_image_size('post-thumbnail', 564, 495, false);
   
}
add_action( 'after_setup_theme', 'montheme_supports' );
*/

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    // Chargement du css/theme.css pour nos personnalisations
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/css/theme.css'));
}


/* nav menu  commence ici */
function register_my_menu(){
    register_nav_menus(
        array(
        'main-menu' => __( 'Menu principal' ),
        'footer-menu' => __( 'Menu Footer' ),
		'menu-secondaire' => __( 'Menu mobile' ),

        )
        );
  }
  add_action( 'after_setup_theme', 'register_my_menu' );

  /* Creation de taxonimie catégorie */ 

  function photos_register_taxonomies() {

    $labels = array(
   	 'name'          	=> __( 'catégorie' ),
   	 'singular_name' 	=> __( 'catégorie' ),
   	 'search_items'  	=> __( 'Rechercher une catégorie' ),
   	 'all_items'     	=> __( 'Tous les catégorie' ),
   	 'parent_item'   	=> __( 'Parent catégorie' ),
   	 'parent_item_colon' => __( 'Parent catégorie:' ),
   	 'edit_item'     	=> __( 'Modifier une catégorie' ),
   	 'update_item'   	=> __( 'Mettre à jour une catégorie' ),
   	 'add_new_item'  	=> __( 'Ajouter une nouvelle catégorie' ),
   	 'new_item_name' 	=> __( 'Nouveau catégorie' ),
   	 'menu_name'     	=> __( 'catégorie' )
    );

    $args = array(
   	'hierarchical'  	=> true,
   	'labels'        	=> $labels,
   	'show_ui'       	=> true,
   	'show_admin_column' => true,
    	'query_var'     	=> true,
    'show_in_rest'  	=> true,
   	'rewrite'       	=> array( 'slug' => 'catégorie' )
    );

    register_taxonomy('catégorie', array( 'photo' ), $args);
}

add_action('init', 'photos_register_taxonomies');

/* Creation de taxonimie format */ 

function photo_register_taxonomies() {

    $labels = array(
   	 'name'          	=> __( 'format' ),
   	 'singular_name' 	=> __( 'format' ),
   	 'search_items'  	=> __( 'Rechercher une format' ),
   	 'all_items'     	=> __( 'Tous les format' ),
   	 'parent_item'   	=> __( 'Parent format' ),
   	 'parent_item_colon' => __( 'Parent format:' ),
   	 'edit_item'     	=> __( 'Modifier une format' ),
   	 'update_item'   	=> __( 'Mettre à jour une format' ),
   	 'add_new_item'  	=> __( 'Ajouter une nouvelle format' ),
   	 'new_item_name' 	=> __( 'Nouveau format' ),
   	 'menu_name'     	=> __( 'format' )
    );

    $args = array(
   	'hierarchical'  	=> true,
   	'labels'        	=> $labels,
   	'show_ui'       	=> true,
   	'show_admin_column' => true,
    	'query_var'     	=> true,
     'show_in_rest'  	=> true,
   	'rewrite'       	=> array( 'slug' => 'format' )
    );

    register_taxonomy('format', array( 'photo' ), $args);
}

add_action('init', 'photo_register_taxonomies');

// Chargement du js/script.js pour nos personnalisations
function add_scripts() {
    wp_enqueue_script( 'scripts', get_stylesheet_directory_uri()  . '/js/script.js', array('jquery'), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'add_scripts' );

// Chargement du js/lightbox.js pour nos personnalisations
function add_scriptsLightbox() {
    wp_enqueue_script( 'scripts', get_stylesheet_directory_uri()  . '/js/lightbox.js', array('jquery'), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'add_scriptsLightbox' );

// afficher plus d'image 

function weichie_load_more() {
	$query  = new WP_Query([
		'post_type' => 'photo',
		'posts_per_page' => 8,
		'orderby'=> 'date',
		'order'=> 'DESC',
	    'paged' => $_POST['paged'],
	]);
  
	$response = '';
	$max_pages = $ajaxposts->max_num_pages;
  
	if($query ->have_posts()) {
		ob_start();
		include (TEMPLATEPATH . "/templates_parts/photo_block.php"); 
		$output = ob_get_contents();
        ob_end_clean();

	} else {
	  $response = '';
	}
	$result = [
		'max' => $max_pages,
		'html' => $output,
	  ];

	 echo json_encode($result);
	
	exit;
	
  }
  
  add_action('wp_ajax_weichie_load_more', 'weichie_load_more');
  add_action('wp_ajax_nopriv_weichie_load_more', 'weichie_load_more');
  