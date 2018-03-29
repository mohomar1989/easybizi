<?php

$servername = "5.30.239.157";
$username = "j0qvbg2o_admin";
$password = "Intheend11!";
$dbName = "j0qvbg2o_EASY_BIZI";

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