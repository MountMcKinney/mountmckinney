<?php
require_once("../inc/config.php");
require_once(ROOT_PATH."inc/wordpressServicesArr.php");
$wordpressServices = getAllWordpressServices();

if (isset($_GET["wordpress-service"])){
  $wordpressServicename = $_GET["wordpress-service"];
  if (isset($wordpressServices[$wordpressServicename])){
    $wordpressService = $wordpressServices[$wordpressServicename];
  }
}
if(!isset($wordpressService)){
  header("Location:".BASE_URL."wordpress-service/");
  exit();
}

$pageTitle = $wordpressService["title"];
?>

<!DOCTYPE html>
<html id="wordpress-services">
<?php
  include(ROOT_PATH."inc/header.php");
?>
  <div class="wrapper">
    <div class="blogHeader">
      <div class="breadcrumb">
        <a href="<?php echo BASE_URL; ?>service/">Services</a> &gt; <a class="altBreadcrumb" href="<?php echo BASE_URL; ?>service/?service=wordpress-support">Wordpress Services</a> &gt; <?php echo $wordpressService ["title"]; ?>
      </div>
    </div>
    <div class="campfire">
      <h3 class="serviceTopH3"> <?php echo $wordpressService["title"];?> </h3>
      <?php echo displayWordpressServicePage($wordpressService); ?>
      <br />
    </div>
  </div>
     <?php include(ROOT_PATH.'inc/contactFormPopup.php'); ?>
  <footer class="footer">
    <?php include(ROOT_PATH."inc/footer.php"); ?>
  </footer>
    <?php include(ROOT_PATH.'inc/scripts.php');?>
