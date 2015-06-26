<?php
session_start();
$title = "Support Shiller and family - New Story";
include('header.php');
?></head>
<body>

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


<?php
include 'db_connect.php';
$_SESSION['last_row_id'] = $_GET['id'];
if (isset($_POST['submit'])) {
    $amount = $_POST['amount'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];



    $query = "INSERT INTO `campaign_donation` (amount,donername,email,message) VALUES ('" . $amount . "','" . $name . "','" . $email . "','" . $message . "')";

    $result = mysql_query($query);
}

$cid = $_GET['id'];
$getcampaign = mysql_query("SELECT * FROM `tblcampaigns` where `campaigns_id` = '$cid';");
$campaign = mysql_fetch_array($getcampaign);
//echo '<pre>'; print_r($campaign);
?>



<div class="donate-section">
    <div id="supportFormWrapper">
        <div id="supportingForm">
            <h1>You're donating for <?php echo $campaign['campaignsname']; ?></h1>
            <form action="payment.php" method="POST" id="support">
                <input type="hidden" name="campaign_id" value="<?=$_GET['id']?>">
                <div class="fieldWrapper ammoubtWrapper">
                    <h2 class="headingText">Amount</h2>
                    <div class="amount">
                        <div class="checkoutAmount">
                            <span class="addOn">$</span>
                            <input id="otherAmount" name="amount" type="text" required="true">
							<input name="cid" type="hidden" value="<?php echo $campaign['campaigns_id']; ?>">
                        </div>
                    </div>
                </div>
                <div class="fieldWrapper">
                    <h3>Your Name</h3>
                    <input name="donorname" type="text" required="true">
                </div>
                <div class="fieldWrapper">
                    <h3>Email</h3>
                    <input name="email" type="email" required="true">
                </div>
                <div class="fieldWrapper">
                    <h3>Comment</h3>
					<textarea name="comment" rows="4" cols="50"></textarea>
                    </div>
                <div class="nextWrapper">
                    <input type="submit" class="nexButton" name="submit" value="Next →">

                </div>
            </form>
        </div>

    </div>
    <?php
    include('footer.php');
    ?>
