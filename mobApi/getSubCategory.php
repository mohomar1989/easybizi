<?php

include 'dbConnect.php';

$mainCategoryId = $_POST['mainCategoryId'];


$query = "select id as SubCategoryId, Name as SubCategoryName, Icon as SubCategoryIcon, MainCategory as MainCategoryId, hasChild as SubCategoryHasChildren from SUB_CATEGORY  "
        . "where MainCategory=$mainCategoryId order by Name asc";
$result = mysqli_query($link, $query);
$rows = array();
while($row = mysqli_fetch_assoc($result)){
 $rows [] = $row;   
}

echo json_encode($rows, JSON_UNESCAPED_SLASHES);

