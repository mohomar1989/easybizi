<?php

include'dbConnect.php';

$id = $_POST['productId'];
$price = $_POST['productPrice'];
$title = $_POST['productTitle'];
$paymentMethod = $_POST['paymentMethod'];
$available = $_POST['available'];
$desc = $_POST['desc'];

$desc = mysqli_real_escape_string($link,$desc);
$title = mysqli_real_escape_string($link,$title);

$query = "UPDATE PRODUCT SET  Title='$title', Price='$price', Description='$desc', Available='$available', PaymentMethod='$paymentMethod'
        where id=$id";


echo mysqli_query($link, $query);

