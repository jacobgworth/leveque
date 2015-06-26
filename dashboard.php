<?php
session_start();

 
include("header2.php"); 
$logged_user_id = $_SESSION['logged_user_id'];  
$id = $_SESSION['last_row_id'];  
$email_login = $_SESSION['email_login'];

//echo $id;
       //echo $email_login;

			//include('header.php');
			//$user_id =  $_SESSION['user_id'];
			//$login_username = $_SESSION['login_username'];

		    include 'db_connect.php';
			 
			$getquery="SELECT * FROM `tblcampaigns` where `user_id` = '$logged_user_id'";
				
			$qury = mysql_query($getquery);
			?>

  <div class="subnav">
    <div class="w-container">
      <h2 class="subnav-title"><span class="subnav-back-text"></span><a class="subnav-back-text dashboardHeading" href="#">Dashboard</a>&nbsp;</h2><a class="button local-nav createCampaign" href="create-campaign.php"><!--<span class="question-mark"></span>--> create new campaign</a>
    </div>
  </div>
  <div class="w-section main-content">
    <div class="w-container">
      <div class="campaign-container current-campaign">
		  
		  
		   <?php
				 while($rows=mysql_fetch_assoc($qury))
				 
				 //print_r($rows);
    {
				  
$donationsquery = mysql_query("SELECT SUM(amount) FROM campaign_donation WHERE status='success' and cid = ".$rows['campaigns_id']);
$total = mysql_fetch_array($donationsquery);


$donorsquery = mysql_query("SELECT did FROM campaign_donation WHERE status='success' and cid = ".$rows['campaigns_id']);
$numrows = mysql_num_rows($donorsquery);
$totalDonation = $total['SUM(amount)'];	 
if($totalDonation==null) {$totalDonation = 0; }
if($numrows==null) {$numrows = 0; }
 ?> 
				

        
        <div class="campaign-block-container individual-campaign">
          <div class="w-row">
            <div class="w-col w-col-3"><a href="<?php ?>"><img class="individual-campaign-image" src="images/thumbs/<?php echo $rows['banner'];?>.jpg" alt=""></a>
            </div>
            <div class="w-col w-col-9">
              <div class="campaign-block individual-campaign">
                <h1 class="campaign-tip-title campaign"><?php echo $rows['campaignsname']; ?></h1>
                <div class="individual-campaign-text money-raised">$<?php echo $totalDonation; ?> raised from <?php echo $numrows; ?> donors</div>
                <div class="campaign-block bottom-full">
                  <div class="w-row individual-campaign-row">
                    <div class="w-col w-col-4">
                      <h3 class="campaign-sub-title individual-campaign-text"><span class="icon"></span>
                      <a href="<?php echo $rows['slug'];?>"> View Campaign</a></h3>
                                            
                    </div>
                    <div class="w-col w-col-8 w-clearfix">
                      <h3 class="campaign-sub-title individual-campaign-text status"><span class="icon green"></span><a href="editcampaign.php?cid=<?php echo $rows['campaigns_id'];?>"> Edit Campaign</a></h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <?php
        
        				}
				?>
        
        
        
      </div>
      <div class="thank-you-email-overlay" data-ix="close-thank-you-email-overlay">
        <div class="w-clearfix thank-you-email-container">
          <div class="close-tip thank-you" data-ix="close-thank-you-email-overlay"><span class="email-icon"></span>
          </div>
          <h3>Thank you email to Jackie Miller</h3>
          <div class="w-form">
            <form id="email-form" name="email-form" data-name="Email Form">
              <div class="email-placeholder-text">to: jackiem@gmail.com</div>
              <div class="email-placeholder-text gray">from: matthew1818@gmail.com</div>
              <input class="w-input" id="Email-subject-line" type="text" placeholder="Thank you for joining the New Story gang" name="Email-subject-line" required="required" data-name="Email subject line">
              <textarea class="w-input" id="field" placeholder="Hey Jessica!  You've received a {{3139671__amount_to_decimal}} donation to your campaign from {{3139671__name}}.   Your hard work means a new story is being written and we thank you.   Be sure to thank your supporter. Below is an easy template you can use and here's their email - {{3139671__email}}  -- New Story Team  ------------- Template for thank you email: Subject: Thank you, thank you! Hey {{3139671__name}},   Thanks so much for your donation to my Birthday Campaign!  Can’t wait for New Story to send us a video of the family we fund in their new home.  Thank you!   -Jessica  PS: If you're interested in pledging your birthday this year check out newstorycharity.org/birthdays -------------" name="field"></textarea>
              <div>add your own personal touch :)</div>
              <input class="w-button button" type="submit" value="Send email" data-wait="Please wait...">
            </form>
            <div class="w-form-done">
              <p>Thank you! Your submission has been received!</p>
            </div>
            <div class="w-form-fail">
              <p>Oops! Something went wrong while submitting the form :(</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include("footer.php"); ?>