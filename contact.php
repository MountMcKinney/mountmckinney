<!DOCTYPE html>
<html>
<?php
  $pageTitle="Contact";
  include("inc/header.php");
?>
<header class="contact-header">
      <?php include("inc/name_title_header.php");?>
      <?php include("inc/menu.php");?>
    </header>
    <div id="wrapper-contact">
      <div class="about">
        <h4>About</h4>
        <div>
        <img src="img/me.jpg">
        <p>Hi, my name is John McKinney. I am a web developer, designer, and backcountry hiking enthusiast. If you'd like to read about my trips to some of the most beautiful natural landmarks our country has to offer, head over to the <a href="camp-fire.html">Campfire Stories</a> or read my advice about camping on <a href="twocents.html">My Two Cents</a>. Make sure to <a href="subscribe.html">Subscribe</a> to catch my latest adventure!</p>
        <p>If you'd like more info on the web development services I offer as well as check out my portfolio of work, head to the <a href="portfolio.html">Portfolio</a> tab. If you need any further info or just want to chat with me, I can be reached via the contact links on this page.</p>
        <p>The best way to get in touch with me is email. I always love to hear from you, especially if you have ideas for my next trip.</p>
      </div>
     </div>
      <div class="contact-details">
        <h4>Contact</h4>
        <div>
        <ul class="details">
          <li class="mail"><img src="img/mail.png"><a href="mailto:john@mountmckinney.com">john@mountmckinney.com</a></li>
          <li class="twitter"><img src="img/twitter-icon.svg"><a href="http://twitter.com/intent/tweet?screen_name=mountmckinney" target="_blank" "social" id="twitter-icon">@mountmckinney</a></li>
          <li class="facebook"><img src="img/facebook-icon.svg"><a href="http://facebook.com/mountmckinney" target="_blank" class="social" id="facebook-icon">Mount McKinney</a></li>
        </ul>
       </div>
      </div>
      <div class="subscribe">
        <?php include('inc/subscribe-form.php'); ?>
             </div>
            </div>
    <footer class="contact-footer">
      <?php include("inc/footer.php"); ?>
    </footer>
    <?php include('inc/js_scripts.php');?>
