<?php 
		        						$title = "Contact Us - New Story";
		        						include('header.php');
		        					?></head>
<body>
  <?php 
		        						//include('nav.php');
		        					?>
		        					<!--<div>Celebrate Your Birthday!</div>-->
		        					
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
    <div class="w-container content-section">
      <h1>Contact Us</h1>
      <div class="w-row contact-row">
        <div class="w-col w-col-6 contact-column">
          <a class="w-inline-block contact-column-div" href="#contact">
            <div class="how-it-works-text contact-us">Email Us</div>
            <div class="how-it-works-text small contact">use our&nbsp;<span class="link-inline">contact form</span>
            </div>
          </a>
        </div>
        <div class="w-col w-col-6 contact-column">
          <div class="contact-column-div more-text">
            <div class="how-it-works-text contact-us">Interested in become a private investor?</div>
            <div class="how-it-works-text small contact">email us at <a class="link-inline" href="mailto:brett@newstorycharity.org?subject=Investor%20Donor">brett@newstorycharity.org</a>
            </div>
          </div>
        </div>
      </div>
      <div class="w-form contact-form-wrapper" id="contact">
        <form id="wf-form-Contact-Us-form" name="wf-form-Contact-Us-form" data-name="Contact Us form">
          <input class="w-input contact-form-field" id="name" type="text" placeholder="Enter your name" name="name" data-name="Name">
          <input class="w-input contact-form-field" id="email" type="email" placeholder="Enter your email address" name="email" data-name="Email" required="required">
          <textarea class="w-input contact-form-field text-area" id="field" placeholder="Enter your message" name="field"></textarea>
          <input class="w-button button hero" type="submit" value="Submit" data-wait="Please wait...">
        </form>
        <div class="w-form-done">
          <p>Thank you! Your submission has been received!</p>
        </div>
        <div class="w-form-fail">
          <p>Oops! Something went wrong while submitting the form :(</p>
        </div>
      </div>
    </div>
  </div>
  <?php 
		        						include('footer.php');
		        					?>
