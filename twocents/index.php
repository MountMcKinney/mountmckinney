<?php
require_once("../inc/config.php");
require_once(ROOT_PATH."inc/twocents_arr.php");

// retrieve current page number from query string; set to 1 if blank
if (empty($_GET["pg"])) {
  $current_page = 1;
} else {
  $current_page = $_GET["pg"];
}
// set strings to 0; remove decimals
$current_page = intval($current_page);

$total_tcblogs = get_tcblogs_count();
$tcblogs_per_page = 4;
$total_pages = ceil($total_tcblogs / $tcblogs_per_page);

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
$start = (($current_page - 1) * $tcblogs_per_page) + 1;
$end = $current_page * $tcblogs_per_page;
if ($end > $total_tcblogs) {
  $end = $total_tcblogs;
}

$tcblogs = get_tcblogs_subset($start,$end);
?>

<!DOCTYPE html>
<html>
<?php
  $pageTitle="Two Cents";
  include(ROOT_PATH."inc/header.php");
?>
  <header class="contact-header">
    <?php include(ROOT_PATH."inc/name_title_header.php");?>
    <?php include(ROOT_PATH."inc/menu.php");?>
  </header>
    <div id="wrapper">
      <div id="main-right">
        <div class="camping-tips">
          <h3>My Two Cents</h3>
          <ul class="cts-right">
            <?php include (ROOT_PATH."inc/pagination.php"); ?>
            <?php foreach($tcblogs as $tcblog){
              echo display_twocents_html($tcblog);
            }
            ?>
            <?php include (ROOT_PATH."inc/pagination.php"); ?>
          </ul>
        </div>
      </div>
    </div>
    <footer class="contact-footer">
      <?php include(ROOT_PATH."inc/footer.php"); ?>
    </footer>
    <?php include(ROOT_PATH."inc/js_scripts.php");?>