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
  include(ROOT_PATH."inc/subscribeFormPopup.php");
?>
<script>(function(){var qs,js,q,s,d=document,gi=d.getElementById,ce=d.createElement,gt=d.getElementsByTagName,id='typef_orm',b='https://s3-eu-west-1.amazonaws.com/share.typeform.com/';if(!gi.call(d,id)){js=ce.call(d,'script');js.id=id;js.src=b+'share.js';q=gt.call(d,'script')[0];q.parentNode.insertBefore(js,q)}})()</script>
  <div class="wrapper">
    <div id="campfire" class="blogHomeHeader campfireStoriesHeader">
      <h3>Campfire Stories</h3>
      <div class="campfireBio">
        <p>
          Welcome to <a href="<?php echo BASE_URL; ?>">Mount McKinney&apos;s</a> world famous Campfire Stories! Do you enjoy ghost stories scary enough to stop your heart? No? No worries, we don&apos;t tell those here. Ghost stories should only be told around an actual campfire where we can all enjoy warm, toasty s&apos;mores to provide comfort.
        </p>
        <p>
          If not ghost stories, what will sorts of stories will be told? How about tales of adventure with hints of comedy and wit? Adventures so intriguing you&apos;ll be on the edge of your seat while reading them, and if you&apos;re standing, you&apos;ll find a chair just to be on the edge of your seat. There may be the occasional tall tale from time to time in there as well, but isn&apos;t embelishment what turns a good story into a great one?
        </p>
        <p>
          From time to time a wandering hiker will drop by to provide a tale from their journeys. Are you an outdoorsy person with a tale to weave for all of us? If so, send us an <a href="mailto:info@support.mountmckinney.com">email</a>, fill out the <a class="typeform-share link" href="https://mountmckinney.typeform.com/to/IUHF6N" data-mode="1" target="_blank">Contact form</a>, or send us a <a href="http://www.pigeongram.com/" target="_blank">Carrier Pigeon</a>. Bonus points and free s&apos;mores for using that last one.
        </p>
        <p>
          We hope this all sounds great to you, we&apos;re certainly excited! Be sure to subscribe so you don&apos;t miss anything good!
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
    <footer class="footer">
      <?php include(ROOT_PATH."inc/footer.php"); ?>
    </footer>
    <?php include(ROOT_PATH.'inc/scripts.php');?>
