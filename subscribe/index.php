<?php
require_once("../inc/config.php");
?>
<!DOCTYPE html>
<html>
<?php
  $pageTitle="Subscribe";
  include(ROOT_PATH."inc/header.php");
?>    <header class="contact-header">
      <?php include(ROOT_PATH."inc/name_title_header.php");?>
      <?php include(ROOT_PATH."inc/menu.php");?>
    </header>
    <div id="wrapper-subscribe">
      <div class="sub-page">
        <?php include(ROOT_PATH."inc/subscribe-form.php"); ?>
       </div>
      </div>
    <footer class="contact-footer">
      <<?php include(ROOT_PATH."inc/footer.php"); ?>
    </footer>
    <?php include(ROOT_PATH."inc/js_scripts.php");?>
