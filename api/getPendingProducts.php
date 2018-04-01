<?php

include'dbConnect.php';

$businessId = $_GET['businessId'];
$query = "SELECT id,Title,Price,PaymentMethod,Description,Available from PRODUCT where isActive=0 and BusinessId=$businessId";

$result = mysqli_query($link, $query);

$rows = array();

while($row = mysqli_fetch_assoc($result))
        $rows [] = $row;

$final = new \stdClass();
$final->data = $rows;
echo json_encode($final,JSON_UNESCAPED_SLASHES);


