<?php
require_once("inc/config.php");
?>
<!DOCTYPE html>
<html id="homepage">
<?php
  $pageTitle="Home";
  include(ROOT_PATH."inc/header.php");
?>
    <header>
      <?php include(ROOT_PATH."inc/name_title_header.php");?>
      </header>
    <nav>
      <?php include(ROOT_PATH."inc/menu.php");?>
    </nav>
    <div class="home-header">
        <h1 class='title'>Mount McKinney</h1>
        <p class='title'>Websites Designed to Help You Reach Your Peak</p>
    </div>
    <!-- <div class="popupButton">
      This button creates a pop up that displays the Contact Us Form
      <a href="#" id="contactPopUp">Contact Us</a>
    </div> -->
    <div class="popupForm">

    </div>
    <div id='home-footer'>
      <?php include(ROOT_PATH."inc/footer.php"); ?>
    </div>
      <?php include(ROOT_PATH."inc/js_scripts.php");?>
