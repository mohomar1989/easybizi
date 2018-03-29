<?php

include'dbConnect.php';

$businessId = 60;//$_POST['businessId'];
$query = "SELECT id,Title,Price,Thumbnail from PRODUCT ";

$result = mysqli_query($link, $query);

$rows = array();

while($row = mysqli_fetch_assoc($result))
        $rows [] = $row;

$final = new \stdClass();
$final->rows = $rows;
echo json_encode($final,JSON_UNESCAPED_SLASHES);


