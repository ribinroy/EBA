<?php
include('formback.php');
if($consumerno==''){
            
header('Location: Error.php'); 
        }
?>
<!DOCTYPE html>
<html lang="en">

<head>



  <meta charset="utf-8">
  <meta name="generator" content="jqueryform.com">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

  <title> Complaint Registration Form </title>
  

  <!-- Bootstrap -->
  <link href="select1.css" rel="stylesheet">
  <link href="select2.css" rel="stylesheet">
  <link href="select3.css" rel="stylesheet">
  

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <link href="vendor.css" rel="stylesheet">
<style type="text/css">
/* IE10+ */ 
/*
background-image: -ms-radial-gradient(center, ellipse closest-corner, #FFFFFF 0%, #F0FEFF 100%);
 
background-image: -moz-radial-gradient(center, ellipse closest-corner, #FFFFFF 0%, #F0FEFF 100%);

background-image: -o-radial-gradient(center, ellipse closest-corner, #FFFFFF 0%, #F0FEFF 100%);

background-image: -webkit-gradient(radial, center center, 0, center center, 286, color-stop(0, #FFFFFF), color-stop(100, #F0FEFF));

background-image: -webkit-radial-gradient(center, ellipse closest-corner, #FFFFFF 0%, #F0FEFF 100%);

background-image: radial-gradient(ellipse closest-corner at center, #FFFFFF 0%, #F0FEFF 100%);

*/

.parallax {
    /* The image used */
    background-image: url("form.jpg");
    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    text-shadow:0px 0px 4px black;
    color:white;
}





body{
  background-color: transparent;
}

.jf-form{
  margin-top: 28px;
}

.jf-option-box{
  display: none;
  margin-left: 8px;
}

.jf-hide{
  display: none;
}

.jf-disabled {
    background-color: #eeeeee;
    opacity: 0.6;
    pointer-events: none;
}

/* 
overwrite bootstrap default margin-left, because the <label> doesn't contain the <input> element.
*/
.checkbox input[type=checkbox], .checkbox-inline input[type=checkbox], .radio input[type=radio], .radio-inline input[type=radio] {
  position: absolute;
  margin-top: 4px \9;
  margin-left: 0px;
}

div.form-group{
  padding: 8px 8px 4px 8px;
}

.mainDescription{
  margin-bottom: 10px;
}
.responsive img{
  width: 100%;
}

p.error, p.validation-error{
  padding: 5px;
}

p.error{
  margin-top: 10px;
  color:#a94442;
}

p.server-error{
  font-weight: bold;
}

div.thumbnail{
  position: relative;
  text-align: center;
}

div.thumbnail.selected p{
  color: #ffffff;
}

div.thumbnail .glyphicon-ok-circle{
  position: absolute;
  top: 16px;
  left: 16px;
  color: #ffffff;
  font-size: 32px;
}

.jf-copyright{color: #888888; display: inline-block; margin: 16px;display:none;}

.form-group.required .control-label:after {
    color: #dd0000;
    content: "*";
    margin-left: 6px;
}

.submit .btn.disabled, .submit .btn[disabled]{
  background: transparent;
  opacity: 0.75;
}

/* for image option with span text */
.checkbox label > span, .radio label > span{
  display: block;
}

.form-group.inline .control-label,
.form-group.col-1 .control-label,
.form-group.col-2 .control-label,
.form-group.col-3 .control-label
{
  display: block;
}

.form-group.inline div.radio,
.form-group.inline div.checkbox{
  display: inline-block;
}

.form-group.col-1 div.radio,
.form-group.col-1 div.checkbox{
  display: block;
}

.form-group.col-2 div.radio,
.form-group.col-2 div.checkbox{
  display: inline-block;
  width: 48%;
}

.form-group.col-3 div.radio,
.form-group.col-3 div.checkbox{
  display: inline-block;
  width: 30%;
}

</style>
</head>
<body>
    
 <div class="parallax">
     <br>
     <div style="font-size: 30px;text-align:center;">
         Complaint Registration Form 
     </div>
<div class="container ">
<form data-licenseKey="" name="jqueryform-5fc597" id="jqueryform-5fc597" action='' method='post' enctype='multipart/form-data' novalidate autocomplete="on">
<input type="hidden" name="method" value="validateForm">
<input type="hidden" id="serverValidationFields" name="serverValidationFields" value="">


<div class="form-group c52 required" data-cid="c52">
  <label class="control-label" for="c52">Complaint</label>


<textarea type="textarea" rows="5" cols="10" style="height:100px" class="form-control" id="c52" placeholder="Complaints" name="complaint"    
    data-rule-required="true" 
    data-rule-alphanumeric="true"  ></textarea>

<?php
  echo "<font color=red>".$ercomplaint."</font>";
?>
  
</div>
<table><tr><td style="width:300px;">
<div style="padding-left:30px;">
<input type="checkbox"  name="complaintcheck" value="Voltage Variation">Voltage Variation<br><br>
<input type="checkbox" name="complaintcheck1" value="Line Complaint">Line Complaint<br><br>
<input type="checkbox" name="complaintcheck2" value="Transformer Complaint">Transformer Complaint<br>
</div>
        </td><td>
          <div class="form-group c52 " data-cid="c52">
  <label class="control-label" for="c52">Post Number</label>


<input type="text" class="form-control" id="c52" placeholder="Post Number (Explicit)" name="postno"    
    data-rule-required="true" 
    data-rule-alphanumeric="true"  />

<?php
  echo "<font color=red>".$erpostno."</font>";
?>
  
</div>
            
            <div class="form-group c52 " data-cid="c52">
  <label class="control-label" for="c52">Transformer</label>


<input type="text" class="form-control" id="c52" placeholder="Transformer (Explicit)" name="transformer"    
    data-rule-required="true" 
    data-rule-alphanumeric="true"  />

<?php
  echo "<font color=red>".$ertransformer."</font>";
?>
  
</div>
            
            
        </td></tr>
</table>
<div class="form-group c52 " data-cid="c52">
  <label class="control-label" for="c52">Section Number</label>


<input type="number" class="form-control" id="c52" placeholder="Section Number (Explicit)" name="sectionno"    
    data-rule-required="true" 
    data-rule-alphanumeric="true"  />

<?php
  echo "<font color=red>".$ersectionno."</font>";
?>
  
</div>












<?php if($errorfinal!=''){echo "<font color=red>".$errorfinal."</font><br><br>";} ?>
  <button type="submit" class="btn btn-primary btn-lg" name="submit" value=" Login " style="z-index: 1;">
  		Register
  </button>

<br>
<br>
<br>
<br>
  
</div>
</form>

</div>
</div>

<!-- ----------------------------------------------- -->

<!--
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.0/js/bootstrap-datepicker.min.js"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/additional-methods.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-scrollTo/2.1.0/jquery.scrollTo.min.js"></script>
<script src="vendor.js" ></script>

-->


<!-- [ Start: Select2 support ] ---------------------------------- -->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.full.min.js"></script>
<!--<style type="text/css">
.select2-hidden-accessible{
	opacity: 0;
    width:1% !important;
}
.select2-container .select2-selection--single{
  height: 34px;
  padding-top: 2px;
  box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
  border: 1px solid #ccc;
}
.select2-container--default .select2-selection--single .select2-selection__arrow{
  top: 4px;
}
</style>-->
<script type="text/javascript">
;(function(){
	
	function templateResult (obj) {
	  if (!obj.id) { return obj.text; }

	  var img = $(obj.element).data('imgSrc');
	  if( img ){
	    return $( '<span><img src="' + img + '" class="img-flag" /> ' + obj.text + '</span>' );
	  };

	  return obj.text;
	};
	 
	$(".jf-form select").css('width', '100%'); // make it responsive
	$(".jf-form select").select2({
	  templateResult: templateResult
	}).change( function(e){
	  $(e.target).valid();
	});

})();
</script>
<!-- [ End: Select2 support ] ---------------------------------- -->



<script type="text/javascript">
// dropdown fields
;(function(){

  var dataSource = {"c196":{"dependOn":"c186","remote":true,"options":[{"label":"- Select -","value":"#novalue","checked":false},{"label":"Yes","checked":false,"value":"Yes"},{"label":"No","checked":false,"value":"No"}]}};

  $(document).trigger( 'dependent:setup', dataSource );

})();
</script>

<script type="text/javascript">

	// start jqueryform initialization
	// --------------------------------
	JF.init('#jqueryform-5fc597');

	// watch form element change event to run jqueryform's formlogic
	// ---------------------------------------------------------------
	var logics = [
    {
        "disabled": false,
        "action": "",
        "selector": "",
        "match": "",
        "rules": [

        ]
    }
];
	$('input,input:radio,select').change(function(){
		$.formlogic( {logics: logics} );
	});
</script>

  </body>
</html>