<?php

include 'dbConnect.php';



$query = "Select"
        . " BUSINESS.id as BusinessId,"
        . " BUSINESS.CompanyName as BusinessName,"
        . " BUSINESS.ContactEmail as BusinessContactEmail,"
        . " BUSINESS.ContactNumber as BusinessContactNumber,"
        . " BUSINESS.Whatsapp as BusinessWhatsapp,"
        . " BUSINESS.Instagram as BusinessInstagram,"
        . " BUSINESS.Location as BusinessLocation,"
        . " BUSINESS.Website as BusinessWebsite,"
        . " CONCAT(BUSINESS.CompanyCountry,', ',BUSINESS.CompanyCity) as BusinessLocationName," 
        . " BUSINESS.Logo as BusinessLogo,"
        . " BUSINESS.About as BusinessAbout,"
        . " BUSINESS.BusinessRating as BusinessRating,"
        . " BANNER_BUSINESS.Image"
        . " from BUSINESS,"
        . " BANNER_BUSINESS"
        . " where BANNER_BUSINESS.BusinessId = BUSINESS.id";
        
$result = mysqli_query($link, $query);
$rows = array();
while($row = mysqli_fetch_assoc($result)){
 $rows [] = $row;   
}

echo json_encode($rows, JSON_UNESCAPED_SLASHES);