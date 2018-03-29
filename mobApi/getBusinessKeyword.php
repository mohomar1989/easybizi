<?php

include 'dbConnect.php';

$keywordId = $_POST['keywordId'];


$query = "Select"
        . " BUSINESS.id as BusinessId,"
        . " BUSINESS.CompanyName as BusinessName,"
        . " BUSINESS.ContactEmail as BusinessContactEmail,"
        . " BUSINESS.ContactNumber as BusinessContactNumber,"
        . " BUSINESS.Whatsapp as BusinessWhatsapp,"
        . " BUSINESS.Instagram as BusinessInstagram,"
        . " BUSINESS.Location as BusinessLocation,"
        . " BUSINESS.Website as BusinessWebsite,"
        . " BUSINESS.Logo as BusinessLogo,"
        . " BUSINESS.About as BusinessAbout,"
        . " BUSINESS.BusinessRating as BusinessRating,"
        . " CONCAT(BUSINESS.CompanyCountry,', ',BUSINESS.CompanyCity) as BusinessLocationName"
        . " from BUSINESS,"
        . " BUSINESS_KEYWORD,"
        . " KEYWORD"
        . " where BUSINESS_KEYWORD.KeywordId =$keywordId and BUSINESS_KEYWORD.BusinessId = BUSINESS.id"
        . " and KEYWORD.id = BUSINESS_KEYWORD.KeywordId";
             
$result = mysqli_query($link, $query);
$rows = array();
while($row = mysqli_fetch_assoc($result)){
 $rows [] = $row;   
}

echo json_encode($rows, JSON_UNESCAPED_SLASHES);