<?php

include'dbConnect.php';

$businessId = $_POST['id'];

$query = "select DISTINCT concat(MAIN_CATEGORY.Name,'-',SUB_CATEGORY.Name,'-',SUB_SUB_CATEGORY.Name) as Name, SUB_SUB_CATEGORY.Id as id 
from MAIN_CATEGORY,SUB_CATEGORY,BUSINESS_SUBSUBCATEGORY,SUB_SUB_CATEGORY WHERE 
BUSINESS_SUBSUBCATEGORY.BusinessId =$businessId 
and SUB_CATEGORY.MainCategory = MAIN_CATEGORY.id  
and BUSINESS_SUBSUBCATEGORY.SubSubCategoryId = SUB_SUB_CATEGORY.id 
and SUB_SUB_CATEGORY.Sub_category = SUB_CATEGORY.id";
$rows = array();
$result = mysqli_query($link, $query);
while($row = mysqli_fetch_assoc($result))
{
    $rows [] = $row;
}

echo json_encode($rows,JSON_UNESCAPED_SLASHES);
