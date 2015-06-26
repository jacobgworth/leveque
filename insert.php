<?php
session_start(); 
$_SESSION['get_started'] = 'yes';
include 'db_connect.php';

$name = $_POST['name'];
$campaignname = $_POST['campaignname'];
//$birthdate = $_POST['birthdate'];
//$birthmonth = $_POST['birthmonth'];
//$birthday = $_POST['birthday'];
//$campaigngoal = intval(preg_replace('/[^0-9]+/', '', $_POST['campaigngoal']), 10);

$campaigngoal = str_replace('$','',$_POST['campaigngoal']);
$campaigngoal = str_replace(',','',$campaigngoal);
$campaigngoal = round($campaigngoal);


$email = $_POST['email'];
$phone = $_POST['phone'];
$logo = $_POST['file'];

$campaigntagline = addslashes($_POST['campaigntagline']);
$campaignmessage = addslashes($_POST['campaignmessage']);
$user_id = $_SESSION['user_id'];
$campaign_id = $_SESSION['campaigns_id'];
$banner = 'banner-1';

function getSlug($text)
{ 
  $text = preg_replace('~[^\\pL\d]+~u', '-', $text);
  $text = trim($text, '-');
  $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
  $text = strtolower($text);
  $text = preg_replace('~[^-\w]+~', '', $text);
  if (empty($text))
  {
    return 'n-a';
  }
  return $text;
}

$slug = getSlug($campaignname);


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

$camplink = 'https://leveque.newstorycharity.org/'.$slug;
$short = make_bitly_url($camplink,'o_3l3tbfj5mo','R_779e61f639264d3ea0f263b56c22ab50','json');

//  short link function ends here //


function generate_password($length = 8) {
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+;:,.?";
    $password = substr(str_shuffle($chars), 0, $length);
    return $password;
}

$password = generate_password(9); // character lth


/* $filename = $_FILES['file']['name'];
$fileloc = $_FILES['file']['tmp_name'];
$filestore = "images/" . $filename;
move_uploaded_file($fileloc, $filestore); */

if( $_POST['pflfilename'] !='' ){
$filename = $_POST['pflfilename'];
}else{
$filename='thumbnail.png';
}
//$id =$_GET['campaigns_id'];	
//$name =$_GET['name'];						




$_SESSION['email_login'] = $email;
//user table query//

$sqluser = "SELECT user_id, count(*) FROM `users` WHERE `email` = '$email'";

$user_info = mysql_query($sqluser);
if($_SESSION['login_username'] != 'admin') {
$_SESSION['login_username'] = $name; }
$row_user = mysql_fetch_array($user_info);
//print_r($row);
$user_id = $row_user["user_id"];
$user_count = $row_user["count(*)"];

if ($user_count == 0) {

    $sqll = "INSERT INTO `users` (name,email,password,phone,imageurl) VALUES ('" . $name . "','" . $email . "','" . md5($password) . "','" . $phone . "','" . $filename . "') ";
    $result = mysql_query($sqll);
    //echo "You have successfully registered";
    $result = mysql_query($query);
    //echo "You have successfully registered New Campaign";
    $last_user_id = mysql_insert_id();

    $query = "INSERT INTO `tblcampaigns` (user_id,name,campaignsname,campaigngoal,email,phone,banner,campaignmessage,slug,campaigntagline) VALUES ('" . $last_user_id . "','" . mysql_real_escape_string($name) . "','" . mysql_real_escape_string($campaignname) . "','" . mysql_real_escape_string($campaigngoal) . "','" . $email . "', '" . $phone . "','" . $banner . "', '" . mysql_real_escape_string($campaignmessage) . "', '" . $slug . "', '" . $campaigntagline . "') ";

    $result2 = mysql_query($query);
    //echo "You have successfully registered New Campaign";
    $id = mysql_insert_id();
    //campaign table query//

    if($_SESSION['login_username'] != 'admin') {    
    $_SESSION['login_username'] = $name;
    $_SESSION['campaign_email'] = $email;
    $_SESSION['logged_user_id'] = $last_user_id;
	}
//** Email for New User account details starts here **//

$usersubject = 'Your Mission of Hope Campaign Log In';
$usermsg = "<html>
<head>
<title>Your Mission of Hope Campaign Log In</title>
</head>
<body>
<p>Hey ".$name." !</p>

<p>Below are your Mission of Hope campaign login details:</p>

<p>Email: ".$email."</p>
<p>Password: ".$password."</p>

<p>".$short."</p>

<p>--Mission of Hope team</p>
</body>
</html>";

$userheaders = 'MIME-Version: 1.0' . "\r\n";
$userheaders .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$userheaders .= 'From: Mission of Hope <leveque@mohhaiti.org>' . "\r\n";
$userheaders .= 'Reply-To: leveque@mohhaiti.org' . "\r\n";

mail($email, $usersubject, $usermsg, $userheaders);

//** Email for New User account details ends here **//

} else {

    $query = "INSERT INTO `tblcampaigns` (user_id,name,campaignsname,campaigngoal,email,phone,banner,campaignmessage,slug,campaigntagline) VALUES ('" . $user_id . "','" . $name . "','" . mysql_real_escape_string($campaignname) . "','" . $campaigngoal . "','" . $email . "', '" . $phone . "','" . $banner . "', '" . mysql_real_escape_string($campaignmessage) . "','" . $slug . "','" . mysql_real_escape_string($campaigntagline) . "') ";
$to = $email;
    $subject = 'Response from Campaigns Ads';
    $message = 'Thanks for creating Campaign, we will proceed soon';
    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= 'From: envee@60degree.com' . "\r\n";
    //mail($to, $subject, $message, $headers);


    $result2 = mysql_query($query);
    //echo "You have successfully registered New Campaign";
    $id = mysql_insert_id();
    //campaign table query//
	if($_SESSION['login_username'] != 'admin') {
    $_SESSION['login_username'] = $name;
    $_SESSION['campaign_email'] = $email;
    $_SESSION['logged_user_id'] = $user_id;
	}
}


//** Mail for New Campaign Starts **//

$campaignto = $email;
$campaignsubject = 'Let’s Get Started with Your Campaign';
   
$campaignmsg = "<html>
<head>
<title>Let’s Get Started with Your Campaign</title>
</head>
<body>
<p>Hey ".$name." !</p>

<p>Thank you so much for helping us Finish Leveque with your campaign. We love people, like you, who choose to help others and put them first :)</p>

<p>So, here are some really important things about your campaign (to help it be successful and ultimately have a bigger impact):</p>

<p>1. Make the first donation to your campaign (no matter how big or small) it shows a commitment to your friends and family and is an example they can follow.</p>

<p>2. When sharing with friends and family, personalized email is best. We've included an email template for you on our campaign tips page so check those out - http://goo.gl/cUovkY</p>

<p>3. We’ll be sending you emails every now and then to help you along, images you can share on social media, when to follow up with people, etc</p>

<p>".$short."</p>

<p>—Mission of Hope + New Story team</p>
<p>PS: Let us know any questions, comments you have. Just hit reply.</p>
</body>
</html>";


$campaignheaders = 'MIME-Version: 1.0' . "\r\n";
$campaignheaders .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$campaignheaders .= 'From: Mission of Hope <leveque@mohhaiti.org>' . "\r\n";
$campaignheaders .= 'Reply-To: leveque@mohhaiti.org' . "\r\n";
mail($campaignto, $campaignsubject, $campaignmsg, $campaignheaders);

//** Mail for New Campaign Ends **//


//header('Location: campaign.php');
//header('Location: '.$slug.'');


if($_SESSION['login_username'] == 'admin') {
 header("location:admin-campaigns.php"); exit();
} else {
header('Location: '.$slug.''); exit();
}


?>




