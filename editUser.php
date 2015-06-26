<?php
session_start();
$logged_user_id = $_SESSION['logged_user_id']; 
include 'db_connect.php';
include("header2.php");
    $logged_user_id;
    $getquery="SELECT * FROM `users` where `user_id` = '$logged_user_id';";
    
    $qury = mysql_query($getquery);
    
    while($rows=mysql_fetch_array($qury))
    {
    //echo '<pre>'; print_r($rows);
   // print_r($rows);
    ?>  
	<link rel="stylesheet" href="css/reveal.css">
	<link rel="stylesheet" href="css/mystyle.css">
	<script src="js/jquery-pack.js" type="text/javascript"></script>
	<script src="js/fileuploader.js" type="text/javascript"></script>
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.reveal.js" type="text/javascript"></script>
	<script src="js/jquery.imgareaselect.min.js" type="text/javascript"></script>
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
		      
            <div class="w-container">
		
<form name="regform" id="myform" enctype="multipart/form-data" action="updateuser.php" method="POST">
    <div class="add_camp_form">
		<ul>
		<li>
			<div class="item">
				<span>1</span>
				<div class="arrow"><div class="arrow-right"></div></div>
			</div>
			<div class="question"><label>What is your name?*</label>
				<input type="text"  id="name"  name="name" value="<?php echo $rows["name"];?>"/>
			</div>
		</li>
		<li>
			<div class="item">
				<span>2</span>
				<div class="arrow"><div class="arrow-right"></div></div>
			</div>
			<div class="question">
				<label>What is your email?</label>
				<div class="description">100% privacy. You're email will only be used to keep you updated on your campaign.</div>
				<input type="text"  name="email" id="email"value="<?php echo $rows["email"];?>"/>
			</div>
		</li>
		<li>
			<div class="item">
				<span>3</span>
				<div class="arrow"><div class="arrow-right"></div></div>
			</div>
			<div class="question">
				<label>What is your phone number? (optional)</label>
				<div class="description">
					So we can call you if we have any questions.
				</div>
				<input type="text"   name="phone" value="<?php echo $rows["phone"];?>"/>
			 </div>
		</li>
		
		<li>
			<div class="item">
				<span>4</span>
				<div class="arrow"><div class="arrow-right"></div></div>
			</div>
			<div class="question">
				<label>What profile picture do you want to use? (optional)</label>
							
				<div class="product_image">
					<img class="overlay" src="images/image_overlay.png">
					<img class="thumbnail" src="uploads/<?php if($rows['imageurl']==''){ echo 'thumbnail.png';}else{ echo $rows['imageurl'];} ?>">
					
				</div>
				<div id="file-uploader">
					<button id="upload">Choose File</button>
					<noscript>			
							<p>Please enable JavaScript to use file uploader.</p>
							<!-- or put I could put an upload form here -->
					</noscript> 
				</div>
				<input type="hidden" id="pflfilename" name="pflfilename" value="">
				
			</div>
		</li> 
		<li>
			<div class="question">
				<input type="submit" value="Submit" name="submit" />  
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
            
                <?php
} 
include("footer.php"); 
?>
