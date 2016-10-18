<?php
require_once("../inc/config.php");
require_once(ROOT_PATH."inc/wordpressServicesArr.php");
$wordpressServices = getAllWordpressServices();

?>
<!DOCTYPE html>
<html id="contact">

<?php
  $pageTitle="Wordpress";
  include(ROOT_PATH."inc/header.php");
  include(ROOT_PATH."inc/wordpressContactFormPopup.php");
?>
<div class="wrapper">
  <div class="about">
      <h4>Wordpress Doesn't Have To Be A Pain</h4>
      <div class="textBox">
          <p>
            What would you rather focus on, fixing technical issues in Wordpress or growing your business?
            <br/>
            Thought so. Let Mount McKinney take care of your Wordpress issues so you can get back to focusing on what you do best!
          </p>
          <p>
            Can't figure out why that plugin won't work? Migrating from one hosting platform to another? Site running slow? Mount McKinney can help with all this and more! Check out what services we provide below!
          </p>
          <ul class="portfolioImages">
            <?php foreach($wordpressServices as $wordpressService) {
                    echo displayWordpressServiceHtml($wordpressService);
                  }
            ?>
          </ul>
   </div>
  </div>
  <div class="finePrint">
    <p>*All rates are subject to change at any point*</p>
  </div>
</div>
<footer class="footer">
  <?php include(ROOT_PATH."inc/footer.php"); ?>
</footer>
  <?php include(ROOT_PATH."inc/scripts.php");?>
