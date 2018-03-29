<?php
session_start();
if(isset($_SESSION['login_user']))
unset($_SESSION['login_user']);  //Is Used To Destroy Specified Session

header( "Location: ../Index.php" );