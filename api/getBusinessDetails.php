<?php

include'dbConnect.php';




$businessId = $_POST['id'];
$query = "select * from BUSINESS where id = $businessId";
$result  = mysqli_query($link, $query);

$row = mysqli_fetch_assoc($result);
echo json_encode($row,JSON_UNESCAPED_SLASHES);