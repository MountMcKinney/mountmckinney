<?php

  function displayServiceHtml($service){
    //build HTML output here
    $output = "";
    $output .= "<li>";
    $output .= '<a href="'.BASE_URL.'service/?service='.$service["service"].'">';
    $output .= "<figure>";
    $output .= '<img src="'.BASE_URL.$service["thumb"] .'">';
    $output .= "<figcaption>".$service["title"]."</figcaption>";
    $output .= "</figure>";
    $output .= "</a>";
    $output .= "</li>";

    return $output;
  }

  function displayServicePage($service){
    //build HTML output here
    $output = "";
    $output .= "<div class='serviceHeader'>";
    $output .= "</div>";
    $output .= $service["section"];
    $output .= "<br />";
    return $output;
  }

function getServicesCount() {
  return count(getAllServices());
}

function getAllServices() {
$services = array();
$services["web-development"] = array(
  "thumb" => "img/services/websiteDevelopment.svg",
  "title" => "Web Development",
  "section" => "<p class='blogContent'>
                  Do you need an interior designer or a contractor?
                </p>
                <br />
                <p class='blogContent clearContent'>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
                <br />
                <p class='blogContent'>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
                <br />
                <p class='blogContent'>
                </p>
                <br />
                <aside class='asideLeft asideLandscape'>

                </aside>
                <br />
                <p class='blogContent'>
                </p>
                "
 );
 $services["web-design"] = array(
   "thumb" => "img/services/webDesign.svg",
   "title" => "Web Design",
   "section" => "<p class='blogContent'>
                   Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                 </p>
                 <br />
                 <p class='blogContent clearContent'>
                   Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                 </p>
                 <br />
                 <p class='blogContent'>
                   Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                 </p>
                 <br />
                 <p class='blogContent'>
                 </p>
                 <br />
                 <aside class='asideLeft asideLandscape'>

                 </aside>
                 <br />
                 <p class='blogContent'>
                 </p>
                 "
  );
  $services["monthly-support"] = array(
    "thumb" => "img/services/monthlySupport.svg",
    "title" => "Monthly WordPress Support Plans",
    "section" => "<div class='planPage'>
                    <div class='plans'>
                      <div class='supportPlan basicPlan'>
                        <h3 class='basic'>Basic</h3>
                        <h1 class='price'>$29</h1>
                        <ul>
                          <li>Email Support</li>
                          <li>Plugin & Theme Updating</li>
                          <li>30 Minute Uptime Monitoring</li>
                          <li>Weekly Server Backups</li>
                          <li>Monthly Security Scans</li>
                          <li>5% Discount on Hourly Rate</li>
                          <li>2 Quick Fixes Included*</li>
                          <li>No Access to Virtue Theme</li>
                        </ul>
                        <div class='planButton basicPlanButton'>
                          <a href='http://localhost/store/#!/Monthly-WordPress-Support-Basic/p/73472710/category=0'>Sign Me Up!</a>
                        </div>
                      </div>
                      <div class='supportPlan recommendedPlan plusPlan'>
                        <h3 class='plus'>Plus</h3>
                        <h1 class='price'>$59</h1>
                        <ul>
                          <li>Email/Chat Support</li>
                          <li>Plugin & Theme Updating</li>
                          <li>5 Minute Uptime Monitoring</li>
                          <li>Daily Server Backups</li>
                          <li>Weekly Security Scans</li>
                          <li>10% Discount on Hourly Rate</li>
                          <li>5 Quick Fixes Included*</li>
                          <li>Free Access to Virtue Theme</li>
                        </ul>
                        <div class='planButton plusPlanButton'>
                          <a href='http://localhost/store/#!/Monthly-WordPress-Support-Plus/p/73472844/category=0&forcescroll=true'>Sign Me Up!</a>
                        </div>
                      </div>
                      <div class='supportPlan vipPlan'>
                        <h3 class='vip'>VIP</h3>
                        <h1 class='price'>$99</h1>
                        <ul>
                          <li>Email/Chat/Phone Support</li>
                          <li>Plugin & Theme Updating</li>
                          <li>1 Minute Uptime Monitoring</li>
                          <li>Real-time Server Backups**</li>
                          <li>Daily Security Scans</li>
                          <li>20% Discount on Hourly Rate</li>
                          <li>10 Quick Fixes Included*</li>
                          <li>Free Access to Virtue Theme</li>
                        </ul>
                        <div class='planButton vipPlanButton'>
                          <a href='http://localhost/store/#!/Monthly-WordPress-Support-VIP/p/73472845/category=0&forcescroll=true'>Sign Me Up!</a>
                        </div>
                      </div>
                    </div>
                    <div class='finePrint'>
                      <p>
                        *Quick Fixes are defined as jobs that Mount McKinney determines will take 30 mins or less. You cannot stack multiple small jobs to make a large project.
                      </p>
                      <p>
                        **Real-time backups only available if the company that hosts your websites supports it.
                      </p>
                      <p>
                        ***Rates are per managed domain and are subject to change at anytime. Subscribers will be notified of any changes to pricing at least 30 days prior to change. Months are purchased upfront. No contract required.
                      </p>
                    </div>
                  </div>
                  "
  );
  $services["wordpress-support"] = array(
    "thumb" => "img/services/wordpressMaintenance.svg",
    "title" => "WordPress Support",
    "section" => "<p class='blogContent centerParagraph'>
                    What would you rather focus on, fixing technical issues in Wordpress or growing your business? Thought so.
                    <br />
                    Let Mount McKinney take care of your Wordpress issues so you can get back to focusing on what you do best!
                  </p>
                  <br />
                  <p class='blogContent centerParagraph'>
                    Can't figure out why that plugin won't work? Migrating from one hosting platform to another? Site running slow?
                    <br />
                    Mount McKinney can help with all this and more! Check out what services we provide below!
                  </p>
                  <ul class='wordpressServiceList'>
                   <li>
                    <a href='".BASE_URL.'wordpress/?wordpress-service=monthly-support'."' title='That&apos;s what this widget is'>
                    <figure>
                      <img class='wordpressImg' src='".BASE_URL.'img/services/monthlySupport.svg'."'>
                      <figcaption>Monthly Support Plans</figcaption>
                    </figure>
                    </a>
                   </li>
                   <li>
                    <a href='".BASE_URL.'wordpress/?wordpress-service=wordpress-maintenance'."' title='That&apos;s what this widget is'>
                    <figure>
                      <img class='wordpressImg' src='".BASE_URL.'img/services/wordpressMaintenance.svg'."'>
                      <figcaption>WordPress Maintenance</figcaption>
                    </figure>
                    </a>
                   </li>
                   <li>
                    <a href='".BASE_URL.'wordpress/?wordpress-service=wordpress-design'."' title='That&apos;s what this widget is'>
                    <figure>
                      <img class='wordpressImg' src='".BASE_URL.'img/services/wordpressDesign.svg'."'>
                      <figcaption>WordPress Site Design</figcaption>
                    </figure>
                    </a>
                   </li>
                   <li>
                    <a href='".BASE_URL.'wordpress/?wordpress-service=wordpress-setup'."' title='That&apos;s what this widget is'>
                    <figure>
                      <img class='wordpressImg' src='".BASE_URL.'img/services/wordpressSetup.svg'."'>
                      <figcaption>WordPress Setup</figcaption>
                    </figure>
                    </a>
                   </li>
                   <li>
                    <a href='".BASE_URL.'wordpress/?wordpress-service=wordpress-update'."' title='That&apos;s what this widget is'>
                    <figure>
                      <img class='wordpressImg' src='".BASE_URL.'img/services/wordpressUpdate.svg'."'>
                      <figcaption>WordPress Update</figcaption>
                    </figure>
                    </a>
                   </li>
                   <li>
                    <a href='".BASE_URL.'wordpress/?wordpress-service=website-uptime-monitoring'."' title='That&apos;s what this widget is'>
                    <figure>
                      <img class='wordpressImg' src='".BASE_URL.'img/services/websiteUptimeMonitoring.svg'."'>
                      <figcaption>Uptime Monitoring</figcaption>
                    </figure>
                    </a>
                   </li>
                   <li>
                    <a href='".BASE_URL.'wordpress/?wordpress-service=website-security-scan'."' title='That&apos;s what this widget is'>
                    <figure>
                      <img class='wordpressImg' src='".BASE_URL.'img/services/websiteSecurityScan.svg'."'>
                      <figcaption>WordPress Site Scan</figcaption>
                    </figure>
                    </a>
                   </li>
                   <li>
                    <a href='".BASE_URL.'wordpress/?wordpress-service=website-analytics'."' title='That&apos;s what this widget is'>
                    <figure>
                      <img class='wordpressImg' src='".BASE_URL.'img/services/websiteAnalytics.svg'."'>
                      <figcaption>WordPress Site Analytics</figcaption>
                    </figure>
                    </a>
                   </li>
                   <li>
                    <a href='".BASE_URL.'wordpress/?wordpress-service=database-backups'."' title='That&apos;s what this widget is'>
                    <figure>
                      <img class='wordpressImg' src='".BASE_URL.'img/services/database.svg'."'>
                      <figcaption>Database Backups</figcaption>
                    </figure>
                    </a>
                   </li>
                   <li>
                    <a href='".BASE_URL.'wordpress/?wordpress-service=hosting-transfers'."' title='That&apos;s what this widget is'>
                    <figure>
                      <img class='wordpressImg' src='".BASE_URL.'img/services/hostingTransfers.svg'."'>
                      <figcaption>Site Hosting Transfers</figcaption>
                    </figure>
                    </a>
                   </li>
                   <li>
                    <a href='".BASE_URL.'service/?service=logo-design'."' title='That&apos;s what this widget is'>
                    <figure>
                      <img class='wordpressImg' src='".BASE_URL.'img/services/logoDesign.svg'."'>
                      <figcaption>Logo Design</figcaption>
                    </figure>
                    </a>
                   </li>
                   <li>
                    <a href='".BASE_URL.'service/?service=quick-fix'."' title='That&apos;s what this widget is'>
                    <figure>
                      <img class='wordpressImg' src='".BASE_URL.'img/services/quickFix.svg'."'>
                      <figcaption>Quick Fix</figcaption>
                    </figure>
                    </a>
                   </li>
                  </ul>
                  "
  );
  $services["quick-fix"] = array(
    "thumb" => "img/services/quickFix.svg",
    "title" => "Quick Fix",
    "section" => "<p class='blogContent'>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                  </p>
                  <br />
                  <p class='blogContent clearContent'>
                    // Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                  </p>
                  <br />
                  <p class='blogContent'>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                  </p>
                  <br />
                  <p class='blogContent'>
                  </p>
                  <br />
                  <aside class='asideLeft asideLandscape'>

                  </aside>
                  <br />
                  <p class='blogContent'>
                  </p>
                  "
  );
  // $services["site-security"] = array(
  //   "thumb" => "img/services/websiteSecurityScan.svg",
  //   "title" => "Site Security",
  //   "section" => "<p class='blogContent'>
  //                   Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
  //                 </p>
  //                 <br />
  //                 <p class='blogContent clearContent'>
  //                   Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
  //                 </p>
  //                 <br />
  //                 <p class='blogContent'>
  //                   Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
  //                 </p>
  //                 <br />
  //                 <p class='blogContent'>
  //                 </p>
  //                 <br />
  //                 <aside class='asideLeft asideLandscape'>
  //
  //                 </aside>
  //                 <br />
  //                 <p class='blogContent'>
  //                 </p>
  //                 "
  //  );
  // $services["wordpress-setup"] = array(
  //   "thumb" => "img/services/wordpressSetup.svg",
  //   "title" => "Wordpress Setup",
  //   "section" => "<p class='blogContent'>
  //                   Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
  //                 </p>
  //                 <br />
  //                 <p class='blogContent clearContent'>
  //                   Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
  //                 </p>
  //                 <br />
  //                 <p class='blogContent'>
  //                   Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
  //                 </p>
  //                 <br />
  //                 <p class='blogContent'>
  //                 </p>
  //                 <br />
  //                 <aside class='asideLeft asideLandscape'>
  //
  //                 </aside>
  //                 <br />
  //                 <p class='blogContent'>
  //                 </p>
  //                 "
  //  );
   $services["logo-design"] = array(
     "thumb" => "img/services/logoDesign.svg",
     "title" => "Logo Design",
     "section" => "<p class='blogContent'>
                     Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                   </p>
                   <br />
                   <p class='blogContent clearContent'>
                     Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                   </p>
                   <br />
                   <p class='blogContent'>
                     Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                   </p>
                   <br />
                   <p class='blogContent'>
                   </p>
                   <br />
                   <aside class='asideLeft asideLandscape'>

                   </aside>
                   <br />
                   <p class='blogContent'>
                   </p>
                   "
   );
  //  $services["wordpress-update"] = array(
  //    "thumb" => "img/services/wordpressUpdate.svg",
  //    "title" => "WordPress Update",
  //    "section" => "<p class='blogContent'>
  //                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
  //                  </p>
  //                  <br />
  //                  <p class='blogContent clearContent'>
  //                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
  //                  </p>
  //                  <br />
  //                  <p class='blogContent'>
  //                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
  //                  </p>
  //                  <br />
  //                  <p class='blogContent'>
  //                  </p>
  //                  <br />
  //                  <aside class='asideLeft asideLandscape'>
   //
  //                  </aside>
  //                  <br />
  //                  <p class='blogContent'>
  //                  </p>
  //                  "
  //   );
  //   $services["backups"] = array(
  //      "thumb" => "img/services/database.svg",
  //      "title" => "Database Backups & Hosting",
  //      "section" => "<p class='blogContent'>
  //                      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
  //                    </p>
  //                    <br />
  //                    <p class='blogContent clearContent'>
  //                      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
  //                    </p>
  //                    <br />
  //                    <p class='blogContent'>
  //                      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
  //                    </p>
  //                    <br />
  //                    <p class='blogContent'>
  //                    </p>
  //                    <br />
  //                    <aside class='asideLeft asideLandscape'>
   //
  //                    </aside>
  //                    <br />
  //                    <p class='blogContent'>
  //                    </p>
  //                    "
  //     );
      // $services["transfers"] = array(
      //   "thumb" => "img/services/hostingTransfers.svg",
      //   "title" => "Hosting Transfers",
      //   "section" => "<p class='blogContent'>
      //                   Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      //                 </p>
      //                 <br />
      //                 <p class='blogContent clearContent'>
      //                   Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      //                 </p>
      //                 <br />
      //                 <p class='blogContent'>
      //                   Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      //                 </p>
      //                 <br />
      //                 <p class='blogContent'>
      //                 </p>
      //                 <br />
      //                 <aside class='asideLeft asideLandscape'>
      //
      //                 </aside>
      //                 <br />
      //                 <p class='blogContent'>
      //                 </p>
      //                 "
      //  );
  foreach ($services as $servicename => $service) {
    $services[$servicename]["service"] = $servicename;
  }

return $services;
}
?>
