<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$Visitor_phone_number = $_POST['phone'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'hello@titasganguly.tech';
$email_subject = 'New From Submission';

$email_body = "User Name:$name.\n".
"User email:$visitor_email.\n".
"User Phone Number:$Visitor_phone_number.\n".
"Subject:$subject.\n".
"Message:$message.\n";
$to = 'hello@titasganguly.tech';
$headers = "From: $email_from \r\n";
$headers .="Reply-To: $visitor_email \r\n";
mail($to,$email_subject,$email_body,$headers);
header("Location:../contact.html");
?>