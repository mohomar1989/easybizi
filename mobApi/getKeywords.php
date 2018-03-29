<?php

include 'dbConnect.php';




$query = "SELECT KEYWORD.id as Id, KEYWORD.Keyword as Name from KEYWORD";
        
$result = mysqli_query($link, $query);
$rows = array();
while($row = mysqli_fetch_assoc($result)){
 $rows [] = $row;   
}

echo json_encode($rows, JSON_UNESCAPED_SLASHES);