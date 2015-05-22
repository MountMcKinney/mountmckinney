<?php
require_once("../inc/config.php");

require_once(ROOT_PATH."inc/campfire_arr.php");

if (isset($_GET["name"])){
  $cfstoryname = $_GET["name"];
  if (isset($cfstories[$cfstoryname])){
    $cfstory = $cfstories[$cfstoryname];
  }
}
if(!isset($cfstory)){
  header("Location:".BASE_URL."campfirestories/");
  exit();
}

$pageTitle = $cfstory["name"];
?>

<!DOCTYPE html>
<html>
<?php
  include(ROOT_PATH."inc/header.php");
?>
  <header class="contact-header">
      <?php include(ROOT_PATH."inc/name_title_header.php");?>
      <?php include(ROOT_PATH."inc/menu.php");?>
  </header>
  <div class="breadcrumb"><a href="campfirestories.php">Campfire Stories</a> &gt; <?php echo $cfstory ["name"]; ?></div>
  <div id="wrapper">
    <div id="main-left">
      <div class="campfire">
        <h3 id="blog-top-h3"> <?php echo $cfstory["name"];?> </h3>

      </div>
    </div>
  </div>
  <footer class="contact-footer">
    <?php include(ROOT_PATH."inc/footer.php"); ?>
  </footer>
    <?php include(ROOT_PATH.'inc/js_scripts.php');?>
