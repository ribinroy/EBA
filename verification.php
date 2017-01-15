
<?php
include('main.php');
?>
<html>
<head>
<title>Verifications | EBA</title>
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
    position: fixed !important; 
    
    
</style>
</head>
<body>
    <div style="text-align:center;color:#FFFFFF;text-shadow: 0px 0px 6px #000000;font-size:45px;">
        Verifications
        
    </div>
    
    
    <div class="datagrid">
        <form action="verification.php" method="post"> 
            <table>
                <thead><tr><th> Serial No.</th><th>Name</th><th> Phone </th><th>Name of Building</th><th>Category</th><th>Status</th></tr></thead>
<tbody>
         <?php
extract($_POST);
$connection1 = mysql_connect("localhost", "root", "nbuser");
$db1 = mysql_select_db("eba", $connection1);
$ses_sql1=mysql_query("SELECT * FROM `newconnection` WHERE  `Status` NOT LIKE  'Approved'", $connection1);
$rows = mysql_num_rows($ses_sql1);
$flag=1;
if (mysql_num_rows($ses_sql1) > 0) {
while($row = mysql_fetch_assoc($ses_sql1)) {
        if($flag==1){
      echo "<tr><td>{$row['serialno']}<td><a href='verifysingle.php?serial={$row['serialno']}'>{$row['name']}</a></td></td><td>{$row['phone']}</td><td>{$row['buildingname']}</td><td>{$row['category']}</td><td>{$row['Status']}</td></tr>";
         $flag=0;
       }
        else {
      echo "<tr><td>{$row['serialno']}<td><a href='verifysingle.php?serial={$row['serialno']}'>{$row['name']}</a></td></td><td>{$row['phone']}</td><td>{$row['buildingname']}</td><td>{$row['category']}</td><td>{$row['Status']}</td></tr>";
           $flag=1;  
        } 
}
}
else{
    echo "<tr><td><div align=left style=color:red;>none</div></td></tr>\n";
}

mysql_close($connection1); 
//}
?>
    
</tbody>
</table>

</div>
    
    </form>
</body>
</html>



