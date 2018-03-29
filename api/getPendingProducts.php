<?php

include'dbConnect.php';

$businessId = 60;//$_POST['businessId'];
$query = "SELECT id,Title,Price,Thumbnail from PRODUCT where BusinessId=$businessId and IsActive=0";

$result = mysqli_query($link, $query);

$rows = array();

while($row = mysqli_fetch_assoc($result))
        $rows [] = $row;

echo json_encode($rowss,JSON_UNESCAPED_SLASHES);


