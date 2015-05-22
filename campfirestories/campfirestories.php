<?php
require_once("../inc/config.php");
require_once(ROOT_PATH."inc/campfire_arr.php");
?>

<!DOCTYPE html>
<html>
<?php
  $pageTitle="Campfire Stories";
  include(ROOT_PATH."inc/header.php");
?>
  <header class="contact-header">
    <?php include(ROOT_PATH."inc/name_title_header.php");?>
    <?php include(ROOT_PATH."inc/menu.php");?>
  </header>
    <div id="wrapper">
      <div id="main-left">
        <div class="campfire">
          <h3>Campfire Stories</h3>
          <ul class="cts">
            <?php foreach($cfstories as $cfstoryname => $cfstory)
              echo display_campfire_html($cfstoryname, $cfstory);
            ?>
          </ul>
        </div>
      </div>
    </div>
    <footer class="contact-footer">
      <?php include(ROOT_PATH."inc/footer.php"); ?>
    </footer>
    <?php include(ROOT_PATH.'inc/js_scripts.php');?>
