<?php
$name = $_POST['name'];
$theirEmail = $_POST['theirEmail'];
$theirUni = $_POST['theirUni'];
$theirMessage = $_POST['theirMessage'];

$emailFrom = 'info@yourwebsite.com';
$emailSubject = "PGRiP Enquiry";
$emailBody = "Name: $name.\n"."Email: $theirEmail.\n"."Uni: $theirUni.\n"."Message: $theirMessage .\n";

$emailTo = 'thomas.burns19@imperial.ac.uk';

$header =  "From: $emailFrom \r\n";

$header .= "Reply-To: $theirEMail \r\n";


mail($emailTo, $emailSubject, $emailBody, $header)
header("Location: contact.html");  /* this redirects to same page once user sends their email */
?>