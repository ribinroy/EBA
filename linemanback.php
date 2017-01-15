<?php

$error=''; 
$err1='';
$err2='';
$err3='';
if (isset($_POST['submit'])) {
if (empty($_POST['empno'])) {
$error = "Fields Cannot Be Empty";
$err1="*";
}
 if (empty($_POST['ename'])) {
$error = "Fields Cannot Be Empty";
$err2='*';
}
 if (empty($_POST['esection'])) {
$error = "Fields Cannot Be Empty";
$err3='*';
}
if( ! ctype_digit(strval($_POST['empno'])) && $_POST['empno'] != '' ){
 $error=$error."<br>Employee Number should be Integer";
} 
if( ! ctype_alpha(strval($_POST['ename'])) && $_POST['ename'] != '' ){
 $error=$error."<br>Name should be Characters";
} 
if( ! ctype_digit(strval($_POST['esection'])) && $_POST['esection'] != ''){
 $error=$error."<br>Section should be Integer";
}
//SELECT *  FROM  `lineman`  WHERE  `empno` =4564
if(ctype_digit(strval($_POST['esection']))&&ctype_digit(strval($_POST['empno']))&& ctype_alpha(strval($_POST['ename']))){
if(empty($error))
{
    $empno=$_POST['empno'];
    $ename=$_POST['ename'];
    $esection=$_POST['esection'];
    $epassword=$_POST['epassword'];
    if (empty($epassword)) {
$epassword='password';
}
$connection = mysql_connect("localhost", "root", "nbuser");
$db = mysql_select_db("eba", $connection);
$search = mysql_query("SELECT *  FROM  `lineman`  WHERE  `empno` =$empno");
$rows = mysql_num_rows($search);
if ($rows == 1) {
    $error="Employee Number Exists. ($empno)";
}
else {
$query = mysql_query("INSERT INTO `eba`.`lineman` (`empno`, `section`, `name`, `password`) VALUES ('".$empno."', '".$esection."', '".$ename."', '".$epassword."');");
$number=mysql_query("SELECT * 
FROM lineman");
$rows = mysql_num_rows($number);
$rows=$rows+1;

$connection1 = mysql_connect("localhost", "root", "nbuser");
$db1 = mysql_select_db("lineman", $connection1);
$querycreate=mysql_query("CREATE TABLE  `L$empno` (
 `serialno` INT( 250 ) NOT NULL AUTO_INCREMENT ,
 `consumerno` INT( 250 ) NOT NULL ,
 `complaint` VARCHAR( 1000 ) NOT NULL ,
 `status` VARCHAR( 500 ) NOT NULL ,
 `transformer` VARCHAR( 150 ) NOT NULL ,
 `postno` VARCHAR( 150 ) NOT NULL ,
PRIMARY KEY (  `serialno` )
) ENGINE = INNODB DEFAULT CHARSET = latin1;",$connection1);
$error=$ename." Added Successfully";

}
mysql_close($connection); 
mysql_close($connection1); 
} else {
$error = "Empty Fields";
}
}
}

?>