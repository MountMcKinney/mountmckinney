<?php
require_once("inc/config.php");

?>
<!DOCTYPE html>
<html id="homepage">
<?php
  $pageTitle="Home";
  include(ROOT_PATH."inc/header.php");
?>
<div class="homepage">
</div>
  <div class="homeHeader">
      <h1 class='title'>Mount McKinney</h1>
      <p class='title'>Websites Designed to Help You Reach Your Peak</p>
      <!-- This button creates a pop up that displays the Subscribe Form -->
        <?php include(ROOT_PATH."inc/contactButton.php") ?>
        <?php include(ROOT_PATH."inc/contactFormPopup.php") ?>
</div>
      <footer class="homeFooter">
        <?php include(ROOT_PATH."inc/homeFooter.php"); ?>
      </footer>
      <?php include(ROOT_PATH."inc/scripts.php");?>
