<?php
$field_name = $_POST['name'];
$field_email = $_POST['email'];
$field_number = $_POST['number'];
$field_message = $_POST['message'];

$to = 'esther@beargarden4kids.com';
$subject = 'Message from a site visitor '.$field_name;

$body_message = 'From: '.$field_name."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'Phone number: '.$field_number."\n";
$body_message .= 'Message: '.$field_message;

$headers .= "\r\nReply-To: $field_email";

if(isset($_POST['url']) && $_POST['url'] == ''){

	if(!($_POST['email'] && !preg_match( "/[\r\n]/", $_POST['email'])) ) {
	  $headers = "From: $youremail";
	}

	$mail_status = mail($to, $subject, $body_message, $headers);
} ?>

<?php
if($mail_status) { ?>
	<script language="javascript" type="text/javascript">
		alert('Thank you for the message. We will contact you shortly.');
		window.location = 'index.html';
	</script>
<?php
}
else { ?>
	<script language="javascript" type="text/javascript">
		alert('Message failed. Please, send an email to loveneverfails.kuo@gmail.com');
		window.location = 'index.html';
	</script>
<?php
}
?>