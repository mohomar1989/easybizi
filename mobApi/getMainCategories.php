<?php

include 'dbConnect.php';


$query = "select id as CategoryId, Name as CategoryName, Icon as CategoryIcon from MAIN_CATEGORY order by Name asc";
$result = mysqli_query($link, $query);
$rows = array();
while($row = mysqli_fetch_assoc($result)){
 $rows [] = $row;   
}

echo json_encode($rows, JSON_UNESCAPED_SLASHES);

