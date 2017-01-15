<?php
include('main.php');
?>
<html>
<head>
<title>Notifications | EBA</title>
<link rel="stylesheet" href="stylew3.css">
<style>
    body {font-family: "Raleway", Arial, sans-serif;
    
}
.w3-row img {margin-bottom: -8px}
    .noti{
	position: absolute;
	top: calc(50% -200px);
	left: calc(50% - 280px );
	height: 150px;
	width: 350px;
	padding: 10px;
	z-index: 2;
}
    .noti textarea{
	width: 570px;
	height: 200px;
        background-color:#f5f5f5;
	border: 1px solid rgba(255,255,255,0.6);
	border-radius: 2px;
	color: #000;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 4px;
        
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
</style>
</head>
<body>
    <div style="text-align:center;color:#FFFFFF;text-shadow: 0px 0px 6px #000000;font-size:45px;">
        Notification Posting
    </div>
    <div style="text-align:center;color:#FFFFFF;text-shadow: 0px 0px 50px #000000;font-size:30px;">
        <?php
        $connection1 = mysql_connect("localhost", "root", "nbuser");
$db1 = mysql_select_db("eba", $connection1);
$ses_sql=mysql_query("SELECT * FROM  `notification` ORDER BY  `serialno` DESC LIMIT 1", $connection1);
$row = mysql_fetch_assoc($ses_sql);
echo "Notification number ".$row['serialno']." with content \"".$row['noti']."\" posted successfully";
mysql_close($connection1); 
?>
    </div>
    <div>
      
    </div>

</body>
</html>



