<?php

$first = $_POST['first'];
$last = $_POST['last'];
$email = $_POST['email'];
$semester = $_POST['semester'];
$visa = $_POST['visa'];
$message = $_POST['message'];

$mail_to = 'masters-econ@umd.edu';

$subject = 'MS Applied Economics Information Request'.$first;

$body_message = 'Potential Applicant First Name: '.$first."\n";

$body_message = 'Potential Applicant Last Name: '.$last."\n";

$body_message .= 'Potential Applicant E-mail: '.$email."\n";

$body_message .= 'Desired Program Semester: '.$semester."\n";

$body_message .= 'F1 Visa Sponsorship Needed: '.$visa."\n";

$body_message .= 'Message and Questions: '.$message."\n";

$headers = 'From: '.$email."\r\n";

$headers .= 'Reply-To: '.$email."\r\n";

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