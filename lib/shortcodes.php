<?php
/**
 * Krank Custom Shortcodes
 * @package Krank
*/

// Krank Shortcodes
add_shortcode('address', 'krank_address');
add_shortcode('contact', 'krank_contact');
add_shortcode('open-hours', 'krank_open_hours');

// Address shortcode [address title="Test Title"]
function krank_address( $atts ) {
	global $krank;
	$krank_opt = $krank['address'];
	// Extract title variable	
	extract( shortcode_atts( array(
	   'title' => '',
	), $atts));

	if( $title ) {
		$address_title = '<h4>'.$title.'</h4>';
	}
	// Business Name
	if( $krank['name'] ) {
		$business_name = $krank['name'];
	}
	// Address Loop
	foreach( $krank_opt as $key => $value ) {
		if( $value ) {
			$address_lines .= '<li>'.$value.'</li>';
		}
	}
	// Address HTML
	$address = 
		'<div class="short-address">'.
			$address_title.
			'<ul class="address">
				<li class="name">'.$business_name.'</li>'.
				$address_lines.
			'</ul>
		</div>';
				
	// Return Output
	return $address;
}

// Contact shortcode [contact title="Test Title"]
function krank_contact( $atts ) {
	global $krank;
	$krank_opt = $krank['contact'];
	// Extract title variable	
	extract( shortcode_atts( array(
	   'title' => '',
	), $atts));

	if( $title ) {
		$contact_title = '<h4>'.$title.'</h4>';
	}
	foreach( $krank_opt as $key => $value ) {
		if( $key == 'email') {
			$contact_dd = '<dd><a href="mailto:'.$value.'">'.$value.'</a></dd>';
		}
		elseif( $key == 'telephone' || $key == 'mobile' ) {
			$contact_dd = '<dd><a href="tel:'.$value.'">'.$value.'</a></dd>';
		}
		else {
			$contact_dd = '<dd>'.$value.'</dd>';
		}
		$contact_lines .= '<dt><abbr title="'.ucFirst($key).'">'.substr($key,0,1).'</abbr></dt>'.$contact_dd;
	}
	
	// Address HTML
	$contact = 
		'<div class="short-contact">'.
			$contact_title.
			'<dl class="contact">'.
				$contact_lines.
			'</dl>
		</div>';
				
	// Return Output
	return $contact;
}

// Open Hours shortcode [open-hours title="Test Title"]
function krank_open_hours( $atts ) {
	global $krank;
	$krank_opt = $krank['open'];
	// Extract title variable	
	extract( shortcode_atts( array(
	   'title' => '',
	), $atts));

	if( $title ) {
		$open_title = '<h4>'.$title.'</h4>';
	}
	foreach( $krank_opt as $key => $value ) {
		$open_hours .= '<dt>'.$key.'</dt><dd>'.$value.'</dd>';
	}
	
	// Address HTML
	$openings = 
		'<div class="short-open">'.
			$open_title.
			'<dl class="open-hours">'.
				$open_hours.
			'</dl>
		</div>';
				
	// Return Output
	return $openings;
}