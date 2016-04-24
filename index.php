<?php
require_once("inc/config.php");
?>
<!DOCTYPE html>
<html id="homepage">
<?php
  $pageTitle="Home";
  include(ROOT_PATH."inc/header.php");
?>
  <div class="wrapper">
    <div class="topStory">
      <a href="<?php echo BASE_URL; ?>campfire/?story=world-is-your-oyster">
        <img src="<?php echo BASE_URL; ?>img/blog/header/canadianRockies.jpg" alt="" />
        The World Is Your Oyster
      </a>
      <!--
      $output .= "<figure>";
      $output .= '<img src="'.BASE_URL.$cfstory["img"] .'" alt="'.$cfstory["info"].'">';
      $output .= "<figcaption>".$cfstory["title"]."</figcaption>";
      $output .= "</figure>";
      $output .= "</a> -->
    </div>
  </div>
    <!-- <div class="homeHeader">
        <h1 class='title'>Mount McKinney</h1>
        <p class='title'>Websites Designed to Help You Reach Your Peak</p>
    </div> -->
    <!-- This button creates a pop up that displays the Contact Us Form -->
      <?php include(ROOT_PATH."inc/contactButton.php") ?>
      <?php include(ROOT_PATH."inc/contactFormPopup.php") ?>
      <footer class="footer">
        <?php include(ROOT_PATH."inc/footer.php"); ?>
      </footer>
      <?php include(ROOT_PATH."inc/scripts.php");?>
