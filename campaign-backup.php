<?php
session_start();
include 'db_connect.php';
$id = $_SESSION['last_row_id'];
$logged_user_id = $_SESSION['logged_user_id'];
//echo $id;
$email_login = $_SESSION['email_login'];

include("header2.php");



$getquery = "SELECT * FROM `tblcampaigns` where `email` = '$email_login' ORDER BY campaigns_id  DESC Limit 1;";

$qury = mysql_query($getquery);

while ($rows = mysql_fetch_assoc($qury)) {

    //print_r($rows);
    ?>



    <div class="w-section campaign-hero new homes">
        <img class="w-section campaign-hero new homes" src="<?php $_SERVER['DOCUMENT_ROOT'];?>/newstoryapp/images/<?php echo $rows['imageurl']; ?>" alt="">

        <div class="w-form campaign-name-form">
            <div class="w-input campaign-name-text-field"><?php echo $rows['campaignsname']; ?></div>
            <!--<form id="email-form" name="email-form" data-name="Email Form">
              <input class="w-input campaign-name-text-field" id="name" type="text" value="<?php echo $rows['campaignsname']; ?>" name="name" data-name="Name" readonly>
              <!--<a class="button name-campaign" href="#">Ok <span class="small-button-text">(press enter)</span></a>-->
            <!--<div class="campaign-name-tooltip">
              <div class="tooltip-triangle"></div>
              <p>For example: Bob's 23rd birthday! or Julie runs a 5K for good, or get funny with it - Brandon eats 1,000 ice cubes for New Story!</p>
              <p>step 1 of 5</p>
              <p>don't worry you can edit anytime</p>  
            </div>
          </form>-->
            <div class="w-form-done">
                <p>Thank you! Your submission has been received!</p>
            </div>
            <div class="w-form-fail">
                <p>Oops! Something went wrong while submitting the form :(</p>
            </div>
        </div>
    </div>
    <div class="w-section campaign-section new">
        <div class="w-container">
            <div class="w-row campaign-content-row">
                <div class="w-col w-col-4">
                    <div class="left-column">
                        <div class="w-hidden-main w-hidden-medium campaign-div">
                            <h2 class="campaign-story-header">This birthday, instead of more gifts, I’m asking&nbsp;&nbsp;friends and family for donations!</h2><img class="campaign-new-image" src="<?php $_SERVER['DOCUMENT_ROOT'];?>/images/<?php echo $rows['imageurl']; ?>" alt="">
                            <a href="editcampprofile.php?">Edit</a>
                            <p class="w-hidden-medium small-paragraph campaign">
                                <?php echo $rows['campaignmessage']; ?>
                            </p>
                        </div>
                        <div class="campaign-div">
                            <div class="project-current-amount new">$0</div>
                            <div class="project-goal-text _2">raised&nbsp;of $<?php echo $rows['campaigngoal']; ?> goal</div>
                            <div class="progress _2 new">
                                <div class="progress-bar matthew"></div>
                            </div>
                            <a class="button donate _2 campaign" href="donate-campaign.php?id=<?php echo $rows['campaigns_id'];?>">Donate now</a>
                        </div>
                        <div class="campaign-div center"><img class="campaign-video-icon" src="images/1418711192_video-64.png" width="32" alt="5460e3533e0271fd30646956_video-64.png">
                            <div class="video-transparency-text bold">Video Transparency</div>
                            <div class="video-transparency-text">After this campaign is complete, the family’s home has been funded, New Story will send you a video of the family in their new home.</div>
                        </div>
                        <div class="campaign-div center">
                            <div class="video-transparency-text bold donors">Donors</div>
                            <div class="w-clearfix donor-div">
                                <div class="donor-name">Matthew marshall</div>
                                <div class="donor-name amount">$500</div>
                                <div class="donation-commen">“Let's get this thing started!�?</div>
                            </div>
                        </div>
                    </div>




                    <div class="campaign-div center">
                        <div class="video-transparency-text bold donors">Share this Campaign</div>
                        <div class="social-share-wrapper">
                            <a class="w-inline-block social-div email campaign" href="mailto:?subject=Check%20out%20this%20charity%20-%20New%20Story"><img class="social-button-icon campaign" src="images/Communication-gmail-icon.png" width="29" alt="54483d0900cc24305ec4c991_Communication-gmail-icon.png">
                            </a>
                            <a class="w-inline-block social-div campaign" href="https://www.facebook.com/sharer/sharer.php?u=http://newstorycharity.org/campaign/matthew" target="_blank"><img class="social-button-icon campaign" src="images/54242d7ad903582652f059ff_FB-f-Logo__white_29.png" alt="54483b58339d02715b5c14ef_54242d7ad903582652f059ff_FB-f-Logo__white_29.png">
                            </a>
                            <a class="w-inline-block social-div twitter campaign" href="https://twitter.com/intent/tweet?text=Matthew's%2025th%20Birthday!%20newstorycharity.org%2Fmatthew" target="_blank"><img class="social-button-icon twitter campaign" src="images/54242e1548c6a298065c03a6_Twitter_logo_white.png" width="29" alt="54483bd28285d16f5b4ca6a4_54242e1548c6a298065c03a6_Twitter_logo_white.png">
                            </a>
                        </div>
                    </div>
                    <div class="card home-expenses">
                        <div class="expenses-header campaign">
                            <h4>Where 100% of your donation goes</h4>
                        </div>
                        <div class="w-clearfix expenses-sub-header">
                            <div class="expense-text">Expense</div>
                            <div class="expense-text left">Amount</div>
                        </div>
                        <div class="w-clearfix expenses-sub-header line-item">
                            <div class="expense-text">Labor</div>
                            <div class="expense-text left">$1,265.63 USD</div>
                        </div>
                        <div class="w-clearfix expenses-sub-header line-item">
                            <div class="expense-text">Foundation</div>
                            <div class="expense-text left">$1,171 USD</div>
                        </div>
                        <div class="w-clearfix expenses-sub-header line-item">
                            <div class="expense-text">Concrete Block</div>
                            <div class="expense-text left">$900 USD</div>
                        </div>
                        <div class="w-clearfix expenses-sub-header line-item">
                            <div class="expense-text">Cement</div>
                            <div class="expense-text left">$921.25 USD</div>
                        </div>
                        <div class="w-clearfix expenses-sub-header line-item">
                            <div class="expense-text">Rebar</div>
                            <div class="expense-text left">$478.13 USD</div>
                        </div>
                        <div class="w-clearfix expenses-sub-header line-item">
                            <div class="expense-text">Roof and Door&nbsp;</div>
                            <div class="expense-text left">$717.75 USD</div>
                        </div>
                        <div class="w-clearfix expenses-sub-header line-item">
                            <div class="expense-text">Timber and fixings&nbsp;</div>
                            <div class="expense-text left">$549.37 USD</div>
                        </div>
                        <div class="w-clearfix expenses-sub-header line-item">
                            <div class="expense-text">Total</div>
                            <div class="expense-text left">$6,003.13 USD</div>
                        </div>
                        <div class="expenses-sub-header"><a class="link" href="https://docs.google.com/spreadsheets/d/1Uftmw48rSouldmhidZEV1Kwo9FsJrY5q24Hz5rpraKU/edit?usp=sharing" target="_blank">click to see a line item breakdown of all expenses</a>
                        </div>
                    </div>
                </div>
                <div class="w-col w-col-8">
                    <div class="w-hidden-small w-hidden-tiny campaign-div">
						
                        <h2 class="campaign-story-header">This birthday, instead of more gifts, I’m asking&nbsp;&nbsp;friends and family for donations!</h2>
                        <p class="small-paragraph campaign">

                            <?php echo $rows['campaignmessage']; ?>
                        </p>
                    </div>

                    <?php
                    $logged_user_id;
                    $getquery = "SELECT * FROM `users` where `user_id` = '$logged_user_id';";

                    $qury = mysql_query($getquery);

                    while ($ress = mysql_fetch_array($qury)) {
                        //print_r($ress);
                        ?>


                        <img class="campaign-new-image" src="<?php $_SERVER['DOCUMENT_ROOT'];?>/newstoryapp/images/<?php echo $ress['imageurl']; ?>" alt="">
                        <a href="editcampprofile.php?"></a>

                    <?php } ?> 

                    <div class="campaign-div">
                        <div class="w-embed w-video video" style="padding-top: 56.25%;">
                            <iframe class="embedly-embed" src="https://cdn.embedly.com/widgets/media.html?src=http%3A%2F%2Fplayer.vimeo.com%2Fvideo%2F116544330&amp;url=https%3A%2F%2Fvimeo.com%2F116544330https%3A%2Fvimeo.com%2F113984932&amp;image=http%3A%2F%2Fi.vimeocdn.com%2Fvideo%2F502943080_640.jpg&amp;key=c4e54deccf4d4ec997a64902e9a30300&amp;type=text%2Fhtml&amp;schema=vimeo" scrolling="no" frameborder="0" allowfullscreen=""></iframe>
                        </div>
                    </div>


                <?php }
                ?>


                <div class="campaign-div center">
                    <div class="campaign-div-title">
                        <div class="campaign-div-header">How It Works</div>
                    </div>
                    <div class="w-row homepage-how campaign">
                        <div class="w-col w-col-4"><img class="family-icon campaign" src="images/1418711050_world-64.png" alt="5460e3a1c559731c2a5f996c_world-64.png">
                            <div class="how-it-works-text homepage">Meet a Family</div>
                            <div class="how-it-works-text homepage small">See exactly who needs your help</div>
                        </div>
                        <div class="w-col w-col-4"><img class="family-icon campaign" src="images/1418710929_heart-64.png" alt="5460e3a673582afc3085d38b_heart-64.png">
                            <div class="how-it-works-text homepage">Fund a Home</div>
                            <div class="how-it-works-text homepage small">100% goes to the home</div>
                        </div>
                        <div class="w-col w-col-4"><img class="family-icon campaign" src="images/1418711192_video-64.png" alt="5460e3533e0271fd30646956_video-64.png">
                            <div class="how-it-works-text homepage">See Results</div>
                            <div class="how-it-works-text homepage small">Get a video of the new story</div>
                        </div>
                    </div><a class="link-inline campaign" href="http://newstorycharity.org/how">see in detail how we work &gt;</a>
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="w-section footer-section">
    <div class="w-section bottom-footer">
        <div class="w-container">
            <div class="w-row footer-row">
                <div class="w-col w-col-3 w-col-small-6 w-col-tiny-6 footer-column">
                    <div class="footer-column-title">About</div><a class="footer-link" href="http://newstorycharity.org/about-us">Our Story</a><a class="footer-link" href="http://newstorycharity.org/the-team">The Team</a><a class="footer-link" href="http://newstorycharity.org/contact">Contact Us</a><a class="footer-link" href="http://newstorycharity.org/press-inquiries">Press Inquires</a>
                </div>
                <div class="w-col w-col-3 w-col-small-6 w-col-tiny-6 footer-column">
                    <div class="footer-column-title">The Cause</div><a class="footer-link" href="http://newstorycharity.org/how">How it Works</a><a class="footer-link" href="http://newstorycharity.org/why">Why Homes</a><a class="footer-link" href="http://newstorycharity.org/families-page#funded-families">Funded Families</a><a class="footer-link" href="http://newstorycharity.org/local-partners">Local Partners</a>
                </div>
                <div class="w-col w-col-3 w-col-small-6 w-col-tiny-6 footer-column end">
                    <div class="footer-column-title">Help a Family</div><a class="footer-link" href="http://newstorycharity.org/families-page">Meet a Family</a><a class="footer-link" href="http://newstorycharity.org/sponsor-a-family">Family Sponsorship</a><a class="footer-link" href="http://newstorycharity.org/the-team">General Donation</a><a class="footer-link" href="http://newstorycharity.org/create-campaign">Run a Campaign</a>
                </div>
                <div class="w-col w-col-3 w-col-small-6 w-col-tiny-6 footer-column end">
                    <div class="footer-column-title">Get Involved</div><a class="footer-link" href="http://newstorycharity.org/birthdays">Give up your birthday</a><a class="footer-link" href="http://newstorycharity.org/investor-donors">Become an Investor</a><a class="footer-link" href="http://newstorycharity.org/create-campaign#successful-campaigns">Successful Campaigns</a><a class="footer-link" href="http://newstorycharity.org/jobs">Jobs</a>
                </div>
            </div>
        </div>
        <div class="made-with-soul">have a question? Let us answer in our <a href="http://newstorycharity.org/faqs" class="link-inline gray line">FAQs</a>
        </div>
        <div class="made-with-soul"><a href="http://newstorycharity.org/about-us#local-partner" class="link-inline gray line">501(c)(3) status</a> •&nbsp;made with soul in atlanta&nbsp;•&nbsp;© 2015</div>
        <a class="w-inline-block social-link" href="https://twitter.com/NewStoryCharity" target="_blank"><img src="images/1420349409_square-twitter-64.png" width="32" alt="54a87b86bc29b5d10de5dc52_1420349409_square-twitter-64.png">
        </a>
        <a class="w-inline-block social-link" href="https://www.facebook.com/newstorycharity" target="_blank"><img src="images/1420349296_square-facebook-64.png" width="32" alt="54a87b65bc29b5d10de5dc4d_1420349296_square-facebook-64.png">
        </a>
        <div class="w-embed w-script privacy-policy"><a href="//www.iubenda.com/privacy-policy/212737" class="iubenda-black iub-legal-only iubenda-embed" title="Privacy Policy">Privacy Policy</a>
            <script type="text/javascript">
                (function (w, d) {
                    var loader = function () {
                        var s = d.createElement("script"), tag = d.getElementsByTagName("script")[0];
                        s.src = "//cdn.iubenda.com/iubenda.js";
                        tag.parentNode.insertBefore(s, tag);
                    };
                    if (w.addEventListener) {
                        w.addEventListener("load", loader, false);
                    } else if (w.attachEvent) {
                        w.attachEvent("onload", loader);
                    } else {
                        w.onload = loader;
                    }
                })(window, document);
            </script>
        </div>
    </div>
</footer>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" src="js/webflow.js"></script>
<!--[if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif]-->
</body>
</html>
