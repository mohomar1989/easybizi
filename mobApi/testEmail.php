<?php
require 'sendgrid-php/vendor/autoload.php';



$companyName ="tes";// $_POST['companyName'];
$contactName = "test name";//$_POST['contactName'];
$companyEmail = "shamote.ali@me.com";//$_POST['companyEmail'];
$contactNumber = "0569009656";//$_POST['companyNumber'];
$emailSubject = "New Company Registration";

$mail = new SendGrid\Mail();
$sg = new \SendGrid("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");
$to = new SendGrid\Email($companyName, $companyEmail);
$emailBody = "New company has been registered through EasyiBizi mobile app. Below are the details:<br> "
        . "Company Name : $companyName<br>"
        . "Company Email : $companyEmail<br>"
        . "Contact Number : $contactNumber<br>"
        . "Contact Name : $contactName<br>"
        . "Kindly open the following link to login to your business profile http://business.easybizi.ae/";
$from = new \SendGrid\Email("EasyBizi Mob App", "info@easybizi.ae");
$ccEmail = new SendGrid\Email("EasyBizi Admin", "info@appsolutesolutions.ae");
$bccEmail = new SendGrid\Email("Appsolute", "mohammed.omar@appsolutesolutions.ae");
$content = new \SendGrid\Content("text/html", $emailBody);
$mail->setFrom($from);
$mail ->setSubject($emailSubject);
$mail->addContent($content);
$pers = new SendGrid\Personalization();
$pers->addCc($ccEmail);
$pers->addBcc($bccEmail);
$pers->addTo($to);
$mail ->addPersonalization($pers);




$response = $sg->client->mail()->send()->post($mail);
echo $response->statusCode();
print_r($response->headers());
echo $response->body(); 
