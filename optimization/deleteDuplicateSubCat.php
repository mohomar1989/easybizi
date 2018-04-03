<?php

include ('../api/dbConnect.php');

$query = "DELETE s1 FROM BUSINESS_SUBCATEGORY s1 "
        ."INNER JOIN BUSINESS_SUBCATEGORY s2 "
        . "WHERE s1.BusinessId = s2.BusinessId and s1.SubCategoryId = s2.SubCategoryId and s1.Id>s2.Id";
echo $query;
mysqli_query($link, $query);
printf("Affected rows (DELETE): %d\n", mysqli_affected_rows($link));
