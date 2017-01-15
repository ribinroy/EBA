<?php
include('main.php');
?>
<html>
<head>
<title>Verify Owner | EBA</title>

<link rel="stylesheet" href="stylew3.css">
<style>
    body {font-family: "Raleway", Arial, sans-serif;
          
    
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
.noti input[type=submit]{
	width: 260px;
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
        margin-left: 310px;
	margin-top: 10px;
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
.noti input[type=text]:focus{
	outline: none;
	border: 1px solid rgba(255,255,255,0.9);
}
    .noti{
	position: absolute;
	top: calc(50% -200px);
	left: calc(50% - 280px );
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
.noti input[type=submit]:hover{
	opacity: 0.8;
}

.noti input[type=submit]:active{
	opacity: 0.6;
}
.noti input[type=submit]:focus{
	outline: none;
}

</style>
</head>
<body>
    <div style='text-align:center;color:#FFFFFF;text-shadow: 0px 0px 6px #000000;font-size:45px;'>
        Consumer Details
    </div>
    <div style="width:800px;padding-left:120px;">
    <div style="text-align:left;color:#FFFFFF;text-shadow: 0px 0px 6px #000000;font-size:22px;">
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
$ses_sql1=mysql_query("SELECT * FROM  `consumerdetails` WHERE  `serialno` =$serial ", $connection1);
$rows = mysql_num_rows($ses_sql1);
if (mysql_num_rows($ses_sql1) > 0) {
while($row = mysql_fetch_assoc($ses_sql1)) {
    echo "<tr><td>Name</td><td> : {$row['name']}</td></tr>";
    echo "<tr><td>Consumer No</td><td> : {$row['consumerno']}</td></tr>";
    echo "<tr><td>Section No</td><td> : {$row['sectionno']}</td></tr>";
    echo "<tr><td>Post No</td><td> : {$row['postno']}</td></tr>";
    
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
    echo "<tr><td>Village / Survey No</td><td> : {$row['village']}</td></tr>";
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
    echo "<tr><td>Transformer</td><td> : {$row['transformer']}</td></tr>";
    echo "<tr><td>Phase</td><td> : {$row['phase']}</td></tr>";
      
}
}
    ?>
    
        </table>
        <br>
        <br>
    </div>
    </div>