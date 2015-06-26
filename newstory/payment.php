<?php
session_start();
include 'db_connect.php';include('header.php');

$savedonation = mysql_query("INSERT INTO `campaign_donation` (cid,amount,donername,email,comment,status) VALUES ('" . $_POST['cid'] . "','" . $_POST['amount'] . "','" . $_POST['donorname'] . "','" . $_POST['email'] . "','" . $_POST['comment'] . "','pending')");
$did = mysql_insert_id();

$cid = $_POST['cid'];
$getcampaign = mysql_query("SELECT * FROM `tblcampaigns` where `campaigns_id` = '$cid';");
$campaign = mysql_fetch_array($getcampaign);
?>
<style>
	.stripe-button-el{
	background-image:url("http://leveque.newstorycharity.org/images/credit-card.png");
    height: 49px;
    width: 71px;
	margin-top:21px;
}
.stripe-button-el span{
	font-size:0px;
	background:none !important;
}
</style>
<div class="donationwrapper">
	
		<div class="donationblog">			
			
			<h1 class="donation-h1">You're donating to <?php echo $campaign['campaignsname']; ?></h1>			
			<div class="donation-secondary-text">100% of all donations go directly to building new homes</div>			
			
			<div class="w-row donation-row">				
				<div class="w-col w-col-6">					
					<a class="w-inline-block donation-button-div" href="#" data-ix="show-moonclerk-donation-form">						
						<!--
						<img class="credit-card-icon" src="https://daks2k3a4ib2z.cloudfront.net/54467223a05709a755daab06/555532feb0d15efa12f67dd8_1428523997_08.Credit-Card%402x.png" width="71">-->
						
						
						<form action="/newstoryapp/thankyou.php?did=<?php echo $did; ?>&mystatus=success" method="POST">
						  <script
							src="https://checkout.stripe.com/checkout.js" class="stripe-button"
							data-key="pk_test_ux8diKXW4VtaAVkwE1hGdvkj"
							data-image="http://leveque.newstorycharity.org/images/stripelogo.png"
							data-name="newstory.com"
							data-description="Donate to <?php echo ucfirst($campaign['campaignsname']); ?>"
							data-amount="<?php echo $_POST['amount']; ?>">
						  </script>
						</form>
						
						<div class="donation-button-div-text">Pay with credit card</div>
											
					</a>				
				</div>				
				
				<div class="w-col w-col-6">					
					<div class="w-inline-block donation-button-div paypal">	
						<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">		
						<input type="hidden" name="cmd" value="_donations">			
						<input type="hidden" name="business" value="mybussinessaccount@gmail.com">			
						<input type="hidden" name="item_name" value="<?php echo $campaign['campaignsname']; ?>">			
						<input type="hidden" name="item_number" value="<?php echo $campaign['campaigns_id']; ?>">			
						<input type="hidden" name="amount" value="<?php echo $_POST['amount']; ?>">			
						<input type="hidden" name="first_name" value="<?php echo $_POST['donorname']; ?>">			
						<input type="hidden" name="return" value="http://leveque.newstorycharity.org/thankyou.php?did=<?php echo $did; ?>">			
										
						<input type="image" name="submit" border="0" class="paypal-image" src="https://daks2k3a4ib2z.cloudfront.net/54467223a05709a755daab06/555534941c63b4f91287952d_PayPal-logo-20071%402x.png" width="131" alt="PayPal - The safer, easier way to pay online">						<div class="donation-button-div-text paypal">give with paypal</div>	
						</form>
					</div>				
				</div>			
			</div>	
			
			<a class="donation-secondary-text international" href="#" data-ix="show-country-selector-for-donation">outside the US/international?</a>
			<?php			
				/* if(isset( $_REQUEST['mystatus'] )){
					echo '<span style="color:green;">Dear <b>'.$_REQUEST['stripeEmail'].'</b> your payment token request is '.$_REQUEST['stripeToken'].'</span>';
				} */
			?>
		</div>
	
	
	
	
</div>
<?php 	include('footer.php');?>

