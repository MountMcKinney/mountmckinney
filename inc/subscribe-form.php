<h4>Subscribe</h4>
<p>(Quickly, Before Sasquatch Gets You)</p>
<div id="sub">
  <!-- // if status=thanks in the query string, display an thank you message instead of the form -->
<?php if (isset($_GET["status"]) AND $_GET["status"] == "thanks") { ?>
<?php include(ROOT_PATH.'inc/contact-thankyou.php'); ?>
<?php } else { ?>
<?php
if (isset($error_message)) {
echo '<p class="message">' . $error_message . '</p>';
}
?>
    <form class="sub-form" id="sub-formpage">
            <label for="name">Name</label>
            <input type="text" id="sub_form_name" name="sub_name" class="required"/>
            <label for="email">Email</label>
            <input type="email" id="sub_form_email" name="sub_email" class="required"/>
            <button id="ButtonSubmit" class="submit-button-form" type="submit">Connect</button>
        </form>
      </div>
        <?php } ?>
