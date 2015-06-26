<?php 
		        						$title = "Thank you from New Story! ";
		        						include('header.php');
		        					?></head>
<body>
  <?php 
		        						include('nav.php');
		        					?><div class="w-section">
    <div class="w-container content-section thank-you">
      <h1>Thank youuuuuu!</h1>
      <div class="w-section overlay">
        <div class="birthday-overlay-block">
          <div class="close-overlay bday" data-ix="close-bday-overlay">x</div>
          <div class="w-form contact-form-wrapper challenge">
            <form id="wf-form-Bday-Challenge-email" name="wf-form-Bday-Challenge-email" data-name="Bday Challenge email">
              <h1>Send Birthday Challenge</h1>
              <input class="w-input contact-form-field" id="Friend-s-name-2" type="text" placeholder="Friend's name" name="Friend-s-name" data-name="Friend's name" required="required">
              <input class="w-input contact-form-field" id="Friend-Email-2" type="email" placeholder="Friend's email" name="Friend-Email-2" data-name="Friend Email 2" required="required">
              <textarea class="w-input contact-form-field" id="email-message-2" placeholder="We’ll send an email but include a personal message here (optional)" name="email-message-2" data-name="Email Message 2"></textarea>
              <input class="w-button button" type="submit" value="Send Challenge" data-wait="internet hard at work..." wait="internet hard at work...">
            </form>
            <div class="w-form-done">
              <p>Thank you! Challenge sent!</p>
              <a class="w-inline-block social-link bday" href="https://twitter.com/NewStoryCharity" target="_blank"><img src="images/1420349409_square-twitter-64.png" width="32">
              </a>
              <a class="w-inline-block social-link bday" href="https://www.facebook.com/newstorycharity" target="_blank"><img src="images/1420349296_square-facebook-64.png" width="32">
              </a>
            </div>
            <div class="w-form-fail">
              <p>Oops! Something went wrong while submitting the form :(</p>
            </div>
          </div>
        </div>
      </div>
      <div class="give-up-birthday-div">
        <h3 class="h3-light">Imagine what your next birthday can do!<br>Pledge your birthday and help write a new story.</h3>
        <div class="w-form contact-form-wrapper birthday" id="contact">
          <form id="wf-form-Birthday-campaign-form---from-thank-you-page-test" name="wf-form-Birthday-campaign-form---from-thank-you-page-test" data-name="Birthday campaign form - from thank you page test">
            <input class="w-input contact-form-field birthday" id="Name" type="text" placeholder="Name" name="Name" data-name="Name" required="required" autofocus="autofocus">
            <input class="w-input contact-form-field birthday" id="Email-address-2" type="email" placeholder="Email address" name="Email-address-2" data-name="Email Address 2" required="required" autofocus="autofocus">
            <div class="w-row">
              <div class="w-col w-col-6 birthday-column _1">
                <input class="w-input contact-form-field birthday" id="Month" type="text" placeholder="Month" name="Month" data-name="Month" required="required">
              </div>
              <div class="w-col w-col-6 birthday-column">
                <input class="w-input contact-form-field birthday" id="Day" type="text" placeholder="Day" name="Day" data-name="Day" required="required">
              </div>
            </div>
            <input class="w-button button birthday-sign-up" type="submit" value="i pledge my birthday!" data-wait="You rock..." wait="You rock...">
          </form>
          <div class="w-form-done success-message">
            <div>
              <h1 class="birthday-thank-you-h1">Thank you!</h1>
              <p>When your birthday rolls around we’ll send you an email about how to create your campaign.</p><a class="button" href="#" data-ix="show-bday-challenge">challenge a friend</a>
              <p class="small-paragraph birthday">(challenge a friend to give up their birthday as well)</p>
            </div>
          </div>
          <div class="w-form-fail">
            <p>Oops! Something went wrong while submitting the form :(</p>
          </div>
        </div>
      </div>
      <div>This guy sure would love if you did! Want to <a href="birthdays.html" class="link-inline">learn how it works</a>?</div>
    </div>
  </div>
  <?php 
		        						include('footer.php');
		        					?>