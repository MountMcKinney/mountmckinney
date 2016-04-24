<?php
require_once("../inc/config.php");
?>
<!DOCTYPE html>
<html>
<?php
  $pageTitle="Contact";
  include(ROOT_PATH."inc/header.php");
?>
<div id="wrapper-contact">
      <?php include(ROOT_PATH.'inc/contactIcons.php') ?>
      <?php include(ROOT_PATH.'inc/contactButton.php'); ?>
      <?php include(ROOT_PATH.'inc/contactFormPopup.php'); ?>
  </div>
  <div class="about">
      <h4>About</h4>
      <div>
        <img src="<?php echo BASE_URL;?>img/contact-pic-me.jpg">
        <p>Hi, my name is John McKinney. I am a freelance front-end web developer and outdoor enthusiast. If you'd like to read about my trips to beautiful places all over the world, head over to <a href="<?php echo BASE_URL;?>campfirestories/">Campfire Stories</a>.</p>
        <p>If I give you any advice on what to buy know that I am by no means an expert. I just spend a large amount of my time researching camping gear. If I am going to spend my hard earned money and use something in the backcountry I need to know it's going to work. You can think of my articles as a summary of expert opinions.</p>
        <p>If you'd like more info on the web development services I offer as well as check out my portfolio of work, head to my <a href="<?php echo BASE_URL;?>portfolio/">Portfolio</a>. If you need any further info or just want to chat with me, I can be reached via the contact links on this page.</p>
        <p>For a more detailed about me story, check out <a href="<?php echo BASE_URL;?>campfire/?story=about-me">Who Am I?</a> Also, make sure to <a href="<?php echo BASE_URL;?>subscribe/">Subscribe</a> to catch my latest adventure!</p>
        <p>The best way to get in touch with me is <a href="mailto:john@mountmckinney.com">email</a> or <a href="http://twitter.com/intent/tweet?screen_name=mountmckinney" target="_blank" "social" id="twitter-icon">tweet</a> at me. I always love to hear from you, especially if you have ideas for my next trip.</p>
      </div>
   </div>
</div>
<footer class="contact-footer">
  <?php include(ROOT_PATH."inc/footer.php"); ?>
</footer>
  <?php include(ROOT_PATH."inc/js_scripts.php");?>
