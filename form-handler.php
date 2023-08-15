<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'euniversity0.gmail.com';

$email_subject = 'Recent Form Submission'

$email_body = "User Name: $name.\n".
               "User Email: $visitor_email.\n".
               "Subject: $visitor_email.\n".
               "User Message:$message.\n".


$to = 'shanya0@gmail.com';

$headers = "Form: $email_form \r\n";

$headers = "Reply-To: $visitors_email \r\n";


mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");

?>
