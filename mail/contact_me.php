<?php
// Check for empty fields
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = $_POST['name'];
$email_address = $_POST['email'];
$message = $_POST['message'];
	
// Create the email and send the message
$to = 'sarang@batec-services.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$to2 = 'b.baier@batec-services.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$to3 = 'info@batec-services.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$to4 = 'apaliwal@batec-services.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.


$email_subject = "Website Contact Form:  $name";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nMessage:\n$message";
$headers = "From: info@batec-services.com \n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
mail($to2,$email_subject,$email_body,$headers);
mail($to3,$email_subject,$email_body,$headers);
mail($to4,$email_subject,$email_body,$headers);


return true;			
?>