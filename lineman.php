<?php
include('main.php');
include('linemanback.php');
?>
<html>
<head>
<title>Notifications | EBA</title>
<link rel="stylesheet" href="stylew3.css">
<style>
    body {font-family: "Raleway", Arial, sans-serif;
          
    
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
    <div style="text-align:center;color:#FFFFFF;text-shadow: 0px 0px 6px #000000;font-size:45px;">
        Line Man Add
    </div>
    <form action="" method="post">
		<div class="noti" id="login">
				<br>
                  Employee Number  <input type="text" placeholder="Employee Number" name="empno"><font color='red'><?php echo $err1; ?></font><br><br>
		  Name  <input type="text" placeholder="Name" name="ename"><font color='red'><?php echo $err2; ?></font><br><br>
                  Section   <input type="text" placeholder="Section" name="esection"><font color='red'><?php echo $err3; ?></font><br><br>
                  Password  <input type="text" placeholder="Password" name="epassword"><br><br>
                                <input type="submit" name="submit" value=" Login "><br>
                 <?php echo $error; ?> 
                </div>
                      
                   </form>
    
    <div>
      
    </div>

</body>
</html>



