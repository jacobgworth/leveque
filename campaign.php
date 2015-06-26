<?php //echo '<pre>'; print_r($_GET);
session_start();
include 'db_connect.php';
//$id = $_SESSION['last_row_id'];  

 $slug = $_GET['cid'];
   
	  
include("header.php");



   $getquery="SELECT * FROM `tblcampaigns` where `slug` = '$slug' LIMIT 1";
    
   $qury = mysql_query($getquery);
    
    while($rows=mysql_fetch_assoc($qury))
    {
     $id = $rows['campaigns_id'];
	 $uid = $rows['user_id']; 
     $userquery= mysql_query("SELECT imageurl FROM `users` where `user_id` = '$uid';");
     $dprow = mysql_fetch_array($userquery);
	
		$dp = $dprow['imageurl'];
	 
$donationsquery = mysql_query("SELECT SUM(amount) FROM campaign_donation WHERE status='success' and cid = ".$id);
$total = mysql_fetch_array($donationsquery);
$totalDonation = $total['SUM(amount)'];
$percentage = $totalDonation/$rows['campaigngoal'];
$percentage = $percentage*100;
?>
   


  <div class="w-section campaign-hero new homes <?php echo $rows['banner']; ?>">
	            
    <div class="w-form campaign-name-form">
		<h1 class="campaign-header new"><?php echo $rows['campaignsname']; ?></h1>
      <!--<form id="email-form" name="email-form" data-name="Email Form">
        <input class="w-input campaign-name-text-field" id="name" type="text" value="<?php echo $rows['campaignsname']; ?>" name="name" data-name="Name" readonly>
        <!--<a class="button name-campaign" href="#">Ok <span class="small-button-text">(press enter)</span></a>-->
        <!--<div class="campaign-name-tooltip">
          <div class="tooltip-triangle"></div>
          <p>For example: Bob's 23rd birthday! or Julie runs a 5K for good, or get funny with it - Brandon eats 1,000 ice cubes for New Story!</p>
          <p>step 1 of 5</p>
          <p>don't worry you can edit anytime</p>  
        </div>
      </form>-->
      <div class="w-form-done">
        <p>Thank you! Your submission has been received!</p>
      </div>
      <div class="w-form-fail">
        <p>Oops! Something went wrong while submitting the form :(</p>
      </div>
    </div>
  </div>
  <div class="w-section campaign-section new">
    <div class="w-container">
      <div class="w-row campaign-content-row">
        <div class="w-col w-col-4">
          <div class="left-column">
            <div class="w-hidden-main w-hidden-medium campaign-div">
              <h2 class="campaign-story-header">This birthday, instead of more gifts, I’m asking&nbsp;&nbsp;friends and family for donations!111</h2><img class="campaign-new-image" src="uploads/<?php echo $dp;?>" alt="546e62f0c740bddf740cedee_me1.png">
              <a href="editcampprofile.php?">Edit</a>
              <p class="w-hidden-medium small-paragraph campaign">
				  <?php echo stripslashes($rows['campaignmessage']);?>
				  </p>
            </div>
            <div class="campaign-div">
              <div class="project-current-amount new">$<?php if($totalDonation!='') { echo $totalDonation; } else { echo '0'; } ?></div>
              <div class="project-goal-text _2">raised&nbsp;of $<?php echo $rows['campaigngoal'];  ?> goal</div>
              <div class="progress _2 new">
                <div class="progress-bar matthew" role="progressbar" aria-valuenow="<?php echo $percentage; ?>" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $percentage; ?>%"></div>
				
              </div>
              <div class="project-percent-funded new"><?php echo round(number_format((float)$percentage, 2, '.', '')); ?>% funded</div><a class="button donate _2 campaign" href="donate-campaign.php?id=<?php echo $rows['campaigns_id'];?>">Donate now</a>
            </div>
            <div class="campaign-div center"><img class="campaign-video-icon" src="images/1418711192_video-64.png" width="32" alt="5460e3533e0271fd30646956_video-64.png">
              <div class="video-transparency-text bold">Video Transparency</div>
              <div class="video-transparency-text">After this campaign is complete, and the family’s home has been funded, we will send each and every donor a video of the family in their new home. </div>
            </div>
            <div class="campaign-div center">
              <div class="video-transparency-text bold donors">Donors</div>
              
			  <?php
			$getDonations = mysql_query('SELECT * FROM campaign_donation WHERE cid = '.$id.' and status="success" ORDER BY did DESC limit 2');
			  while($donations=mysql_fetch_array($getDonations)) {  
			  ?>			  
			  
			  <div class="w-clearfix donor-div">
                <div class="donor-name"><?php echo $donations['firstname']; ?></div>
                <div class="donor-name amount">$<?php echo $donations['amount']; ?></div>
				<?php if($donations['comment']!=null) { ?>
			    <div class="donation-commen">“<?php echo $donations['comment']; ?>”</div>
			    <?php } else { ?>
			   <div class="donation-commen"></div>
			   <?php }?>
                
              </div>
        <?php }
		if(mysql_num_rows($getDonations) == 0) {
		 echo '<div class="w-clearfix donor-div">
                <div class="donor-name">be the first donor</div>
                <div class="donor-name amount">...</div>
                <div class="donation-commen">“<a href="donate-campaign.php?id='.$rows['campaigns_id'].'">Let\'s get this thing started!</a>”</div>
              </div>';
		}	  
			  
			  
	    ?>
            </div>
          </div>
          
           
          
          
          <div class="campaign-div center">
            <div class="video-transparency-text bold donors">Share this Campaign</div>
            <div class="social-share-wrapper">
              <p style="margin-top: 10px;">
			   
 <!-- share this starts here-->
   <span class='st_facebook_large' displayText='Facebook'></span>
<span class='st_twitter_large' displayText='Tweet'></span>
<span class='st_linkedin_large' displayText='LinkedIn'></span>
<span class='st_googleplus_large' displayText='Google +'></span>
<span class='st_pinterest_large' displayText='Pinterest'></span>
<span class='st_email_large' displayText='Email'></span>
 <!-- share this ends here -->


			  </p>
            </div>
          </div>
        </div>
        <div class="w-col w-col-8">
          <div class="w-hidden-small w-hidden-tiny campaign-div p-cust-st">
			 
            <h2 class="campaign-story-header"><?php echo $rows['campaigntagline']; ?></h2>
           <!-- <p class="small-paragraph campaign">
            
           
            </p>-->
			 <?php echo stripslashes($rows['campaignmessage']);?>
          </div>
          
          
			
              
           		 
				<img class="campaign-new-image" src="<?php $_SERVER['DOCUMENT_ROOT'];?>/uploads/<?php echo $dp;?>" alt="">
              <a href="editcampprofile.php?"></a>
             
			
          

          
          
          <?php }

?>
          
          
          <div class="campaign-div center">
            <div class="campaign-div-title">
              <div class="campaign-div-header">How It Works</div>
            </div>
            <div class="w-row homepage-how campaign">
              <div class="w-col w-col-4"><img class="family-icon campaign" src="images/1418711050_world-64.png" alt="5460e3a1c559731c2a5f996c_world-64.png">
                <div class="how-it-works-text homepage">Meet a Family</div>
                <div class="how-it-works-text homepage small">See exactly who needs your help</div>
              </div>
              <div class="w-col w-col-4"><img class="family-icon campaign" src="images/1418710929_heart-64.png" alt="5460e3a673582afc3085d38b_heart-64.png">
                <div class="how-it-works-text homepage">Fund a Home</div>
                <div class="how-it-works-text homepage small">100% goes to the home</div>
              </div>
              <div class="w-col w-col-4"><img class="family-icon campaign" src="images/1418711192_video-64.png" alt="5460e3533e0271fd30646956_video-64.png">
                <div class="how-it-works-text homepage">See Results</div>
                <div class="how-it-works-text homepage small">Get a video of the new story</div>
              </div>
          </div>

        </div>
                  <div class="card home-expenses">
            <div class="expenses-header campaign">
              <h4>Where 100% of your donation goes</h4>
            </div>
            <div class="w-clearfix expenses-sub-header">
              <div class="expense-text">Expense</div>
              <div class="expense-text left">Amount</div>
            </div>
            <div class="w-clearfix expenses-sub-header line-item">
              <div class="expense-text">Labor</div>
              <div class="expense-text left">$1,265.63 USD</div>
            </div>
            <div class="w-clearfix expenses-sub-header line-item">
              <div class="expense-text">Foundation</div>
              <div class="expense-text left">$1,171 USD</div>
            </div>
            <div class="w-clearfix expenses-sub-header line-item">
              <div class="expense-text">Concrete Block</div>
              <div class="expense-text left">$900 USD</div>
            </div>
            <div class="w-clearfix expenses-sub-header line-item">
              <div class="expense-text">Cement</div>
              <div class="expense-text left">$921.25 USD</div>
            </div>
            <div class="w-clearfix expenses-sub-header line-item">
              <div class="expense-text">Rebar</div>
              <div class="expense-text left">$478.13 USD</div>
            </div>
            <div class="w-clearfix expenses-sub-header line-item">
              <div class="expense-text">Roof and Door&nbsp;</div>
              <div class="expense-text left">$717.75 USD</div>
            </div>
            <div class="w-clearfix expenses-sub-header line-item">
              <div class="expense-text">Timber and fixings&nbsp;</div>
              <div class="expense-text left">$549.37 USD</div>
            </div>
            <div class="w-clearfix expenses-sub-header line-item">
              <div class="expense-text">Total</div>
              <div class="expense-text left">$6,003.13 USD</div>
            </div>
            <div class="expenses-sub-header"><a class="link" href="https://docs.google.com/spreadsheets/d/1Uftmw48rSouldmhidZEV1Kwo9FsJrY5q24Hz5rpraKU/edit?usp=sharing" target="_blank">click to see a line item breakdown of all expenses</a>
            </div>
          </div>
      </div>
    </div>
  </div>
  
  <!--[if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif]-->
<?php include("footer.php"); ?>