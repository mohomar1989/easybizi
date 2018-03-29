<?php

include'dbConnect.php';


$businessId = $_POST['businessId'];
$title = $_POST['title'];
$price = $_POST['price'];
$desc = $_POST['desc'];
$paymentMethod = $_POST['paymentMethod'];
$availability = $_POST['availability'];

$title = mysqli_real_escape_string($link,$title);
$desc = mysqli_real_escape_string($link,$desc);
$paymentMethod = mysqli_real_escape_string($link,$paymentMethod);
$availability = mysqli_real_escape_string($link,$availability);




$query = "INSERT INTO PRODUCT (id,Title,Price,BusinessId,Available,PaymentMethod,Description) "
        . "VALUES (NULL,'$title','$price',$businessId,'$availability','$paymentMethod','$desc')";

 mysqli_query($link, $query);
 $productId = mysqli_insert_id($link);
if($productId != 0)
{
     

    $fileCount = count($_FILES['productImages']['name']);
    for($i = 0 ; $i<$fileCount ; $i++)
    {
        
        
        $fileName = uniqid() . $_FILES['productImages']['name'][$i];
        $tempName = $_FILES['productImages']['tmp_name'][$i];
        move_uploaded_file($tempName, "../uploads/" . $fileName);
        $imgUrl = "http://business.easybizi.ae/uploads/" . $fileName;
        $q1 = "INSERT INTO PRODUCT_IMAGE (id,ProductId,Image) "
                . "VALUES (NULL,$productId,'$imgUrl')";
        
        mysqli_query($link, $q1);
        
        if($i==0)
        {
            $q2 = "UPDATE PRODUCT SET Thumbnail='$imgUrl' WHERE id=$productId";
            mysqli_query($link, $q2);
            
        }

 
    }
}


