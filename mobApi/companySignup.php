<?php

include 'dbConnect.php';

$companyName = $_POST['companyName'];
$companyEmail = $_POST['companyEmail'];
$companyNumber = $_POST['companyNumber'];
$companyPass = $_POST['companyPass'];
$contactName = $_POST['contactName'];




$query = "INSERT into BUSINESS (id, CompanyName, ContactName, ContactEmail, ContactNumber, Password) "
        . "VALUES"
        . "(NULL,'$companyName','$contactName','$companyEmail','$companyNumber','$companyPass')";
$result = mysqli_query($link, $query);

//echo $query;
$rows = mysqli_affected_rows($link);
if($rows<1)
    echo 0;
else
    echo 1;
mysqli_close($link);


