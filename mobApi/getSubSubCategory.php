<?php

include 'dbConnect.php';

$subCategoryId = $_POST['subCategoryId'];


$query = "select id as SubSubCategoryId, Name as SubSubCategoryName, Icon as SubSubCategoryIcon, Sub_category as SubCategoryId from SUB_SUB_CATEGORY  "
        . "where Sub_category=$subCategoryId order by Name asc";
$result = mysqli_query($link, $query);
$rows = array();
while($row = mysqli_fetch_assoc($result)){
 $rows [] = $row;   
}

echo json_encode($rows, JSON_UNESCAPED_SLASHES);

