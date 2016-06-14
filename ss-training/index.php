<?php
require_once("../inc/config.php");
?>
<!DOCTYPE html>
<html id="contact">
<?php
  $pageTitle="SharpSpring";
  include(ROOT_PATH."inc/header.php");
?>
<div class="wrapper">
  <div class="about">
      <h4>Professional SharpSpring Training</h4>
      <div class="textBox">
          <p>
            John McKinney is a SharpSpring expert who provides personalized training and account setup for both your agency and your clients. As a former Account Manager, Onboarding Specialist, and Internal Trainer for SharpSpring, John brings his top-notch expertise tailored to your exact needs so you can focus on what you do best.
          </p>
          <table class="trainingSection">
            <tr>
              <td>
                <h5 class="trainingHeader">Agency Training</h5>
                  <ul>
                    <li class="trainingSubHeader">For agency employees</li>
                    <li class="trainingFeatures">Training on:
                      <ul>
                        <li class="trainingFeatures">Employee Onboarding</li>
                        <li class="trainingFeatures">SharpSpring platform</li>
                        <li class="trainingFeatures">Mobile app</li>
                        <li class="trainingFeatures">Social Assistant</li>
                        <li class="trainingFeatures">Future SharpSpring features</li>
                      </ul>
                    </li>
                  </ul>
              </td>
              <td>
                <h5 class="trainingHeader">Client Training</h5>
                  <ul>
                    <li class="trainingSubHeader">For agency clients</li>
                    <li class="trainingFeatures">Training on:
                      <ul>
                        <li class="trainingFeatures">Client Onboarding</li>
                        <li class="trainingFeatures">SharpSpring platform</li>
                        <li class="trainingFeatures">Mobile app</li>
                        <li class="trainingFeatures">Social Assistant</li>
                        <li class="trainingFeatures">Future SharpSpring features</li>
                      </ul>
                    </li>
                  </ul>
              </td>
            </tr>
            <tr>
              <td>
                <h5 class="trainingHeader">Agency Support</h5>
                  <ul>
                    <li class="trainingFeatures">Support for agency employees who manage client accounts</li>
                    <li class="trainingFeatures">Do your employees need help managing SharpSpring for their clients?</li>
                    <li class="trainingFeatures">
                      <a href="mailto:john@mountmckinney.com" id="bookTime">Send John an email</a>
                    </li>
                  </ul>
              </td>
              <td>
                <h5 class="trainingHeader">Onsite Training</h5>
                  <ul>
                    <li class="trainingFeatures">In-person training for employees of Agency or Client</li>
                    <li class="trainingFeatures">In-person Client demos</li>
                    <li class="trainingFeatures">Want to book an onsite training?</li>
                    <li class="trainingFeatures">
                      <a href="mailto:john@mountmckinney.com" id="bookTime">Send John an email</a>
                    </li>
                  </ul>
              </td>
            </tr>
          </table>
          <h5 class="trainingHeader">Want More Info & Pricing?</h5>
   </div>
  </div>
  <div class="bigContact">
  <?php include(ROOT_PATH.'inc/contactButton.php'); ?>
  </div>
  <?php include(ROOT_PATH.'inc/contactFormPopup.php'); ?>
</div>
<footer class="footer">
  <?php include(ROOT_PATH."inc/footer.php"); ?>
</footer>
  <?php include(ROOT_PATH."inc/scripts.php");?>
