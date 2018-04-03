<?php

include ('../api/dbConnect.php');

$query = "SELECT id FROM KEYWORD";

$result = mysqli_query($link, $query);

$keywords ;
while ($row = mysqli_fetch_row($result))
        $keywords [] = $row[0];

$query2 = "SELECT KeywordId FROM BUSINESS_KEYWORD";
$result2 = mysqli_query($link, $query2);
$businessKeywords;
while($row = mysqli_fetch_row($result2))
        $businessKeywords [] = $row[0];

   
    $mix = array_diff($keywords, $businessKeywords);
   
    foreach($mix as $kid)
    {
        $q = "DELETE FROM KEYWORD WHERE id = $kid";
        mysqli_query($link, $q);
    }
  echo "Deleted keywords are:<br>";
  print_r($mix);
    
    
    
    