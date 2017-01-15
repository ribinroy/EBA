<?php
include('formback.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>



  <meta charset="utf-8">
  <meta name="generator" content="jqueryform.com">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

  <title> Application for Service Connections </title>
  

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
    text-shadow:0px 0px 6px black;
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
 <body background="form.jpg"/>
 <div class="parallax">
     <br>
     <div style="font-size: 30px;text-align:center;">
         Application Registration Form
     </div>
<div class="container ">
<form data-licenseKey="" name="jqueryform-5fc597" id="jqueryform-5fc597" action='' method='post' enctype='multipart/form-data' novalidate autocomplete="on">
<input type="hidden" name="method" value="validateForm">
<input type="hidden" id="serverValidationFields" name="serverValidationFields" value="">



<div class="form-group c52 required" data-cid="c52">
  <label class="control-label" for="c52">Name</label>


<input type="text" class="form-control" id="c52" placeholder="Name" name="name"    
    data-rule-required="true" 
    data-rule-alphanumeric="true"  />

<?php
  echo "<font color=red>".$ername."</font>";
?>
  
</div>




<div class="form-group c27 " data-cid="c27">
  <label class="control-label" for="c27">Name of Organisation</label>


<input type="text" class="form-control" id="c27" name="organisation" value=""  aria-describedby="c27-help-block"   />



  <p id="c27-help-block" class="description">If connection is required for an Organisation</p>
  
</div>




<div class="form-group c32 " data-cid="c32">
  <label class="control-label" for="c32">Name of the authority / developer of area / SEZ</label>


<input type="text" class="form-control" id="c32" name="authorityname" value=""  aria-describedby="c32-help-block"   />



  <p id="c32-help-block" class="description">If in industrial area / SEZ etc.</p>
  
</div>




<div class="form-group c37 required" data-cid="c37">
  <label class="control-label" for="c37">Category</label>


<select class="form-control" id="c37" name="category"   
    data-rule-required="true" >
  <option  value="">- Select -</option>
  <option  value="Individual / Proprietary">Individual / Proprietary</option>
  <option  value="Partnership">Partnership</option>
  <option  value="Private Ltd">Private Ltd</option>
  <option  value="Public Ltd">Public Ltd</option>
  <option  value="Society">Society</option>
  <option  value="Govt Department">Govt Department</option>
  <option  value="Govt Undertaking">Govt Undertaking</option>
  </select>
<?php
  echo "<font color=red>".$ercategory."</font>";
?>
  
</div>




<div class="form-group c65 " data-cid="c65">
  <label class="control-label" for="c65">Address of premises where electricity connection is required</label>


  
</div>




<div class="form-group c71 required" data-cid="c71">
  <label class="control-label" for="c71">Name of Building </label>


<input type="text" class="form-control" id="buildingnameid" name="buildingname" value=""    
    data-rule-required="true"  />

<?php
  echo "<font color=red>".$erbuildingname."</font>";
?>
  
</div>




<div class="form-group c43 required" data-cid="c43">
  <label class="control-label" for="c43">Building Number </label>


<input type="text" class="form-control" id="buildingnumberid" name="buildingnumber" value=""    
    data-rule-alphanumeric="true" 
    data-rule-required="true"  />

<?php
  echo "<font color=red>".$erbuildingnumber."</font>";
?>
  
</div>




<div class="form-group c78 required" data-cid="c78">
  <label class="control-label" for="c78">Lane / street </label>


<input type="text" class="form-control" id="streetid" name="street" value=""    
    data-rule-alphanumeric="true" 
    data-rule-required="true"  />

<?php
  echo "<font color=red>".$erstreet."</font>";
?>
  
</div>




<div class="form-group c85 required" data-cid="c85">
  <label class="control-label" for="c85">Place / Land mark </label>


<input type="text" class="form-control" id="placeid" name="place" value=""    
    data-rule-alphanumeric="true" 
    data-rule-required="true"  />

<?php
  echo "<font color=red>".$erplace."</font>";
?>
  
</div>




<div class="form-group c92 required" data-cid="c92">
  <label class="control-label" for="c92">Pin Code</label>


<input type="number" class="form-control" id="pincodeid" name="pincode" value=""    
    data-rule-alphanumeric="true" 
    data-rule-required="true"  />

<?php
  echo "<font color=red>".$erpincode."</font>";
?>
  
</div>




<div class="form-group c99 required" data-cid="c99">
  <label class="control-label" for="c99">Village/Survey No. </label>


<input type="text" class="form-control" id="villageid" name="village" value=""    
    data-rule-alphanumeric="true" 
    data-rule-required="true"  />

<?php
  echo "<font color=red>".$ervillage."</font>";
?>
  
</div>




<div class="form-group c106 required" data-cid="c106">
  <label class="control-label" for="c106">Phone</label>


<input type="number" class="form-control" id="phoneid" name="phone" value=""  
       data-rule-required="true" 
    />

<?php
  echo "<font color=red>".$erphone."</font>";
?>
  
</div>




<div class="form-group c154 " data-cid="c154">
  <label class="control-label" for="c154">Present address for communication (If same as above, set empty)</label>


  
</div>




<div class="form-group c111 " data-cid="c111">
  <label class="control-label" for="c111">Name of Building </label>


<input type="text" class="form-control" id="buildingnameid1" name="buildingname1" value=""    
     />


  
</div>




<div class="form-group c117 " data-cid="c117">
  <label class="control-label" for="c117">Building Number </label>


<input type="text" class="form-control" id="c117" name="buildingnumber1" value=""    
    data-rule-alphanumeric="true"  />


  
</div>




<div class="form-group c124 " data-cid="c124">
  <label class="control-label" for="c124">Lane / street  </label>


<input type="text" class="form-control" id="c124" name="street1" value=""    
    data-rule-alphanumeric="true"  />


  
</div>




<div class="form-group c130 " data-cid="c130">
  <label class="control-label" for="c130">Place / Land mark </label>


<input type="text" class="form-control" id="c130" name="place1" value=""    
    data-rule-alphanumeric="true"  />


  
</div>




<div class="form-group c136 " data-cid="c136">
  <label class="control-label" for="c136">Pin Code </label>


<input type="number" class="form-control" id="c136" name="pincode1" value=""    
    data-rule-alphanumeric="true"  />


  
</div>




<div class="form-group c142 " data-cid="c142">
  <label class="control-label" for="c142">Village/Survey No.  </label>


<input type="text" class="form-control" id="c142" name="village1" value=""    
    data-rule-alphanumeric="true"  />


  
</div>









<div class="form-group c174 required" data-cid="c174">
  <label class="control-label" for="c174">Status of applicant</label>


<select class="form-control" id="c174" name="statusofapplicant"   
    data-rule-required="true" >
  <option  value="">- Select -</option>
  <option  value="Owner">Owner</option>
  <option  value="Tenant">Tenant</option>
  </select>

  <?php
  echo "<font color=red>".$erstatusofapplicant."</font>";
?> 
</div>




<div class="form-group c186 " data-cid="c186">
  <label class="control-label" for="c186">Whether Power Intensive or not</label>


<select class="form-control" id="c186" name="powerintensive"   
    >
  <option  value="">- Select -</option>
  <option  value="Yes">Yes</option>
  <option  value="No">No</option>
  </select>

  <?php
  echo "<font color=red>".$erpowerintensive."</font>";
?>
</div>




<div class="form-group c191 " data-cid="c191">
  <label class="control-label" for="c191">Whether properties of others need to be crossed over</label>


<select class="form-control" id="c191" name="crossproperty"   
    >
  <option  value="">- Select -</option>
  <option  value="Yes">Yes</option>
  <option  value="No">No</option>
  </select>

  
</div>




<div class="form-group c196 " data-cid="c196">
  <label class="control-label" for="c196">If YES, whether Consents obtained in all cases</label>


<select class="form-control" id="c196" name="consentsobtained"   
    >
  <option  value="">- Select -</option>
  <option  value="Yes">Yes</option>
  <option  value="No">No</option>
  </select>

  
</div>




<div class="form-group c201 required " data-cid="c201">
  <label class="control-label" for="c201">Purpose of Supply</label>


<select class="form-control" id="c201" name="supplypurpose"   
    >
  <option  value="">- Select -</option>
  <option  value="Domestic">Domestic</option>
  <option  value="Commercial">Commercial</option>
  <option  value="Industrial">Industrial</option>
  <option  value="Agricultural">Agricultural</option>
  <option  value="Others">Others</option>
  </select>

  <?php
  echo "<font color=red>".$ersupplypurpose ."</font>";
?>
</div>




<div class="form-group c218 required" data-cid="c218">
  <label class="control-label" for="c218">Type of connection</label>


<select class="form-control" id="c218" name="connectiontype"   
    data-rule-required="true" >
  <option  value="">- Select -</option>
  <option  value="Permanent">Permanent</option>
  <option  value="Temporary">Temporary</option>
  <option  value="Seasonal">Seasonal</option>
  </select>

  <?php
  echo "<font color=red>".$erconnectiontype."</font>";
?>
</div>




<div class="form-group c206 required" data-cid="c206">
  <label class="control-label" for="c206">PAN No.</label>


<input type="number" class="form-control " id="c206" name="panno" value=""    
    data-rule-number="true" 
    data-rule-max="10"  
    data-rule-min="10"  
    data-rule-required="true"   />

  <?php
  echo "<font color=red>".$erpanno."</font>";
?>
</div>




<div class="form-group c211 " data-cid="c211">
  <label class="control-label" for="c211">Aadhar No.</label>


<input type="number" class="form-control " id="c211" name="aadhar" value=""    
    data-rule-number="true" 
    data-rule-max="12"  
    data-rule-min="12"    />

  
</div>




<div class="form-group c223 required" data-cid="c223">
  <label class="control-label" for="c223">Constructed area (m^2)</label>


<input type="number" class="form-control" id="c223" name="aconstruct" value=""    
    data-rule-alphanumeric="true" data-msg-alphanumeric="numbers"  />

<?php
  echo "<font color=red>".$eraconstruct."</font>";
?>
  
</div>




<div class="form-group c228 required" data-cid="c228">
  <label class="control-label" for="c228">Plot size (m^2) </label>


<input type="number" class="form-control" id="c228" name="plotsize" value=""    
    data-rule-alphanumeric="true" data-msg-alphanumeric="numbers"  />


  
</div>



<div class="form-group submit c100 " data-cid="c100" style="position: relative;">
  <label class="control-label sr-only" for="c100"  style="display: block;">Submit Button</label>
 

  <div class="progress" style="display: none; z-index: -1; position: absolute;">
    <div class="progress-bar progress-bar-striped active" role="progressbar" style="width:100%">
    </div>
  </div>

<?php if($errorfinal!=''){echo "<font color=red>".$errorfinal."</font><br><br>";} ?>
  <button type="submit" class="btn btn-primary btn-lg" name="submit" value=" Login " style="z-index: 1;">
  		Submit
  </button>

  <p class="error bg-warning" style="display:none;">
    Please check the required fields.  </p>
  
</div>
</form>

</div>
</div>

<div class="container jf-thankyou" style="display:none;" data-redirect="" data-seconds="">
  <h3>Application waiting for approval.</h3>
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