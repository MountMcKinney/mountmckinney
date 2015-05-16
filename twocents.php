<?php $pageTitle = "Two Cents"?>
<!DOCTYPE html>
<html>
<?php
  $pageTitle="Two Cents";
  include("inc/header.php");
?>
  <header class="contact-header">
      <?php include("inc/name_title_header.php");?>
      <?php include("inc/menu.php");?>
    </header>
    <div id="wrapper">
      <div id="main-right">
        <div class="camping-tips">
          <h3>My Two Cents</h3>
          <ul class="cts-right">
            <?php include("inc/twocents_arr.php");?>
          </ul>
        </div>
      </div>
    </div>
    <footer class="contact-footer">
      <?php include("inc/footer.php"); ?>
    </footer>
    <?php include('inc/js_scripts.php');?>
