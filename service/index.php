<?php
require_once("../inc/config.php");
require_once(ROOT_PATH."inc/servicesArr.php");
$services = getAllServices();

if (isset($_GET["service"])){
  $servicename = $_GET["service"];
  if (isset($services[$servicename])){
    $service = $services[$servicename];
  }
}
if(!isset($service)){
  header("Location:".BASE_URL."services/");
  exit();
}

$pageTitle = $service["title"];
?>

<!DOCTYPE html>
<html id="services">
<?php
  include(ROOT_PATH."inc/header.php");
?>
  <div class="wrapper">
    <div class="blogHeader">
      <div class="breadcrumb">
        <a href="<?php echo BASE_URL; ?>services/">Services</a> &gt; <?php echo $service ["title"]; ?>
      </div>
    </div>
    <div class="campfire">
      <h3 class="blogTopH3"> <?php echo $service["title"];?> </h3>
      <?php echo displayServicePage($service); ?>
      <br />
    </div>
  </div>
     <?php include(ROOT_PATH.'inc/contactFormPopup.php'); ?>
  <footer class="footer">
    <?php include(ROOT_PATH."inc/footer.php"); ?>
  </footer>
    <?php include(ROOT_PATH.'inc/scripts.php');?>
