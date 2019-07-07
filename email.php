<?php 
//collecting form data
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$mail_subject= $_POST['subject'];
$message = $_POST['message'];
//composing th email
$email_from = 'postmaster@localhost';
$email_subject = "New Form submission: ".$mail_subject;
$email_body = "You have received a new message from the user $name.\n".
"Here is the message:\n $message".

//sending the mail
 $to = "postmaster@localhost";
 $headers = "From: $email_from \r\n";
 $headers .= "Reply-To: $visitor_email \r\n";
 mail($to,$email_subject,$email_body,$headers);


?>