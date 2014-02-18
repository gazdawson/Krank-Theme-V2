<?php
/**
 * Krank Custom System Integrations
 * @package Krank
*/

// Page Meta
function krank_google_analytics() {
	global $krank;
	// get krnak options
	$ga_on = $krank['ga'];
	$ga_code = $krank['ga_code'];
	
	// if ga settings add code
	if ($ga_on == 1 && $ga_code) {
		$tracking =
		'<script>
		  (function(i,s,o,g,r,a,m){i[\'GoogleAnalyticsObject\']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,\'script\',\'//www.google-analytics.com/analytics.js\',\'ga\');
	  
		  ga(\'create\', \''.$ga_code.'\');
		  ga(\'send\', \'pageview\');
		</script><!--/ga tracking Code-->';
	}
	
	echo $tracking;
}
// Add new Krank GA to footer
add_action('wp_footer', 'krank_google_analytics');