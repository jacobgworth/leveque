<?php
error_reporting(0);
session_start();
$logged_user_id = $_SESSION['logged_user_id']; 
?>
<!DOCTYPE html>
<!-- This site was created in Webflow. http://www.webflow.com-->
<!-- Last Published: Thu Apr 30 2015 04:23:34 GMT+0000 (UTC) -->
<html data-wf-site="54ed2fd5e9be50bb55cab7e0" data-wf-page="54f681c0b0a6fdb20b9ffe19">
<head>
  <meta charset="utf-8">
  <title>Current Campaign</title>
  <meta name="description" content="New Story is a different type of charity connecting donors with homeless families to create life-changing stories.">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="generator" content="Webflow">
  <link rel="stylesheet" type="text/css" href="css/normalize.css">
  <link rel="stylesheet" type="text/css" href="css/webflow.css">
  <link rel="stylesheet" type="text/css" href="css/newstoryapp.webflow.css">
  <link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js"></script>
  <script>
    WebFont.load({
      google: {
        families: ["Open Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic","Merriweather:300,400,700,900","Varela Round:400","Lato:100,100italic,300,300italic,400,400italic,700,700italic,900,900italic"]
      }
    });
  </script>
  <script type="text/javascript" src="https://use.typekit.net/sit1pgy.js"></script>
  <script type="text/javascript">
    try{Typekit.load();}catch(e){}
  </script>
    <meta property="og:image" content="https://daks2k3a4ib2z.cloudfront.net/54467223a05709a755daab06/54943e336840693f14fcc210_New-Story-100-percent-200.png" />
  <script src="https://cdn.optimizely.com/js/2383440548.js"></script>
  <script type="text/javascript">
    window.heap=window.heap||[],heap.load=function(t,e){window.heap.appid=t,window.heap.config=e;var a=document.createElement("script");a.type="text/javascript",a.async=!0,a.src=("https:"===document.location.protocol?"https:":"http:")+"//cdn.heapanalytics.com/js/heap.js";var n=document.getElementsByTagName("script")[0];n.parentNode.insertBefore(a,n);for(var o=function(t){return function(){heap.push([t].concat(Array.prototype.slice.call(arguments,0)))}},p=["clearEventProperties","identify","setEventProperties","track","unsetEventProperty"],c=0;c<p.length;c++)heap[p[c]]=o(p[c])};
      heap.load("1226628951");
  </script>
  <script type="text/javascript">
          (function (w,d) {var loader = function () {var s = d.createElement("script"), tag = d.getElementsByTagName("script")[0]; s.src = "//cdn.iubenda.com/iubenda.js"; tag.parentNode.insertBefore(s,tag);}; if(w.addEventListener){w.addEventListener("load", loader, false);}else if(w.attachEvent){w.attachEvent("onload", loader);}else{w.onload = loader;}})(window, document);
        </script>
  
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script type="text/javascript" src="js/webflow.js"></script>
  <!--[if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif]-->
  
  <!-- Hotjar Tracking Code for newstorycharity.org -->
  <script>
    (function(f,b){
        var c;
        f.hj=f.hj||function(){(f.hj.q=f.hj.q||[]).push(arguments)};
        f._hjSettings={hjid:26279, hjsv:3};
        c=b.createElement("script");c.async=1;
        c.src="https://static.hotjar.com/c/hotjar-26279.js?sv=3";
        b.getElementsByTagName("head")[0].appendChild(c); 
    })(window,document);
  </script>
<script type="text/javascript" src="js/common.js"></script>
  <script type="text/javascript" src="js/modernizr.js"></script>
  <link rel="shortcut icon" type="image/x-icon" href="images/favicon (12).ico">
  <link rel="apple-touch-icon" href="https://daks2k3a4ib2z.cloudfront.net/img/webclip.png">
  <script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "5ff8b170-0f2e-40a4-ba89-3bc24c8b485f", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
</head>
<body>
  <div class="w-nav navbar" data-collapse="medium" data-animation="default" data-duration="400" data-contain="1">
    <div class="w-container"><a class="w-nav-brand" href="index.php"><h1 class="logo-text">new<span class="logo-text-blue">story</span></h1></a>
      <nav class="w-nav-menu" role="navigation">

   		  <!--<a class="w-nav-link navlink" href="campaigns.html">Campaigns</a><a class="w-nav-link navlink" href="#">Feedback?</a><a class="w-nav-link navlink" href="#">Help</a>-->
      
        <!--<div class="w-dropdown" data-delay="0">
          <div class="w-dropdown-toggle notification-container">
            <div><span class="notification-icon-nav">?</span>
            </div>
          </div>
          <nav class="w-dropdown-list notification-dropdown">
            <div class="w-clearfix notification nav">
              <div class="notification-icon"><span class="notification-icon-span badge">?</span>
              </div>
              <div class="notification-block nav">
                <div class="activity-description">New donation from Nancy Jesup</div>
                <div class="activity-meta-data">1 hour ago</div>
              </div>
            </div>
            <div class="w-clearfix notification nav">
              <div class="notification-icon"><span class="notification-icon-span badge">?</span>
              </div>
              <div class="notification-block nav">
                <div class="activity-description">New Badge! 5 donations in 24 hours :)</div>
                <div class="activity-meta-data">2 days ago</div>
              </div>
            </div>
            <div class="notification nav view-all">
              <a class="w-inline-block" href="#notifications">
                <div class="activity-description">view all notifications</div>
              </a>
            </div>
          </nav>
        </div>-->
         <div class="w-dropdown" data-delay="0">
          <?php
           include 'db_connect.php';
           //echo $email_login;
           $logged_user_id;
           $getquery="SELECT * FROM `users` where `user_id` = '$logged_user_id';";
    
        $qury = mysql_query($getquery);
    
        while($rows=mysql_fetch_array($qury))
        
           { 
			
			?>
			
          <div class="w-dropdown-toggle w-clearfix navlink dropdown"><img class="navbar-account-image" src="<?php $_SERVER['DOCUMENT_ROOT'];?>/uploads/<?php echo $rows['imageurl'];?>" alt="">
            <div class="navbar-account-name"><?php echo $rows['name'];?></div>
            <div class="w-icon-dropdown-toggle"></div>
          </div>
          
          
          <?php
          }
          ?>
          
          <nav class="w-dropdown-list">
			   <a class="w-dropdown-link navbar-dropdown-link" href="editUser.php">Edit Profile</a>
			  <a class="w-dropdown-link navbar-dropdown-link" href="dashboard.php">Dashboard</a>
          <!--<a class="w-dropdown-link navbar-dropdown-link" href="press-inquiries.php">Any feedback?</a>-->
          <a class="w-dropdown-link navbar-dropdown-link" href="http://newstorycharity.org/campaign-tips">Campaign Tips</a>
		  <a class="w-dropdown-link navbar-dropdown-link" href="faqs.php">Help Docs/FAQ</a><a class="w-dropdown-link navbar-dropdown-link" href="logout.php">Log Out</a>
          </nav>
        </div>
      </nav>
      <div class="w-nav-button">
        <div class="w-icon-nav-menu"></div>
      </div>
    </div>
  </div>
