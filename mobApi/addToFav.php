<?php

include 'dbConnect.php';

$businessId = $_POST['businessId'];
$userId = $_POST['userId'];



$query = "select * from FAV_BUSINESS where FAV_BUSINESS.UserId = $userId and FAV_BUSINESS.BusinessId = $businessId";
        
$result = mysqli_query($link, $query);

$row = mysqli_fetch_assoc($result);
if(!isset($row))
{
$query = "INSERT INTO FAV_BUSINESS(id, UserId, BusinessId) VALUES (null,$userId,$businessId)";        
$result = mysqli_query($link, $query);
}
else
    echo 0;


