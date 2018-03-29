<?php
require 'sendgrid-php/vendor/autoload.php';



$emailBody = $_POST['body'];
$rating  = $_POST['rating'];
$emailSubject = "EasyBizi Feedback";



$toEmail = "amnaali777@gmail.com";

$emailBody = "Customer rated the app with $rating/5 <br> The customer feedback as follows :<br>".$emailBody;
$from = new \SendGrid\Email("EasyBizi Mob App", "admin@easybizi.ae");

$to = new \SendGrid\Email("", $toEmail);
$content = new \SendGrid\Content("text/html", $emailBody);
$mail = new \SendGrid\Mail($from, $emailSubject, $to, $content);


$sg = new \SendGrid("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");


$response = $sg->client->mail()->send()->post($mail);
echo $response->statusCode();
print_r($response->headers());
echo $response->body(); 
