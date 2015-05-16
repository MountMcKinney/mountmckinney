<?php include("inc/campfire_arr.php");?>

<!DOCTYPE html>
<html>
<?php
  $pageTitle="Campfire Stories";
  include("inc/header.php");
?>
  <header class="contact-header">
      <?php include("inc/name_title_header.php");?>
      <?php include("inc/menu.php");?>
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
      <?php include("inc/footer.php"); ?>
    </footer>
    <?php include('inc/js_scripts.php');?>
