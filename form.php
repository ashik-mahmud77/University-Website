<?php
$name = $_POST['name']
$visitor_email = $_POST['email']
$subject = $_POST['subject']
$visitor_message = $_POST['message']

$email_form ='skashik1995@gmail.com'
$email_subject = 'new form submisson'
$email_body = "User Name: $name.\n".
             "User Email: $visitor_email.\n".
             "Subject: $aubject.\n".
             "Message: $message.\n";

$to = 'skashik1995@gmail.com';

$header = "Form: $email_form \r \n";
$header = "Reply-to: $visitor_email \r \n";

mail($to, $email_subject, $email_body, $header)
header("location: Contact.html")
?>