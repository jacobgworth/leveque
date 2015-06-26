<?php 
//session_start();
 
  include("header.php");
  //include("header2.php");
  
 ?>
  <!-- Load jQuery and the validate plugin -->
    <!-- Load jQuery and the validate plugin -->
	<!--<script src="//code.jquery.com/jquery-1.9.1.js"></script>
    <script type="text/javascript" src="js/common.js"></script>-->
	
	<script src="js/jquery.validate.js"></script>
	<link rel="stylesheet" href="css/reveal.css">
	<script src="js/jquery-pack.js" type="text/javascript"></script>
	<script src="js/fileuploader.js" type="text/javascript"></script>
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.reveal.js" type="text/javascript"></script>
	<script src="js/jquery.imgareaselect.min.js" type="text/javascript"></script>
	<script src="js/ckeditor/ckeditor.js"></script>

        <style>
     
            
			
.add_camp_form li{ list-style:none; padding: 25px 0 10px; }			
.add_camp_form {
  -moz-user-select: text;
  color: #616161;
  cursor: pointer;
  font-family: Lato,"Helvetica Neue",Helvetica,Arial,sans-serif;
  font-size: 24px;
  line-height: 140%;

  position: relative;
  text-align: left;
}

.add_camp_form li label {
	font-size: 19px;
	font-weight: 300;
	font-family: Lato,"Helvetica Neue",Helvetica,Arial,sans-serif;
	margin-bottom: 0;
}
.add_camp_form li label.error {
		border: 1px solid red;
		color:red;
		font-size: 16px;
		padding-left: 10px;
	}
.add_camp_form li input, .add_camp_form li select, .add_camp_form textarea {
	border-radius: 5px;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	border: 2px dashed #46cbe6;
	border: 2px dashed rgba(70,203,230,.4);
	-moz-transition: border 0 linear 600ms,border-radius 0 linear 600ms;
	-webkit-transition: border 0 linear 600ms,border-radius 0 linear 600ms;
	-o-transition: border 0 linear 600ms,border-radius 0 linear 600ms;
	transition: border 0 linear 600ms,border-radius 0 linear 600ms;
	height: 40px;
	list-style: outside none none;
	width: 100%;
	font-size: 17px;
	padding-left: 10px;
	box-sizing: border-box;
	outline: none;
	font-weight: 300;
}
 

.add_camp_form li textarea {
    border: 1px dashed #46cbe6;
    height: 100px;
    width: 100%;
}

.add_camp_form li input:focus, .add_camp_form textarea:focus, .add_camp_form select:focus{border-bottom:2px dashed #46cbe6;}
.add_camp_form li input[type="submit"] {
  display: inline-block;
  cursor: default;
  background-color: #46cbe6;
  width: auto;
  line-height: 1;
  padding: 6px 17px;
  font-size: 25px;
  border-radius: 3px;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  text-align: center;
  font-weight: 700;
  font-family: Lato,"Helvetica Neue",Helvetica,Arial,sans-serif;
  max-width: 610px;
  overflow: hidden;
  -moz-transition: background-color ease-out 100ms 0ms;
  -webkit-transition: background-color ease-out 100ms 0ms;
  -o-transition: background-color ease-out 100ms 0ms;
  transition: background-color ease-out 100ms 0ms;
  color: #0e5b6b;
  border-top: 1px solid #30c5e3;
  border-left: 1px solid #1cb0ce;
  border-right: 1px solid #1cb0ce;
  border-bottom: 1px solid #1792ab;
  box-shadow: inset 0 1px 0 rgba(255,255,255,.35);
  -webkit-box-shadow: inset 0 1px 0 rgba(255,255,255,.35);
  -moz-box-shadow: inset 0 1px 0 rgba(255,255,255,.35);
  box-shadow: inset 0 1px 0 rgba(255,255,255,.35),0 2px 2px rgba(0,0,0,.0225),transparent 0 0 0,transparent 0 0 0,transparent 0 0 0;
  -webkit-box-shadow: inset 0 1px 0 rgba(255,255,255,.35),0 2px 2px rgba(0,0,0,.0225),transparent 0 0 0,transparent 0 0 0,transparent 0 0 0;
  -moz-box-shadow: inset 0 1px 0 rgba(255,255,255,.35),0 2px 2px rgba(0,0,0,.0225),transparent 0 0 0,transparent 0 0 0,transparent 0 0 0;
  text-shadow: rgba(255,255,255,.4) 0 1px 1px;
  cursor: pointer;
}
.add_camp_form li input[type="submit"]:hover{ background-color: #73d8ec; }
.question {
  -moz-user-select: text;
  color: #616161;
  cursor: pointer;
  font-family: Lato,"Helvetica Neue",Helvetica,Arial,sans-serif;
  font-size: 24px;
  line-height: 140%;
  padding: 0 0 0 50px;
  position: relative;
  text-align: left;
}
.item {
  color: #46cbe6;
  font-family: Lato,"Helvetica Neue",Helvetica,Arial,sans-serif;
  font-size: 16px;
  line-height: 35px;
  margin-right: 30px;
  padding: 0;
  position: absolute;
  text-align: right;
  width: 20px;
}
.item .arrow .arrow-right {
  border-bottom: 5px solid transparent;
  border-left: 5px solid;
  border-top: 5px solid transparent;
  height: 0;
  margin-left: 7px;
  margin-top: -3px;
  width: 0;
}
.item .arrow {
  background-color: #46cbe6;
  height: 4px;
  left: 25px;
  position: absolute;
  top: 16px;
  width: 7px;
}
            </style>
            
       <! -- jquery form validation code -- !>
	   
          <script>
				
		
            $(function(){
			/* $.validator.addMethod("valueNotEquals", function(value, element, arg){
  return arg != value;
 }, "Value must not equal arg."); */
			
			$('#form-submit').click(function(){
			
			
			
				$("#myform").validate({
					rules:{
						name:{
							required:true,
							minlength:2,
							maxlength:200
							//remote: "ajax_unique.php?data=name"
							},
						
						campaignname:{
							required:true,
							minlength:2,
							maxlength:200
							},
						birthmonth: { valueNotEquals: "default" },
						
						email:{
							required:true,
							email: true
							//remote: "ajax_unique.php?data=email"
							
							},
						phone:{
							required:true
							
							},
												
						},
						
						message:{
						name: {
						   required:"Please enter your name",
						   minlength: "Please enter a minimun 2 chars",
						   //remote: "Username is already exists"
						},
							
							campaignname:"Please enter your Campains Name",
							
							birthmonth: { valueNotEquals: "Please select an item!" },
							
							phone:{
								required:"Please enter number"
								
								
								},
					email:{ 
						   required: "Please enter your email",
						   email: "Please enter a valid email address",
						   //remote: "Email is already exists"
						}
                            
							},
							
							
							
					 submitHandler: function(form) {
                      form.submit();
				  }
					
					
					});  
			});
		});


            
            
            </script>
			
<!----------------------->
<script type="text/javascript">
	
	$(document).ready(createUploader);

	$(document).ready(function(){
		var thumb = $(".thumbnail");
		       
		$('#thumbnail').imgAreaSelect({ aspectRatio: '1:1', onSelectChange: preview, parent: '#myModal'});
		
		$('#save_thumb').click(function() {
			var x1 = $('#x1').val();
			var y1 = $('#y1').val();
			var x2 = $('#x2').val();
			var y2 = $('#y2').val();
			var w = $('#w').val();
			var h = $('#h').val();
			if(x1=="" || y1=="" || x2=="" || y2=="" || w=="" || h==""){
				alert("You must make a selection first");
				return false;
			}
			else{
				$.ajax({
					type : 'POST',
					url: "crop.php",
					data: "filename="+$('#filename').val()+"&x1="+x1+"&x2="+x2+"&y1="+y1+"&y2="+y2+"&w="+w+"&h="+h,
					success: function(data){
						thumb.attr('src', 'uploads/thumb_'+$('#filename').val());
						$('#pflfilename').val('thumb_'+$('#filename').val());
						$('.close-reveal-modal').click();
						$('#thumbnail').imgAreaSelect({ hide: true, x1: 0, y1: 0, x2: 0, y2: 0 });
						// let's clear the modal
						$('#thumbnail').attr('src', '');
						$('#thumb_preview').attr('src', '');
						$('#filename').attr('value', '');
					}
				});
				
				return true;
			}
		});
	});
	
    function createUploader(){ 
    	var button = $('#upload');           
        var uploader = new qq.FileUploaderBasic({
            button: document.getElementById('file-uploader'),
            action: 'script.php',
            allowedExtensions: ['jpg', 'gif', 'png', 'jpeg'],
            onSubmit: function(id, fileName) {
				// change button text, when user selects file			
				button.text('Uploading');
				// Uploding -> Uploading. -> Uploading...
				interval = window.setInterval(function(){
					var text = button.text();
					if (text.length < 13){
						button.text(text + '.');					
					} else {
						button.text('Uploading');				
					}
				}, 200);
			},
            onComplete: function(id, fileName, responseJSON){
            	button.text('Create Thumbnail');
				window.clearInterval(interval);
				
            	if(responseJSON['success'])
            	{
            		load_modal(responseJSON['filename']);
					}},
                debug: true
            });           
    }
        
    function load_modal(filename){
    	$('#thumbnail').attr('src', "uploads/"+filename);
		$('#thumb_preview').attr('src', "uploads/"+filename);
		$('#filename').attr('value', filename);
		// IE fix
		if ( $.browser.msie ) {$('#thumb_preview_holder').remove();}
		
		
		$('#myModal').reveal();
		
	}

	function preview(img, selection) { 
		var mythumb = $('#thumbnail');
		var scaleX = 156/selection.width; 
		var scaleY = 156/selection.height; 
		
		$('#thumbnail + div > img').css({ 
			width: Math.round(scaleX * mythumb.outerWidth() ) + 'px', 
			height: Math.round(scaleY * mythumb.outerHeight()) + 'px',
			marginLeft: '-' + Math.round(scaleX * selection.x1) + 'px', 
			marginTop: '-' + Math.round(scaleY * selection.y1) + 'px' 
		});
		$('#x1').val(selection.x1);
		$('#y1').val(selection.y1);
		$('#x2').val(selection.x2);
		$('#y2').val(selection.y2);
		$('#w').val(selection.width);
		$('#h').val(selection.height);
	}
</script>
			
	
	</head>
	
	
	<body>
	<div class="subnav">
    <div class="w-container">
      <h2 class="subnav-title"><span class="subnav-back-text"></span><a href="#" class="subnav-back-text dashboardHeading">Dashboard</a>&nbsp;</h2><a href="create-campaign.php" class="button local-nav createCampaign">create new campaign</a>
    </div>
  </div>	
	<div class="w-container">
<?php if($_SESSION['login_username']=='admin') { ?>		
<table cellpadding="10" border="0">
<tr>
	<th>S.No.</th>
	<th>Campaigns</th>
	<th>Created By</th>
	<th>Phone</th>
	<th>Raised/Goal</th>
	<th>Edit</th>
</tr>

<?php
$count = 0;
$query = "SELECT * FROM `tblcampaigns`"; 
$result = mysql_query($query) or die(mysql_error());
while($campaigns = mysql_fetch_array($result)) {
$totalDonation = 0;
$count = $count+1;
$donationsquery = mysql_query("SELECT SUM(amount) FROM campaign_donation WHERE status='success' and cid = ".$campaigns['campaigns_id']);
$total = mysql_fetch_array($donationsquery);
$totalDonation = $total['SUM(amount)'];
if(!$totalDonation) {$totalDonation = 0;}
 echo '<tr>
	<td>'.$count.'</td>
	<td>'.$campaigns['campaignsname'].'</td>
	<td>'.$campaigns['name'].'</td>
	<td>'.$campaigns['phone'].'</td>
	<td>$'.$totalDonation.'/ $'.$campaigns['campaigngoal'].'</td>
	<td><a href="editcampaign.php?cid='.$campaigns['campaigns_id'].'">Edit</a></td>
</tr>';
}	
?>




</table>
<?php } ?>
</div>
