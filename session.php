<?php
include('login.php');
if(empty($_SESSION['login_user'])){
header('Location: index.php'); 
}
   /* else
    {
$connection = mysql_connect("localhost", "root", "nbuser");
$db = mysql_select_db("eba", $connection);
//session_start();
$user_check=$_SESSION['login_user'];
$ses_sql=mysql_query("select * from login where username='$user_check'", $connection);
$row = mysql_fetch_assoc($ses_sql);
$login_session =$row['username'];

mysql_close($connection); 
if(!isset($login_session)){
//header('Location: index.php'); 
    
}
}
*/
?>
