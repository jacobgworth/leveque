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
			<div class="question"><label>Your first and last name?*</label>
			<div class="description">What your mother calls you :)</div>
				<input type="text"  id="name"  name="name" value="<?php echo $rows["name"];?>"/>
			</div>
		</li>
		<li>
			<div class="item">
				<span>2</span>
				<div class="arrow"><div class="arrow-right"></div></div>
			</div>
			<div class="question">
				<label>What's your email?</label>
				<div class="description">100% privacy. No games, no B.S., no spam.</div>
				<input type="text"  name="email" id="email"value="<?php echo $rows["email"];?>"/>
			</div>
		</li>
		<li>
			<div class="item">
				<span>3</span>
				<div class="arrow"><div class="arrow-right"></div></div>
			</div>
			<div class="question">
				<label>Your phone number? (optional)</label>
				<div class="description">
					So we can call you if we have any questions. We might also use it to thank ya kindly.
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
				<label>When's your b-day?</label>
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
					<option value="0" <?php if ($rows['birthmonth'] == '0') { ?> selected="selected"<?php } ?> >Select an option</option>
					<option value='1' <?php if ($rows['birthmonth'] == '1') { ?> selected="selected"<?php } ?> >1</option>
					<option value='2' <?php if ($rows['birthmonth'] == '2') { ?> selected="selected"<?php } ?>>2</option>
					<option value='3' <?php if ($rows['birthmonth'] == '3') { ?> selected="selected"<?php } ?>>3</option>
					<option value='4' <?php if ($rows['birthmonth'] == '4') { ?> selected="selected"<?php } ?>>4</option>
					<option value='5' <?php if ($rows['birthmonth'] == '5') { ?> selected="selected"<?php } ?>>5</option>
					<option value='6' <?php if ($rows['birthmonth'] == '6') { ?> selected="selected"<?php } ?>>6</option>
					<option value='7' <?php if ($rows['birthmonth'] == '7') { ?> selected="selected"<?php } ?>>7</option>
					<option value='8' <?php if ($rows['birthmonth'] == '8') { ?> selected="selected"<?php } ?>>8</option>
					<option value='9' <?php if ($rows['birthmonth'] == '9') { ?> selected="selected"<?php } ?>>9</option>
					<option value='10' <?php if ($rows['birthmonth'] == '10') { ?> selected="selected"<?php } ?>>10</option>
					<option value='11' <?php if ($rows['birthmonth'] == '11') { ?> selected="selected"<?php } ?>>11</option>
					<option value='12' <?php if ($rows['birthmonth'] == '12') { ?> selected="selected"<?php } ?>>12</option>
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
					<option value="0" <?php if ($rows['birthday'] == '0') { ?> selected="selected"<?php } ?> >Select an option</option>
					<option value="1" <?php if ($rows['birthday'] == '1') { ?> selected="selected"<?php } ?> >1</option>
					<option value='2' <?php if ($rows['birthday'] == '2') { ?> selected="selected"<?php } ?>>2</option>
					<option value='3' <?php if ($rows['birthday'] == '3') { ?> selected="selected"<?php } ?>>3</option>
					<option value='4' <?php if ($rows['birthday'] == '4') { ?> selected="selected"<?php } ?>>4</option>
					<option value='5' <?php if ($rows['birthday'] == '5') { ?> selected="selected"<?php } ?>>5</option>
					<option value='6' <?php if ($rows['birthday'] == '6') { ?> selected="selected"<?php } ?>>6</option>
					<option value='7' <?php if ($rows['birthday'] == '7') { ?> selected="selected"<?php } ?>>7</option>
					<option value='8' <?php if ($rows['birthday'] == '8') { ?> selected="selected"<?php } ?>>8</option>
					<option value='9' <?php if ($rows['birthday'] == '9') { ?> selected="selected"<?php } ?>>9</option>
					<option value='10' <?php if ($rows['birthday'] == '10') { ?> selected="selected"<?php } ?>>10</option>
					<option value='11' <?php if ($rows['birthday'] == '11') { ?> selected="selected"<?php } ?>>11</option>
					<option value='12' <?php if ($rows['birthday'] == '12') { ?> selected="selected"<?php } ?>>12</option>
					<option value='13' <?php if ($rows['birthday'] == '13') { ?> selected="selected"<?php } ?>>13</option>
					<option value='14' <?php if ($rows['birthday'] == '14') { ?> selected="selected"<?php } ?>>14</option>
					<option value='15' <?php if ($rows['birthday'] == '15') { ?> selected="selected"<?php } ?>>15</option>
					<option value='16' <?php if ($rows['birthday'] == '16') { ?> selected="selected"<?php } ?>>16</option>
					<option value='17' <?php if ($rows['birthday'] == '17') { ?> selected="selected"<?php } ?>>17</option>
					<option value='18' <?php if ($rows['birthday'] == '18') { ?> selected="selected"<?php } ?>>18</option>
					<option value=19' <?php if ($rows['birthday'] == '19') { ?> selected="selected"<?php } ?>>19</option>
					<option value='20' <?php if ($rows['birthday'] == '20') { ?> selected="selected"<?php } ?>>20</option>
					<option value='21' <?php if ($rows['birthday'] == '21') { ?> selected="selected"<?php } ?>>21</option>
					<option value='22' <?php if ($rows['birthday'] == '22') { ?> selected="selected"<?php } ?>>22</option>
					<option value='23' <?php if ($rows['birthday'] == '23') { ?> selected="selected"<?php } ?>>23</option>
					<option value='24' <?php if ($rows['birthday'] == '24') { ?> selected="selected"<?php } ?>>24</option>
					<option value='25' <?php if ($rows['birthday'] == '25') { ?> selected="selected"<?php } ?>>25</option>
					<option value='26' <?php if ($rows['birthday'] == '26') { ?> selected="selected"<?php } ?>>26</option>
					<option value='27' <?php if ($rows['birthday'] == '27') { ?> selected="selected"<?php } ?>>27</option>
					<option value='28' <?php if ($rows['birthday'] == '28') { ?> selected="selected"<?php } ?>>28</option>
					<option value='29' <?php if ($rows['birthday'] == '29') { ?> selected="selected"<?php } ?>>29</option>
					<option value='30' <?php if ($rows['birthday'] == '30') { ?> selected="selected"<?php } ?>>30</option>
					<option value='31' <?php if ($rows['birthday'] == '31') { ?> selected="selected"<?php } ?>>31</option>
				</select>
			</div>
		</li>
		<li>
			<div class="item">
				<span>5</span>
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
?>
