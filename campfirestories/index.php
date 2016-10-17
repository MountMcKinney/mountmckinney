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
    <div id="campfire" class="blogHomeHeader campfireStoriesHeader">
      <h3>Campfire Stories</h3>
      <div class="campfireBio">
        <p>
          Welcome to <a href="<?php echo BASE_URL; ?>">Mount McKinney&#039;s</a> world famous Campfire Stories! Do you enjoy ghost stories scary enough to stop your heart? No? No worries, we don&#039;t tell those here. Ghost stories should only be told around an actual campfire where we can all enjoy warm, toasty s&#039;mores to provide comfort.
        </p>
        <p>
          If not ghost stories, what will sorts of stories will be told? How about tales of adventure with hints of comedy and wit? Adventures so intriguing you&#039;ll be on the edge of your seat while reading them, and if you&#039;re standing, you&#039;ll find a chair just to be on the edge of your seat. There may be the occasional tall tale from time to time in there as well, but isn&#039;t embelishment what turns a good story into a great one?
        </p>
        <p>
          From time to time a wandering hiker will drop by to provide a tale from their journeys. Are you an outdoorsy person with a tale to weave for all of us? If so, send us an <a href="mailto:john@mountmckinney.com">email</a>, fill out the <a href="#" class="contactPopUp">Contact form</a>, or send us a <a href="http://www.pigeongram.com/" target="_blank">Carrier Pigeon</a>. Bonus points and free s&#039;mores for using that last one.
        </p>
        <p>
          We hope this all sounds great to you, we&#039;re certainly excited! Be sure to <a href="#" class="subFormPopup">Subscribe</a> so you don&#039;t miss anything good!
        </p>
        <p>
          Remember friends, adventure is calling, chase after it!
        </p>
      </div>
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
     <?php include(ROOT_PATH.'inc/contactFormPopup.php'); ?>
    <footer class="footer">
      <?php include(ROOT_PATH."inc/footer.php"); ?>
    </footer>
    <?php include(ROOT_PATH.'inc/scripts.php');?>
