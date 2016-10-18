<?php
require_once("../inc/config.php");
require_once (ROOT_PATH."inc/servicesArr.php");

$services = getAllServices();
?>
<!DOCTYPE html>
<html id="services">
<?php
  $pageTitle="Services";
  include(ROOT_PATH."inc/header.php");
  include(ROOT_PATH."inc/contactFormPopup.php");
?>
    <div class="wrapper">
      <div class="services">
        <h4>Services</h4>
        <div class="servicesList">
          <div class="servicesInfo">
            <p>
              Do you need a new website or a re-design? How about a new logo? Maybe you are just having a small technical issue that you would just cannot figure out. Or do you need someone to handle the technical areas of your Wordpress site so that you can get back to focusing on your business.
            </p>
            <ul class="servicesImages">
              <?php foreach($services as $service) {
                      echo displayServiceHtml($service);
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
