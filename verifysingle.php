<?php
include('main.php');
$tempo='';
$erconsumerno='';
$ersectionno='';
$erphase='';
$erpostno='';
$ertransformer='';
$fieldempty='';
$statusack='';
$height=365;
?>
<html>
    
<head>
<title>Verify Owner | EBA</title>

<link rel="stylesheet" href="stylew3.css">
<style>
    body {font-family: "Raleway", Arial, sans-serif;
          
    
}

.noti input[type=text]:focus{
	outline: none;
	border: 1px solid rgba(255,255,255,0.9);
}
    .noti{
	position: absolute;
	top: 150px;
	left: 820px;
	height: 150px;
	width: 500px;
          color:#FFFFFF;
          text-shadow: 0px 0px 6px #000000;
          font-size:20px;
}
.noti input[type=submit]{
        float:right;
	width: 250px;
	height: 35px;
	background: #fff;
	border: 1px solid #fff;
	cursor: pointer;
	border-radius: 2px;
     word-wrap: break-word;
	color: #a18d6c;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 6px;
}
    .noti input[type=text]{
	width: 250px;
	height: 35px;
        background-color:#f5f5f5;
	border: 1px solid rgba(255,255,255,0.6);
	border-radius: 2px;
	color: #000;
        float:right;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
        
}
.noti input[type=text]{
	width: 250px;
	height: 35px;
        background-color:#f5f5f5;
	border: 1px solid rgba(255,255,255,0.6);
	border-radius: 2px;
	color: #000;
        float:right;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
        }
.noti input[type=submit]:hover{
	opacity: 0.8;
}

.noti input[type=submit]:active{
	opacity: 0.6;
}
.noti input[type=submit]:focus{
	outline: none;
}

.parallax {
    /* The image used */
    background-image: url("main.jpg");

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
.w3-row img {margin-bottom: -8px}
</style>
</head>
<body>
    <div style="text-align:center;color:#FFFFFF;text-shadow: 0px 0px 6px #000000;font-size:45px;">
        Verify Application 
    </div>
    
    <div style="width:1000px;padding-left:30px;">
    <div style="text-align:left;color:#FFFFFF;text-shadow: 0px 0px 6px #000000;font-size:22px;">
        <table> <tr><td>
        <table>
            <thead><tr><th>  </th><th></th></tr></thead>
<tbody>
    <?php
    $serial='';
    if(isset($_GET['serial'])){
        $serial=$_GET['serial'];
    }
    $connection1 = mysql_connect("localhost", "root", "nbuser");
$db1 = mysql_select_db("eba", $connection1);
$ses_sql1=mysql_query("SELECT * FROM  `newconnection` WHERE  `serialno` =$serial ", $connection1);
$rows = mysql_num_rows($ses_sql1);
if (mysql_num_rows($ses_sql1) > 0) {
while($row = mysql_fetch_assoc($ses_sql1)) {
    echo "<tr><td>Name</td><td> : {$row['name']}</td></tr>";
    echo "<tr><td>Name of Organisation</td><td> : {$row['organisation']}</td></tr>";
    echo "<tr><td>Name of authority</td><td> : {$row['authorityname']}</td></tr>";
    echo "<tr><td>Category</td><td> : {$row['category']}</td></tr>";
    echo "<tr><td>Name of Building</td><td> : {$row['buildingname']}</td></tr>";
    echo "<tr><td>Building Number</td><td> : {$row['buildingnumber']}</td></tr>";
    echo "<tr><td>Lane / Street</td><td> : {$row['street']}</td></tr>";
    echo "<tr><td>Place / Landmark</td><td> : {$row['place']}</td></tr>";
    echo "<tr><td>Pincode</td><td> : {$row['pincode']}</td></tr>";
    echo "<tr><td>Village / Survey No</td><td> : {$row['village']}</td></tr>";
    echo "<tr><td>Phone</td><td> : {$row['phone']}</td></tr>";
    
    echo "<tr><td>Name of Building</td><td> : {$row['buildingname1']}</td></tr>";
    echo "<tr><td>Building Number</td><td> : {$row['buildingnumber1']}</td></tr>";
    echo "<tr><td>Lane / Street</td><td> : {$row['street1']}</td></tr>";
    echo "<tr><td>Place / Landmark</td><td> : {$row['place1']}</td></tr>";
    echo "<tr><td>Pincode</td><td> : {$row['pincode1']}</td></tr>";
    echo "<tr><td>Village / Survey No</td><td> : {$row['village1']}</td></tr>";
    echo "<tr><td>Status of applicant</td><td> : {$row['statusofapplicant']}</td></tr>";
    echo "<tr><td>Power Intensive/Not</td><td> : {$row['powerintensive']}</td></tr>";
    echo "<tr><td>Properties of others crossed over</td><td> : {$row['crossproperty']}</td></tr>";
    echo "<tr><td>Consents obtained in all cases</td><td> : {$row['consentsobtained']}</td></tr>";
    echo "<tr><td>Purpose of supply</td><td> : {$row['supplypurpose']}</td></tr>";
    echo "<tr><td>Type of connection</td><td> : {$row['connectiontype']}</td></tr>";
    
    echo "<tr><td>PAN no.</td><td> : {$row['panno']}</td></tr>";
    echo "<tr><td>Aadhar no.</td><td> : {$row['aadhar']}</td></tr>";
    echo "<tr><td>Constructed area</td><td> : {$row['aconstruct']}</td></tr>";
    echo "<tr><td>Plot size</td><td> : {$row['plotsize']}</td></tr>";
    echo "<tr><td>Status</td><td> : {$row['Status']}</td></tr>";
      
}
}
mysql_close($connection1);
    ?> <?php
        if(isset($_POST['submit'])){
            $tempo="inside isset";
            if ($_POST['submit']=='Update Status') {
                $category=$_POST['category'];
                $document='';
                $status='';
                $count=1;
                if(isset($_POST['docs'])){
                    $document=$document." [".$count." ".$_POST['docs']."]";
                    $count++;
                }if(isset($_POST['docs1'])){
                    $document=$document." [".$count." ".$_POST['docs1']."]";
                    $count++;
                }if(isset($_POST['docs2'])){
                    $document=$document." [".$count." ".$_POST['docs2']."]";
                    $count++;
                }if(isset($_POST['docs3'])){
                    $document=$document." [".$count." ".$_POST['docs3']."]";
                    $count++;
                }if(isset($_POST['docs4'])){
                    $document=$document." [".$count." ".$_POST['docs4']."]";
                    $count++;
                }if(isset($_POST['docs5'])){
                    $document=$document." [".$count." ".$_POST['docs5']."]";
                    $count++;
                }if(isset($_POST['docs6'])){
                    $document=$document." [".$count." ".$_POST['docs6']."]";
                    $count++;
                }
                if($_POST['status']!=''){
                $status="Attention:".$_POST['status'];}
                $statusreport=$category;
                if($category=='Requesting Documents'){
                    $statusreport=$statusreport.":".$document;
                }
                $statusreport=$statusreport." ".$status;
               // $tempo=$statusreport;
                $connection1 = mysql_connect("localhost", "root", "nbuser");
                $db1 = mysql_select_db("eba", $connection1);
                //UPDATE  `eba`.`newconnection` SET  `Status` =  'statusss' WHERE  `newconnection`.`serialno` =20;              
                $ses_sql1=mysql_query("UPDATE  `eba`.`newconnection` SET  `Status` =  '$statusreport' WHERE  `newconnection`.`serialno` ='$serial' ;", $connection1);
           echo "<script>window.onload = function() {
    if(!window.location.hash) {
        window.location = window.location + '#loaded';
        window.location.reload();
    }
}</script>";
           $statusack="<font color=#00FF00>Status Updated</font>";
}

        if ($_POST['submit']=='Approve') {
            $consumerno='';
            $sectionno='';
            $postno='';
            $transformer='';
            $phase='';
            $flag=0;
            if($_POST['consumerno']!=''){
                
                $consumerno=$_POST['consumerno'];
            }
            else {
            $flag=1;
                
                $erconsumerno="<font color=red> * </font>";
            }
            if( ! ctype_digit(strval($_POST['consumerno'])) && $_POST['consumerno'] != '' ){
 $erconsumerno=$erconsumerno."<br><font color=red><font size=2px>Consumer Number should be Integer</font></font>";
 $flag=1;
 $height=$height+30;
}
            if( ! ctype_digit(strval($_POST['sectionno'])) && $_POST['sectionno'] != '' ){
 $ersectionno=$ersectionno."<br><font color=red><font size=2px>Section Number should be Integer</font></font>";
 $flag=1;
 $height=$height+30;
}
            if($_POST['sectionno']!=''){
                $sectionno=$_POST['sectionno'];
            }else {
                $flag=1;
                $ersectionno="<font color=red> * </font>";
            }
            if($_POST['transformer']!=''){
                $transformer=$_POST['transformer'];
            }else {
                $flag=1;
                $ertransformer="<font color=red> * </font>";
            }
            if($_POST['postno']!=''){
                $postno=$_POST['postno'];
            }else {
                $flag=1;
                $erpostno="<font color=red> * </font>";
            }
            if($_POST['phase']!=''){
                $phase=$_POST['phase'];
            }else {
                $flag=1;
                $erphase="<font color=red> * </font>";
            }
            if($flag==0){
            $connection1 = mysql_connect("localhost", "root", "nbuser");
$db1 = mysql_select_db("eba", $connection1);
$ses_sql1=mysql_query("SELECT * FROM  `newconnection` WHERE  `serialno` =$serial ", $connection1);
$row = mysql_fetch_assoc($ses_sql1);
            $connection = mysql_connect("localhost", "root", "nbuser");
$db = mysql_select_db("eba", $connection);
$search = mysql_query("SELECT *  FROM  `consumerdetails`  WHERE  `consumerno` =$consumerno");
$rows = mysql_num_rows($search);
if ($rows == 0) 
          //  if($row['consumerno']==$consumerno)
                {
$ses_sql1=mysql_query("SELECT * FROM  `newconnection` WHERE  `serialno` =$serial ", $connection1);
    $row = mysql_fetch_assoc($ses_sql1);
            //INSERT INTO `eba`.`consumerdetails` (`serialno`, `name`, `organisation`, `authorityname`, `category`, `buildingname`, `buildingnumber`, `street`, `place`, `pincode`, `village`, `phone`, `buildingname1`, `buildingnumber1`, `street1`, `place1`, `pincode1`, `village1`, `statusofapplicant`, `powerintensive`, `crossproperty`, `consentsobtained`, `supplypurpose`, `connectiontype`, `panno`, `aadhar`, `aconstruct`, `plotsize`) VALUES (NULL, 'dmbkjh', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
            $ses_sql2=mysql_query("INSERT INTO `eba`.`consumerdetails` (`serialno`, `name`, `organisation`, `authorityname`, `category`, `buildingname`, `buildingnumber`, `street`, `place`, `pincode`, `village`, `phone`, `buildingname1`, `buildingnumber1`, `street1`, `place1`, `pincode1`, `village1`, `statusofapplicant`, `powerintensive`, `crossproperty`, `consentsobtained`, `supplypurpose`, `connectiontype`, `panno`, `aadhar`, `aconstruct`, `plotsize`, `consumerno`, `sectionno`, `postno`, `transformer`, `phase`) VALUES (NULL, '{$row['name']}', '{$row['organisation']}', '{$row['authorityname']}', '{$row['category']}', '{$row['buildingname']}', '{$row['buildingnumber']}', '{$row['street']}', '{$row['place']}', '{$row['pincode']}', '{$row['village']}', '{$row['phone']}', '{$row['buildingname1']}', '{$row['buildingnumber1']}', '{$row['street1']}', '{$row['place1']}', '{$row['pincode1']}', '{$row['village1']}', '{$row['statusofapplicant']}', '{$row['powerintensive']}', '{$row['crossproperty']}', '{$row['consentsobtained']}', '{$row['supplypurpose']}', '{$row['connectiontype']}', '{$row['panno']}', '{$row['aadhar']}', '{$row['aconstruct']}', '{$row['plotsize']}', '$consumerno', '$sectionno', '$postno', '$transformer', '$phase');", $connection1);
            $ses_sql1=mysql_query("UPDATE  `eba`.`newconnection` SET  `Status` =  'Approved' WHERE  `newconnection`.`serialno` ='$serial' ;", $connection1);
          
            $fieldempty="$consumerno Approved";
            echo "<script>window.onload = function() {
    if(!window.location.hash) {
        window.location = window.location + '#loaded';
        window.location.reload();
        
    }
}</script>";
            }
            else {
                $fieldempty="Consumer Number Already Registered [".$consumerno."]";
            }
            }
            else {
                $fieldempty="Field Empty";
            }
        }
        }
        ?>
    
        </table>
                </td><td>
        <form action="" method="post">
		<div class="noti" id="login">
                    <br>
                    <div id="statusbox" style="border: .5px solid black;border-radius:2px;height:345px;padding:3px;">
				
                                Status
   <select  name="category" style="width: 250px;
	height: 35px;
        background-color:#f5f5f5;
	border: 1px solid rgba(255,255,255,0.6);
	border-radius: 2px;
	color: #000;
        float:right;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;">
  <option  value="Verification Under Progress">- Status -</option>
  <option  value="Requesting Documents">Requesting Documents</option>
  <option  value="Waiting for Approval">Waiting for Approval</option>
  </select>
                   <br>              
<input type="checkbox" name="docs" value="Proof of Identity">Proof of Identity<br>
<input type="checkbox" name="docs1" value="Letter of Authorisation">Letter of Authorisation<br>
<input type="checkbox" name="docs2" value="Details of Property Crossing & Consents">Details of Property Crossing & Consents<br>
<input type="checkbox" name="docs3" value="Proof of ownership">Proof of ownership<br>
<input type="checkbox" name="docs4" value="Consent from Owner">Consent from Owner<br>
<input type="checkbox" name="docs5" value="Test Certificate of metering equipment">Test Certificate of metering equipment<br>
<input type="checkbox" name="docs6" value="Agreement Dimensioned sketch">Agreement Dimensioned sketch<br>
  
  
 
                                 
                    <input type="text" placeholder="Explicit Status" name="status"><br><br>
                    
  <?php echo "$statusack"; ?>
		  <input type="submit" style="background:orange;color:black;" name="submit" value="Update Status"><br>
                    </div>
                    <div id="approvalbox" style="border: .5px solid black;border-radius:2px;height:450px;padding:3px;">
                  Consumer Number  <input type="text" placeholder="Consumer Number" name="consumerno"><?php echo $erconsumerno ?><br><br>
                  Section Number   <input type="text" placeholder="Section Number" name="sectionno"><?php echo $ersectionno ?><br><br>
                  Post Number   <input type="text" placeholder="Post Number" name="postno"><?php echo $erpostno ?><br><br>
                  Transformer  <input type="text" placeholder="Transformer" name="transformer"><?php echo $ertransformer ?><br><br>
                  Phase <?php echo $erphase ?> <select  name="phase" style="width: 250px;
	height: 35px;
        background-color:#f5f5f5;
	border: 1px solid rgba(255,255,255,0.6);
	border-radius: 2px;
	color: #000;
        float:right;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;">
  <option  value="Single Phase">Single Phase</option>
  <option  value="Three Phase">Three Phase</option>
  </select><br><br>
  <?php echo $fieldempty; ?>
                               <input type="submit" style="background:green;color:white;" name="submit" value="Approve"><br>
                
                </div>
                </div> 
                  
        
                </td>
            </tr>
        </table>
    </div>
    </div>
           


    