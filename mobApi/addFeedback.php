<?php

include 'dbConnect.php';


$businessId = $_POST['businessId'];
$userId = $_POST['userId'];
$feedbackText = $_POST['feedbackText'];
$feedbackRate = $_POST['feedbackRate'];



$query = "INSERT INTO BUSINESS_FEEDBACK(Id, UserId, BusinessId,FeedbackText, FeedbackRate) VALUES"
        . " (null,$userId,$businessId,'$feedbackText',$feedbackRate)";        
$result = mysqli_query($link, $query);

$query = "select avg(BUSINESS_FEEDBACK.FeedbackRate) as AverageRate, COUNT(*) as RowCount from BUSINESS_FEEDBACK WHERE BUSINESS_FEEDBACK.BusinessId = $businessId";
$result = mysqli_query($link, $query);

$row = mysqli_fetch_array($result);
$avgRate = $row['AverageRate'];
$rowcount = $row['RowCount'];



$query = "UPDATE BUSINESS SET BusinessRating='$avgRate' where id=$businessId";

mysqli_query($link, $query);









