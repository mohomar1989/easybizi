<?php

include 'dbConnect.php';

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$nationality = $_POST['nationality'];
$birthdate = $_POST['birthdate'];
$username = $_POST['username'];
$password = $_POST['password'];



$query = "INSERT INTO "
        . "USER(`id`, `Username`, `Password`, `FirstName`, `LastName`, `Email`, `Gender`, `Birthdate`, `Nationality`) "
        . "VALUES"
        . "(NULL,"
        . "'$username',"
        . "'$password',"
        . "'$firstname',"
        . "'$lastname',"
        . "'$email',"
        . "'$gender',"
        . "'$birthdate',"
        . "'$nationality')";
$result = mysqli_query($link, $query);


$rows = mysqli_affected_rows($link);
if($rows<1)
    echo 0;
else
    echo 1;
mysqli_close($link);


