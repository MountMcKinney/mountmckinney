<?php
require_once("../inc/config.php");
?>
<!DOCTYPE html>
<html id="about">
<?php
  $pageTitle="About";
  include(ROOT_PATH."inc/header.php");
  include(ROOT_PATH."inc/contactFormPopup.php");
?>
<div class="wrapper">
    <div class="about">
      <h4>About Us</h4>
      <div class="aboutMePic">
        <img src="<?php echo BASE_URL;?>img/contactPicMe.jpg">
      </div>
      <div class="textBox">
          <p>
            Thanks for exploring <a href="<?php echo BASE_URL;?>">Mount McKinney</a>!
          </p>
          <p>
            John McKinney is the founder of Mount McKinney LLC. Mount McKinney LLC specializes in creating everything you see when you view a webpage and everything you don&#039;t.</p>
          <p>
            The awe-inspiring layout you see throughout the site? That's us. Those icons in the navigation menu? Yep, all us. The forms fading in and out from your clicks? That too. Our mission is to provide quality development services so that you and your business are able to reach your peak!
          </p>
          <p>
            If you&#039;d like to hire Mount McKinney for your next project fill out this <a href="#" class="contactPopUp">Contact form</a> or shoot us a <a href="http://fb.me/msg/mountmckinney" target="_blank" class="social" id="facebookIcon">Facebook message</a>.
          </p>
          <p>
            You can find some of the work we&#039;ve done in the past on the <a href="<?php echo BASE_URL;?>portfolio/">Portfolio</a> page. We look forward to working with you!
          </p>
          <br>
          <br>
          <p>
            In addition to hiring Mount McKinney LLC to build or update your website, you should check out our <a href="<?php echo BASE_URL;?>campfirestories/">Campfire Stories</a>! To learn more about these entertaining masterpieces of literary prowess, take a seat around the <a href="<?php echo BASE_URL;?>campfirestories/#campfire">Campfire</a>.
          </p>
          <p>
            If you would like to learn more about John as a person, feel free to read <a href="<?php echo BASE_URL;?>campfire/?story=about-me">Who Am I?</a> As well as connecting with him on <a href="http://facebook.com/mountmckinney" class="social">Facebook</a> or <a href="http://instagram.com/mountmckinney" class="social">Instagram</a>!
          </p>
      </div>
   </div>
   <?php include(ROOT_PATH.'inc/contactIcons.php') ?>
  </div>
</div>
<footer class="footer">
  <?php include(ROOT_PATH."inc/footer.php"); ?>
</footer>
  <?php include(ROOT_PATH."inc/scripts.php");?>
