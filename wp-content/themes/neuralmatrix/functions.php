<?php
/**
 * UnderStrap functions and definitions
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// UnderStrap's includes directory.
$understrap_inc_dir = get_template_directory() . '/inc';

// Array of files to include.
$understrap_includes = array(
	'/theme-settings.php',                  // Initialize theme default settings.
	'/setup.php',                           // Theme setup and custom theme supports.
	'/widgets.php',                         // Register widget area.
	'/enqueue.php',                         // Enqueue scripts and styles.
	'/template-tags.php',                   // Custom template tags for this theme.
	'/pagination.php',                      // Custom pagination for this theme.
	'/hooks.php',                           // Custom hooks.
	'/extras.php',                          // Custom functions that act independently of the theme templates.
	'/customizer.php',                      // Customizer additions.
	'/custom-comments.php',                 // Custom Comments file.
	'/class-wp-bootstrap-navwalker.php',    // Load custom WordPress nav walker. Trying to get deeper navigation? Check out: https://github.com/understrap/understrap/issues/567.
	'/editor.php',                          // Load Editor functions.
	'/deprecated.php',                      // Load deprecated functions.
);

// Load WooCommerce functions if WooCommerce is activated.
if ( class_exists( 'WooCommerce' ) ) {
	$understrap_includes[] = '/woocommerce.php';
}

// Load Jetpack compatibility file if Jetpack is activiated.
if ( class_exists( 'Jetpack' ) ) {
	$understrap_includes[] = '/jetpack.php';
}

// Include files.
foreach ( $understrap_includes as $file ) {
	require_once $understrap_inc_dir . $file;
}

// Default Theme ACF Fields
include_once('custom-functions.php');

// Custom Options Pages
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Default Website Settings',
		'menu_title'	=> 'Website Settings',
		'menu_slug' 	=> 'website-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Custom Labels',
		'menu_title'	=> 'Custom Labels',
		'parent_slug'	=> 'website-settings',
	));
	
		function nms_cpt() {
		$labels = [
			"name" => __( "Topics", "custom-post-type-ui" ),
			"singular_name" => __( "Topic", "custom-post-type-ui" ),
		];
		$args = [
			"label" => __( "Topics", "custom-post-type-ui" ),
			"labels" => $labels,
			"public" => true,
			"publicly_queryable" => false,
			"hierarchical" => false,
			"show_ui" => true,
			"show_in_menu" => 'true',
			"show_in_nav_menus" => 'posts',
			"query_var" => true,
			"rewrite" => [ 'slug' => 'topics', 'with_front' => true, ],
			"show_admin_column" => true,
			"show_in_rest" => true,
			"rest_base" => "topics",
			"rest_controller_class" => "WP_REST_Terms_Controller",
			"show_in_quick_edit" => true,
				];
		register_taxonomy( "topics", [ "insights", "company_news" , "events" ], $args );
	}
	add_action( 'init', 'nms_cpt' );

}

//Custom Post Types

// Courses
function cptui_register_my_cpts_course() {

	$labels = [
		"name" => __( "Courses", "understrap" ),
		"singular_name" => __( "Course", "understrap" ),
	];

	$args = [
		"label" => __( "course", "understrap" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => true,
		"rewrite" => [ "slug" => "course", "with_front" => true ],
		"query_var" => true,
		"menu_position" => 5,
		"menu_icon" => "dashicons-pressthis",
		"supports" => [ "title", "editor", "thumbnail" ],
	];

	register_post_type( "course", $args );
}

add_action( 'init', 'cptui_register_my_cpts_course' );

// Instructors

function cptui_register_my_cpts_instructor() {

	/**
	 * Post Type: Instructors.
	 */

	$labels = [
		"name" => __( "Instructors", "understrap" ),
		"singular_name" => __( "instructor", "understrap" ),
	];

	$args = [
		"label" => __( "Instructors", "understrap" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "instructor", "with_front" => true ],
		"query_var" => true,
		"menu_position" => 7,
		"menu_icon" => "dashicons-businessperson",
		"supports" => [ "title", "editor", "thumbnail" ],
	];

	register_post_type( "instructor", $args );
}

add_action( 'init', 'cptui_register_my_cpts_instructor' );
