<?php
/**
 * Krank includes
 * On upgrade retain this file 
*/
require_once locate_template('/lib/utils.php');          		// Utility functions
require_once locate_template('/lib/init.php');            		// Initial theme setup and constants
require_once locate_template('/lib/wrapper.php');         		// Theme wrapper class
require_once locate_template('/lib/sidebar.php');        		// Sidebar class
require_once locate_template('/lib/config.php');          		// Configuration
require_once locate_template('/lib/activation.php');      		// Theme activation
require_once locate_template('/lib/titles.php');          		// Page titles
require_once locate_template('/lib/cleanup.php');         		// Cleanup
require_once locate_template('/lib/nav.php');             		// Custom nav modifications
require_once locate_template('/lib/gallery.php');         		// Custom [gallery] modifications
require_once locate_template('/lib/comments.php');        		// Custom comments modifications
require_once locate_template('/lib/relative-urls.php');   		// Root relative URLs
require_once locate_template('/lib/widgets.php');         		// Sidebars and widgets
require_once locate_template('/lib/scripts.php');         		// Scripts and stylesheets

// Krank Extras
require_once locate_template('/lib/custom-functions.php');      // Custom functions
require_once locate_template('/lib/custom-posts.php');    		// Custom Posts
require_once locate_template('/lib/contact-form.php');    		// Contact Form
require_once locate_template('/lib/shortcodes.php');      		// Added Shortcodes
require_once locate_template('/lib/custom-seo.php');      		// Custom seo pack
require_once locate_template('/lib/custom-integration.php');    // Custom system integrations

// Custom Meta Boxes see https://github.com/jaredatch/Custom-Metaboxes-and-Fields-for-WordPress
if (is_admin()) { require_once locate_template('/lib/custom-meta.php'); }

// Krank Options Powered by Redux Framework (http://reduxframework.com/docs/)
if ( !class_exists( 'ReduxFramework' ) && file_exists( dirname( __FILE__ ) . '/options/ReduxCore/framework.php' ) ) {
	require_once( dirname( __FILE__ ) . '/options/ReduxCore/framework.php' );
}
if ( !isset( $krank ) && file_exists( dirname( __FILE__ ) . '/lib/options.php' ) ) {
	require_once( dirname( __FILE__ ) . '/lib/options.php' );
}