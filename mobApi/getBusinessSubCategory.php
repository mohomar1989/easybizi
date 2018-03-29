<?php

include 'dbConnect.php';

$subCategoryId = $_POST['subCategoryId'];


$query = "Select DISTINCT "
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
        . " BUSINESS_SUBCATEGORY"
        . " where BUSINESS_SUBCATEGORY.SubCategoryId =$subCategoryId and BUSINESS.id = BUSINESS_SUBCATEGORY.BusinessId";
        
$result = mysqli_query($link, $query);
$rows = array();
while($row = mysqli_fetch_assoc($result)){
 $rows [] = $row;   
}

echo json_encode($rows, JSON_UNESCAPED_SLASHES);