<?php 
	$title = "Donate - New Story.";
	include('header.php');
?>
<script src="//www.paypalobjects.com/api/checkout.js"></script>
<script src="https://checkout.stripe.com/checkout.js"></script>
<script type="text/javascript" src="js/donation.js"></script>
</head>
<body>
  <?php
     //include("nav.php");
  ?>
<div class="w-section donate-section">
	<div class="w-container">
		<div class="donation-div-container">
			<h1 class="donation-h1">Donate to New Story</h1>
			<div class="donation-secondary-text">100% of all donations go directly to building new homes</div>
			<div class="w-form donation-form">
			  	<label class="donation-field-label" for="name">Donation Amount:</label>
				<div>
				  <div class="field-dollar">$</div><input class="w-input donation-text-field donation-amt" type="text" placeholder="40.00">
				  <div class="w-checkbox w-clearfix checkbox-field custom-checkmark">
					<input class="w-checkbox-input monthly-recurring-checkbox" id="checkbox" type="checkbox">
					<label class="w-form-label checkbox-label" for="checkbox">make this a recurring monthly gift</label>
				  </div>
				  <div class="w-checkbox w-clearfix checkbox-field custom-checkmark">
					<input class="w-checkbox-input anonymous-donation-checkbox" id="checkbox-2" type="checkbox">
					<label class="w-form-label checkbox-label" for="checkbox-2">anonymous donation</label>
				  </div>
				</div>
				<div class="w-row">
					<div class="w-col w-col-6">
						<a class="w-inline-block donation-button-div credit-card-pay" href="javascript:void(0)">
							<img class="credit-card-icon" src="https://daks2k3a4ib2z.cloudfront.net/54467223a05709a755daab06/555532feb0d15efa12f67dd8_1428523997_08.Credit-Card%402x.png" width="71">
							<div class="donation-button-div-text">pay with credit card</div>
						</a>
					</div>
					<div class="w-col w-col-6">
						<a class="w-inline-block donation-button-div paypal-pay" href="javascript:void(0)">
							<img class="paypal-image" src="https://daks2k3a4ib2z.cloudfront.net/54467223a05709a755daab06/555534941c63b4f91287952d_PayPal-logo-20071%402x.png" width="131">
							<div class="donation-button-div-text paypal">pay with paypal</div>
						</a>
					</div>
				</div>
				<div class="w-form-fail donation-failed">
      		      <p></p>
	            </div>
			</div>
		</div>
	</div>
</div>
<?php 
	include('footer.php');
?>
