<?php
$title = "Thank you! - New Story";
include('header.php');
/* if(isset( $_REQUEST['mystatus'] )){
				echo '<span style="color:green;">Dear <b>'.$_REQUEST['stripeEmail'].'</b> your payment token request is '.$_REQUEST['stripeToken'].'</span>';
} */
//echo "<pre>";
//print_r($_REQUEST);
if(isset($_GET['did'])) {
 mysql_query("update `campaign_donation` SET `status`='success' WHERE did = '".$_GET['did']."'");

 $donorinfo = mysql_query("select * from `campaign_donation` WHERE did = '".$_GET['did']."'");
 $getdonor = mysql_fetch_array($donorinfo);


$campaignerinfo = mysql_query("select * from `tblcampaigns` WHERE campaigns_id = '".$getdonor['cid']."'");
$getcampaigner = mysql_fetch_array($campaignerinfo);


//**  Email to donor starts here  **//
$donorto = $getdonor['email'];
$donorsubject = 'Thank you, thank you!';

$donormsg = "<html>
<head>
<title>Thank you, thank you!</title>
</head>
<body>
<p>Hey ".$getdonor['donername'].",</p>

<p>Thanks so much for your donation to my campaign!</p>

<p>Can’t wait for New Story to send us a video of the family we fund in their new home.</p>

<p>--".$getcampaigner['name']."</p>
<p>PS: If you also want to give up your birthday, find out more information at newstorycharity.org/birthdays :)</p>
</body>
</html>";


$donorheaders = 'MIME-Version: 1.0' . "\r\n";
$donorheaders .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
//$campaignheaders .= 'info@newstorycharity.org' . "\r\n";
mail($donorto, $donorsubject, $donormsg, $donorheaders);


//**  Email to donor ends here  **//

//**  Email to campaigner starts here  **//

$campaignerto = $getcampaigner['email'];
$campaignersubject = $getdonor['donername'].' Donated';

$campaignermsg = "<html>
<head>
<title>".$getdonor['donername']." Donated</title>
</head>
<body>
<p>Hey ".$getcampaigner['name']." !</p>

<p>You've received a $".$getdonor['amount']." donation to your campaign <i><a href='http://leveque.newstorycharity.org/".$getcampaigner['campaignsname']."' target='_blank'>".$getcampaigner['campaignsname']."</a></i> from ".$getdonor['donername'].". </p>

<p>Your hard work means a new story is being written and we thank you.</p> 

<p>Be sure to thank your supporter. Below is an easy template you can use and here's their email - ".$getdonor['email']."</p>

<p>-- New Story Team</p>
</body>
</html>";


$campaignerheaders = 'MIME-Version: 1.0' . "\r\n";
$campaignerheaders .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
//$campaignheaders .= 'info@newstorycharity.org' . "\r\n";
mail($campaignerto, $campaignersubject, $campaignermsg, $campaignerheaders);


//**  Email to campaigner ends here  **//






}
?></head>
<body>
    <div class="alert-bar">Give up your birthday for New Story. <a href="create-campaign.html" class="link-inline white">Learn more&nbsp;&gt;</a>
    </div>
    <?php
    //include('nav.php');
    ?>
    <div class="w-icon-dropdown-toggle"></div>
</div>
<nav class="w-dropdown-list"><a class="w-dropdown-link dropdown-link" href="birthdays.html">New Story Birthdays</a><a class="w-dropdown-link dropdown-link" href="create-campaign.html">Start a Campaign</a>
</nav>
</div>
</nav>
<div class="w-nav-button menu-button">
    <div class="w-icon-nav-menu menu-icon"></div>
    <div class="menu-text">MENU</div>
</div>
</div>
</div>
<div>
    <div class="w-container content-section thank-you">
        <h1>Thank you for your donation!</h1>
        <a class="w-clearfix w-inline-block social-div thank-you" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fnewstorycharity.org&amp;t=New%20Story%20-%20connecting%20donors%20with%20homeless%20families%20around%20the%20world%20to%20create%20life-changing%20stories" target="_blank"><img class="social-button-icon" src="images/54242d7ad903582652f059ff_FB-f-Logo__white_29.png">
            <div class="social-button-text">facebook</div>
        </a>
        <a class="w-clearfix w-inline-block social-div twitter" href="https://twitter.com/intent/tweet?source=http%3A%2F%2Fnewstorycharity.org&amp;text=New%20Story%20-%20connecting%20donors%20with%20homeless%20families%20around%20the%20world%20to%20create%20life-changing%20stories:%20http%3A%2F%2Fnewstorycharity.org" target="_blank"><img class="social-button-icon twitter" src="images/54242e1548c6a298065c03a6_Twitter_logo_white.png" width="29">
            <div class="social-button-text">twitter</div>
        </a>
        <div class="thank-you-video">
            <div class="w-embed w-video video" style="padding-top: 56.25%;">
                <iframe class="embedly-embed" src="https://cdn.embedly.com/widgets/media.html?src=http%3A%2F%2Fplayer.vimeo.com%2Fvideo%2F112432577&amp;src_secure=1&amp;url=http%3A%2F%2Fvimeo.com%2F112432577&amp;image=http%3A%2F%2Fi.vimeocdn.com%2Fvideo%2F497404117_640.jpg&amp;key=c4e54deccf4d4ec997a64902e9a30300&amp;type=text%2Fhtml&amp;schema=vimeo" scrolling="no" frameborder="0" allowfullscreen=""></iframe>
            </div>
        </div>
        <div>
            <h2>Help us spread the word:</h2>
            <div class="thank-you-share-div">
                <div class="share-tex">1.&nbsp;Send an email to a friend who believes what we believe.
                    <br>Use our template below.</div>
                <div class="email-template">
                    <div>Hey [friend's name],
                        <br>
                        <br>Check out New Story! They connect donors with homeless families around the world to create life-changing stories. After a home is funded and built they send a video of the family in their new home. &nbsp;And 100% of all donations go directly to building homes (overhead is covered by private donors).
                        <br>
                        <br>newstorycharity.org
                        <br>
                        <br>-- [Your name]</div>
                </div>
                <div class="share-tex">2. Share with friends and family on social media</div>
                <a class="w-clearfix w-inline-block social-div" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fnewstorycharity.org&amp;t=New%20Story%20-%20connecting%20donors%20with%20homeless%20families%20around%20the%20world%20to%20create%20life-changing%20stories" target="_blank"><img class="social-button-icon" src="images/54242d7ad903582652f059ff_FB-f-Logo__white_29.png">
                    <div class="social-button-text">facebook</div>
                </a>
                <a class="w-clearfix w-inline-block social-div twitter" href="https://twitter.com/intent/tweet?source=http%3A%2F%2Fnewstorycharity.org&amp;text=New%20Story%20-%20connecting%20donors%20with%20homeless%20families%20around%20the%20world%20to%20create%20life-changing%20stories:%20http%3A%2F%2Fnewstorycharity.org" target="_blank"><img class="social-button-icon twitter" src="images/54242e1548c6a298065c03a6_Twitter_logo_white.png" width="29">
                    <div class="social-button-text">twitter</div>
                </a>
            </div>
        </div>
    </div>
</div>
<?php
include('footer.php');
?>