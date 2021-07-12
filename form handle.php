<?php

$name = $_POST['name']
$visitor_email = $_POST['email']
$subject = $_POST['subject']
$message = $_POST['message']

$email_from ='alphamon898@gmail.com'

$email_subject ='New form submission'

$email_body = "User Name: $name.\n".    
               "Email: $visitor_email.\n".
               "subject: $subject:\n".
               "User message: $message:\n";

$to = "omegamon898@gmail.com"

$headers ="From: $email_from \r\n";

$headers = "Reply-to: $visitor_email \r\n";


mail($to,$email_subject,$email_body,$headers)

header('Location: contact.htm')
               
?>