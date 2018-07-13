<?php
/*
Plugin Name: MT Dina
Plugin URI: 
Description: The plugin is required to run MT Dina theme
Author: matchthemes
Author URI: http://matchthemes.com
Version: 1.3.0
License: GNU General Public License v3.0
License URI: http://www.opensource.org/licenses/gpl-license.php
*/


// Add Custom Post Types

add_action('init', 'dina_custom_post_types');

function dina_custom_post_types() {

// Home Custom Post Type

		$labelsHome = array(
		'name' => esc_html__('Home Content', 'dina'),
		'singular_name' => esc_html__('Home Section', 'dina'),
		'add_new' => esc_html__('Add New Home Section', 'dina'),
		'add_new_item' => esc_html__('Add New Home Section', 'dina'),
		'edit_item' => esc_html__('Edit Home Section', 'dina'),
		'new_item' => esc_html__('New Home Section', 'dina'),
		'view_item' => esc_html__('View Home Section', 'dina'),
		'search_items' => esc_html__('Search Home Section', 'dina'),
		'not_found' =>  esc_html__('Nothing found', 'dina'),
		'not_found_in_trash' => esc_html__('Nothing found in Trash', 'dina'),
		'parent_item_colon' => ''
	
		);
	
    	$home_args = array(
        	'labels' => $labelsHome,
        	'label' => esc_html__('Home Content','dina'),
        	'singular_label' => esc_html__('Home Content','dina'),
        	'public' => true,
        	'show_ui' => true,
			'menu_icon' => 'dashicons-admin-home',
        	'capability_type' => 'post',
        	'hierarchical' => false,
        	'rewrite' => array('slug' => 'home','with_front' => false),
        	'supports' => array('title', 'editor', 'thumbnail', 'excerpt')
        );
		register_post_type('mt_home',$home_args);
		
		
// Menu Custom Post Type

$labelsMenu = array(
		'name' => esc_html__('Our Menu', 'dina'),
		'singular_name' => esc_html__('Menu Item', 'dina'),
		'add_new' => esc_html__('Add New Menu Item', 'dina'),
		'add_new_item' => esc_html__('Add New Menu Item', 'dina'),
		'edit_item' => esc_html__('Edit Menu Item', 'dina'),
		'new_item' => esc_html__('New Menu Item', 'dina'),
		'view_item' => esc_html__('View Menu Item', 'dina'),
		'search_items' => esc_html__('Search Menu Item', 'dina'),
		'not_found' =>  esc_html__('Nothing found', 'dina'),
		'not_found_in_trash' => esc_html__('Nothing found in Trash', 'dina'),
		'parent_item_colon' => ''
	
		);
	
    	$menu_args = array(
        	'labels' => $labelsMenu,
        	'label' => esc_html__('Menu','dina'),
        	'singular_label' => esc_html__('Menu','dina'),
        	'public' => true,
        	'show_ui' => true,
			'menu_icon' => 'dashicons-book',
        	'capability_type' => 'post',
        	'hierarchical' => false,
        	'rewrite' => array('slug' => 'our-menu','with_front' => false),
        	'supports' => array('title', 'thumbnail')
        );
		register_post_type('mt_menu',$menu_args);
	
		
	 $labelsMenuSection = array(
    'name' => esc_html__( 'Menu Categories', 'dina' ),
    'singular_name' => esc_html__( 'Category', 'dina' ),
    'search_items' =>  esc_html__( 'Search Categories', 'dina' ),
    'all_items' => esc_html__( 'All Categories', 'dina' ),
    'parent_item' => esc_html__( 'Parent Category', 'dina' ),
    'parent_item_colon' => esc_html__( 'Parent Category:', 'dina' ),
    'edit_item' => esc_html__( 'Edit Category', 'dina' ),
    'update_item' => esc_html__( 'Update Category', 'dina' ),
    'add_new_item' => esc_html__( 'Add New Category', 'dina' ),
    'new_item_name' => esc_html__( 'New Category Name', 'dina' ),
  ); 	

  register_taxonomy('menu_category','mt_menu',array(
    'hierarchical' => true,
    'labels' => $labelsMenuSection
  ));


// Gallery Custom Post Type

$labelsGallery = array(
		'name' => esc_html__('Galleries', 'dina'),
		'singular_name' => esc_html__('Gallery', 'dina'),
		'add_new' => esc_html__('Add New Gallery', 'dina'),
		'add_new_item' => esc_html__('Add New Gallery', 'dina'),
		'edit_item' => esc_html__('Edit Gallery', 'dina'),
		'new_item' => esc_html__('New Gallery', 'dina'),
		'view_item' => esc_html__('View Gallery', 'dina'),
		'search_items' => esc_html__('Search Gallery', 'dina'),
		'not_found' =>  esc_html__('Nothing found', 'dina'),
		'not_found_in_trash' => esc_html__('Nothing found in Trash', 'dina'),
		'parent_item_colon' => ''
	
		);
	
    	$gallery_args = array(
        	'labels' => $labelsGallery,
        	'label' => esc_html__('Gallery','dina'),
        	'singular_label' => esc_html__('Gallery','dina'),
        	'public' => true,
        	'show_ui' => true,
			'menu_icon' => 'dashicons-images-alt2',
        	'capability_type' => 'post',
        	'hierarchical' => false,
        	'rewrite' => array('slug' => 'gallery','with_front' => false),
        	'supports' => array('title', 'editor', 'thumbnail')
        );
		register_post_type('mt_gallery',$gallery_args);
		
// Team Custom Post Type

$labelsTeam = array(
		'name' => esc_html__('Team', 'dina'),
		'singular_name' => esc_html__('Team Item', 'dina'),
		'add_new' => esc_html__('Add New Team Item', 'dina'),
		'add_new_item' => esc_html__('Add New Team Item', 'dina'),
		'edit_item' => esc_html__('Edit Team Item', 'dina'),
		'new_item' => esc_html__('New Team Item', 'dina'),
		'view_item' => esc_html__('View Team Item', 'dina'),
		'search_items' => esc_html__('Search Team Item', 'dina'),
		'not_found' =>  esc_html__('Nothing found', 'dina'),
		'not_found_in_trash' => esc_html__('Nothing found in Trash', 'dina'),
		'parent_item_colon' => ''
	
		);
	
    	$team_args = array(
        	'labels' => $labelsTeam,
        	'label' => esc_html__('Team','dina'),
        	'singular_label' => esc_html__('Team','dina'),
        	'public' => true,
        	'show_ui' => true,
			'menu_icon' => 'dashicons-groups',
        	'capability_type' => 'post',
        	'hierarchical' => false,
        	'rewrite' => array('slug' => 'team','with_front' => false),
        	'supports' => array('title', 'editor', 'thumbnail')
        );
		register_post_type('mt_team',$team_args);
	
}

add_action('init', 'dina_shortcodes');

function dina_shortcodes() {

require_once( 'shortcodes.php' );

}