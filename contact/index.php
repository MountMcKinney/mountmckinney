<?php
require_once("../inc/config.php");
?>
<!DOCTYPE html>
<html>
<?php
  $pageTitle="Contact";
  include(ROOT_PATH."inc/header.php");
?>
<header class="contact-header">
      <?php include(ROOT_PATH."inc/name_title_header.php");?>
      <?php include(ROOT_PATH."inc/menu.php");?>
    </header>
    <div id="wrapper-contact">
      <div class="about">
        <h4>About</h4>
        <div>
        <img src="<?php echo BASE_URL;?>img/me.jpg">
        <p>Hi, my name is John McKinney. I am a web developer, designer, and outdoor enthusiast. If you'd like to read about my trips into the great outdoors, head over to the <a href="<?php echo BASE_URL;?>campfirestories/campfirestories.php">Campfire Stories</a> or read my advice about camping on <a href="<?php echo BASE_URL;?>twocents/twocents.php">My Two Cents</a>. Make sure to <a href="<?php echo BASE_URL;?>subscribe.php">Subscribe</a> to catch my latest adventure!</p>
        <p>If you'd like more info on the web development services I offer as well as check out my portfolio of work, head to the <a href="<?php echo BASE_URL;?>portfolio.php">Portfolio</a> tab. If you need any further info or just want to chat with me, I can be reached via the contact links on this page.</p>
        <p>The best way to get in touch with me is email. I always love to hear from you, especially if you have ideas for my next trip.</p>
      </div>
     </div>
      <div class="contact-details">
        <h4>Contact</h4>
        <div>
        <ul class="details">
          <li class="mail"><img src="<?php echo BASE_URL; ?>img/mail.png"><a href="mailto:john@mountmckinney.com">john@mountmckinney.com</a></li>
          <li class="twitter"><img src="<?php echo BASE_URL; ?>img/twitter-icon.svg"><a href="http://twitter.com/intent/tweet?screen_name=mountmckinney" target="_blank" "social" id="twitter-icon">@mountmckinney</a></li>
          <li class="facebook"><img src="<?php echo BASE_URL; ?>img/facebook-icon.svg"><a href="http://facebook.com/mountmckinney" target="_blank" class="social" id="facebook-icon">Mount McKinney</a></li>
        </ul>
       </div>
      </div>
      <div class="subscribe">
        <?php include(ROOT_PATH.'inc/subscribe-form.php'); ?>
             </div>
            </div>
    <footer class="contact-footer">
      <?php include(ROOT_PATH."inc/footer.php"); ?>
    </footer>
    <?php include(ROOT_PATH.'inc/js_scripts.php');?>
