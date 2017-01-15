
<?php
include('main.php');
?>
<html>
<head>
<title>Line Man | EBA</title>
<link rel="stylesheet" href="stylew3.css">
<style>
    body {font-family: "Raleway", Arial, sans-serif;
    
}
.w3-row img {margin-bottom: -8px}
 
   
.datagrid table { 
    border-collapse: collapse;
    text-align: left;
    width: 100%; 
} 
.datagrid {
    font: normal 12px/150% Geneva, Arial, Helvetica, sans-serif;
    background: #fff; 
    overflow: hidden;
    border: 5px solid #006699; 
    -webkit-border-radius: 3px; 
    -moz-border-radius: 3px;
    border-radius: 3px; 
}
.datagrid table td, .datagrid table th {
    padding: 9px 10px;
}
.datagrid table thead th {
    background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #006699), color-stop(1, #00557F) );
    background:-moz-linear-gradient( center top, #006699 5%, #00557F 100% );
    filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#006699', endColorstr='#00557F');
    background-color:#006699;
    color:#FFFFFF;
    font-size: 18px;
    font-weight: bold;
    text-align: center;
    border-left: 2px solid #0070A8;
}
.datagrid table thead th:first-child {
    border: none;
}
.datagrid table tbody td {
    color: #00496B; 
    border-left: 2px solid #E1EEF4;
    font-size: 12px;
    font-weight: normal;
}
.datagrid table tbody .alt td {
    background: #E1EEF4; 
    color: #00496B; 
}
.datagrid table tbody td:first-child { 
    border-left: none; 
}
.datagrid table tbody tr:last-child td { 
    border-bottom: none; 
}
.datagrid table tfoot td div {
    border-top: 1px solid #006699;
    background: #E1EEF4;
}
.datagrid table tfoot td { 
    padding: 0; 
    font-size: 12px 
}
.datagrid table tfoot td div{
    padding: 2px;
}
.datagrid table tfoot td ul {
    margin: 0; 
    padding:0;
    list-style: none; 
    text-align: right;
}
.datagrid table tfoot  li { 
    display: inline;
}
.datagrid table tfoot li a {
    text-decoration: none;
    display: inline-block;
    padding: 2px 8px;
    margin: 1px;
    color: #FFFFFF;
    border: 1px solid #006699;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px; 
    background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #006699), color-stop(1, #00557F) );
    background:-moz-linear-gradient( center top, #006699 5%, #00557F 100% );
    filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#006699', endColorstr='#00557F');
    background-color:#006699; 
}
.datagrid table tfoot ul.active, .datagrid table tfoot ul a:hover { 
    text-decoration: none;
    border-color: #006699;
    color: #FFFFFF; 
    background: none;
    background-color:#00557F;
}
div.dhtmlx_window_active, div.dhx_modal_cover_dv { 
    position: fixed !important; }
</style>
</head>
<body>
    <div style="text-align:center;color:#FFFFFF;text-shadow: 0px 0px 6px #000000;font-size:45px;">
        Line Man Details
    </div>
    
    <div class="datagrid">
        <form action="" method="post"> 
            <table>
            <thead><tr><th>Employee Number</th><th> Name</th><th>Section</th><th>Password</th></tr></thead>
<tbody>
         <?php
extract($_POST);
$connection1 = mysql_connect("localhost", "root", "nbuser");
$db1 = mysql_select_db("eba", $connection1);
$ses_sql1=mysql_query("SELECT * FROM `lineman` ", $connection1);
$rows = mysql_num_rows($ses_sql1);
$flag=1;
if (mysql_num_rows($ses_sql1) > 0) {
while($row = mysql_fetch_assoc($ses_sql1)) {
        if($flag==1){
      echo "<tr><td><form action='' method='post'
          <label><input type='checkbox' name='check_list[]' value={$row['empno']}>{$row['empno']}</td></td><td>{$row['name']}</td><td>{$row['section']}</td><td>{$row['password']}</td></tr>";
         $flag=0;
       }
        else {
      echo "<tr><td><form action='' method='post'
          <label><input type='checkbox' name='check_list[]' value={$row['empno']}>{$row['empno']}</td></td><td>{$row['name']}</td><td>{$row['section']}</td><td>{$row['password']}</td></tr>";
         $flag=1;  
        } 
}
}
else{
    echo "<tr><td><div align=left style=color:red;>None</div></td></tr>\n";
}

mysql_close($connection1); 
//}
?>
    
</tbody>
</table>

            <?php
    
    if(isset($_POST['deleteline'])){
if(!empty($_POST['check_list'])) {
// Counting number of checked checkboxes.
$checked_count = count($_POST['check_list']);
echo "Successfully deleted ".$checked_count." Lineman(s) <br/>";
$connection1 = mysql_connect("localhost", "root", "nbuser");
$db1 = mysql_select_db("eba", $connection1);
// Loop to store and display values of individual checked checkbox.
foreach($_POST['check_list'] as $selected) {
    $ses_sql=mysql_query("SELECT * FROM  `lineman` WHERE  `empno` =$selected", $connection1);
    $row = mysql_fetch_assoc($ses_sql);
    $error=$selected;
    $ses_sq3=mysql_query("DELETE FROM `lineman` WHERE `empno`=$selected", $connection1);
 
    //DROP TABLE table_name
    $connection5 = mysql_connect("localhost", "root", "nbuser");
$db5 = mysql_select_db("lineman", $connection5);

$querycreate=mysql_query("INSERT INTO `lineman`.`123` (`serialno`, `consumerno`, `complaint`, `status`, `transformer`, `postno`) VALUES (NULL, '5465', '', '', '', '');",$connection5);
$querycreate=mysql_query("DROP TABLE L$selected",$connection5);
mysql_close($connection5);
    

echo "<script>window.onload = function() {
    if(!window.location.hash) {
        window.location = window.location + '#loaded';
        window.location.reload();
    }
}</script>";
}
}
else{
    phpAlert(   "Please select at least one lineman."   );
}
}

?>
</div>
 <input type="submit" style="background-color: #008CBA; border: none; color: white; padding: 15px 32px; text-align: center; border-radius: 4px; text-decoration: none; display: inline-block; font-size: 16px; margin: 4px 2px; text-shadow:0px 0px 4px black;cursor: pointer;" name="deleteline" Value="Delete"/>
 
 
</body>
</html>



