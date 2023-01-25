<?php

$field_first_name = $_POST['first'];
$field_last_nanme = $_POST['last'];
$field_email = $_POST['email'];
$field_semester = $_POST['semester'];
$field_visa = $_POST['visa'];
$field_message = $_POST['message'];

$mail_to = 'masters-econ@umd.edu';

$subject = 'MS Applied Economics Information Request'.$field_first;

$body_message = 'Potential Applicant First Name: '.$field_first."\n";

$body_message = 'Potential Applicant Last Name: '.$field_last."\n";

$body_message .= 'Potential Applicant E-mail: '.$field_email."\n";

$body_message .= 'Desired Program Semester: '.$field_semester."\n";

$body_message .= 'F1 Visa Sponsorship Needed: '.$field_visa."\n";

$body_message .= 'Message and Questions: '.$field_message."\n";

$headers = 'From: '.$field_email."\r\n";

$headers .= 'Reply-To: '.$field_email."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);


if ($mail_status) { ?>
	<script language="javascript" type="text/javascript">
		//alert('Thank you for the message. We will contact you shortly.');
		window.location = 'masters-in-applied-economics.html';
	</script>
<?php
}
else { ?>
	<script language="javascript" type="text/javascript">
		//alert('Message failed. Please, send an email to gordon@template-help.com');
		window.location = 'masters-in-applied-economics.html';
	</script>
<?php
}
?>