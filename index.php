<?php
require_once("inc/config.php");

?>
<!DOCTYPE html>
<html id="homepage">
<?php
  $pageTitle="Home";
  include(ROOT_PATH."inc/header.php");
?>
<div class="homepage">
</div>
  <div class="homeHeader">
      <h1 class='title'>Mount McKinney</h1>
      <p class='title'>Websites Designed to Help You Reach Your Peak</p>
</div>
<div class="homeContactPopupButton">
  <a class="typeform-share button" href="https://mountmckinney.typeform.com/to/IUHF6N" data-mode="1" target="_blank">CONTACT US</a>
  <script>(function(){var qs,js,q,s,d=document,gi=d.getElementById,ce=d.createElement,gt=d.getElementsByTagName,id='typef_orm',b='https://s3-eu-west-1.amazonaws.com/share.typeform.com/';if(!gi.call(d,id)){js=ce.call(d,'script');js.id=id;js.src=b+'share.js';q=gt.call(d,'script')[0];q.parentNode.insertBefore(js,q)}id=id+'_';if(!gi.call(d,id)){qs=ce.call(d,'link');qs.rel='stylesheet';qs.id=id;qs.href=b+'share-button.css';s=gt.call(d,'head')[0];s.appendChild(qs,s)}})()</script>
</div>
      <footer class="homeFooter">
        <?php include(ROOT_PATH."inc/homeFooter.php"); ?>
      </footer>
      <?php include(ROOT_PATH."inc/scripts.php");?>
