<?php

if(isset($_POST['stripeToken'])) { 

 require_once('stripe/init.php');
 $token = $_POST['stripeToken'];

\Stripe\Stripe::setApiKey('sk_test_fQWkXu14zclOSpipozcqLSfW');
$charge = \Stripe\Charge::create(array('amount' => 100, 'currency' => 'usd', 'source' => $token));

} ?>
<form action="" method="POST">
  <script
    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
    data-key="pk_test_B3rEoVNpsIgvUBuNQKOvFpbl"
    data-amount="1000"
    data-name="Demo Site"
    data-description="2 widgets ($1.00)"
    data-image="https://leveque.newstorycharity.org/images/moh.jpg">
  </script>
</form>