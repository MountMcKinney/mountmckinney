<?php
require_once("../inc/config.php");
?>
<?php include (ROOT_PATH."inc/contactFormSubmission.php"); ?>

<!DOCTYPE html>
<html>
<?php
  $pageTitle="Pricing";
  include(ROOT_PATH."inc/header.php");
?>
    <header class="contact-header">
      <?php include(ROOT_PATH."inc/name_title_header.php");?>
      <?php include(ROOT_PATH."inc/menu.php");?>
    </header>
    <div id="wrapper-pricing">
      <div class="pricing">
        <h4>Pricing</h4>
        <div id="price">
          <p>
            I provide a wide range of technology related services. So, whether you need a website built, social media rebranded, or you are just having general issues with your technology just call on me.
          </p>
          <p>
            Think of me as your go-to technology guru.
          </p>
        <ul class="pricing-options">
          <li class="cost">
            <h5 id="head-cost">Hourly Rate</h5>
            <h6 id="cost">$50/hr</h6>
          </li>
        </ul>
        </div>
      </div>
      <div class="contact-me">
        <h4>Contact Me</h4>
        <div id="cont-me">
                      <!-- // if status=thanks in the query string, display an thank you message instead of the form -->
          <?php if (isset($_GET["status"]) AND $_GET["status"] == "thanks") { ?>
              <?php include(ROOT_PATH.'inc/contact-thankyou.php'); ?>
          <?php } else { ?>
          <?php
              if (isset($error_message)) {
                  echo '<p class="message">' . $error_message . '</p>';
              }
          ?>
          <div id="contact-name">
          <form method="post" action="" id="contact-us">
            <label for="name">Name</label>
              <input type="text" name="connect_name" id="connect_name" value="<?php if (isset($name)) { echo htmlspecialchars($name); } ?>">
            <label for="email">Email</label>
              <input type="email" name="connect_email" id="connect_email" value="<?php if(isset($email)) { echo htmlspecialchars($email); } ?>">
                <label for="comments">Comments</label>
              <textarea name="connect_comments" id="connect_comments"><?php if (isset($comments)) { echo htmlspecialchars($comments); } ?></textarea>
              <table style="display: none;">
                <tr>
                  <!-- // the field named address is used as a spam honeypot-->
                  <!-- // it is hidden from users, and it must be left blank-->
                  <th>
                    <label for="address">Address</label>
                  </th>
                    <td>
                      <input type="text" name="address" id="address">
                        <p>Humans: please leave this field blank.</p>
                    </td>
                </tr>
              </table>
              <button id="ButtonSubmit" type="submit" class="submit-button-form">Connect</button>
              <!--<button id="ButtonSubmit" onclick="postPortfolioToGoogle()" type="button" class="submit-button-form">Connect</button> -->

              <!-- <input type="submit" value="Send"> -->
          </form>
        </div>
        <?php } ?>
      </div>
     </div>
   </div>
    <footer class="contact-footer">
      <?php include(ROOT_PATH."inc/footer.php"); ?>
    </footer>
    <?php include(ROOT_PATH.'inc/js_scripts.php');?>
