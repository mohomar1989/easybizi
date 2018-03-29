<?php

include'dbConnect.php';

$query = "select SUB_CATEGORY.id,concat(MAIN_CATEGORY.Name,'-',SUB_CATEGORY.Name) as Name "
        . "from SUB_CATEGORY,MAIN_CATEGORY"
        . " where hasChild=0 and SUB_CATEGORY.MainCategory=MAIN_CATEGORY.id";

$result = mysqli_query($link,$query);
$rows = array();
while($row = mysqli_fetch_assoc($result))
{
    $rows [] = $row;
}

echo json_encode($rows,JSON_UNESCAPED_SLASHES);



