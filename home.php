<?php
include('session.php');
?>
<!DOCTYPE html>
<html>
    
    <link rel="shortcut icon" type="image/png" href="favicon.png"/>
<title>ADMIN | EBA</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="stylew3.css">
<link href="files/ralewayfont" rel="stylesheet" type="text/css">
<style>
body {font-family: "Raleway", Arial, sans-serif;
}

.w3-row img {margin-bottom: -8px}

.droplinks { 
    /*Break the div out of the layout flow of the list*/ 
    position: relative; /*Give the div a background color and width*/ 
    background-color: #F2D299; 
    min-width: 40px; /*Hide the div from view*/ 
    display: none; } .droplinks a { /*Match the padding applied to the other menu items*/ 
        padding: 10px; /*For the links to each fill a complete row in the containing div*/ 
        display: block; } 
.dropbutton:hover .droplinks{ 
    /*Cause the div to be displayed only when a website visitor hovers their mouse over the list item containing the div*/ 
    display: block;
} 

body{
    background-image: url("main.jpg");

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
#menu
{
    margin: 0;
    padding: 0;
}
#menu ul
{
    margin: 0;
    padding: 0;
    line-height: 40px;
    float:right;
 z-index: 5;
}
#menu li
{
    margin: 0;
    padding: 0;
    list-style: none;
    float: left;
    position: relative;
 z-index: 5;
    
}
#menu ul li a
{
    text-align: center;
    text-decoration: none;
    height: 50px;
    display: block;
    color: white;
 z-index: 5;
}
#profile {
padding:20px;
color: white;
margin-left: 1150px;
 text-decoration: none;
font-size:18px;
 z-index: 5;

}
#menu ul ul
{
 position: absolute;
 visibility: hidden;
 top: 40px;
 z-index: 5;
}
#menu ul li:hover ul
{
    visibility: visible;
 z-index: 5;
}
#menu li:hover
{
    background: #00cc33;
 z-index: 5;
 
}

</style>
<body>
<!-- !PAGE CONTENT! -->
<div class="w3-content" style="max-width:1500px">
  <!-- Header -->
  <header class="w3-container w3-xlarge w3-padding-24">
      
    <div id="wrapper" >
        
            <div id="menu" style="z-index:100;">
                
                
    <ul><li><a href="logout.php" class="w3-right w3-btn w3-white">Logout</a></li></ul>
    <ul><li><a href="complaint.php" class="w3-right w3-btn w3-white">Complaints</a></li></ul>
    <ul><li><a href="" class="w3-right w3-btn w3-white">Notifications</a>
            <ul>
                <li><a href="notification.php" class="w3-right w3-btn w3-white">Add Notifications</a></li>
                <li><a href="notificationsview.php" class="w3-right w3-btn w3-white" >View Notifications </a></li>
            </ul>
        </li></ul>
    <ul><li><a href="" class="w3-right w3-btn w3-white">Consumers</a>
            <ul>
                <li><a href="consumers.php" class="w3-right w3-btn w3-white">View Consumers</a></li>
                <li><a href="verification.php" class="w3-right w3-btn w3-white" >Verification </a></li>
                <li><a href="newconnection.php" class="w3-right w3-btn w3-white" >New Connections</a></li>
            </ul>
        </li></ul>
    <ul><li><a href="" class="w3-right w3-btn w3-white">Line Man</a>
        <ul>
            <li><a href="lineman.php" class="w3-right w3-btn w3-white">Add Line Man</a></li>
                <li><a href="linemanview.php" class="w3-right w3-btn w3-white" >Line Man Details</a></li>
            </ul>
        </li></ul>
    <ul><li><a href="main.php"   class="w3-left w3-btn "><?php echo $_SESSION['login_user']; ?></a></li></ul>
            </div>
        </div>

    
    
  </header>
  
</div> 
<div style="position: absolute;
	padding-left: 530px">
    <img style="width:350px;height:350px;" src="whitelogo.png">
</div>
<div style="text-align: center ;padding-left: 220px;padding-top: 300px">
    
      	<input type="text" id="face" size="8" 
	  style="background-color:transparent;color:white;text-shadow:0px 0px 22px black; border:0px; font-weight:normal; font-size:120px;" >
	
	<script type='text/javascript'>
		var time=document.getElementById("face");
		function update(){ 
			var newTime=(new Date).toTimeString(); 
			if(newTime !== update.oldTime){time.value=newTime.slice(0,8);}
			update.oldTime=newTime;	
		}
		var to=setInterval( update, 150 );
	</script>

</div>
<?php

function phpAlert($msg) {
    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
}
?>

</body>
</html>