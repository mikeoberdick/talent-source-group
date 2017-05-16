<?php

/**

 * Theme Setup

 *

 * @package understrap

 */



function understrap_remove_scripts() {

    wp_dequeue_style( 'understrap-styles' );

    wp_deregister_style( 'understrap-styles' );



    wp_dequeue_script( 'understrap-scripts' );

    wp_deregister_script( 'understrap-scripts' );



    // Removes the parent themes stylesheet and scripts from inc/enqueue.php

}

add_action( 'wp_enqueue_scripts', 'understrap_remove_scripts', 20 );



add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

function theme_enqueue_styles() {



	// Get the theme data

	$the_theme = wp_get_theme();



    wp_enqueue_style( 'child-understrap-styles', get_stylesheet_directory_uri() . '/css/child-theme.min.css', array(), $the_theme->get( 'Version' ) );

    wp_enqueue_script( 'child-understrap-scripts', get_stylesheet_directory_uri() . '/js/child-theme.min.js', array(), $the_theme->get( 'Version' ), true );

}



//Allow Text widgets to execute shortcodes

add_filter('widget_text', 'do_shortcode');

//Allow text widgets to run php

add_filter('widget_text','execute_php',100);
function execute_php($html){
     if(strpos($html,"<"."?php")!==false){
          ob_start();
          eval("?".">".$html);
          $html=ob_get_contents();
          ob_end_clean();
     }
     return $html;
}

//Create the Job Custom Post Type
add_action( 'init', 'job_post_type', 0 );
function job_post_type() {
// Set UI labels for Custom Post Type
  $labels = array(
    'name'                => 'Jobs',
    'singular_name'       => 'Job',
    'menu_name'           => 'Jobs',
    'parent_item_colon'   => 'Parent Job',
    'all_items'           => 'All Jobs',
    'view_item'           => 'View Job',
    'add_new_item'        => 'Add New Job',
    'add_new'             => 'Add New',
    'edit_item'           => 'Edit Job',
    'update_item'         => 'Update Job',
    'search_items'        => 'Search Jobs',
    'not_found'           => 'No Job Found',
    'not_found_in_trash'  => 'No Job Found in Trash',
  );
  
// Set other options for Custom Post Type
  $args = array(
    'label'               => 'Job',
    'description'         => 'Job',
    'labels'              => $labels,
    // Features this CPT supports in Post Editor
    'supports'            => array( 'title', 'editor', 'author', 'thumbnail' ),
    'hierarchical'        => false,
    'public'              => true,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'show_in_nav_menus'   => true,
    'show_in_admin_bar'   => true,
    'menu_position'       => 5,
    'can_export'          => true,
    'has_archive'         => true,
    'exclude_from_search' => false,
    'publicly_queryable'  => true,
    'capability_type'     => 'page',
  );
  
  // Registering your Custom Post Type
  register_post_type( 'jobs', $args );
}

//Create the Job Category Taxonomy
add_action( 'init', 'create_job_cat_taxonomy' );
function create_job_cat_taxonomy() {
  $labels = array(
    'add_new_item' => 'Add New Job Category',
    'view_item' => 'View Job Category',
    'edit_item' => 'Edit Job Category',
    'update_item' => 'Update Job Category',
  );
  $args = array(
    'label' => 'Job Categories',
    'rewrite' => array( 'slug' => 'job-category' ),
    'labels'            => $labels,
  );
  register_taxonomy( 'job-category', array( 'jobs' ), $args );
}