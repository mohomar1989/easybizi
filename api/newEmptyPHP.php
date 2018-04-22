<?php

include 'dbConnect.php';

$link = mysqli_connect($servername, $username, $password, $dbName);
mysqli_set_charset($link, "utf8");



$q = "SELECT * FROM PRODUCT";

$result = mysqli_query($link, $q);

$finalREsult = array();

while($row = mysqli_fetch_assoc($result))
{
    $finalREsult [] = $row;
}

echo json_encode($finalREsult);
