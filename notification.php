<?php
include('main.php');
include('notisend.php');
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
    <form action="" method="post">
		<div class="noti" id="enter" >	
                    <textarea type="textarea" placeholder="Notification Content" name="notification"></textarea><br>
                        <textarea style="width:260px;height:35px;"type="textarea" placeholder="Area Code" name="area"></textarea><br>
                                <input type="submit" name="submit" value=" Post "><br>
                                    <div style="color:#FFFFFF;text-shadow: 0px 0px 6px #000000;font-size:18px;">
                                        <?php echo $errornoti; ?> 
                                    </div>
                                    
                </div>  
       
               
                   </form>
    <div>
      
    </div>

</body>
</html>



