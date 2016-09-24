<?php
if (isset($_POST['send'])) {
	$to = 'loveneverfails.kuo@gmail.com';
	$subject = 'Contact from Bear Garden Website';

	$message = 'Name: '.$_POST['name']."\r\n\r\n";
	$message = 'Email: '.$_POST['email']."\r\n\r\n";
	$message = 'Phone Number: '.$_POST['number']."\r\n\r\n";
	$message = 'Message: '.$_POST['message'];

	$headers = "From: beargarden4kids@gmail.com\r\n";
	$headers .= 'Content-Type: text/plain; charset=utf-8';

	$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
	if ($email) {
		$headers .= "\r\nReply-To: $email";
	}

	$success = mail($to, $subject, $message, $headers, 'beargarden4kids@gmail.com');
}
?>