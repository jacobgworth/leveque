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
	<link rel="stylesheet" href="css/mystyle.css">
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
		
	<div class="w-container">
		
<form name="regform" id="myform" enctype="multipart/form-data" action="insert.php" method="POST">
	
    <div class="add_camp_form">
<ul>
	<li>
		<div class="item">
			<span>1</span>
			<div class="arrow"><div class="arrow-right"></div></div>
		</div>
		<div class="question">
			<label>Your first and last name?*</label>
			<div class="description">What your mother calls you :)</div>
			<input type="text"  id="name"  name="name" required="true"/>
		</div>
	</li>
	 
	<li>
		<div class="item">
			<span>2</span>
			<div class="arrow"><div class="arrow-right"></div></div>
		</div>
		<div class="question"><label>Name you campaign*</label>
			<div class="description">For example: Bob's 23rd birthday! or Let's build a home for my 26th! or get creative with it -#LetsDoTheRightThing
			</div>
		<input type="text"  id="campaignname" name="campaignname" required="true" />
	  </div>
	</li>
 
	<li><div class="item">
				<span>3</span>
				<div class="arrow"><div class="arrow-right"></div></div>
			</div>
		 <div class="question"> <label>When's your b-day?</label>
		 <div class="description">We love sending crazy, happy birthday emails :)</div>
		  </div>
	</li>


	<li>
		 <div class="item">
				<span>a</span>
				<div class="arrow"><div class="arrow-right"></div></div>
			</div>
		 <div class="question">
		 <label>Month:</label>
		  <select name="birthmonth" >
			   <option value="0" selected="selected">Select an option</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
							</select>
					</div>
	</li>
	<li>
	<div class="item">
				<span>b</span>
				<div class="arrow"><div class="arrow-right"></div></div>
			</div>
		 <div class="question">

		 <label>Day:</label>

		<select name="birthday">
					   <option value="0" selected="selected">Select an option</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
							<option value="13">13</option>
							<option value="14">14</option>
							<option value="15">15</option>
							<option value="16">16</option>
							<option value="17">17</option>
							<option value="18">18</option>
							<option value="19">19</option>
							<option value="20">20</option>
							<option value="21">21</option>
							<option value="22">22</option>
							<option value="23">23</option>
							<option value="24">24</option>
							<option value="25">25</option>
							<option value="26">26</option>
							<option value="27">27</option>
							<option value="28">28</option>
							<option value="29">29</option>
							<option value="30">30</option>
							<option value="31">31</option>
							
							</select>
						</div>
	</li>



	<li>
		<div class="item">
				<span>4</span>
				<div class="arrow"><div class="arrow-right"></div></div>
			</div>
	 <div class="question">
		<label>What's your campaign goal?<label>
			<div class="description">
						The average New Story campaign raises $1,000 so we will combine your campaign with others to reach the amount needed to build a new home ($6,000).
					</div>

		<input type="text"  name="campaigngoal" required="true" />
		 </div>


	</li>
	<li>
	<div class="item">
				<span>5</span>
				<div class="arrow"><div class="arrow-right"></div></div>
			</div>
		 <div class="question">
			<label>What's your email?</label>
			<div class="description">
						100% privacy. No games, no B.S., no spam.
					</div>
			<input type="text" required="true" name="email" id="email"/>
	 
		</div>
	</li>
	<li>
	<div class="item">
				<span>6</span>
				<div class="arrow"><div class="arrow-right"></div></div>
			</div>
	 <div class="question">
		<label>Your phone number?</label>
		<div class="description">
						So we can call you if we have any questions. We might also use it to thank ya kindly.
					</div>
		<input type="text" required="true"  name="phone"/>
	 </div>
	</li>
	
	
<li>	
<div class="item">
			<span>7</span>
			<div class="arrow"><div class="arrow-right"></div></div>
		</div>
	<div class="question">
		<label>What profile picture do you want to use?</label>

			<div class="product_image">
				<img class="overlay" src="images/image_overlay.png">
				<img class="thumbnail" src="images/thumbnail.png">
				
			</div>
			<div id="file-uploader">
				<button id="upload">Choose File</button>
				<noscript>			
						<p>Please enable JavaScript to use file uploader.</p>
						<!-- or put I could put an upload form here -->
				</noscript> 
			</div>
			<input type="hidden" name="pflfilename" value="" id="pflfilename" />
		<!--<input type="file" name="file" style="border:0;" required="true" />-->
	</div>
</li> 


<li>
                    <div class="item">
                        <span>8</span>
                        <div class="arrow"><div class="arrow-right"></div></div>
                    </div>
                    <div class="question"><label>Campaign Tagline*</label>
                        <input type="text"  id="campaigntagline" name="campaigntagline" value="This birthday, instead of more gifts, I'm asking  friends and family for donations!"/>
                    </div>
                </li>


<li>
<div class="item">
			<span>9</span>
			<div class="arrow"><div class="arrow-right"></div></div>
		</div>
 <div class="question">
<label>Your campaign message?</label>
<div class="description">
					Tell your friends and family the reason you're starting a New Story campaign. You can view an example &gt; <a target="_blank" href="http://bit.ly/1fm8LAk">http://bit.ly/1fm8LAk</a>
				</div>
<textarea id="editor1" name="campaignmessage"  > </textarea>
<script>

			// This call can be placed at any point after the
			// <textarea>, or inside a <head><script> in a
			// window.onload event handler.

			// Replace the <textarea id="editor"> with an CKEditor
			// instance, using default configurations.
			
			CKEDITOR.replace( 'editor1', {
					// Define the toolbar groups as it is a more accessible solution.
					toolbarGroups: [
						
					],
					// Remove the redundant buttons from toolbar groups defined above.
					removeButtons: 'Underline,Strike,Subscript,Superscript,Anchor,Styles,Specialchar'
				} );


		</script>

</div>
</li>




<li>
 <div class="question">
<input type="submit" id="form-submit" value="Submit" name="submit" >  
</div>
</li> 
</ul>
		<div class="container thhumb" text-align="center">
			<!-- modal box -->
			<div id="myModal" class="reveal-modal" align="center">
				<h2>Select Thumbnail</h2>
				<div>
					<img src="" id="thumbnail" alt="Create Thumbnail" />
					<div id="thumb_preview_holder">
						<img src=""  alt="Thumbnail Preview" class="thhumb" id="thumb_preview" />
					</div>
					<div class="clear"></div>
						<input type="hidden" name="filename" value="" id="filename" />
						<input type="hidden" name="x1" value="" id="x1" />
						<input type="hidden" name="y1" value="" id="y1" />
						<input type="hidden" name="x2" value="" id="x2" />
						<input type="hidden" name="y2" value="" id="y2" />
						<input type="hidden" name="w" value="" id="w" />
						<input type="hidden" name="h" value="" id="h" />
						<input type="button" name="upload_thumbnail" value="Save Thumbnail" id="save_thumb" class="button" />
						<input type="button" name="cancel" value="X" class="close-reveal-modal" id="cancel_button"/>
				</div>
			</div> <!-- end modal box-->
			</div>


 </div>
 
</form>

</div>
