<?php
/**
 * Include and setup custom metaboxes and fields.
 *
 * @category YourThemeOrPlugin
 * @package  Metaboxes
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link     https://github.com/webdevstudios/Custom-Metaboxes-and-Fields-for-WordPress
 */

add_filter( 'cmb_meta_boxes', 'krank_metaboxes' );
/**
 * Define the metabox and field configurations.
 *
 * @param  array $meta_boxes
 * @return array
 */
function krank_metaboxes( array $meta_boxes ) {

	// Start with an underscore to hide fields from custom fields list
	$prefix = '_krank_';
	
	// Krank page layout options for bootstrap container class
	$meta_boxes['page_layout'] = array(
		'id'         => 'page_layout',
		'title'      => 'Page Layout Options',
		'pages'      => array( 'page', ), // Post type
		'context'    => 'side',
		'priority'   => 'low',
		'show_names' => true, // Show field names on the left
		'fields'     => array(
			array(
				'name' => 'Remove Container',
				'desc' => 'Remove Bootstrap container class from page.',
				'id'   => $prefix . 'container',
				'type' => 'checkbox',
			),
		),
	);
	
	// Krank Home Services
	$meta_boxes['home_services'] = array(
		'id'         => 'home_services',
		'title'      => __( 'Services', 'cmb' ),
		'pages'      => array( 'page'), // Post type
		'show_on' => array( 'key' => 'id', 'value' => array( 4 ) ),
		'context'    => 'normal',
		'priority'   => 'high',
		'show_names' => true, // Show field names on the left
		// 'cmb_styles' => true, // Enqueue the CMB stylesheet on the frontend
		'fields'     => array(
			array(
				'name' => __( 'Services Title', 'cmb' ),
				'desc' => __( '', 'cmb' ),
				'id'   => $prefix . 'service_title',
				'type' => 'text',
			),
			array(
				'name' => __( 'Services Lead', 'cmb' ),
				'desc' => __( '', 'cmb' ),
				'id'   => $prefix . 'service_lead',
				'type' => 'text',
			),
			array(
				'name' => __( 'Services Code', 'cmb' ),
				'desc' => __( '', 'cmb' ),
				'id'   => $prefix . 'service_code',
				'type' => 'textarea_code',
			),
		),
	);
	
	// Krank Custom SEO Options
	$meta_boxes['custom_seo'] = array(
		'id'         => 'custom_seo',
		'title'      => __( 'Page SEO', 'cmb' ),
		'pages'      => array( 'page', 'post'), // Post type
		'context'    => 'normal',
		'priority'   => 'high',
		'show_names' => true, // Show field names on the left
		// 'cmb_styles' => true, // Enqueue the CMB stylesheet on the frontend
		'fields'     => array(
			array(
				'name' => __( 'Page Title', 'cmb' ),
				'desc' => __( 'As the name implies, this will be the title of your page. This is independent of any other option. If not set, the default blog title will get used', 'cmb' ),
				'id'   => $prefix . 'seo_title',
				'type' => 'text',
			),
			array(
				'name' => __( 'Meta Description', 'cmb' ),
				'desc' => __( 'The META description for your homepage. Independent of any other options, the default is no META description at all if this is not set.', 'cmb' ),
				'id'   => $prefix . 'seo_desc',
				'type' => 'textarea_small',
			),
			array(
				'name' => __( 'Meta Keywords', 'cmb' ),
				'desc' => __( 'A comma separated list of your most important keywords for your site that will be written as META keywords on your homepage. Don\'t stuff everything in here.', 'cmb' ),
				'id'   => $prefix . 'seo_key',
				'type' => 'textarea_small',
			),
		),
	);
	
	

	$meta_boxes['test_metabox'] = array(
		'id'         => 'test_metabox',
		'title'      => __( 'Test Metabox', 'cmb' ),
		'pages'      => array( 'page', ), // Post type
		'context'    => 'normal',
		'priority'   => 'high',
		'show_names' => true, // Show field names on the left
		// 'cmb_styles' => true, // Enqueue the CMB stylesheet on the frontend
		'fields'     => array(
			array(
				'name' => __( 'Test Text', 'cmb' ),
				'desc' => __( 'field description (optional)', 'cmb' ),
				'id'   => $prefix . 'test_text',
				'type' => 'text',
				// 'sanitization_cb' => 'my_custom_sanitization', // custom sanitization callback parameter
				// 'escape_cb'       => 'my_custom_escaping',  // custom escaping callback parameter
				// 'on_front'        => false, // Optionally designate a field to wp-admin only
				// 'repeatable'      => true,
			),
			array(
				'name' => __( 'Test Text Small', 'cmb' ),
				'desc' => __( 'field description (optional)', 'cmb' ),
				'id'   => $prefix . 'test_textsmall',
				'type' => 'text_small',
				// 'repeatable' => true,
			),
			array(
				'name' => __( 'Test Text Medium', 'cmb' ),
				'desc' => __( 'field description (optional)', 'cmb' ),
				'id'   => $prefix . 'test_textmedium',
				'type' => 'text_medium',
				// 'repeatable' => true,
			),
			array(
				'name' => __( 'Website URL', 'cmb' ),
				'desc' => __( 'field description (optional)', 'cmb' ),
				'id'   => $prefix . 'url',
				'type' => 'text_url',
				// 'protocols' => array('http', 'https', 'ftp', 'ftps', 'mailto', 'news', 'irc', 'gopher', 'nntp', 'feed', 'telnet'), // Array of allowed protocols
				// 'repeatable' => true,
			),
			array(
				'name' => __( 'Test Text Email', 'cmb' ),
				'desc' => __( 'field description (optional)', 'cmb' ),
				'id'   => $prefix . 'email',
				'type' => 'text_email',
				// 'repeatable' => true,
			),
			array(
				'name' => __( 'Test Time', 'cmb' ),
				'desc' => __( 'field description (optional)', 'cmb' ),
				'id'   => $prefix . 'test_time',
				'type' => 'text_time',
			),
			array(
				'name' => __( 'Time zone', 'cmb' ),
				'desc' => __( 'Time zone', 'cmb' ),
				'id'   => $prefix . 'timezone',
				'type' => 'select_timezone',
			),
			array(
				'name' => __( 'Test Date Picker', 'cmb' ),
				'desc' => __( 'field description (optional)', 'cmb' ),
				'id'   => $prefix . 'test_textdate',
				'type' => 'text_date',
			),
			array(
				'name' => __( 'Test Date Picker (UNIX timestamp)', 'cmb' ),
				'desc' => __( 'field description (optional)', 'cmb' ),
				'id'   => $prefix . 'test_textdate_timestamp',
				'type' => 'text_date_timestamp',
				// 'timezone_meta_key' => $prefix . 'timezone', // Optionally make this field honor the timezone selected in the select_timezone specified above
			),
			array(
				'name' => __( 'Test Date/Time Picker Combo (UNIX timestamp)', 'cmb' ),
				'desc' => __( 'field description (optional)', 'cmb' ),
				'id'   => $prefix . 'test_datetime_timestamp',
				'type' => 'text_datetime_timestamp',
			),
			// This text_datetime_timestamp_timezone field type
			// is only compatible with PHP versions 5.3 or above.
			// Feel free to uncomment and use if your server meets the requirement
			// array(
			// 	'name' => __( 'Test Date/Time Picker/Time zone Combo (serialized DateTime object)', 'cmb' ),
			// 	'desc' => __( 'field description (optional)', 'cmb' ),
			// 	'id'   => $prefix . 'test_datetime_timestamp_timezone',
			// 	'type' => 'text_datetime_timestamp_timezone',
			// ),
			array(
				'name' => __( 'Test Money', 'cmb' ),
				'desc' => __( 'field description (optional)', 'cmb' ),
				'id'   => $prefix . 'test_textmoney',
				'type' => 'text_money',
				// 'before'     => '£', // override '$' symbol if needed
				// 'repeatable' => true,
			),
			array(
				'name'    => __( 'Test Color Picker', 'cmb' ),
				'desc'    => __( 'field description (optional)', 'cmb' ),
				'id'      => $prefix . 'test_colorpicker',
				'type'    => 'colorpicker',
				'default' => '#ffffff'
			),
			array(
				'name' => __( 'Test Text Area', 'cmb' ),
				'desc' => __( 'field description (optional)', 'cmb' ),
				'id'   => $prefix . 'test_textarea',
				'type' => 'textarea',
			),
			array(
				'name' => __( 'Test Text Area Small', 'cmb' ),
				'desc' => __( 'field description (optional)', 'cmb' ),
				'id'   => $prefix . 'test_textareasmall',
				'type' => 'textarea_small',
			),
			array(
				'name' => __( 'Test Text Area for Code', 'cmb' ),
				'desc' => __( 'field description (optional)', 'cmb' ),
				'id'   => $prefix . 'test_textarea_code',
				'type' => 'textarea_code',
			),
			array(
				'name' => __( 'Test Title Weeeee', 'cmb' ),
				'desc' => __( 'This is a title description', 'cmb' ),
				'id'   => $prefix . 'test_title',
				'type' => 'title',
			),
			array(
				'name'    => __( 'Test Select', 'cmb' ),
				'desc'    => __( 'field description (optional)', 'cmb' ),
				'id'      => $prefix . 'test_select',
				'type'    => 'select',
				'options' => array(
					array( 'name' => __( 'Option One', 'cmb' ), 'value' => 'standard', ),
					array( 'name' => __( 'Option Two', 'cmb' ), 'value' => 'custom', ),
					array( 'name' => __( 'Option Three', 'cmb' ), 'value' => 'none', ),
				),
			),
			array(
				'name'    => __( 'Test Radio inline', 'cmb' ),
				'desc'    => __( 'field description (optional)', 'cmb' ),
				'id'      => $prefix . 'test_radio_inline',
				'type'    => 'radio_inline',
				'options' => array(
					array( 'name' => __( 'Option One', 'cmb' ), 'value' => 'standard', ),
					array( 'name' => __( 'Option Two', 'cmb' ), 'value' => 'custom', ),
					array( 'name' => __( 'Option Three', 'cmb' ), 'value' => 'none', ),
				),
			),
			array(
				'name'    => __( 'Test Radio', 'cmb' ),
				'desc'    => __( 'field description (optional)', 'cmb' ),
				'id'      => $prefix . 'test_radio',
				'type'    => 'radio',
				'options' => array(
					array( 'name' => __( 'Option One', 'cmb' ), 'value' => 'standard', ),
					array( 'name' => __( 'Option Two', 'cmb' ), 'value' => 'custom', ),
					array( 'name' => __( 'Option Three', 'cmb' ), 'value' => 'none', ),
				),
			),
			array(
				'name'     => __( 'Test Taxonomy Radio', 'cmb' ),
				'desc'     => __( 'field description (optional)', 'cmb' ),
				'id'       => $prefix . 'text_taxonomy_radio',
				'type'     => 'taxonomy_radio',
				'taxonomy' => 'category', // Taxonomy Slug
				// 'inline'  => true, // Toggles display to inline
			),
			array(
				'name'     => __( 'Test Taxonomy Select', 'cmb' ),
				'desc'     => __( 'field description (optional)', 'cmb' ),
				'id'       => $prefix . 'text_taxonomy_select',
				'type'     => 'taxonomy_select',
				'taxonomy' => 'category', // Taxonomy Slug
			),
			array(
				'name'     => __( 'Test Taxonomy Multi Checkbox', 'cmb' ),
				'desc'     => __( 'field description (optional)', 'cmb' ),
				'id'       => $prefix . 'test_multitaxonomy',
				'type'     => 'taxonomy_multicheck',
				'taxonomy' => 'post_tag', // Taxonomy Slug
				// 'inline'  => true, // Toggles display to inline
			),
			array(
				'name' => __( 'Test Checkbox', 'cmb' ),
				'desc' => __( 'field description (optional)', 'cmb' ),
				'id'   => $prefix . 'test_checkbox',
				'type' => 'checkbox',
			),
			array(
				'name'    => __( 'Test Multi Checkbox', 'cmb' ),
				'desc'    => __( 'field description (optional)', 'cmb' ),
				'id'      => $prefix . 'test_multicheckbox',
				'type'    => 'multicheck',
				'options' => array(
					'check1' => __( 'Check One', 'cmb' ),
					'check2' => __( 'Check Two', 'cmb' ),
					'check3' => __( 'Check Three', 'cmb' ),
				),
				// 'inline'  => true, // Toggles display to inline
			),
			array(
				'name'    => __( 'Test wysiwyg', 'cmb' ),
				'desc'    => __( 'field description (optional)', 'cmb' ),
				'id'      => $prefix . 'test_wysiwyg',
				'type'    => 'wysiwyg',
				'options' => array( 'textarea_rows' => 5, ),
			),
			array(
				'name' => __( 'Test Image', 'cmb' ),
				'desc' => __( 'Upload an image or enter a URL.', 'cmb' ),
				'id'   => $prefix . 'test_image',
				'type' => 'file',
			),
			array(
				'name' => __( 'Multiple Files', 'cmb' ),
				'desc' => __( 'Upload or add multiple images/attachments.', 'cmb' ),
				'id'   => $prefix . 'test_file_list',
				'type' => 'file_list',
			),
			array(
				'name' => __( 'oEmbed', 'cmb' ),
				'desc' => __( 'Enter a youtube, twitter, or instagram URL. Supports services listed at <a href="http://codex.wordpress.org/Embeds">http://codex.wordpress.org/Embeds</a>.', 'cmb' ),
				'id'   => $prefix . 'test_embed',
				'type' => 'oembed',
			),
		),
	);

	$meta_boxes['about_page_metabox'] = array(
		'id'         => 'about_page_metabox',
		'title'      => __( 'About Page Metabox', 'cmb' ),
		'pages'      => array( 'page', ), // Post type
		'context'    => 'normal',
		'priority'   => 'high',
		'show_names' => true, // Show field names on the left
		'show_on'    => array( 'key' => 'id', 'value' => array( 2, ), ), // Specific post IDs to display this metabox
		'fields'     => array(
			array(
				'name' => __( 'Test Text', 'cmb' ),
				'desc' => __( 'field description (optional)', 'cmb' ),
				'id'   => $prefix . 'test_text',
				'type' => 'text',
			),
		)
	);

	/**
	 * Metabox for the user profile screen
	 */
	$meta_boxes['user_edit'] = array(
		'id'            => 'user_edit',
		'title'         => __( 'User Profile Metabox', 'cmb' ),
		'pages'         => array( 'user' ), // Tells CMB to use user_meta vs post_meta
		'show_names'    => true,
		// 'cmb_styles' => true, // Show cmb bundled styles.. not needed on user profile page
		'fields'        => array(
			array(
				'name'     => __( 'Extra Info', 'cmb' ),
				'desc'     => __( 'field description (optional)', 'cmb' ),
				'id'       => $prefix . 'exta_info',
				'type'     => 'title',
				'on_front' => false,
			),
			array(
				'name'    => __( 'Avatar', 'cmb' ),
				'desc'    => __( 'field description (optional)', 'cmb' ),
				'id'      => $prefix . 'avatar',
				'type'    => 'file',
				'save_id' => true,
			),
			array(
				'name' => __( 'Facebook URL', 'cmb' ),
				'desc' => __( 'field description (optional)', 'cmb' ),
				'id'   => $prefix . 'facebookurl',
				'type' => 'text_url',
			),
			array(
				'name' => __( 'Twitter URL', 'cmb' ),
				'desc' => __( 'field description (optional)', 'cmb' ),
				'id'   => $prefix . 'twitterurl',
				'type' => 'text_url',
			),
			array(
				'name' => __( 'Google+ URL', 'cmb' ),
				'desc' => __( 'field description (optional)', 'cmb' ),
				'id'   => $prefix . 'googleplusurl',
				'type' => 'text_url',
			),
			array(
				'name' => __( 'Linkedin URL', 'cmb' ),
				'desc' => __( 'field description (optional)', 'cmb' ),
				'id'   => $prefix . 'linkedinurl',
				'type' => 'text_url',
			),
			array(
				'name' => __( 'User Field', 'cmb' ),
				'desc' => __( 'field description (optional)', 'cmb' ),
				'id'   => $prefix . 'user_text_field',
				'type' => 'text',
			),
		)
	);

	return $meta_boxes;
}

add_action( 'init', 'cmb_initialize_cmb_meta_boxes', 9999 );
/**
 * Initialize the metabox class.
 */
function cmb_initialize_cmb_meta_boxes() {

	if ( ! class_exists( 'cmb_Meta_Box' ) )
		require_once locate_template('/metaboxes/init.php');

}
