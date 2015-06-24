<h4>Subscribe</h4>
<p>(Quickly, Before Sasquatch Gets You)</p>
<div id="sub">
  <!-- // if status=thanks in the query string, display an thank you message instead of the form -->
<?php if (isset($_GET["status"]) AND $_GET["status"] == "thanks") { ?>
  <?php include(ROOT_PATH.'inc/subscribe-thankyou.php'); ?>
<?php } else { ?>
  <?php
    if (isset($error_message)) {
    echo '<p class="message">' . $error_message . '</p>';
    }
  ?>
    <form class="sub-form" id="sub-formpage" method="post">
            <label for="name">Name</label>
              <input type="text" id="sub_form_name" name="sub_name" value="<?php if (isset($name)) { echo htmlspecialchars($name); } ?>">
            <label for="email">Email</label>
              <input type="email" id="sub_form_email" name="sub_email" value="<?php if(isset($email)) { echo htmlspecialchars($email); } ?>">
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
            <button id="subButtonSubmit" class="submit-button-form" type="submit">Connect</button>
        </form>
      </div>
        <?php } ?>
