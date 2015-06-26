<?php
session_start();

 
include("header2.php"); 
$logged_user_id = $_SESSION['logged_user_id'];  
$id = $_SESSION['last_row_id'];  
$email_login = $_SESSION['email_login'];

//echo $id;
       //echo $email_login;

			//include('header.php');
			//$user_id =  $_SESSION['user_id'];
			//$login_username = $_SESSION['login_username'];

		    include 'db_connect.php';
			 
			$getquery="SELECT * FROM `tblcampaigns` where `user_id` = '$logged_user_id'";
				
			$qury = mysql_query($getquery);
			?>
 <div class="w-section">
    <div class="w-container content-section">
      <div>
        <h1 class="campaign-tips-h1">How to run a successful campaign</h1>
        <div class="how-it-works-text small contact">The 3 most important things</div>
      </div>
      <div class="card campaign-tips">
        <div class="timeline-image campaign-tips" left="50%">
          <div class="timeline-number">1</div>
        </div>
        <h2 class="bold-h2 campaign-tips">Make the first donation</h2>
        <p class="campaign-tips-paragraph">Get your campaign started off strong by donating to your campaign and showing&nbsp;your commitment to writing a new story.</p>
      </div>
      <div class="card campaign-tips">
        <div class="timeline-image campaign-tips" left="50%">
          <div class="timeline-number">2</div>
        </div>
        <h2 class="bold-h2 campaign-tips">Personal email is KING</h2>
        <p class="campaign-tips-paragraph">Use our campaign template below to help send your first email. The best practice is to send <strong>individual, personal</strong> (not mass) emails.&nbsp;</p>
        <div class="w-tabs" data-duration-in="300" data-duration-out="100">
          <div class="w-tab-menu">
            <a class="w-tab-link w--current w-inline-block tab-link campaign" data-w-tab="Tab 1">
              <div>Example Email</div>
            </a>
          </div>
          <div class="w-tab-content tabs-content campaign">
            <div class="w-tab-pane w--tab-active" data-w-tab="Tab 1">
              <div class="sample-email-template">
                <p class="small-paragraph left-paragraph">Subject: Let's Do For One What We Wish We Could Do For All
                 <br>Hey ____
                  <br>
                  <br>Recently I learned that there are families who lost their home during the 2010 earthquake in Haiti that are still living in tarp tents. Although they work hard, they are unable to build a permanent house for themselves. It’s been 5 years. Too long.
                  <br>
                  <br>But we can help change that. I’m asking my friends and family to help me give a family currently living a dangerous tent a new, safe home! 
                  <br>
                  <br>Every little bit counts! I'd love your help. [Link to your Campaign]  
                  <br>
                  <br>What's really cool about this campaign is that Mission of Hope, Haiti uses 100% of your donation to directly build the homes, and then after the new home is built they will send us a video of the exact family they funded in their new home. 
                  <br>
                  <br>Thank you for your support! 
                  [your name]
                  <br><span class="highlight-yellow">[your name]</span>
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="alert-box">
          <h3 class="alert-h3">Who to email?</h3>
          <p class="white-paragraph alert">Family, friends, aunts, uncles, high school friends, cousins, former teachers, parents of friends, college friends, church members,&nbsp;colleagues, and professors.</p>
        </div>

      </div>
      <div class="card campaign-tips">
        <div class="timeline-image campaign-tips" left="50%">
          <div class="timeline-number">3</div>
        </div>
        <h2 class="bold-h2 campaign-tips">Post on Facebook</h2>
        <p class="campaign-tips-paragraph">Share your campaign on Facebook, Twitter, etc and spread the word about your goal.</p>
        <div class="w-tabs" data-duration-in="300" data-duration-out="100">
          <div class="w-tab-menu">
            <a class="w-tab-link w--current w-inline-block tab-link campaign" data-w-tab="Tab 1">
              <div>Social Post</div>
            </a>
          </div>
          <div class="w-tab-content tabs-content campaign">
            <div class="w-tab-pane w--tab-active" data-w-tab="Tab 1">
              <div class="sample-email-template">
                <p class="small-paragraph left-paragraph">
                  <br>There’s a community in Haiti called Leveque. 5 years ago they lost everything in the earthquake - their possession, their home, and their way of life.
<br>
<br>But we can do something to help. I’m asking my friends and family to support my campaign to help one family.  Every penny of the money raised will directly build a new home in Haiti. Even better, we’ll be able to see, with video, exactly which family we funded once the home is complete.  
<br>
<br>Help me reach my goal! <span class="highlight-yellow">[link to campaign]</span><span class="highlight-yellow"></span>
                </p><img class="campaign-share-image" src="images/new story initials -52-min.jpg">
                <div>Right click on this image to download and use for social.</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="card campaign-tips">
        <div class="timeline-image campaign-tips" left="50%">
          <div class="timeline-number">PS</div>
        </div>
        <h2 class="bold-h2 campaign-tips">Thank your supporters!</h2>
        <p class="campaign-tips-paragraph">Make sure you thank your donors for donating and their support.&nbsp;</p>
        <div class="sample-email-template">
          <p class="small-paragraph left-paragraph">Subject: Thank you, thank you!
            <br>
            <br>Hey&nbsp;<span class="highlight-yellow">[your supporter's name]</span>,
            <br>
            <br>Thanks so much for your donation to my campaign!
            <br>&nbsp;
            <br> Can’t wait for Mission of Hope, Haiti to send us a video of the family, we're helping, in their new home.
            <br>            
            <br> Thank you!&nbsp;
            <br><span class="highlight-yellow">[your name]</span><span class="highlight-yellow"></span>
          </p>
        </div>
      </div>
      <div class="card campaign-tips">
        <div class="timeline-image campaign-tips" left="50%">
          <div class="timeline-number">P</div>
        </div>
        <h2 class="bold-h2 campaign-tips">Photos to Use!</h2>
        <a class="w-lightbox w-inline-block" href="#"><img class="campaign-share-image more" src="images/new story initials -24-min.jpg">
          <script type="application/json" class="w-json">
            { "items": [{
              "url": "images/new story initials -24-min.jpg",
              "fileName": "557107270233ab2a2884e226_new story initials -24-min.jpg",
              "origFileName": "new story initials -24-min.jpg",
              "width": 1200,
              "height": 800,
              "size": 63297,
              "type": "image"
            }, {
              "url": "images/new story initials -15 (1)-min.jpg",
              "fileName": "55710c2bceff75333132806b_new story initials -15 (1)-min.jpg",
              "origFileName": "new story initials -15 (1)-min.jpg",
              "width": 1200,
              "height": 800,
              "size": 122875,
              "type": "image"
            }, {
              "url": "images/new story initials -21-min.jpg",
              "fileName": "5571084bceff753331328026_new story initials -21-min.jpg",
              "origFileName": "new story initials -21-min.jpg",
              "width": 1200,
              "height": 800,
              "size": 78384,
              "type": "image"
            }, {
              "url": "images/new story initials -52-min.jpg",
              "fileName": "556f2d2ef1bd455a30f8a74e_new story initials -52-min.jpg",
              "origFileName": "new story initials -52-min.jpg",
              "width": 1200,
              "height": 800,
              "size": 177024,
              "type": "image"
            }, {
              "url": "images/new story initials -64-min.jpg",
              "fileName": "556f3769e84e07583015fd3a_new story initials -64-min.jpg",
              "origFileName": "new story initials -64-min.jpg",
              "width": 1200,
              "height": 800,
              "size": 273790,
              "type": "image"
            }] }
          </script>
        </a>
        <div>Click on this image to see more images for download (right click and save as)</div>
      </div>
    </div>
  </div>

  <?php include("footer.php"); ?>