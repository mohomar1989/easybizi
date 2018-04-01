<?php

include 'dbConnect.php';


$id = $_POST['id'];
$q = "DELETE FROM PRODUCT where id=$id";

echo mysqli_query($link, $q);
