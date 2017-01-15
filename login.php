<?php
session_set_cookie_params(0);
session_start();

$error=''; 
$_SESSION['id']=" ";
$_SESSION['nme']=" ";
$_SESSION['flag']=" ";
$_SESSION['flag1']=" ";
$_SESSION['total']=0;
$_SESSION['error']=" ";
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";

}
else
{
$username=$_POST['username'];
$password=$_POST['password'];
$connection = mysql_connect("localhost", "root", "nbuser");
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);
$db = mysql_select_db("eba", $connection);
$query = mysql_query("select * from admin where password='$password' AND username='$username'", $connection);
$rows = mysql_num_rows($query);
if ($rows == 1) {
$_SESSION['login_user']=$username;
$error = "Logged in";
//header("location: supervisor.php");
} else {
$error = "Username or Password is invalid";
}
mysql_close($connection); 
}
}


?>