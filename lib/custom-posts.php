<?php
/**
 * Krank Custom Posts
 * @package Krank
 * Wordpress 3.8+ menu Icons see (http://melchoyce.github.io/dashicons/)
*/

// Portfolio Items Posts
function krank_portfolio_item(){
	$labels = array(
		'name'               => _x( 'Portfolio Item', 'post type general name' ),
		'singular_name'      => _x( 'Portfolio', 'post type singular name' ),
		'add_new'            => _x( 'Add New', 'Item' ),
		'add_new_item'       => __( 'Add New Portfolio Item' ),
		'edit_item'          => __( 'Edit Portfolio Item' ),
		'new_item'           => __( 'New Portfolio Item' ),
		'all_items'          => __( 'All Portfolio Items' ),
		'view_item'          => __( 'View Portfolio Items' ),
		'search_items'       => __( 'Search Portfolio Item' ),
		'not_found'          => __( 'No products found' ),
		'not_found_in_trash' => __( 'No products found in the Trash' ), 
		'parent_item_colon'  => '',
		'menu_name'          => 'Portfolio Items',
	);
	$args = array(
		'labels'        => $labels,
		'description'   => 'Portfolio Items',
		'menu_icon'		=> 'dashicons-format-gallery',
		'public'        => true,
		'menu_position' => 5,
		'supports'      => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'page-attributes' ),
		'has_archive'   => true,
		'hierarchical' => true,
		'taxonomies' => array('post_tag')
	);
	register_post_type( 'portfolio', $args );	
}
add_action( 'init', 'krank_portfolio_item' );

//Portfolio Taxemony

function krank_taxonomies_portfolio() {
	$labels = array(
		'name'              => _x( 'Portfolio Categories', 'taxonomy general name' ),
		'singular_name'     => _x( 'Portfolio Category', 'taxonomy singular name' ),
		'search_items'      => __( 'Search Portfolio Categories' ),
		'all_items'         => __( 'All Portfolio Categories' ),
		'parent_item'       => __( 'Parent Portfolio Category' ),
		'parent_item_colon' => __( 'Parent Portfolio Category:' ),
		'edit_item'         => __( 'Edit Portfolio Category' ), 
		'update_item'       => __( 'Update Portfolio Category' ),
		'add_new_item'      => __( 'Add New Portfolio Category' ),
		'new_item_name'     => __( 'New Portfolio Category' ),
		'menu_name'         => __( 'Portfolio Categories' ),
	);
	$args = array(
		'labels' => $labels,
		'hierarchical' => true,
	);
	register_taxonomy( 'portfolio_category', 'portfolio', $args );
}
add_action( 'init', 'krank_taxonomies_portfolio', 0 );

//Portfolio Post Messages

function krank_portfolio_messages( $messages ) {
	global $post, $post_ID;
	$messages['portfolio'] = array(
		0 => '', 
		1 => sprintf( __('Portfolio item updated. <a href="%s">View item</a>'), esc_url( get_permalink($post_ID) ) ),
		2 => __('Custom field updated.'),
		3 => __('Custom field deleted.'),
		4 => __('Portfolio Item.'),
		5 => isset($_GET['revision']) ? sprintf( __('Portfolio item restored to revision from %s'), wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
		6 => sprintf( __('Portfolio item published. <a href="%s">View item</a>'), esc_url( get_permalink($post_ID) ) ),
		7 => __('Portfolio item saved.'),
		8 => sprintf( __('Portfolio item submitted. <a target="_blank" href="%s">Preview product</a>'), esc_url( add_query_arg( 'preview', 'true', get_permalink($post_ID) ) ) ),
		9 => sprintf( __('Portfolio item scheduled for: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Preview Portfolio item</a>'), date_i18n( __( 'M j, Y @ G:i' ), strtotime( $post->post_date ) ), esc_url( get_permalink($post_ID) ) ),
		10 => sprintf( __('Portfolio item draft updated. <a target="_blank" href="%s">Preview Portfolio item</a>'), esc_url( add_query_arg( 'preview', 'true', get_permalink($post_ID) ) ) ),
	);
	return $messages;
}
add_filter( 'post_updated_messages', 'krank_portfolio_messages' );

?>