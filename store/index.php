<?php
require_once("../inc/config.php");
?>
<!DOCTYPE html>
<html id="about">
<?php
  $pageTitle="About";
  include(ROOT_PATH."inc/header.php");
  include(ROOT_PATH."inc/contactFormPopup.php");
?>
<div class="wrapper">

<div id="my-search-10305039"></div>
<div>
<script type="text/javascript" src="https://app.ecwid.com/script.js?10305039&data_platform=code&data_date=2016-10-17" charset="utf-8"></script>
<script type="text/javascript"> xSearch("id=my-search-10305039"); </script>
</div>

<div id="my-cart-10305039"></div>
<div>
<script type="text/javascript" src="https://app.ecwid.com/script.js?10305039&data_platform=code&data_date=2016-10-17" charset="utf-8"></script>
<!-- remove layout parameter if you want to position minicart yourself -->
<script type="text/javascript"> xMinicart("layout=attachToCategories", "id=my-cart-10305039"); </script>
</div>

<div id="my-categories-10305039"></div>
<div>
<script type="text/javascript" src="https://app.ecwid.com/script.js?10305039&data_platform=code&data_date=2016-10-17" charset="utf-8"></script>
<script type="text/javascript"> xCategoriesV2("id=my-categories-10305039"); </script>
</div>

<div id="my-store-10305039"></div>
<div>
<script type="text/javascript" src="https://app.ecwid.com/script.js?10305039&data_platform=code&data_date=2016-10-17" charset="utf-8"></script><script type="text/javascript"> xProductBrowser("categoriesPerRow=3","views=grid(3,3) list(10) table(20)","categoryView=grid","searchView=list","id=my-store-10305039");</script>
</div>

</div>
</div>
<footer class="footer">
<?php include(ROOT_PATH."inc/footer.php"); ?>
</footer>
<?php include(ROOT_PATH."inc/scripts.php");?>
