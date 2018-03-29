<?php

include 'dbConnect.php';

$productId = $_POST['productId'];


$query = "Select 
PRODUCT_IMAGE.Image as URL

From
PRODUCT_IMAGE
Where 
PRODUCT_IMAGE.ProductId = $productId";        
$result = mysqli_query($link, $query);
$rows = array();
while($row = mysqli_fetch_assoc($result)){
 $rows [] = $row;   
}

echo json_encode($rows, JSON_UNESCAPED_SLASHES);