<?php

include 'dbConnect.php';

$businessId = $_POST['businessId'];


$query = "Select 
PRODUCT.id as ProductId,
PRODUCT.Title as ProductTitle,
PRODUCT.Description as ProductDescription,
PRODUCT.Price as ProductPrice,
PRODUCT.Available as ProductAvailability,
PRODUCT.Thumbnail as ProductThmbnail
From
PRODUCT
Where 
PRODUCT.BusinessId = $businessId AND PRODUCT.IsActive = 1";        
$result = mysqli_query($link, $query);
$rows = array();
while($row = mysqli_fetch_assoc($result)){
 $rows [] = $row;   
}

echo json_encode($rows, JSON_UNESCAPED_SLASHES);