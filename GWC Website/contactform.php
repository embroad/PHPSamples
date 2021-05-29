<?php
// Put your name and year of graduation here! //
// Emily Broad, class of 2022 //
// When someone edits this file, they will add their name too. //

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent="From: $name \n Message: $message";
$recipient = ""; // make sure to have it forwarding to a club member, but send emails back with the account //
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Sorry, there's been an error!");
echo "Thank you for reaching out!";
?>
