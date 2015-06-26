<?php
session_start();
include 'db_connect.php';include('header.php');

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
			
			<h1 class="donation-h1">Donate to Finish Leveque</h1>			
			<div class="donation-secondary-text">100% of all donations go directly to building new homes</div>			
			
			<div class="w-row donation-row">				
				<div class="w-col w-col-6"><a href="donate.php?donate=home" class="w-inline-block moh-donate-button"><img width="125" src="http://uploads.webflow.com/55838a78ca2a0f945c379cf3/558730dd91f302a16c1dff31_1434764560_shop.svg"><h3>Sponsor a Family</h3></a></div>
				
<div class="w-col w-col-6"><a href="donate.php?donate=general" class="w-inline-block moh-donate-button"><img width="125" src="http://uploads.webflow.com/55838a78ca2a0f945c379cf3/5587315e91f302a16c1dff39_1434764546_heart.svg"><h3>Donate Now</h3></a></div>			
			</div>	
			
			
		</div>
	
	
	
	
</div>
<?php 	include('footer.php');?>

