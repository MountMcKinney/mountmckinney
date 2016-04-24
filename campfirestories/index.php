<?php
require_once("../inc/config.php");
require_once(ROOT_PATH."inc/campfireArr.php");

// retrieve current page number from query string; set to 1 if blank
if (empty($_GET["pg"])) {
  $currentPage = 1;
} else {
  $currentPage = $_GET["pg"];
}
// set strings to 0; remove decimals
$currentPage = intval($currentPage);

$totalCfstories = getCfstoriesCount();
$cfstoriesPerPage = 4;
$totalPages = ceil($totalCfstories / $cfstoriesPerPage);

// redirect too-large page numbers to the last page
if ($currentPage > $totalPages) {
  header("Location: ./?pg=" . $totalPages);
}

// redirect too-small page numbers (or strings converted to 0) to the first page
if ($currentPage < 1) {
  header("Location: ./");
}

// determine the start and end story for the current page; for example, on
// page 2 with 4 stories per page, $start and $end would be 5 and 8
$start = (($currentPage - 1) * $cfstoriesPerPage) + 1;
$end = $currentPage * $cfstoriesPerPage;
if ($end > $totalCfstories) {
  $end = $totalCfstories;
}

$cfstories = getCfstoriesSubset($start,$end);

?>

<!DOCTYPE html>
<html>
<?php
  $pageTitle="Campfire Stories";
  include(ROOT_PATH."inc/header.php");
?>
  <div class="blogHomeHeader">
    <div class="subscribeButton">
        <?php include(ROOT_PATH.'inc/subscribeButton.php'); ?>
        <?php include(ROOT_PATH.'inc/subscribeFormPopup.php'); ?>
    </div>
  </div>
    <div class="wrapper">
      <div id="mainLeft">
        <div class="campfire">
          <h3>Campfire Stories</h3>
          <ul class="campfireBlog">
            <?php include (ROOT_PATH."inc/pagination.php");?>
            <?php foreach($cfstories as $cfstory) {
              echo displayCampfireHtml($cfstory);
            }
            ?>
            <?php include (ROOT_PATH."inc/pagination.php");?>
          </ul>
        </div>
      </div>
    </div>
    <footer class="footer">
      <?php include(ROOT_PATH."inc/footer.php"); ?>
    </footer>
    <?php include(ROOT_PATH.'inc/scripts.php');?>
