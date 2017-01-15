<?php
   $con=mysql_connect("localhost","root","nbuser");
$db1 = mysql_select_db("eba", $con);
   
	
   $username = $_POST['username'];
   $password = $_POST['password'];
   $result = mysql_query($con,"SELECT * FROM table1 where 
   Username='$username' and Password='$password'");
   $row = mysql_fetch_array($result);
   $data = $row[0];

   if($data){
      echo $data;
   }
	
   mysql_close($con);
?>