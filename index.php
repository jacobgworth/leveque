<!DOCTYPE html>
<!-- This site was created in Webflow. http://www.webflow.com-->
<!-- Last Published: Mon Jun 22 2015 17:15:17 GMT+0000 (UTC) -->
<html data-wf-site="54467223a05709a755daab06" data-wf-page="55832e4da01322e55800006a">
<head>
  <meta charset="utf-8">
  <title>Let's Finish Leveque - Mission of Hope, Haiti</title>
  <meta name="description" content="We strive to meet the physical & spiritual needs of the Haitian population. View our ministries and get involved with Church Partnerships, Mission Trips or Child Sponsorships.">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="generator" content="Webflow">
  <link rel="stylesheet" type="text/css" href="css/normalize.css">
  <link rel="stylesheet" type="text/css" href="css/webflow.css">
  <link rel="stylesheet" type="text/css" href="css/newstory.webflow.css">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js"></script>
  <script>
    WebFont.load({
      google: {
        families: ["Lato:100,100italic,300,300italic,400,400italic,700,700italic,900,900italic","Varela Round:400","Inconsolata:400,400italic,700,700italic"]
      }
    });
  </script>
  <script type="text/javascript" src="js/modernizr.js"></script>
  <link rel="shortcut icon" type="image/x-icon" href="images/favicon (12).ico">
  <link rel="apple-touch-icon" href="https://daks2k3a4ib2z.cloudfront.net/img/webclip.png">
  <script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-56795892-1'], ['_trackPageview']);
    (function() {
      var ga = document.createElement('script');
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
  </script>
</head>
<body class="homepage">
<?php
session_start();
?>
  <div class="w-section hero-section behind-the-scenes moh">
    <div><img class="w-hidden-tiny powered-by-image" src="images/1434601062_FAQ_2 + powered by + new story@5x.png" width="125" data-ix="show-new-story-about-on-moh">
      <div class="new-story-about-hover">Mission of Hope is partnered with New Story (a nonprofit tech company) to finish the Blue to Block program.&nbsp;&nbsp;To date, New Story has funded 41 homes for families in Leveque. Learn more at&nbsp;newstorycharity.org
        <br>
        <br><span class="close-moh-overlay" data-ix="close-new-story-about-on-moh-2">x</span>
      </div><img style="margin-left:184px;" class="moh-logo" src="images/moh-logo.png" width="115">
      <?php if(isset($_SESSION['logged_user_id'])) {
     echo '<a class="login-button" href="dashboard.php">dashboard</a>';
    } else {
     echo '<a class="login-button" href="login.php">log in</a>';
    }?> 
    
    <a class="w-hidden-tiny powered-by-image right" href="general-donation.php">Donate Now</a>
    </div>
    <div class="w-container content-section moh">
      <h1 class="white-h1 home moh">Let<span class="kodak-font">’</span>s Finish Leveque</h1>
      <p class="moh-hero-text">While the Leveque Community has emerged as one of the most impressive resettlement communities in all of Haiti, approximately 100 families are still displaced and living in tents without a permanent home in Leveque. Mission of Hope and New Story are partnering together to see these families, their lifestyle, and their homes restored to completion. &nbsp;100% of your funds go towards the supplies and construction for this project.</p>
      <div class="campaign-cta-div"><a class="button hero new-hero" href="#impact">learn more</a>
        <a class="button hero new-hero" href="create-campaign.php">Start a Campaign</a>          
        </div>
      </div>
    </div>
  </div>
  <div>
    <div class="overlay" data-ix="close-bday-overlay">
      <div class="tent-360-container">
        <div class="w-embed w-iframe">
          <iframe width="700" height="394" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?layer=c&amp;panoid=bxnP9vtRWi4AAAQqSxlGEA&amp;ie=UTF8&amp;source=embed&amp;output=svembed&amp;cbp=13%2C61.35680000000002%2C%2C0%2C0"></iframe>
        </div>
      </div>
      <div class="close-overlay white _360">x</div>
    </div>
    <div class="w-clearfix overlay-talk-to-us" data-ix="close-bday-overlay">
      <div class="talk-to-us-div">
        <h2>We can wait to chat...</h2>
        <div class="w-form">
          <form id="wf-form-100-Partnership-Form" name="wf-form-100-Partnership-Form" data-name="100 Partnership Form">
            <label class="field-label" for="name">Name:</label>
            <input class="w-input donation-text-field" id="name" type="text" placeholder="your name" name="name" data-name="Name">
            <label class="field-label" for="email">Email Address:</label>
            <input class="w-input donation-text-field" id="email" type="email" placeholder="your email address" name="email" data-name="Email" required="required">
            <label class="field-label" for="email-2">Phone:</label>
            <input class="w-input donation-text-field" id="email-2" type="text" placeholder="your phone #" name="email-2" data-name="Email 2">
            <label class="field-label" for="involvement">Interested In (select multiple using control/command and click):</label>
            <select class="w-select donation-text-field" id="involvement" name="involvement" data-name="involvement" required="required" multiple="multiple">
              <option value="">Select one...</option>
              <option value="Home Sponsorship">Home Sponsorship</option>
              <option value="Run a Company Campaign">Run a Company Campaign</option>
              <option value="Give Back Program">Give Back Program</option>
            </select>
            <label class="field-label" for="message">Message (optional):</label>
            <textarea class="w-input donation-text-field" id="message" placeholder="Feel free to leave us a message and/or questions." name="message" data-name="message"></textarea>
            <input class="w-button button" type="submit" value="Send" data-wait="Please wait...">
          </form>
          <div class="w-form-done">
            <p>Thank you! Look for an email from us :)</p>
          </div>
          <div class="w-form-fail">
            <p>Oops! Something went wrong while submitting the form</p>
          </div>
        </div>
      </div>
      <div class="close-overlay white _360 bts" data-ix="close-talk-overlay">x</div>
    </div>
    <div class="overlay-home">
      <div class="tent-360-container">
        <div class="w-slider home-360-slider" data-animation="slide" data-duration="500" data-infinite="1" data-hide-arrows="1">
          <div class="w-slider-mask home-360-mask">
            <div class="w-slide">
              <div class="w-embed w-iframe">
                <iframe width="700" height="394" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?layer=c&amp;panoid=u9zWNkkDbKoAAAQqSySJIw&amp;ie=UTF8&amp;source=embed&amp;output=svembed&amp;cbp=13%2C345.31878955346696%2C%2C0%2C2.292618511151076"></iframe>
              </div>
            </div>
            <div class="w-slide">
              <div class="w-embed w-iframe">
                <iframe width="700" height="394" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?layer=c&amp;panoid=lyMmR6Y9EGUAAAQqSn0a7A&amp;ie=UTF8&amp;source=embed&amp;output=svembed&amp;cbp=13%2C102.83359999999999%2C%2C0%2C0"></iframe>
              </div>
            </div>
          </div>
          <div class="w-slider-arrow-left _360-sider-arrow left">
            <div class="w-icon-slider-left"></div>
          </div>
          <div class="w-slider-arrow-right _360-sider-arrow">
            <div class="w-icon-slider-right"></div>
          </div>
        </div>
      </div>
      <div class="close-overlay white" data-ix="close-bday-overlay-2">x</div>
    </div>
    <div class="w-section">
      <div class="w-row" id="impact">
        <div class="w-col w-col-6 why-text-column moh">
          <div class="why-left-inner-column black moh-1">
            <h2 class="why-h2 moh-1">Imagine 5 years without a home…</h2>
          </div>
        </div>
        <div class="w-col w-col-6 why-image-column moh-1"></div>
      </div>
      <div class="w-row">
        <div class="w-col w-col-6 why-image-column _4 moh-2"></div>
        <div class="w-col w-col-6 why-text-column _4">
          <div class="why-left-inner-column right _2 moh2">
            <h2 class="why-h2">Exposed to life threatening dangers and extreme heat…</h2>
          </div>
          <div class="safety-column-overlay">
            <p class="why-paragraph-overlay health">Health and Safety
              <br>
              <br>Families living in Leveque have no security to protect themselves from dangers like sex trafficking and rape. Heat, rain, and lack of access to basic sanitation, leave them constantly exposed to life-threatening health risks.&nbsp;</p>
            <div class="close-why-column-overlay" data-ix="hide-column-overlay">x</div>
          </div>
        </div>
      </div>
      <div class="w-row">
        <div class="w-col w-col-6 why-text-column _5">
          <div class="education-column-overlay">
            <p class="why-paragraph-overlay income bts">Home Construction
              <br>
              <br>New Story homes were designed by US architects and are built to Miami-Dade County, US hurricane code.
              <br>
              <br>Rebar reinforced concrete insures the homes are earthquake and hurricane ready.</p>
            <div class="close-why-column-overlay" data-ix="hide-column-overlay-2">x</div>
          </div>
          <div class="why-left-inner-column _3 bts">
            <h2 class="why-h2">Hoping for a better tomorrow...</h2>
          </div>
        </div>
        <div class="w-col w-col-6 why-image-column _5 bts moh-3"><a class="button why _360" href="#" data-ix="show-bday-challenge">tour a tent</a>
        </div>
      </div>
      <div class="w-row">
        <div class="w-col w-col-6 why-image-column _6 bts moh-4"><a class="button why _360" href="#" data-ix="show-home-360">tour a home</a>
        </div>
        <div class="w-col w-col-6 why-text-column _6">
          <div class="why-left-inner-column right _2 bts moh">
            <h2 class="why-h2"><span class="question-mark" data-ix="show-edu-column-overlay-2" style=""><span style="font-size: 49px;">A home changes everything&nbsp;</span></span></h2>
          </div>
          <div class="income-column-overlay">
            <p class="why-paragraph-overlay income bts">Everything Starts With a Home
              <br>
              <br>Home stability creates a foundation for...&nbsp;
              <br>
              <br>• children to excel in their studies
              <br>• parents to focus on new income opportunities
              <br>• dignity and hope for a better life for themselves and their children
              <br><span class="moh-small-overlay-text">All Leveque homes are contracted with labor from the Leveque community.</span>
            <div class="close-why-column-overlay" data-ix="hide-column-overlay-3">x</div>
          </div>
        </div>
      </div>
      <div class="w-row">
        <div class="w-col w-col-6 why-text-column _7 moh-7">
          <div class="why-left-inner-column _7 _8 moh">
            <h2 class="why-h2">Let’s&nbsp;write a new story.&nbsp;<br>Join us.</h2>
            <a class="button why moh" href="create-campaign.php">Start a Campaign</a>
              
            <a class="button why moh" href="general-donation.php">sponsor a home</a><a class="moh-cta" href="#campaign">Learn how a campaign works.</a>
          </div>
          <div class="economic-column">
            <p class="why-paragraph-overlay edu">100 % Model
              <br>
              <br>Every single penny of donations go directly to the construction of new homes.
              <br>
              <br>Operational costs are covered by our generous, dedicated&nbsp;<a class="link-inline white" href="investor-donors.html">investor donors</a>.</p>
            <div class="close-why-column-overlay" data-ix="hide-column-overlay-4">x</div>
          </div>
        </div>
        <div class="w-col w-col-6 why-image-column _7 bts moh-5"></div>
      </div>
      <div>
        <h1 class="bts-h2" id="campaign">How To Start a Campaign</h1>
      </div>
      <div class="w-row">
        <div class="w-col w-col-6 w-hidden-small w-hidden-tiny why-image-column _8 bts mohc1">
          <div class="why-left-inner-column _3"></div>
        </div>
        <div class="w-col w-col-6 why-text-column _8 moh-c-1">
          <div class="transparency-column-overlay">
            <p class="why-paragraph-overlay trans">Radical Transparency
              <br>
              <br><a class="link-inline white" href="https://docs.google.com/spreadsheets/d/1Uftmw48rSouldmhidZEV1Kwo9FsJrY5q24Hz5rpraKU/edit?usp=sharing" target="_blank">See exactly</a> where your donation goes and know down to the nail the cost of a new home.
              <br>
              <br>We show every single donor the EXACT family they fund and send a <a class="link-inline white" href="http://newstorycharity.org/maria-rose" target="_blank">video of the family</a> moving into their new home.</p>
            <div class="close-why-column-overlay" data-ix="hide-column-overlay-5">x</div>
          </div>
          <div class="moh-c-1"><img src="images/Oval 1 + 1@2x.png" width="72">
            <h2 class="moh-c-h2">Know that a family in Leveque is still homeless, and decide to help.</h2>
            <p class="moh-c-para">It only takes a minute to get started. Pick a campaign name. Set a goal. And just like that, you’ll be ready to start raising money to help build new homes for people in need.</p>
          </div>
        </div>
      </div>
      <div class="w-row">
        <div class="w-col w-col-6 why-text-column _5 moh-p">
          <div class="education-column-overlay">
            <p class="why-paragraph-overlay income bts">Home Construction
              <br>
              <br>New Story homes were designed by US architects and are built to Miami-Dade County, US hurricane code.
              <br>
              <br>Rebar reinforced concrete insures the homes are earthquake and hurricane ready.</p>
            <div class="close-why-column-overlay" data-ix="hide-column-overlay-2">x</div>
          </div>
          <div class="moh-c-1 _2"><img src="images/Oval 1 + 1 Copy@2x.png" width="72">
            <h2 class="moh-c-h2">Spread the word and watch the donations flow in.</h2>
            <p class="moh-c-para">Send out your campaign. The more people you tell, the quicker you’ll hit your goal. And that means the faster families can move into a life changing home.</p>
          </div>
        </div>
        <div class="w-col w-col-6 why-image-column _5 bts moh-3 pc-2"><img class="moh-pc" src="images/1434598021_Programming + Hey Jamie, + Susan Parker donated.png" width="356">
        </div>
      </div>
      <div class="w-row">
        <div class="w-col w-col-6 why-image-column _8 bts mohc3">
          <div class="why-left-inner-column _3"></div>
        </div>
        <div class="w-col w-col-6 why-text-column _8 moh-c-1 green">
          <div class="transparency-column-overlay">
            <p class="why-paragraph-overlay trans">Radical Transparency
              <br>
              <br><a class="link-inline white" href="https://docs.google.com/spreadsheets/d/1Uftmw48rSouldmhidZEV1Kwo9FsJrY5q24Hz5rpraKU/edit?usp=sharing" target="_blank">See exactly</a> where your donation goes and know down to the nail the cost of a new home.
              <br>
              <br>We show every single donor the EXACT family they fund and send a <a class="link-inline white" href="http://newstorycharity.org/maria-rose" target="_blank">video of the family</a> moving into their new home.</p>
            <div class="close-why-column-overlay" data-ix="hide-column-overlay-5">x</div>
          </div>
          <div class="moh-c-1"><img src="images/Oval 1 + 1 Copy 2.png">
            <h2 class="moh-c-h2">See the exact family you help when they move into their new home.</h2>
            <p class="moh-c-para">100% of all donations will go to directly to hiring local contractors and buying supplies. Then, we’ll send you a video of the exact family you helped, moving into their new home.</p>
          </div>
        </div>
      </div>
    </div>
    <div>
      <div class="bottom-bts-cta">
        <div>
          <a class="button moh" href="create-campaign.php">Start a Campaign</a>
          <div><a class="link-inline dark" href="general-donation.php">Want to sponsor an entire family?</a></div>
        </div>
                <div class="w-row about-row">
          <div class="w-col w-col-6"><img src="images/MOHlogo_WHITE.png" width="200">
            <p class="about-para-moh">As an organization following Jesus Christ, Mission of Hope exists to bring life transformation to every man, woman, and child in Haiti. We desire to serve the nation of Haiti, and see lives changed. <a class="link-inline" target="_blank" href="http://www.mohhaiti.org">Learn more</a>.</p>
          </div>
          <div class="w-col w-col-6"><img class="about-moh-logo" src="images/large-logo.png" width="300">
            <p class="about-para-moh">New Story’s mission is to create life-changing stories that transform communities.&nbsp;We’re focused on funding&nbsp;100 homes&nbsp;in 100 days in Leveque, Haiti. <a href="http://newstorycharity.org" class="link-inline" target="_blank">Learn More</a>.</p>
          </div>
        </div>
  <h1 class="bts-h2 moh-faq">FAQ</h1>
        <div class="w-container">
          <div class="w-row">
            <div class="w-col w-col-6">
              <p class="small-paragraph campaign"><strong class="bold-faq">What is the partnership between Mission of Hope and New Story?</strong>
                <br>New Story first visited Haiti with MOH in 2012 and since has come alongside the MOH team with a burning drive to see every family receive a home in Leveque. Our commitment is that 100% of your funds go towards this project.
                <a href="investor-donors.html" class="link-inline">
                  <br>
                </a>
              </p>
              <p class="small-paragraph campaign"><strong class="bold-faq">Will you really show me the exact family I help?</strong>YES! By partnering with New Story we’ll be able to track your campaign and donations to the exact family you helped. After your campaign finishes and the home is complete you’ll receive a video of the exact family you helped in Leveque. And know that 100% of all donation went directly to cover the cost of home supplies and labor.
                <a href="investor-donors.html" class="link-inline">
                  <br>
                </a>
              </p>
              <p class="small-paragraph campaign"><strong class="bold-faq">How do campaigns work?<br></strong>A campaign is a way to make a bigger impact in the world. Instead of a single donation you rally your friends and family to help build new homes for the community of Leveque.</p>
            </div>
            <div class="w-col w-col-6">
              <p class="small-paragraph campaign"><span style="font-size: 19px;"><strong>Do I need to raise $6,000?<br></strong></span>No. Campaigns raise on average $1,000 from 12 people. Set a goal is that is comfortable but a little bit scary. We’re here to help.</p>
              <p class="small-paragraph campaign"><strong class="bold-faq">What if I don’t reach my goal?<br></strong>No problem. We’ll combine your campaign with others to fully fund the homes. 100% of your campaign will go directly to funding new home construction.</p>
              <p class="small-paragraph campaign"><strong class="bold-faq">Can I sponsor a family’s new home?<br></strong>Yes! We can easily help you sponsor a family. Reach out to us at Leveque@mohhaiti.org and we can chat about home sponsorship.</p>
              <p class="small-paragraph campaign"><strong class="bold-faq">When will I get my video of the completed home?<br></strong>About two months after the home is fully funded. We can’t wait for you to see the tangible impact of your contribution by showing you a video of the <span class="underline">exact</span> family you donated to in their brand new home.</p>
            </div>
          </div><a class="button moh" href="create-campaign.php">Start a Campaign</a>
          <div><a class="link-inline dark" href="general-donation.php">Sponsor a family today.</a>
          </div>
        </div>
        <a class="w-inline-block powered-by" href="http:///newstorycharity.org">
          <div>powered by</div><img src="images/New-Story-Logo.png" width="200">
        </a>
        <div><a class="link-inline dark" href="mailto:Leveque@mohhaiti.org?Subject=Leveque">Have a question or comment? Contact us at Leveque@mohhaiti.org.</a>
        </div>
      </div>
    </div>
  </div>
  <div class="w-section w-hidden-main w-hidden-medium w-hidden-small w-hidden-tiny w-clearfix homepage-section tent" id="the-problem">
    <div class="where-they-live-row problem"><a class="w-inline-block how-it-works-link" href="why.html"><h1 class="where-they-live-heading blue _2">The Problem</h1></a>
      <p>Families are homeless due to unexpected disasters. With every passing day, they live in tents or the streets, exposed to life-threatening dangers.</p><a class="button learn-more" href="#solution">Our Solution</a>
    </div>
  </div>
  <div class="w-section w-hidden-main w-hidden-medium w-hidden-small w-hidden-tiny w-clearfix homepage-section house" id="solution">
    <div class="where-they-live-row solution"><a class="w-inline-block how-it-works-link" href="how.html"><h1 class="where-they-live-heading blue">Our Solution</h1></a>
      <p>Donors meet these families and directly fund new homes – costing just $6,000 to build. This is more than a home, it’s a new story of safety, hope and opportunity.</p><a class="button learn-more" href="families-page.html">Meet a family</a>
    </div>
  </div>
  <div class="w-section w-hidden-main w-hidden-medium w-hidden-small w-hidden-tiny homepage-section completed-home" id="video-proof">
    <div class="w-section" id="100-percent">
      <div class="w-container">
        <div class="w-row">
          <div class="w-col w-col-6">
            <h2 class="h2-100-percent completed-home">After construction, see the exact family you helped fund in their new house!</h2><a class="button" href="maria-rose.html">video of our first family</a>
          </div>
          <div class="w-col w-col-6">
            <a class="w-inline-block" href="maria-rose.html"><img class="completed-home-homepage-image" src="images/comp-for-completed-family.png" width="400">
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script type="text/javascript" src="js/webflow.js"></script>
  <!--[if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif]-->
  <script>
    window.onload=function() {
       doTime('jan,12,2015,08:00:00');
     }
    function doTime(then) {
       now=new Date ();
       then=new Date (then);
       difference=(now-then);
       days=Math.floor(difference/(60*60*1000*24)*1);
       hours=Math.floor((difference%(60*60*1000*24))/(60*60*1000)*1);
       mins=Math.floor(((difference%(60*60*1000*24))%(60*60*1000))/(60*1000)*1);
       secs=Math.floor((((difference%(60*60*1000*24))%(60*60*1000))%(60*1000))/1000*1);
       document.getElementById('days').firstChild.nodeValue= days;
       document.getElementById('hours').firstChild.nodeValue= hours;
       document.getElementById('minutes').firstChild.nodeValue= mins;
       document.getElementById('seconds').firstChild.nodeValue= secs;
       clearTimeout(doTime.to);
       doTime.to=setTimeout(function(){ doTime(then); },1000);
     }
  </script>
</body>
</html>