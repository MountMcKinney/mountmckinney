<?php
require_once("inc/config.php");
require_once("inc/campfireArr.php");
$cfstories = getAllCfstories();
$topStory = array_shift($cfstories);
?>
<!DOCTYPE html>
<html id="homepage">
<?php
  $pageTitle="Home";
  include(ROOT_PATH."inc/header.php");
?>
  <div class="homeHeader">
      <h1 class='title'>Mount McKinney</h1>
      <p class='title'>Websites Designed to Help You Reach Your Peak</p>
  </div>
  <div class="wrapper">
    <div class="topStory">
      <h1><?php echo $topStory["title"];?></h1>
      <?php echo displayCampfireFeatured($topStory); ?>
    </div>
  </div>
    <!-- This button creates a pop up that displays the Contact Us Form -->
      <?php include(ROOT_PATH."inc/contactButton.php") ?>
      <?php include(ROOT_PATH."inc/contactFormPopup.php") ?>
      <footer class="footer">
        <?php include(ROOT_PATH."inc/footer.php"); ?>
      </footer>
      <?php include(ROOT_PATH."inc/scripts.php");?>
