<?php
$errorfinal='';
$ername='';
$ercategory='';
$erbuildingname='';
$erbuildingnumber='';
$erstreet='';
$erplace='';
$erpincode='';
$ervillage='';
$erphone='';
$erstatusofapplicant='';
$erpowerintensive='';
$ersupplypurpose='';
$erconnectiontype='';
$erpanno='';
$eraconstruct='';
if (isset($_POST['submit'])) {
   
    
    
    $name=$_POST['name'];
    $organisation=$_POST['organisation'];
    $authorityname=$_POST['authorityname'];
    $category=$_POST['category'];
    $buildingname=$_POST['buildingname'];
    $buildingnumber=$_POST['buildingnumber'];
    $street=$_POST['street'];
    $place=$_POST['place'];
    $pincode=$_POST['pincode'];
    $village=$_POST['village'];
    $phone=$_POST['phone'];
    $buildingname1=$_POST['buildingname1'];
    $buildingnumber1=$_POST['buildingnumber1'];
    $street1=$_POST['street1'];
    $place1=$_POST['place1'];
    $pincode1=$_POST['pincode1'];
    $village1=$_POST['village1'];
    $statusofapplicant=$_POST['statusofapplicant'];
    $powerintensive=$_POST['powerintensive'];
    $crossproperty=$_POST['crossproperty'];
    $consentsobtained=$_POST['consentsobtained'];
    $supplypurpose=$_POST['supplypurpose'];
    $connectiontype=$_POST['connectiontype'];
    $panno=$_POST['panno'];
    $aadhar=$_POST['aadhar'];
    $aconstruct=$_POST['aconstruct'];
    $plotsize=$_POST['plotsize'];
    if($name=="") {
        $ername="Name cannot be empty";
    }
    if($category=="") {
        $ercategory="Category cannot be empty";
    }
    if($buildingname=="") {
        $erbuildingname="Building Name cannot be empty";
    }
     if($buildingnumber=="") {
        $erbuildingnumber="Building Number cannot be empty";
    }
    if($street=="") {
        $erstreet="Street cannot be empty";
    }
    if($place=="") {
        $erplace="Place cannot be empty";
    }
    if($pincode=="") {
        $erpincode="Pincode cannot be empty";
    }
    if($village=="") {
        $ervillage="Village cannot be empty";
    }
    if($phone=="") {
        $erphone="Phone cannot be empty";
    }
    if( ! ctype_digit(strval($phone)) && $phone != '' ){
    $erphone="Phone Number should be Integer";
    }
    if( ! ctype_digit(strval($pincode)) && $pincode != '' ){
    $erpincode="Pincode should be Integer";
    }
    if( ! ctype_digit(strval($panno)) && $panno != '' ){
    $erpanno="Pan Number should be Integer";
    }
    if( ! ctype_digit(strval($aadhar)) && $aadhar != '' ){
    $eraadhar="Aadhar should be Integer";
    }
    if( ! ctype_digit(strval($aconstruct)) && $aconstruct != '' ){
    $eraconstruct="Construction area should be float";
    }
    if( ! ctype_digit(strval($plotsize)) && $plotsize != '' ){
    $erplotsize="Plot Size should be float";
    }
    if($statusofapplicant=="") {
        $erstatusofapplicant="Applicant status  cannot be empty";
    }
    if($powerintensive=="") {
        $erpowerintensive="Power Intensive cannot be empty";
    }
    if($supplypurpose=="") {
        $ersupplypurpose="Supply purpose cannot be empty";
    }
    if($connectiontype=="") {
        $erconnectiontype="Connection type cannot be empty";
    }
    if($panno=="") {
        $erpanno="PAN Number cannot be empty";
    }
    if(strlen($panno)!=10){
        
        $erpanno="PAN Number should be a 10 digit number";
        
    }
    if($aconstruct=="") {
        $eraconstruct="Constructed Area cannot be empty";
    }
    
    
    if(strlen($panno)==10  && $name!='' && $category!='' && $buildingname!='' && $buildingnumber!='' && $street!='' && $place!='' && $pincode!='' && $village!='' && $phone!='' && $statusofapplicant!='' && $powerintensive!='' && $supplypurpose!='' && $connectiontype!='' && $panno!='' && $aadhar!='' && $aconstruct!='' && $plotsize!='' )
     {
    
        if($buildingname1=='' && $buildingnumber1=='' && $street1=='' && $place1=='' && $pincode1=='' && $village1==''){
            $buildingname1=$buildingname;
            $buildingnumber1=$buildingnumber;
            $street1=$street;
            $place1=$place;
            $pincode1=$pincode;
            $village1=$village;
        }
    $connection = mysql_connect("localhost", "root", "nbuser");
    $db = mysql_select_db("eba", $connection);
    
//$query = mysql_query("INSERT INTO `eba`.`newconnection` (`name`, `organisation`, `authorityname`, `category`, `buildingname`, `buildingnumber`, `street`, `place`, `pincode`, `village`, `phone`, `buildingname1`, `buildingnumber1`, `street1`, `place1`, `pincode1`, `village1`, `phone1`, `statusofapplicant`, `powerintensive`, `crossproperty`, `consentsobtained`, `supplypurpose`, `connectiontype`, `panno`, `aadhar`, `aconstruct`, `plotsize`) VALUES ('$name', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');",$connection);
    $query = mysql_query("INSERT INTO `eba`.`newconnection` (`name`, `organisation`, `authorityname`, `category`, `buildingname`, `buildingnumber`, `street`, `place`, `pincode`, `village`, `phone`, `buildingname1`, `buildingnumber1`, `street1`, `place1`, `pincode1`, `village1`, `statusofapplicant`, `powerintensive`, `crossproperty`, `consentsobtained`, `supplypurpose`, `connectiontype`, `panno`, `aadhar`, `aconstruct`, `plotsize`, `status`) VALUES ('$name', '$organisation', '$authorityname', '$category', '$buildingname', '$buildingnumber', '$street', '$place', '$pincode', '$village', '$phone', '$buildingname1', '$buildingnumber1', '$street1', '$place1', '$pincode1', '$village1', '$statusofapplicant', '$powerintensive', '$crossproperty', '$consentsobtained', '$supplypurpose', '$connectiontype', '$panno', '$aadhar', '$aconstruct', '$plotsize','Verification Under Progress');",$connection);
    mysql_close($connection);
    $errorfinal="Application Saved";
    }
    else
        {
        $errorfinal="Mandatory fields left empty";
    }
       
    
    
    
    
    
}
?>