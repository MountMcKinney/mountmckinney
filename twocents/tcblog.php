<?php
require_once("../inc/config.php");

require_once(ROOT_PATH."inc/twocents_arr.php");

if (isset($_GET["story"])){
  $tcblogname = $_GET["story"];
  if (isset($tcblogs[$tcblogname])){
    $tcblog = $tcblogs[$tcblogname];
  }
}
// if(!isset($cfstory)){
//   header("Location:campfirestories.php");
//   exit();
// }

$pageTitle = $tcblog["name"];
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
  <div class="breadcrumb"><a href="twocents.php">Two Cents</a> &gt; <?php echo $tcblog ["title"]; ?></div>
  <div id="wrapper">
    <div id="main-right">
      <div class="camping-tips">
        <h3 id="blog-top-h3"> <?php echo $tcblog["title"];?> </h3>

      </div>
    </div>
  </div>
  <footer class="contact-footer">
    <?php include(ROOT_PATH."inc/footer.php"); ?>
  </footer>
    <?php include(ROOT_PATH.'inc/js_scripts.php');?>
