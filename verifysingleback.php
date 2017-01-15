 <?php
 if(isset($_POST['submit'])){
            $tempo="inside isset";
            if ($_POST['submit']=='Update Status') {
                $category=$_POST['category'];
                $document='';
                $status='';
                $count=1;
                if(isset($_POST['docs'])){
                    $document=$document." [".$count." ".$_POST['docs']."]";
                    $count++;
                }if(isset($_POST['docs1'])){
                    $document=$document." [".$count." ".$_POST['docs1']."]";
                    $count++;
                }if(isset($_POST['docs2'])){
                    $document=$document." [".$count." ".$_POST['docs2']."]";
                    $count++;
                }if(isset($_POST['docs3'])){
                    $document=$document." [".$count." ".$_POST['docs3']."]";
                    $count++;
                }if(isset($_POST['docs4'])){
                    $document=$document." [".$count." ".$_POST['docs4']."]";
                    $count++;
                }if(isset($_POST['docs5'])){
                    $document=$document." [".$count." ".$_POST['docs5']."]";
                    $count++;
                }if(isset($_POST['docs6'])){
                    $document=$document." [".$count." ".$_POST['docs6']."]";
                    $count++;
                }
                if($_POST['status']!=''){
                $status="Attention:".$_POST['status'];}
                $statusreport=$category;
                if($category=='Requesting Documents'){
                    $statusreport=$statusreport.":".$document;
                }
                $statusreport=$statusreport." ".$status;
               // $tempo=$statusreport;
                $connection1 = mysql_connect("localhost", "root", "nbuser");
                $db1 = mysql_select_db("eba", $connection1);
                //UPDATE  `eba`.`newconnection` SET  `Status` =  'statusss' WHERE  `newconnection`.`serialno` =20;              
                $ses_sql1=mysql_query("UPDATE  `eba`.`newconnection` SET  `Status` =  '$statusreport' WHERE  `newconnection`.`serialno` ='$serial' ;", $connection1);
           
}

        if ($_POST['submit']=='Approve') {
            $consumerno='';
            $sectionno='';
            $postno='';
            $transformer='';
            $phase='';
            if($_POST['consumerno']!=''){
                
            $tempo="inside consumer";
                $erconsumerno=$_POST['consumerno'];
            }
            else {
                
            $tempo="inside";
                $erconsumerno="<font color=red> * </font>";
            }
            if($_POST['sectionno']!=''){
                $sectionno=$_POST['sectionno'];
            }else {
                $ersectionno="<font color=red> * </font>";
            }
            if($_POST['transformer']!=''){
                $transformer=$_POST['transformer'];
            }else {
                $ertransformer="<font color=red> * </font>";
            }
            if($_POST['postno']!=''){
                $postno=$_POST['postno'];
            }else {
                $erpostno="<font color=red> * </font>";
            }
            if($_POST['phase']!=''){
                $phase=$_POST['phase'];
            }else {
                $erphase="<font color=red> * </font>";
            }
            $connection1 = mysql_connect("localhost", "root", "nbuser");
$db1 = mysql_select_db("eba", $connection1);
$ses_sql1=mysql_query("SELECT * FROM  `newconnection` WHERE  `serialno` =$serial ", $connection1);
$row = mysql_fetch_assoc($ses_sql1);
            $connection2 = mysql_connect("localhost", "root", "nbuser");
            $db2 = mysql_select_db("eba", $connection2);
            //INSERT INTO `eba`.`consumerdetails` (`serialno`, `name`, `organisation`, `authorityname`, `category`, `buildingname`, `buildingnumber`, `street`, `place`, `pincode`, `village`, `phone`, `buildingname1`, `buildingnumber1`, `street1`, `place1`, `pincode1`, `village1`, `statusofapplicant`, `powerintensive`, `crossproperty`, `consentsobtained`, `supplypurpose`, `connectiontype`, `panno`, `aadhar`, `aconstruct`, `plotsize`) VALUES (NULL, 'dmbkjh', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
            $ses_sql2=mysql_query("INSERT INTO `eba`.`consumerdetails` (`serialno`, `name`, `organisation`, `authorityname`, `category`, `buildingname`, `buildingnumber`, `street`, `place`, `pincode`, `village`, `phone`, `buildingname1`, `buildingnumber1`, `street1`, `place1`, `pincode1`, `village1`, `statusofapplicant`, `powerintensive`, `crossproperty`, `consentsobtained`, `supplypurpose`, `connectiontype`, `panno`, `aadhar`, `aconstruct`, `plotsize`) VALUES (NULL, '{$row['name']}', '{$row['organisation']}', '{$row['authorityname']}', '{$row['category']}', '{$row['buildingname']}', '{$row['buildingnumber']}', '{$row['street']}', '{$row['place']}', '{$row['pincode']}', '{$row['village']}', '{$row['phone']}', '{$row['buildingname1']}', '{$row['buildingnumber1']}', '{$row['street1']}', '{$row['place1']}', '{$row['pincode1']}', '{$row['village1']}', '{$row['statusofapplicant']}', '{$row['powerintensive']}', '{$row['crossproperty']}', '{$row['consentsobtained']}', '{$row['supplypurpose']}', '{$row['connectiontype']}', '{$row['panno']}', '{$row['aadhar']}', '{$row['aconstruct']}', '{$row['plotsize']}');", $connection2);
            //$ses_query=mysql_query("INSERT INTO `eba`.`consumerdetails` (`serialno`, `name`, `organisation`, `authorityname`, `category`, `buildingname`, `buildingnumber`, `street`, `place`, `pincode`, `village`, `phone`, `buildingname1`, `buildingnumber1`, `street1`, `place1`, `pincode1`, `village1`, `statusofapplicant`, `powerintensive`, `crossproperty`, `consentsobtained`, `supplypurpose`, `connectiontype`, `panno`, `aadhar`, `aconstruct`, `plotsize`) VALUES (NULL, {$row['name']}, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');",$connection2);
            
            
            
        }
        }
        ?>