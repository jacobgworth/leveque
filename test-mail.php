<?php

require_once('/stripe/init.php');

\Stripe\Stripe::setApiKey('sk_test_fQWkXu14zclOSpipozcqLSfW');
    $myCard = array('number' => '4242424242424242', 'exp_month' => 5, 'exp_year' => 2015);
    $charge = \Stripe\Charge::create(array('card' => $myCard, 'amount' => 2000, 'currency' => 'usd'));
    echo $charge;








$stripeClassesDir = __DIR__ . '/stripe/lib/';
$stripeUtilDir    = $stripeClassesDir . 'Util/';
$stripeErrorDir   = $stripeClassesDir . 'Error/';

set_include_path($stripeClassesDir . PATH_SEPARATOR . $stripeUtilDir . PATH_SEPARATOR . $stripeErrorDir);

function __autoload($class)
{
    $parts = explode('\\', $class);
    require end($parts) . '.php';
}






 if(isset($_POST['stripeToken'])) { ECHO 'TOK='.$_POST['stripeToken'];
 echo '<pre>';
 print_r($_REQUEST);

// Set your secret key: remember to change this to your live secret key in production
// See your keys here https://dashboard.stripe.com/account/apikeys
\Stripe\Stripe::setApiKey("sk_test_fQWkXu14zclOSpipozcqLSfW");

// Get the credit card details submitted by the form
$token = $_POST['stripeToken'];

// Create the charge on Stripe's servers - this will charge the user's card
try {
$charge = \Stripe\Charge::create(array(
  "amount" => 1000, // amount in cents, again
  "currency" => "usd",
  "source" => $token,
  "description" => "Example charge")
);
} catch(\Stripe\Error\Card $e) {
  // The card has been declined
}

 }

?>

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












































========================================



<form action="/charge" method="POST">
  <script
    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
    data-key="pk_test_6pRNASCoBOKtIshFeQd4XMUh"
    data-image="/img/documentation/checkout/marketplace.png"
    data-name="Stripe.com"
    data-description="2 widgets"
    data-amount="2000">
  </script>
</form>


<?php
echo date('d/m/y'); die;
//short_code("http://www.sitepoint.com/building-your-own-url-shortener/"); exit;


function make_bitly_url($url,$login,$appkey,$format = 'xml',$version = '2.0.1')
{
	//create the URL
	$bitly = 'http://api.bit.ly/shorten?version='.$version.'&longUrl='.urlencode($url).'&login='.$login.'&apiKey='.$appkey.'&format='.$format;
	
	//get the url
	//could also use cURL here
	$response = file_get_contents($bitly);
	
	//parse depending on desired format
	if(strtolower($format) == 'json')
	{
		$json = @json_decode($response,true);
		return $json['results'][$url]['shortUrl'];
	}
	else //xml
	{
		$xml = simplexml_load_string($response);
		return 'http://bit.ly/'.$xml->results->nodeKeyVal->hash;
	}
}

/* usage */
$short = make_bitly_url('http://leveque.newstorycharity.org','o_3l3tbfj5mo','R_779e61f639264d3ea0f263b56c22ab50','json');
echo 'The short URL is:  '.$short; 

// returns:  http://bit.ly/11Owun


exit;



$usersubject = 'New Story Login Details';
$usermsg = '<html>
<head>
<title>New Story Login Details</title>
</head>
<body>
<p>Hey envee !</p>
<p>Thankyou for creating campaign - <a target="_blank" href="https://newstorycharity.com/test-mail.php">aaaa</a>! and registering with New Story Charity. Below are your New Story login details:</p>
<p>Email: dddd</p>
<p>--Matthew</p>
</body>
</html>';

$userheaders = 'MIME-Version: 1.0' . "\r\n";
$userheaders .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
//$userheaders .= 'info@newstorycharity.org' . "\r\n";

//mail($email, $usersubject, $usermsg, $userheaders);
if(!mail('narvijay.thakur@gmail.com', $usersubject, $usermsg, $userheaders)){
echo 'email not working';
} else {
echo 'working';
}

?>