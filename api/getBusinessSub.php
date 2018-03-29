<?php

include'dbConnect.php';

$businessId = $_POST['id'];

$query = "select DISTINCT concat(MAIN_CATEGORY.Name,'-',SUB_CATEGORY.Name) as Name"
        . "  from MAIN_CATEGORY,SUB_CATEGORY,BUSINESS_SUBCATEGORY"
        . " WHERE BUSINESS_SUBCATEGORY.BusinessId =$businessId "
        . "and SUB_CATEGORY.MainCategory = MAIN_CATEGORY.id "
        . "and BUSINESS_SUBCATEGORY.SubCategoryId = SUB_CATEGORY.id";

$rows = array();
$result = mysqli_query($link, $query);
while($row = mysqli_fetch_assoc($result))
{
    $rows [] = $row;
}

echo json_encode($rows,JSON_UNESCAPED_SLASHES);
