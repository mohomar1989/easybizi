<?php
require 'sendgrid-php/vendor/autoload.php';


include 'dbConnect.php';


$email = $_POST['email'];
$password;
$username;

$query = "select USER.Username, USER.Password from USER where USER.Email='$email'";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_assoc($result);


if(isset($row))
{
$password = $row['Password'];
$username = $row['Username'];




$emailSubject = "EasyBizi Froget Password";



$toEmail = $email;

$emailBody = "Hi,<br><br>You recently requested to get your password for your account, below are the account details:"
        . "<br><br>Username : $username <br> Password : $password";
$from = new \SendGrid\Email("EasyBizi Mob App", "admin@easybizi.ae");

$to = new \SendGrid\Email("", $toEmail);
$content = new \SendGrid\Content("text/html", $emailBody);
$mail = new \SendGrid\Mail($from, $emailSubject, $to, $content);


$sg = new \SendGrid("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");


$response = $sg->client->mail()->send()->post($mail);
echo $response->statusCode();
print_r($response->headers());
echo $response->body(); 

}

 else {
     echo 0;
    
}
