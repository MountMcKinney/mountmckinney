<?php
require_once("../inc/config.php");
require_once(ROOT_PATH."inc/campfireArr.php");
$cfstories = getAllCfstories();

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
<html id="campfirestories">
<?php
  include(ROOT_PATH."inc/header.php");
?>
  <div class="blogHeader">
    <div class="breadcrumb">
      <a href="<?php echo BASE_URL; ?>campfirestories/">Campfire Stories</a> &gt; <?php echo $cfstory ["title"]; ?>
    </div>
    <div class="subscribeButtonFloat">
        <?php include(ROOT_PATH.'inc/subscribeButton.php'); ?>
        <?php include(ROOT_PATH.'inc/subscribeFormPopup.php'); ?>
    </div>
  </div>
  <div class="wrapper">
      <div class="campfire">
        <h3 class="blogTopH3"> <?php echo $cfstory["title"];?> </h3>
        <?php echo displayCampfireBlog($cfstory); ?>
        <?php include(ROOT_PATH."inc/disqus.php"); ?>
      </div>
  </div>
     <?php include(ROOT_PATH.'inc/contactFormPopup.php'); ?>
  <footer class="footer">
    <?php include(ROOT_PATH."inc/footer.php"); ?>
  </footer>
    <?php include(ROOT_PATH.'inc/scripts.php');?>
