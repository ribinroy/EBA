<?php
$errorfinal='';
$ercomplaint='';
$complaint='';
$sectionno='';
$ersectionno='';
$erpostno='';
$ertransformer='';
$postno='';
$transformer='';
$flag=0;
$check1='';
$check2='';
$check3='';
$consumerno='';
if(isset($_GET['consumerno'])){
        $consumerno=$_GET['consumerno'];
        
    }

if (isset($_POST['submit'])) {
    $connection = mysql_connect("localhost", "root", "nbuser");
    $db = mysql_select_db("eba", $connection);
    
$complaint=$_POST['complaint'];
$sectionno=$_POST['sectionno'];
$postno=$_POST['postno'];
$transformer=$_POST['transformer'];
if(isset($_POST['complaintcheck'])){
$check1=$_POST['complaintcheck'];
}
if(isset($_POST['complaintcheck1'])){
$check2=$_POST['complaintcheck1'];
}
if(isset($_POST['complaintcheck2'])){
$check3=$_POST['complaintcheck2'];
}
    
    if($check1=="Voltage Variation"){
        $complaint=$complaint." [Voltage Variation] ";
    }
    if($check2=="Line Complaint"){
        $complaint=$complaint." [Line Complaint] ";
    }
    if($check3=="Transformer Complaint"){
        $complaint=$complaint." [Transformer Complaint] ";
    }
    if($complaint=="") {
        $flag=1;
        $ercomplaint="No complaints written";
    }
    
    if( ! ctype_digit(strval($sectionno)) && $sectionno != '' ){
    $ersectionno="Section Number should be Integer";
        $flag=1;
    }
    
    
    
    if($flag==0)
        {
    $section_query=mysql_query("SELECT * 
FROM  `consumerdetails` 
WHERE  `consumerno` ='$consumerno'",$connection);
    //$errorfinal=$consumerno."asjdg";
           $row = mysql_fetch_assoc($section_query);
       if($sectionno==''){
           $sectionno=$row['sectionno'];   
       }
       if($transformer==''){
           $transformer=$row['transformer'];   
       }
       if($postno==''){
           $postno=$row['postno'];   
       }
       if(isset($_POST['sectionno'])){
$sectionno=$_POST['sectionno'];
}
if(isset($_POST['transformer'])){
$transformer=$_POST['transformer'];
}
if(isset($_POST['postno'])){
$postno=$_POST['postno'];
}
    
//$query = mysql_query("INSERT INTO `eba`.`newconnection` (`name`, `organisation`, `authorityname`, `category`, `buildingname`, `buildingnumber`, `street`, `place`, `pincode`, `village`, `phone`, `buildingname1`, `buildingnumber1`, `street1`, `place1`, `pincode1`, `village1`, `phone1`, `statusofapplicant`, `powerintensive`, `crossproperty`, `consentsobtained`, `supplypurpose`, `connectiontype`, `panno`, `aadhar`, `aconstruct`, `plotsize`) VALUES ('$name', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');",$connection);
    $query = mysql_query("INSERT INTO  `eba`.`complaint` (
`complaintno` ,
`consumerno` ,
`complaint` ,
`sectionno` ,
`transformer` ,
`postno` ,
`status`
)
VALUES (
NULL ,  '$consumerno' ,
'$complaint' ,
'$sectionno' ,
'$transformer' ,
'$postno' ,
'Complaint Registered'
);",$connection);
    $sectioncheck_query=mysql_query("SELECT * 
FROM  `lineman` 
WHERE  `section` ='$sectionno'");
     $check = mysql_fetch_assoc($sectioncheck_query);
    if($sectionno==$check['section']){
        //INSERT INTO `lineman`.`l123` (`serialno`, `consumerno`, `complaint`, `status`, `transformer`, `postno`) VALUES (NULL, '456', '', '', '', '');
    
        $connection5 = mysql_connect("localhost", "root", "nbuser");
$db5 = mysql_select_db("lineman", $connection5);

$queryinserte=mysql_query("INSERT INTO `lineman`.`l123` (`serialno`, `consumerno`, `complaint`, `status`, `transformer`, `postno`) VALUES (NULL, '$consumerno', '$complaint', 'New', '$transformer', '$postno');",$connection5);
//$querycreate=mysql_query("UPDATE  `eba`.`complaint` SET  `status` =  'Requested to Lineman' WHERE  `complaint`.`complaintno` =30;",$connection5);
mysql_close($connection5);
//
    }
    
    mysql_close($connection);
    
    $errorfinal="Complaint Registered";
    }
    else
        {
        $errorfinal="Mandatory fields left empty";
    }
       
    
    
    
    
    
}
?>