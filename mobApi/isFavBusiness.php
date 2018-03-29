<?php

include 'dbConnect.php';

$businessId = $_POST['businessId'];
$userId = $_POST['userId'];


$query = "select * from FAV_BUSINESS where FAV_BUSINESS.UserId = 3 and FAV_BUSINESS.BusinessId = 3";
        
$result = mysqli_query($link, $query);

$row = mysqli_fetch_assoc($result);
if(isset($row))
    echo 1;
else
    echo 0;