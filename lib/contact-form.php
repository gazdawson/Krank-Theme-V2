<?php
/**
 * Krank Contact Form
 * @package Krank
*/

// function to get the IP address of the user
function contact_form_get_the_ip() {
	if (isset($_SERVER["HTTP_X_FORWARDED_FOR"])) {
		return $_SERVER["HTTP_X_FORWARDED_FOR"];
	}
	elseif (isset($_SERVER["HTTP_CLIENT_IP"])) {
		return $_SERVER["HTTP_CLIENT_IP"];
	}
	else {
		return $_SERVER["REMOTE_ADDR"];
	}
}

// the shortcode
function contact_form_sc($atts) {
	extract(shortcode_atts(array(
		"title" => '',
		"email" => get_bloginfo('admin_email'),
		"subject" => '',
		"label_name" => 'Full Name*',
		"label_number" => 'Contact Number*',
		"label_email" => 'E-mail*',
		"label_subject" => 'Subject',
		"label_message" => 'Message',
		"label_submit" => 'Send Message',
		"error_empty" => 'Please fill in all the required fields.',
		"error_noemail" => 'Please enter a valid e-mail address.',
		"success" => 'Thanks for your e-mail! We\'ll get back to you as soon as we can.'
	), $atts));

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$error = false;
		$required_fields = array("your_name", "your_number", "email");

		foreach ($_POST as $field => $value) {
			if (get_magic_quotes_gpc()) {
				$value = stripslashes($value);
			}
			$form_data[$field] = strip_tags($value);
		}

		foreach ($required_fields as $required_field) {
			$value = trim($form_data[$required_field]);
			if(empty($value)) {
				$error = true;
				$result = $error_empty;
			}
		}

		if(!is_email($form_data['email'])) {
			$error = true;
			$result = $error_noemail;
		}

		if ($error == false) {
			$email_subject = "[" . get_bloginfo('name') . "] " . $form_data['subject'];
			$email_message = $form_data['your_number'] . $form_data['message'] . "\n\nIP: " . contact_form_get_the_ip();
			$headers  = "From: ".$form_data['your_name']." <".$form_data['email'].">\n";
			$headers .= "Content-Type: text/plain; charset=UTF-8\n";
			$headers .= "Content-Transfer-Encoding: 8bit\n";
			wp_mail($email, $email_subject, $email_message, $headers);
			$result = $success;
			$sent = true;
		}
	}

	if($result == $success) {
		$info = '<div class="contact-form-info success"><i class="fa fa-check-circle"></i> '.$result.'</div>';
	}
	if($result == $error_empty || $result == $error_noemail) {
		$info = '<div class="contact-form-info error"><i class="fa fa-exclamation-circle"></i> '.$result.'</div>';
	}
	
	if($title != '') {
		$form_title = '<h3>'.$title.'</h3>';
	}
	
	$email_form = 
		$form_title.
		'<form role="form" class="contact-form" method="post" action="'.get_permalink().'">
		<div class="contact-fields">
			<input class="form-control" type="text" name="your_name" id="cf_name" size="50" maxlength="50" placeholder="'.$label_name.'" value="'.$form_data['your_name'].'" />
			<input class="form-control" type="email" name="email" id="cf_email" size="50" maxlength="50" placeholder="'.$label_email.'" value="'.$form_data['email'].'" />
			<input class="form-control" type="text" name="your_number" id="cf_number" size="50" maxlength="50" placeholder="'.$label_number.'" value="'.$form_data['your_number'].'" />
			<input class="form-control" type="text" name="subject" id="cf_subject" size="50" maxlength="50" placeholder="'.$label_subject.'" value="'.$subject.$form_data['subject'].'" />
			<textarea class="form-control" name="message" id="cf_message" cols="50" rows="15" placeholder="'.$label_message.'">'.$form_data['message'].'</textarea>
		</div>
		<div class="contact-submit">
			<button class="btn" type="submit" name="send" id="cf_send">'.$label_submit.'</button>
		</div>
	</form>';
	
	if($sent == true) {
		return $info;
	} else {
		return $info.$email_form;
	}
} add_shortcode('contact-form', 'contact_form_sc');