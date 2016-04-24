<?php
require_once("../inc/config.php");
require_once(ROOT_PATH."inc/campfire_arr.php");

// retrieve current page number from query string; set to 1 if blank
if (empty($_GET["pg"])) {
  $current_page = 1;
} else {
  $current_page = $_GET["pg"];
}
// set strings to 0; remove decimals
$current_page = intval($current_page);

$total_cfstories = get_cfstories_count();
$cfstories_per_page = 4;
$total_pages = ceil($total_cfstories / $cfstories_per_page);

// redirect too-large page numbers to the last page
if ($current_page > $total_pages) {
  header("Location: ./?pg=" . $total_pages);
}

// redirect too-small page numbers (or strings converted to 0) to the first page
if ($current_page < 1) {
  header("Location: ./");
}

// determine the start and end story for the current page; for example, on
// page 2 with 4 stories per page, $start and $end would be 5 and 8
$start = (($current_page - 1) * $cfstories_per_page) + 1;
$end = $current_page * $cfstories_per_page;
if ($end > $total_cfstories) {
  $end = $total_cfstories;
}

$cfstories = get_cfstories_subset($start,$end);

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
    <div id="wrapper">
      <div id="main-left">
        <div class="campfire">
          <h3>Campfire Stories</h3>
          <ul class="cts">
            <?php include (ROOT_PATH."inc/pagination.php");?>
            <?php foreach($cfstories as $cfstory) {
              echo display_campfire_html($cfstory);
            }
            ?>
            <?php include (ROOT_PATH."inc/pagination.php");?>
          </ul>
        </div>
      </div>
    </div>
    <footer class="contact-footer">
      <?php include(ROOT_PATH."inc/footer.php"); ?>
    </footer>
    <?php include(ROOT_PATH.'inc/js_scripts.php');?>
