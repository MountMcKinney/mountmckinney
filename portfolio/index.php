<?php
require_once("../inc/config.php");
require_once (ROOT_PATH."inc/portfolioArr.php");
?>
<!DOCTYPE html>
<html>
<?php
  $pageTitle="Portfolio & Services";
  include(ROOT_PATH."inc/header.php");
?>
    <div class="wrapper">
      <div class="contactMe contact">
        <?php include(ROOT_PATH.'inc/contactIcons.php') ?>
        </div>
        <div class="contMe">
          <h4>Contact Me</h4>
          <?php include(ROOT_PATH."inc/contactForm.php"); ?>
        </div>
       </div>
      <div class="portfolio">
        <h4>Portfolio & Services</h4>
        <div class="portfolioServices">
        <p>I provide a wide range of technology related services. So, whether you need a website or app built, logo created, social media rebranded, or you are just having general issues with your technology just call on me. </p>
        <p>From now on, think of me as your go to person for all things tech. Below you can find a couple of my projects, they're always being updated so be sure to check back from time to time. </p>
        <p>If you are in need of my services, simply fill out the Contact Me form and I'll be in touch within a few hours. I look forward to hearing from you!</p>
        <ul class="portfolioImages">
          <?php foreach($websites as $websiteSKU => $website)
              echo displayPortfolioHtml($websiteSKU, $website);
            ?>
        </ul>
        </div>
      </div>
    </div>
    <footer class="footer">
      <?php include(ROOT_PATH."inc/footer.php"); ?>
    </footer>
    <?php include(ROOT_PATH.'inc/Scripts.php');?>
