<?php
require_once("../inc/config.php");
require_once(ROOT_PATH."inc/twocents_arr.php");
?>

<!DOCTYPE html>
<html>
<?php
  $pageTitle="Two Cents";
  include(ROOT_PATH."inc/header.php");
?>
  <header class="contact-header">
    <?php include(ROOT_PATH."inc/name_title_header.php");?>
    <?php include(ROOT_PATH."inc/menu.php");?>
  </header>
    <div id="wrapper">
      <div id="main-right">
        <div class="camping-tips">
          <h3>My Two Cents</h3>
          <ul class="cts-right">
            <?php foreach($tcblogs as $tcblogname => $tcblog)
              echo display_twocents_html($tcblogname, $tcblog);
            ?>
          </ul>
        </div>
      </div>
    </div>
    <footer class="contact-footer">
      <?php include(ROOT_PATH."inc/footer.php"); ?>
    </footer>
      <?php include(ROOT_PATH."inc/js_scripts.php");?>
