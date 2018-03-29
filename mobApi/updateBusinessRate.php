<?php

include 'dbConnect.php';

$businessId = 18;


$query = "select avg(BUSINESS_FEEDBACK.FeedbackRate) as AverageRate, COUNT(*) as RowCount from BUSINESS_FEEDBACK WHERE BUSINESS_FEEDBACK.BusinessId = $businessId";
$result = mysqli_query($link, $query);

$row = mysqli_fetch_array($result);
$avgRate = $row['AverageRate'];
$rowcount = $row['RowCount'];


echo $avgRate."  ".$rowcount;