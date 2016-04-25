<?php
require_once("../inc/config.php");
require_once(ROOT_PATH."inc/campfireArr.php");

// Gets the most recent story and displays it at the top of the page
$cfstories = getAllCfstories();
$topStory = array_shift($cfstories);

// retrieve current page number from query string; set to 1 if blank
if (empty($_GET["pg"])) {
  $currentPage = 1;
} else {
  $currentPage = $_GET["pg"];
}
// set strings to 0; remove decimals
$currentPage = intval($currentPage);

$totalCfstories = getCfstoriesCount();
$cfstoriesPerPage = 12;
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
// page 2 with 12 stories per page, $start and $end would be 13 and 24
$start = (($currentPage - 1) * $cfstoriesPerPage) + 1;
$end = $currentPage * $cfstoriesPerPage;
if ($end > $totalCfstories) {
  $end = $totalCfstories;
}

$cfstories = getCfstoriesSubset($start,$end);

?>

<!DOCTYPE html>
<html id="campfirestories">
<?php
  $pageTitle="Campfire Stories";
  include(ROOT_PATH."inc/header.php");
?>
  <div class="wrapper">
    <div class="blogHomeHeader">
      <h3>Campfire Stories</h3>
      <!-- <div class="topStory">
        <?php echo displayCampfireFeatured($topStory); ?>
      </div> -->
    </div>
      <div class="campfire">
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
    <footer class="footer">
      <?php include(ROOT_PATH."inc/footer.php"); ?>
    </footer>
    <?php include(ROOT_PATH.'inc/scripts.php');?>
