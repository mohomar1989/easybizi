<?php
session_start();


include'dbConnect.php';

$_email =$_POST['email'];
$_email = strtolower($_email);
$_password =$_POST['password'];
$_email = mysqli_real_escape_string($link,$_email);
$_password = mysqli_real_escape_string($link,$_password);

$query = "select id from BUSINESS where ContactEmail='$_email' and Password='$_password' ";
//$stmt = mysqli_prepare($link, $query);
//mysqli_stmt_bind_param($stmt, 'ss', $_email,$_password);
//
// mysqli_stmt_execute($stmt);

$result = mysqli_query($link, $query);
$row = mysqli_fetch_assoc($result);
if(isset($row))
{
$_SESSION['login_user']=$row['id'];
echo json_encode($row);

}
        
