<?php

include 'dbConnect.php';

$userId = $_POST['userId'];


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
        . " BUSINESS.BusinessRating as BusinessRating"
        . " from FAV_BUSINESS,"
        . " BUSINESS,"
        . " USER"
        . " where FAV_BUSINESS.UserId =$userId and FAV_BUSINESS.BusinessId = BUSINESS.id and USER.id = FAV_BUSINESS.UserId";
        
$result = mysqli_query($link, $query);
$rows = array();
while($row = mysqli_fetch_assoc($result)){
 $rows [] = $row;   
}

echo json_encode($rows, JSON_UNESCAPED_SLASHES);