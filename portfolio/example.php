<?php
require_once("../inc/config.php");

require_once(ROOT_PATH."inc/portfolio_arr.php");

if (isset($_GET["name"])){
  $websiteSKU = $_GET["name"];
  if (isset($websites[$websiteSKU])){
    $website = $websites[$websiteSKU];
  }
}
if(!isset($website)){
  header("Location:".BASE_URL."portfolio/");
  exit();
}

$pageTitle = $website["name"];
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
<<<<<<< Updated upstream
  <div class="breadcrumb"><a href="portfolio.php">Portfolio</a> &gt; <?php echo $website["name"]; ?></div>
  <div id="wrapper">
    <div>
        <img src="<?php echo $website["img"];?>">

=======
  <div class="breadcrumb"><a href="portfolio.php">Portfolio</a> &gt; <?php echo $website ["name"]; ?></div>
  <div id="wrapper">
    <div id="example">
        <img src="<?php echo $website["img"];?>">
>>>>>>> Stashed changes
    </div>
  </div>
  <footer class="contact-footer">
    <?php include(ROOT_PATH."inc/footer.php"); ?>
  </footer>
    <?php include(ROOT_PATH.'inc/js_scripts.php');?>
