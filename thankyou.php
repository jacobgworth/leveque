<?php error_reporting(E_ALL);
ini_set('display_errors', 1);
$title = "Thank you! - New Story";
include('header.php');

//echo "<pre>";
//print_r($_REQUEST);
if(isset($_GET['did'])) {

$donorinfo = mysql_query("select * from `campaign_donation` WHERE did = '".$_GET['did']."'");
$getdonor = mysql_fetch_array($donorinfo);

require_once('stripe/init.php');
$token = $_POST['stripeToken'];
$amount = 100*$getdonor['amount'];

\Stripe\Stripe::setApiKey('sk_live_z1JbKZORcjMwgYNrIAnvreZ6');
$charge = \Stripe\Charge::create(array('amount' => $amount, 'currency' => 'usd', 'source' => $token));
//echo $charge['id'];


 mysql_query("update `campaign_donation` SET `status`='success',`address`='".$_REQUEST['stripeBillingAddressLine1']."',postcode='".$_REQUEST['stripeBillingAddressZip']."',city='".$_REQUEST['stripeBillingAddressCity']."',country='".$_REQUEST['stripeBillingAddressCountry']."',stripeToken='".$_REQUEST['stripeToken']."',paymentId='".$charge['id']."' WHERE did = '".$_GET['did']."'");

 


$campaignerinfo = mysql_query("select * from `tblcampaigns` WHERE campaigns_id = '".$getdonor['cid']."'");
$getcampaigner = mysql_fetch_array($campaignerinfo);


//  short link function starts here //

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

$camplink = 'https://leveque.newstorycharity.org/'.$getcampaigner['slug'];
$short = make_bitly_url($camplink,'o_3l3tbfj5mo','R_779e61f639264d3ea0f263b56c22ab50','json');

//  short link function ends here //





//**  Email to donor starts here  **//
$donorto = $getdonor['email'];
$donorsubject = 'Thank you for investing in Leveque!';

$donormsg = "<html>
<head>
<title>Thank you for investing in Leveque!</title>
</head>
<body>
<p>Dear ".$getdonor['firstname'].",</p>

<p>Thank you for your generous gift.  We depend upon ongoing support from partners like you to continue bringing life transformation to every man, woman, and child in Haiti.  Your faithful investment will provide a permanent block home for a family in need in the Leveque community!  When their home is built we will send you photographs and a video of the life transformation your gift has provided.</p>

<p>If you haven't done so already, <a href='mohhaiti.org/users/new?utm_source=trigger&utm_medium=email&utm_campaign=general+donation+form'>please register for a MyMOH account.</a>  This account will allow you to view your gift history, receive updates, make a gift in the future and much more.</p>

<p>Once again, thank you for your support!</p>

<p>God bless you!</p>

<p>The Mission of Hope, Haiti Team</p>
</body>
</html>";


$donorheaders = 'MIME-Version: 1.0' . "\r\n";
$donorheaders .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$donorheaders .= 'From: Mission of Hope<leveque@mohhaiti.org>' . "\r\n";
$campaignheaders .= 'Reply-To: leveque@mohhaiti.org' . "\r\n";
mail($donorto, $donorsubject, $donormsg, $donorheaders);

//**  Email to donor ends here  **//

//**  Email to campaigner starts here  **//

$campaignerto = $getcampaigner['email'];
$campaignersubject = $getdonor['firstname'].' Donated';

$campaignermsg = "<html>
<head>
<title>".$getdonor['firstname']." Donated</title>
</head>
<body>
<p>Hey ".$getcampaigner['name']." !</p>

<p>You've received a $".$getdonor['amount']." donation to your campaign <i><a href='".$short."' target='_blank'>".$getcampaigner['campaignsname']."</a></i> from ".$getdonor['firstname'].". </p>

<p>Your hard work means a new story is being written and we thank you.</p> 

<p>Be sure to thank your supporter. Below is an easy template you can use and here's their email - ".$getdonor['email']."</p>

<p>-- New Story Team</p>
</body>
</html>";


$campaignerheaders = 'MIME-Version: 1.0' . "\r\n";
$campaignerheaders .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$campaignerheaders .= 'From: Mission of Hope <leveque@mohhaiti.org>' . "\r\n";
$campaignerheaders .= 'Reply-To: leveque@mohhaiti.org' . "\r\n";

if($getdonor['cid']>0) {
mail($campaignerto, $campaignersubject, $campaignermsg, $campaignerheaders);
}

//**  Email to campaigner ends here  **//






}
?>
    <div style="padding-bottom: 0px; padding-top: 50px;" class="w-container content-section thank-you">
        <h1 style="font-weight: 300; font-size: 37px;margin-bottom:10px;">Thank you from Mission of Hope<br>
        and our friend Olvith!</h1>
      <img style="margin-bottom: 75px;" src="images/olvith.gif">  
        
</div>
<?php
include('footer.php');
?>