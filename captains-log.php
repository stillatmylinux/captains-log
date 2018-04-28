<?php

/*
Plugin Name: Captain's Log
Description: Keep track of your daily captain activities
Author: Matt Thiessen
Version: 1.0
Author URI: http://matt.thiessen.us/
*/


// Register Custom Captain's Logs
function captains_log_post_type() {

	$labels = array(
		'name'                  => _x( 'Captain\'s Logs', 'Captain\'s Logs General Name', 'captains-log' ),
		'singular_name'         => _x( 'Captain\'s Log', 'Captain\'s Logs Singular Name', 'captains-log' ),
		'menu_name'             => __( 'Captain\'s Logs', 'captains-log' ),
		'name_admin_bar'        => __( 'Captain\'s Logs', 'captains-log' ),
		'archives'              => __( 'Log Archives', 'captains-log' ),
		'parent_item_colon'     => __( 'Parent Log:', 'captains-log' ),
		'all_items'             => __( 'All Logs', 'captains-log' ),
		'add_new_item'          => __( 'Add New Log', 'captains-log' ),
		'add_new'               => __( 'Add New', 'captains-log' ),
		'new_item'              => __( 'New Log', 'captains-log' ),
		'edit_item'             => __( 'Edit Log', 'captains-log' ),
		'update_item'           => __( 'Update Log', 'captains-log' ),
		'view_item'             => __( 'View Log', 'captains-log' ),
		'search_items'          => __( 'Search Log', 'captains-log' ),
		'not_found'             => __( 'Not found', 'captains-log' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'captains-log' ),
		'featured_image'        => __( 'Featured Image', 'captains-log' ),
		'set_featured_image'    => __( 'Set featured image', 'captains-log' ),
		'remove_featured_image' => __( 'Remove featured image', 'captains-log' ),
		'use_featured_image'    => __( 'Use as featured image', 'captains-log' ),
		'insert_into_item'      => __( 'Insert into item', 'captains-log' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'captains-log' ),
		'items_list'            => __( 'Logs list', 'captains-log' ),
		'items_list_navigation' => __( 'Logs list navigation', 'captains-log' ),
		'filter_items_list'     => __( 'Filter items list', 'captains-log' ),
	);
	$args = array(
		'label'                 => __( 'Captain\'s Log', 'captains-log' ),
		'description'           => __( 'Captain\'s\'s Log', 'log-categories' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'captains-log', $args );

}
add_action( 'init', 'captains_log_post_type', 0 );

// Register Custom Taxonomy
function captains_log_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Captain\'s Log Categories', 'Taxonomy General Name', 'captains-log' ),
		'singular_name'              => _x( 'Captain\'s Log Category', 'Taxonomy Singular Name', 'captains-log' ),
		'menu_name'                  => __( 'Captain\'s Categories', 'captains-log' ),
		'all_items'                  => __( 'All Logs', 'captains-log' ),
		'parent_item'                => __( 'Parent Log', 'captains-log' ),
		'parent_item_colon'          => __( 'Parent Log:', 'captains-log' ),
		'new_item_name'              => __( 'New Log Name', 'captains-log' ),
		'add_new_item'               => __( 'Add New Log', 'captains-log' ),
		'edit_item'                  => __( 'Edit Log', 'captains-log' ),
		'update_item'                => __( 'Update Log', 'captains-log' ),
		'view_item'                  => __( 'View Log', 'captains-log' ),
		'separate_items_with_commas' => __( 'Separate logs with commas', 'captains-log' ),
		'add_or_remove_items'        => __( 'Add or remove logs', 'captains-log' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'captains-log' ),
		'popular_items'              => __( 'Popular Logs', 'captains-log' ),
		'search_items'               => __( 'Search Logs', 'captains-log' ),
		'not_found'                  => __( 'Not Found', 'captains-log' ),
		'no_terms'                   => __( 'No logs', 'captains-log' ),
		'items_list'                 => __( 'Logs list', 'captains-log' ),
		'items_list_navigation'      => __( 'Logs list navigation', 'captains-log' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'log-categories', array( 'captains-log' ), $args );

}
add_action( 'init', 'captains_log_taxonomy', 0 );