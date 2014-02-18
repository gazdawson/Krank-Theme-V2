<?php
	// krank_carousel($slide_type, $id, $controls, $indicators, $captions, $trans)
	if ($krank['home_slides_switch'] == 1) {
		krank_carousel('home_slides', 'home-carousel', true, true, true, 'fade'); 
	}
?>
	
<?php get_template_part('templates/page', 'header'); ?>
<?php get_template_part('templates/content', 'page'); ?>
