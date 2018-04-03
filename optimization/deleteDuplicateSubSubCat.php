<?php

include ('../api/dbConnect.php');

$query = "DELETE s1 FROM BUSINESS_SUBSUBCATEGORY s1 "
        ."INNER JOIN BUSINESS_SUBSUBCATEGORY s2 "
        . "WHERE s1.BusinessId = s2.BusinessId and s1.SubSubCategoryId = s2.SubSubCategoryId and s1.Id>s2.Id";
echo $query;
mysqli_query($link, $query);

printf("Affected rows (DELETE): %d\n", mysqli_affected_rows($link));

