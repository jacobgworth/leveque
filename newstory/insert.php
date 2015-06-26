<?php
session_start(); 
$_SESSION['get_started'] = 'yes';
include 'db_connect.php';

$name = $_POST['name'];
$campaignname = $_POST['campaignname'];
//$birthdate = $_POST['birthdate'];
$birthmonth = $_POST['birthmonth'];
$birthday = $_POST['birthday'];
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

    $sqll = "INSERT INTO `users` (name,email,password,phone,birthmonth,birthday,imageurl) VALUES ('" . $name . "','" . $email . "','" . md5($password) . "','" . $phone . "','" . $birthmonth . "','" . $birthday . "','" . $filename . "') ";
    $result = mysql_query($sqll);
    //echo "You have successfully registered";
    $result = mysql_query($query);
    //echo "You have successfully registered New Campaign";
    $last_user_id = mysql_insert_id();

    $query = "INSERT INTO `tblcampaigns` (user_id,name,campaignsname,birthmonth,birthday,campaigngoal,email,phone,banner,campaignmessage,slug,campaigntagline) VALUES ('" . $last_user_id . "','" . mysql_real_escape_string($name) . "','" . mysql_real_escape_string($campaignname) . "','" . $birthmonth . "','" . $birthday . "','" . mysql_real_escape_string($campaigngoal) . "','" . $email . "', '" . $phone . "','" . $banner . "', '" . mysql_real_escape_string($campaignmessage) . "', '" . $slug . "', '" . $campaigntagline . "') ";

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

$usersubject = 'New Story Login Details';
$usermsg = "<html>
<head>
<title>New Story Login Details</title>
</head>
<body>
<p>Hey ".$name." !</p>

<p>Thankyou for creating campaign - <a target='_blank' href='http://leveque.newstorycharity.org/".$slug."'>".$campaignname."</a>! and registering with New Story Charity. Below are your New Story login details:</p>

<p>Email: ".$email."</p>
<p>Password: ".$password."</p>

<p>http://leveque.newstorycharity.org/".$slug."</p>

<p>--Matthew</p>
</body>
</html>";

$userheaders = 'MIME-Version: 1.0' . "\r\n";
$userheaders .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
//$userheaders .= 'info@newstorycharity.org' . "\r\n";

mail($email, $usersubject, $usermsg, $userheaders);

//** Email for New User account details ends here **//

} else {

    $query = "INSERT INTO `tblcampaigns` (user_id,name,campaignsname,birthmonth,birthday,campaigngoal,email,phone,banner,campaignmessage,slug,campaigntagline) VALUES ('" . $user_id . "','" . $name . "','" . mysql_real_escape_string($campaignname) . "','" . $birthmonth . "','" . $birthday . "','" . $campaigngoal . "','" . $email . "', '" . $phone . "','" . $banner . "', '" . mysql_real_escape_string($campaignmessage) . "','" . $slug . "','" . mysql_real_escape_string($campaigntagline) . "') ";
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
$campaignsubject = 'Let\'s Get Started with Your New Story Campaign';
   
$campaignmsg = "<html>
<head>
<title>Let's Get Started with Your New Story Campaign</title>
</head>
<body>
<p>Hey ".$name." !</p>

<p>So excited about your birthday campaign - <a target='_blank' href='http://leveque.newstorycharity.org/".$slug."'>".$campaignname."</a>! We love people, like you, who choose to help others and put them first :)</p> 

<p>So, here are some really important things about your campaign (to help it be successful and ultimately have a bigger impact):</p>

<p>1. Make the first donation to your campaign (no matter how big or small) it shows a commitment to your friends and family and is an example they can follow.</p>

<p>2. When sharing with friends and family, personalized email is best. We've included an email template for you on our campaign tips page so check those out - http://newstorycharity.org/campaign-tips</p>

<p>3. I'll be sending you emails every now and then to help you along, images you can share on instagram, when to follow up with people, etc</p>

<p>http://leveque.newstorycharity.org/".$slug."</p>

<p>--Matthew</p>
<p>PS:  Let me know any questions, comments you have.</p>
</body>
</html>";


$campaignheaders = 'MIME-Version: 1.0' . "\r\n";
$campaignheaders .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
//$campaignheaders .= 'info@newstorycharity.org' . "\r\n";
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




