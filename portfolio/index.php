<?php
require_once("../inc/config.php");
$pageTitle = "Portfolio"
?>

<!DOCTYPE html>
<html>
<?php
  $pageTitle="Portfolio";
  include(ROOT_PATH."inc/header.php");
?>
    <header class="contact-header">
      <?php include(ROOT_PATH."inc/name_title_header.php");?>
      <?php include(ROOT_PATH."inc/menu.php");?>
    </header>
    <div id="wrapper-portfolio">
      <div class="portfolio">
        <h4>Portfolio & Services</h4>
        <div id="ps">
        <p>I am proficient with HTML, CSS, and Javascript. I am a web developer and designer. Below you can find a couple of my projects. If you are in need of my services, send me a message so we can discuss more details. </p>
      </div>
     </div>
      <div class="contact-me">
        <h4>Contact Me</h4>
        <div id="cont-me">
            <div id="contact-name">
              <form id="contact-us">
                  <label for="name">Name</label>
                  <input type="text" id="connect_name" name="entry.528305603"/>
                  <label for="email">Email</label>
                  <input type="email" id="connect_email" name="entry.307489032"/>
                  <label for="info">Comments</label>
                  <textarea id="connect_comments" name="entry.1946196515"></textarea>
                  <button id="ButtonSubmit" onclick="postPortfolioToGoogle()" type="button" class="submit-button-form">Connect</button>
              </form>
            </div>
      </div>
     </div>
    <footer class="contact-footer">
      <?php include(ROOT_PATH."inc/footer.php"); ?>
    </footer>
    <?php include(ROOT_PATH.'inc/js_scripts.php');?>
