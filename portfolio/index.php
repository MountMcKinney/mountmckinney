<?php
require_once("../inc/config.php");
require_once (ROOT_PATH."inc/portfolioArr.php");
?>
<!DOCTYPE html>
<html id="portfolio">
<?php
  $pageTitle="Portfolio";
  include(ROOT_PATH."inc/header.php");
  include(ROOT_PATH."inc/contactFormPopup.php");
?>
    <div class="wrapper">
      <div class="portfolio">
        <h4>Portfolio</h4>
        <div class="portfolioServices">
          <div class="portfolioInfo">
            <p>
              Are you a business seeking a stronger web presence? Check out some of Mount McKinney&#039;s work below then drop us a line.
              <br>
              Do you need a new website? How about a fresh redesign of your current site? When&#039;s the last time you updated your logo?
              <br/>
              Thankfully, you&#039;ve come to the right place. Mount McKinney LLC provides a large range of services related to your website and branding.
              <div class="portfolioContact">
                <a class="typeform-share button" href="https://mountmckinney.typeform.com/to/IUHF6N" data-mode="1" target="_blank">I need help!</a>
              </div>
              <br>
            </p>
            <ul class="portfolioImages">
              <?php foreach($websites as $websiteSKU => $website) {
                      echo displayPortfolioHtml($websiteSKU, $website);
                    }
                ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <footer class="footer">
      <?php include(ROOT_PATH."inc/footer.php"); ?>
    </footer>
    <?php include(ROOT_PATH.'inc/scripts.php');?>
