<?php
require_once("../inc/config.php");
require_once(ROOT_PATH."inc/campfire_arr.php");
$cfstories = get_all_cfstories();

if (isset($_GET["story"])){
  $cfstoryname = $_GET["story"];
  if (isset($cfstories[$cfstoryname])){
    $cfstory = $cfstories[$cfstoryname];
  }
}
if(!isset($cfstory)){
  header("Location:".BASE_URL."campfirestories/");
  exit();
}

$pageTitle = $cfstory["title"];
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
  <div class="breadcrumb"><a href="<?php echo BASE_URL; ?>campfirestories/">Campfire Stories</a> &gt; <?php echo $cfstory ["title"]; ?></div>
  <div id="wrapper">
    <div id="main-left">
      <div class="campfire">
        <h3 id="blog-top-h3"> <?php echo $cfstory["title"];?> </h3>
        <?php echo display_campfire_blog($cfstory); ?>
        <?php include(ROOT_PATH."inc/disqus.php"); ?>
      </div>
    </div>
  </div>
  <footer class="contact-footer">
    <?php include(ROOT_PATH."inc/footer.php"); ?>
  </footer>
    <?php include(ROOT_PATH.'inc/js_scripts.php');?>
