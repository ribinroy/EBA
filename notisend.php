
<?php
$errornoti="";
if (isset($_POST['submit'])) {
        if(empty($_POST['notification']) || $_POST['area']==''){
            $errornoti="Error in inputs";
        }
        else {
            if( ! ctype_digit(strval($_POST['area'])) && $_POST['area'] != '' ){
    $errornoti="Area Code should be Integer";
            }
            else {
    
$noti=$_POST['notification'];
$area=$_POST['area'];
$connection1 = mysql_connect("localhost", "root", "nbuser");
$db1 = mysql_select_db("eba", $connection1);
$ses_sql1=mysql_query("INSERT INTO `eba`.`notification` (`serialno`, `noti`, `area`, `date`) VALUES (NULL, '".$noti."', '".$area."', NOW());", $connection1);

//if(!isset($login_session)){
mysql_close($connection1); 
//header('Location: viewshop.php'); 
//}
header("Location: notificationreturn.php");
        }
        }
}
?>
