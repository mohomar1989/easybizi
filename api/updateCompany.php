<?php

include'dbConnect.php';

$businessId = $_POST['businessId'];
$companyNumber=$_POST['companyNumber'];
$companyAbout=$_POST['companyAbout'];
$companyWhatsapp=$_POST['companyWhatsapp'];
$companyLocation=$_POST['companyLocation'];
$companyInstagram=$_POST['companyInstagram'];
$companyKeyword=$_POST['companyKeyword'];
$companyCountry=$_POST['companyCountry'];
$companyWebsite=$_POST['companyWebsite'];
$companyCity=$_POST['companyCity'];
$subcats = $_POST['sub'];
$subsubcats = $_POST['subsub'];
$companyAbout = mysqli_real_escape_string($link,$companyAbout);


if(isset($_FILES['logo']))
{
$fileName = $_FILES['logo']['name'];
$fileName = uniqid().$fileName;
$tempNAme = $_FILES['logo']['tmp_name'];
move_uploaded_file($tempNAme, "../uploads/".$fileName);
$logo_url = "http://business.easybizi.ae/uploads/".$fileName;

$query = "UPDATE `BUSINESS` SET "
    
       
        . "ContactNumber='$companyNumber',"
        . "Whatsapp='$companyWhatsapp',"
        . "Instagram='$companyInstagram',"
        . "Location='$companyLocation',"
        . "Website='$companyWebsite',"
        . "Logo='$logo_url',"
        . "About='$companyAbout',"
        . "CompanyCountry='$companyCountry',"
        . "CompanyCity='$companyCity' WHERE id=$businessId";

}
else
    
{
    $query = "UPDATE `BUSINESS` SET "
        . "ContactNumber='$companyNumber',"
        . "Whatsapp='$companyWhatsapp',"
        . "Instagram='$companyInstagram',"
        . "Location='$companyLocation',"
        . "Website='$companyWebsite',"
        . "About='$companyAbout',"
        . "CompanyCountry='$companyCountry',"
        . "CompanyCity='$companyCity' WHERE id=$businessId";
    
}



mysqli_query($link, $query);

if(isset($subcats))
foreach($subcats as $subId)
{
    
$query = "INSERT INTO BUSINESS_SUBCATEGORY (Id,BusinessId,SubCategoryId) VALUES (NULL,$businessId,$subId)";
mysqli_query($link, $query);
}

if(isset($subsubcats))
foreach($subsubcats as $subsubId)
{
    
$query = "INSERT INTO BUSINESS_SUBSUBCATEGORY (Id,BusinessId,SubSubCategoryId) VALUES (NULL,$businessId,$subsubId)";
mysqli_query($link, $query);
}




$var = explode(",",$companyKeyword);
$query = "SELECT * FROM KEYWORD";
$result = mysqli_query($link, $query);
$keywords = array();
while ($row = mysqli_fetch_assoc($result))
{
    $keywords [] = $row;
}

foreach($var as $keyword)
{
    if(containskeyword($keyword,$keywords))
    continue;
    else
    {
        $query = "INSERT INTO KEYWORD (id,Keyword) VALUES(NULL,'$keyword')";
        mysqli_query($link, $query);
        
    } 
}

$toAdd="";
foreach($var as $value)
{
    $toAdd=$toAdd."'$value',";
}
$toAdd = rtrim($toAdd,",");
$query = "SELECT * FROM KEYWORD where Keyword in ($toAdd)";
$result = mysqli_query($link, $query);
$keywords = array();
while ($row = mysqli_fetch_assoc($result))
{
    $keywords [] = $row;
}


$q1 = "DELETE FROM BUSINESS_KEYWORD WHERE BUSINESS_KEYWORD.BusinessId=$businessId";
mysqli_query($link, $q1);

foreach($keywords as $k)
{
    $q = "INSERT INTO BUSINESS_KEYWORD(Id,BusinessId,KeywordId) VALUES (NULL,$businessId,$k[id])";
    mysqli_query($link, $q);
   
}



if ($link != null) {
    mysqli_close($link);
}


function containsKeyword($keywordString,$keywordArray)
{
    
    foreach($keywordArray as $value)
    {
        if($keywordString == $value['Keyword'])
            return true;
        
      
    }
      return false;
}
?>
