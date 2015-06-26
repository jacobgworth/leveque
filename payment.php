<?php //echo '<pre>'; print_r($_POST); die;
session_start();
include 'db_connect.php';include('header.php');
if(isset($_GET['donation'])) {
 $type = $_GET['donation'];
 $_POST['cid'] = 0;
} else {
 $type = 'campaign'; 
}
$date = date('m/d/y');
$savedonation = mysql_query("INSERT INTO `campaign_donation` (cid,amount,firstname,lastname,email,comment,status,type,date) VALUES ('" . $_POST['cid'] . "','" . $_POST['amount'] . "','" . $_POST['firstname'] . "','" . $_POST['lastname'] . "','" . $_POST['email'] . "','" . $_POST['comment'] . "','pending','" . $type . "','" . $date . "')");
$did = mysql_insert_id();

if(!isset($_GET['donation'])) {
$cid = $_POST['cid'];
$getcampaign = mysql_query("SELECT * FROM `tblcampaigns` where `campaigns_id` = '$cid';");
$campaign = mysql_fetch_array($getcampaign);
$title = "You're donating to ".ucfirst($campaign['campaignsname']);
} else {
 $title = 'Donate to Finish Leveque';
}
?>
<style>
	.stripe-button-el{
	background-image:url("https://leveque.newstorycharity.org/images/credit-card.png");
    height: 49px;
    width: 71px;
	margin-top:21px;
	background-color: transparent;
}
.stripe-button-el span{
	font-size:0px;
	background:none !important;
}
.donation-row {
display: block !important;
}
</style>
<div class="donationwrapper">
	
		<div class="donationblog">			
			
			<h1 class="donation-h1"><?php echo $title; ?></h1>			
			<div class="donation-secondary-text">100% of all donations go directly to building new homes</div>			
			
			<div style="width:75% !important;" class="w-row donation-row">				
				<div style="margin-left:104px;" class="w-col w-col-6">					
					<a class="w-inline-block donation-button-div" href="#" data-ix="show-moonclerk-donation-form">						
						<!--
						<img class="credit-card-icon" src="https://daks2k3a4ib2z.cloudfront.net/54467223a05709a755daab06/555532feb0d15efa12f67dd8_1428523997_08.Credit-Card%402x.png" width="71">-->
						
						
						<form action="/thankyou.php?did=<?php echo $did; ?>&mystatus=success" method="POST">
						  <script
							src="https://checkout.stripe.com/checkout.js" class="stripe-button"
							data-key="pk_live_zNekHO9Bg8yeW03veBjpvaI7"
							data-image="https://leveque.newstorycharity.org/images/moh.jpg"
							data-name="Mission of Hope"
							data-billingAddress="true"
							data-email="<?php echo $_POST['email']; ?>"
							data-description="<?php echo $title; ?>"
							data-amount="<?php echo $_POST['amount']*100; ?>">
						  </script>
						</form>
						
						<div class="donation-button-div-text">Pay with credit card</div>
											
					</a>				
				</div>				
				
							
			</div>	
			
			<?php			
				/* if(isset( $_REQUEST['mystatus'] )){
					echo '<span style="color:green;">Dear <b>'.$_REQUEST['stripeEmail'].'</b> your payment token request is '.$_REQUEST['stripeToken'].'</span>';
				} */
			?>
		</div>
	
	
	
	
</div>
<?php 	include('footer.php');?>

