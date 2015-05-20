<?php
require_once("../inc/config.php");

include(ROOT_PATH."inc/twocents_arr.php");

if (isset($_GET["location"])){
  $tc_id = $_GET["location"];
  if (isset($tcblogposts[$tc_id])){
    $tcpost = $tcblogposts[$tc_id];
  }
}
// if(!isset($cfstory)){
//   header("Location:campfirestories.php");
//   exit();
// }

$pageTitle = $tcpost["location"];
?>>

<!DOCTYPE html>
<html>
<?php
  include(ROOT_PATH."inc/header.php");
?>
  <header class="contact-header">
      <?php include(ROOT_PATH."inc/name_title_header.php");?>
      <?php include(ROOT_PATH."inc/menu.php");?>
  </header>
  <!-- <div class="breadcrumb"><a href="twocents.php">Two Cents</a> &gt; <?php echo $tcpost ["name"]; ?></div> -->
  <div id="wrapper">
    <div id="main-right">
      <div class="camping-tips">
        <h3>My Two Cents</h3>
        <h3 id="blog-top-h3"> <?php echo $tcpost["location"];?> </h3>

      </div>
    </div>
  </div>
  <footer class="contact-footer">
    <?php include(ROOT_PATH."inc/footer.php"); ?>
  </footer>
    <?php include(ROOT_PATH.'inc/js_scripts.php');?>
