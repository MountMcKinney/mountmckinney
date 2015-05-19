<?php
require_once("../inc/config.php");

include(ROOT_PATH."inc/campfire_arr.php");

if (isset($_GET["location"])){
  $cfstoryname = $_GET["location"];
  if (isset($cfstories[$cfstoryname])){
    $cfstory = $cfstories[$cfstoryname];
  }
}
// if(!isset($cfstory)){
//   header("Location:campfirestories.php");
//   exit();
// }

$pageTitle = $cfstory["location"];
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
  <div id="wrapper">
    <!-- <div class="breadcrumb"><a href="camp-fire.php">Campfire Stories</a> &gt; <?php echo $cfstory ["name"]; ?></div> -->
    <div id="main-left">
      <div class="campfire">
        <h3 id="blog-top-h3"> <?php echo $cfstory["location"];?> </h3>

      </div>
    </div>
  </div>
  <footer class="contact-footer">
    <?php include(ROOT_PATH."inc/footer.php"); ?>
  </footer>
    <?php include(ROOT_PATH.'inc/js_scripts.php');?>
