<?php
/**
 * Theme Setup
 *
 * @package understrap
 */

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
    'add_new_item' => 'Add New Job Industry',
    'view_item' => 'View Job Industry',
    'edit_item' => 'Edit Job Industry',
    'update_item' => 'Update Job Industry',
  );
  $args = array(
    'label' => 'Job Industries',
    'rewrite' => array( 'slug' => 'job-industry' ),
    'labels'            => $labels,
  );
  register_taxonomy( 'job-industry', array( 'jobs' ), $args );
}