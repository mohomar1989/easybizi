<?php

include 'dbConnect.php';

$userId = $_POST['userId'];
$businessId = $_POST['businessId'];


$query = "Select FeedbackText, FeedbackRate FROM BUSINESS_FEEDBACK where BusinessId = $businessId order by DateAdded desc";
        
$result = mysqli_query($link, $query);
$rows = array();
while($row = mysqli_fetch_assoc($result)){
 $rows [] = $row;   
}

echo json_encode($rows, JSON_UNESCAPED_SLASHES);