<?php
$name = $_POST['name'];
$Visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message= $_POST['message'];


$email_from ='hipowebsite.com';
$email_subject ='New Form Submission';
$email_body ="User Name: $name. /n"
             "user email: $Visitor_email. /n"
             "subject: $subject. /n"
             "user_message: $message. /n";

$to = 'mhipolito957@gmail.com';
$headers =   " from $email_from r\n\";
$headers .= "Reply-to: $Visitor_email";          

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");

?>