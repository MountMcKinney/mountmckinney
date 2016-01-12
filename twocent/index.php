<!-- <?php
require_once("../inc/config.php");
require_once(ROOT_PATH."inc/twocents_arr.php");
$tcblogs = get_all_tcblogs();

if (isset($_GET["story"])){
  $tcblogname = $_GET["story"];
  if (isset($tcblogs[$tcblogname])){
    $tcblog = $tcblogs[$tcblogname];
  }
}
if(!isset($tcblog)){
  header("Location:".BASE_URL."twocents/");
  exit();
}

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
  <div class="breadcrumb"><a href="<?php echo BASE_URL; ?>twocents/">Two Cents</a> &gt; <?php echo $tcblog ["title"]; ?></div>
  <div id="wrapper">
    <div id="main-right">
      <div class="camping-tips">
        <h3 id="blog-top-h3"> <?php echo $tcblog["title"];?> </h3>
        <?php echo display_twocents_blog($tcblog); ?>
        <?php include(ROOT_PATH."inc/disqus.php"); ?>
      </div>
    </div>
  </div>
  <footer class="contact-footer">
    <?php include(ROOT_PATH."inc/footer.php"); ?>
  </footer>
    <?php include(ROOT_PATH.'inc/js_scripts.php');?> -->
