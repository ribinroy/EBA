<div style="text-shadow:0px 0px 6px black; color:white;";>
    <?php
if(isset($_POST['verify'])){
if(!empty($_POST['check_list'])) {
// Counting number of checked checkboxes.
$checked_count = count($_POST['check_list']);
echo "You have selected following ".$checked_count." option(s): <br/>";
$connection1 = mysql_connect("localhost", "root", "nbuser");
$db1 = mysql_select_db("eba", $connection1);
// Loop to store and display values of individual checked checkbox.
foreach($_POST['check_list'] as $selected) {
    $ses_sql=mysql_query("SELECT * FROM  `verification` WHERE  `serialno` =$selected", $connection1);
    $row = mysql_fetch_assoc($ses_sql);
    $ses_sq2=mysql_query("INSERT INTO `eba`.`customer` ( `consumerno` , `name` , `address` , `phone` , `category` , `password` , `username` ) VALUES ( {$row['consumerno']}, '{$row['name']}', '{$row['address']}', '{$row['phone']}', '{$row['category']}', '{$row['password']}', '{$row['username']}' );", $connection1);
echo "<p>{$row['serialno']} | {$row['username']} | {$row['password']} | {$row['consumerno']} | {$row['address']} | {$row['phone']} | {$row['category']}</p>";

    $ses_sq3=mysql_query("DELETE FROM `verification` WHERE `serialno`=$selected", $connection1);
}
}
else{
echo "<b>Please select at least one account.</b>";
}
}

if(isset($_POST['decline'])){
if(!empty($_POST['check_list'])) {
// Counting number of checked checkboxes.
$checked_count = count($_POST['check_list']);
echo "You have selected following ".$checked_count." option(s): <br/>";
$connection1 = mysql_connect("localhost", "root", "nbuser");
$db1 = mysql_select_db("eba", $connection1);
// Loop to store and display values of individual checked checkbox.
foreach($_POST['check_list'] as $selected) {
    $ses_sql=mysql_query("SELECT * FROM  `verification` WHERE  `serialno` =$selected", $connection1);
    $row = mysql_fetch_assoc($ses_sql);
    echo "<p>{$row['serialno']} | {$row['username']} | {$row['password']} | {$row['consumerno']} | {$row['address']} | {$row['phone']} | {$row['category']}</p>";

    $ses_sq3=mysql_query("DELETE FROM `verification` WHERE `serialno`=$selected", $connection1);
}
}
else{
echo "<b>Please select at least one account.</b>";
}
}
?>
</div>