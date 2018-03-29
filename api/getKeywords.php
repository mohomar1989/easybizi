<?php

include'dbConnect.php';

$businessId = $_POST['id'];

$query = "select KEYWORD.Keyword as k  from BUSINESS_KEYWORD,KEYWORD where  BUSINESS_KEYWORD.BusinessId = $businessId and "
        . "BUSINESS_KEYWORD.KeywordId = KEYWORD.id";

$result = mysqli_query($link, $query);

$rows = array();
$return="";
while($row = mysqli_fetch_assoc($result))
$return = $return . $row['k'].",";

$return = rtrim($return,",");

echo $return ; 