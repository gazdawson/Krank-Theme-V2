<?php
/**
 * Template Name: Options Print
 * @package Krank Theme
 */
?>
<dl>
<?php
foreach($krank as $key => $value):
	if (is_array($value)) {
		echo '<dt>'.$key.'</dt><dd>';
		print_r($value);
		echo '</dd><hr />';
	}
	else {
		echo '<dt>'.$key.'</dt><dd>'.$value.'</dd><hr />';
	}
endforeach;
?>
</dl>


