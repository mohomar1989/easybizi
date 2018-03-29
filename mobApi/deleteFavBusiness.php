<?php

include 'dbConnect.php';

$businessId = $_POST['businessId'];
$userId = $_POST['userId'];


$query = "DELETE FROM FAV_BUSINESS WHERE  FAV_BUSINESS.UserId = $userId and FAV_BUSINESS.BusinessId = $businessId";
$result = mysqli_query($link, $query);
