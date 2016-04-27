<?php
require_once("../inc/config.php");
?>
<!DOCTYPE html>
<html id="contact">
<?php
  $pageTitle="About";
  include(ROOT_PATH."inc/header.php");
?>
<div class="aboutWrapper">
  <div class="about">
      <h4>About John</h4>
      <div class="aboutMePic">
        <img src="<?php echo BASE_URL;?>img/contactPicMe.jpg">
      </div>
      <div class="textBox">
          <p>
            Thanks for visiting Mount McKinney! Did you know that I am a freelance Web Developer available for hire? I specialize in creating everything you see when you view a webpage.</p>
          <p>
            The awe-inspiring layout you see throughout the site? That's because of me. Those icons in the navigation menu? Yep, I created those. The forms fading in and out from your clicks? That too. My mission is to provide front end development services to help you reach your peak!
          </p>
          <p>
            If you&#039;d like to hire me for your next project, you can fill out this <a href="#" class="contactPopUp">Contact form</a>, shoot me a <a href="http://fb.me/msg/mountmckinney" target="_blank" class="social" id="facebookIcon">Facebook message</a>, or even <a href="http://twitter.com/intent/tweet?screen_name=mountmckinney" target="_blank" "social" id="twitterIcon">tweet</a> me.
          </p>
          <p>
            You can find some of the work I&#039;ve done in the past on my <a href="<?php echo BASE_URL;?>portfolio/">Portfolio</a> page.
          </p>
          <br>
          <!-- <br> -->
          <p>
            In addition to hiring me to build or update your website, you should check out my <a href="<?php echo BASE_URL;?>campfirestories/">Campfire Stories</a>! To learn more about these entertaining masterpieces of literary prowess, take a seat around the <a href="<?php echo BASE_URL;?>campfirestories/#campfire">Campfire</a>.
          </p>
          <p>
            If you would like to learn more about me as a person, feel free to read <a href="<?php echo BASE_URL;?>campfire/?story=about-me">Who Am I?</a> Feel free to connect with me on <a href="http://facebook.com/mountmckinney" class="social">Facebook</a>, <a href="http://twitter.com/mountmckinney" class="social">Twitter</a>, or <a href="http://instagram.com/mountmckinney" class="social">Instagram</a>!

          </p>
      </div>
   </div>
   <?php include(ROOT_PATH.'inc/contactIcons.php') ?>
   <?php include(ROOT_PATH.'inc/contactButton.php'); ?>
   <?php include(ROOT_PATH.'inc/contactFormPopup.php'); ?>
  </div>
</div>
<footer class="footer">
  <?php include(ROOT_PATH."inc/footer.php"); ?>
</footer>
  <?php include(ROOT_PATH."inc/scripts.php");?>
