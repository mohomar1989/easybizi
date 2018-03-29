<?php

include 'dbConnect.php';

$_username = $_POST['username'];
$_password = $_POST['password'];


$query = "Select 
id as Id,
Username,
FirstName,
LastName,
Email
From
USER
where Username='$_username' and Password='$_password'";        
$result = mysqli_query($link, $query);
$rows = array();
$row = mysqli_fetch_assoc($result);
if(isset($row))
echo json_encode($row, JSON_UNESCAPED_SLASHES);
else
    echo 0;