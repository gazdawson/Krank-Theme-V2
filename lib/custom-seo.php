<?php
/**
 * Krank Custom SEO 
 * @package Krank
*/

// Page Titles
function krank_page_title() {
	global $post;
	
	// Get custom title
	$page_title = get_post_meta($post->ID, '_krank_seo_title', true);
	
	// If there is a title use it if not use WordPress Standard
	if($page_title) {
		$title = $page_title;
	}
	else {
		$title = wp_title('|', true, 'right');
	}
	
	echo $title;
}

// Page Meta
function krank_page_meta() {
	global $post;
	global $krank;

	$meta = '<!-- Krank Search Engine Optimisation Pack -->';
	
	// Custom seo meta
	$meta_desc = get_post_meta($post->ID, '_krank_seo_desc', true);
	$meta_key = get_post_meta($post->ID, '_krank_seo_key', true);
	$google_plus = $krank['google_plus'];
	
	// If custom doesnt exist bodge from wordpress content
	while (have_posts()) : the_post();;
	  $page_content = get_the_content($post);
	endwhile;
	
	// String Work on page excerpt
	if (is_page() && $page_content) {
		$excerpt = strip_tags($page_content);
		$meta_excerpt = substr($excerpt , 0, strpos($excerpt, '. ', 157));
	}
	
	// Google + Author Link
	if($google_plus) {
		$meta .= '<link rel="author" href="'.$google_plus.'">';
	}
	
	// Meta Description
	if ($meta_desc) {
		$meta .= '<meta name="description" content="'.$meta_desc.'">';
	}
	if (!$meta_desc) {
		$meta .= '<meta name="description" content="'.$meta_excerpt.'.">';
	}
	
	// Meta keywords
	if ($meta_key) {
		$meta .= '<meta name="keywords" content="'.$meta_key.'">';
	}
	if (!$meta_key) {
		$keyword_gen = krank_extract_keywords($excerpt);
		$meta .= '<meta name="keywords" content="'.$keyword_gen.'">';
	}
	
	echo $meta;
	print_r();
}
// Add new Krank meta to head
add_action('wp_head', 'krank_page_meta');

// Krank search Index 
function krank_search_index() {
	// Krank Options Variables
	global $krank;
	$search_index = $krank['search_index'];
	$no_index = $krank['no_index'];
	$pages_noindex = $krank['pages_no_index'];
	$post_noindex = $krank['post_type_index'];
	
	$cats = $no_index['cats'];
	$date_arch = $no_index['date_arch'];
	$auth_arch = $no_index['auth_arch'];
	$tag_arch = $no_index['tag_arch'];
	$search = $no_index['search'];
	
	// Output vars;
	$yes = '<meta name="robots" content="index,follow">';
	$no = '<meta name="robots" content="noindex,follow">';
	
	// Check for averall index
	if($search_index != 0) {
		$output = $yes;
	}
	else {
		$output = $no;
	}
	
	// Check for specific pages and post types
	if( $pages_noindex && is_page($pages_noindex) ) {
		$output = $no;
	}
	if( is_singular( $post_noindex ) ) {
		$output = $no;
	}
	// check for specific page types
	if( $cats == 1 && is_category() ) {
		$output = $no;
	}
	if( $date_arch == 1 && is_date() ) {
		$output = $no;
	}
	if( $auth_arch == 1 && is_author() ) {
		$output = $no;
	}
	if( $tag_arch == 1 && is_tag() ) {
		$output = $no;
	}
	if( $search == 1 && is_search() ) {
		$output = $no;
	}
	
	echo $output;
}
// Remove WP Default Meta Robots
remove_action('wp_head', 'noindex', 1);
// Add Krank Meta Robots
add_action('wp_head', 'krank_search_index');

// Krank XML Site Map Generator
function krank_build_sitemap() {
	global $krank;
	$enable = $krank['sitemap_enable'];
	$frequency = $krank['change_freq'];
	
	$postsForSitemap = get_posts(array(
		'numberposts' => -1,
		'orderby' => 'modified',
		'post_type'  => array('post','page'),
		'order'    => 'DESC'
	));

	$sitemap = '<?xml version="1.0" encoding="UTF-8"?>';
	$sitemap .= '<urlset xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd" xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"><!-- Krank XML Sitemap Generator -->';

	foreach($postsForSitemap as $post) {
	setup_postdata($post);

	$postdate = explode(" ", $post->post_modified);

	$sitemap .= 
	'<url>'.
		  '<loc>'. get_permalink($post->ID) .'</loc>'.
		  '<lastmod>'. $postdate[0] .'</lastmod>'.
		  '<changefreq>'. $frequency .'</changefreq>'.
	'</url>';
	}

	$sitemap .= '</urlset>';

	$fp = fopen(ABSPATH . "sitemap.xml", 'w');
	if ($enable == 1) {
		fwrite($fp, $sitemap);
		fclose($fp);
	}
}
add_action("publish_post", "krank_build_sitemap");
add_action("publish_page", "krank_build_sitemap");

// Keyword generator
function krank_extract_keywords($str, $minWordLen = 3, $minWordOccurrences = 3, $asArray = false) {
	
	function krank_keyword_count_sort($first, $sec) {
		return $sec[1] - $first[1];
	}
	
	$str = preg_replace('/[^\p{L}0-9 ]/', ' ', $str);
	$str = trim(preg_replace('/\s+/', ' ', $str));
 
	$words = explode(' ', $str);
	$keywords = array();
	
	while(($c_word = array_shift($words)) !== null) {
		if(strlen($c_word) < $minWordLen) continue;
 
		$c_word = strtolower($c_word);
		if(array_key_exists($c_word, $keywords)) $keywords[$c_word][1]++;
		else $keywords[$c_word] = array($c_word, 1);
	}
	
	usort($keywords, 'krank_keyword_count_sort');
 
	$final_keywords = array();
	foreach($keywords as $keyword_det) {
		if($keyword_det[1] < $minWordOccurrences) break;
		array_push($final_keywords, $keyword_det[0]);
	}
	return $asArray ? $final_keywords : implode(', ', $final_keywords);
}