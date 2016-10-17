<?php

  function displayWordpressServiceHtml($wordpressService){
    //build HTML output here
    $output = "";
    $output .= "<li>";
    $output .= '<a href="'.BASE_URL.'wordpress/?wordpress-service='.$wordpressService["wordpress-service"].'">';
    $output .= "<figure class='isFocus'>";
    $output .= '<img src="'.BASE_URL.$wordpressService["thumb"] .'">';
    $output .= "<figcaption>".$wordpressService["title"]."</figcaption>";
    $output .= "</figure>";
    $output .= "</a>";
    $output .= "</li>";

    return $output;
  }

  function displayWordpressServicePage($wordpressService){
    //build HTML output here
    $output = "";
    $output .= "<div class='serviceHeader'>";
    $output .= "</div>";
    $output .= $wordpressService["section"];
    $output .= "<br />";
    return $output;
  }

function getWordpressServicesCount() {
  return count(getAllWordpressServices());
}

function getAllWordpressServices() {
  $wordpressServices = array();
        $wordpressServices["monthly-support"] = array(
          "title" => "Monthly Support Plans",
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
        $wordpressServices["wordpress-maintenance"] = array(
          "title" => "Wordpress Maintenance",
          "section" => "<p class='blogContent'>
                         Lorem ipsum
                       </p>
                       <br />
                       <p class='blogContent clearContent'>
                       </p>
                       <br />
                       <p class='blogContent'>
                       </p>
                       <br />
                       <p class='blogContent'>
                       </p>
                       <br />
                       <p class='blogContent'>
                       </p>
                       "
        );
        $wordpressServices["wordpress-design"] = array(
          "title" => "WordPress Design",
          "section" => "<p class='blogContent'>
                          Lorem ipsum
                        </p>
                        <br />
                        <p class='blogContent clearContent'>
                        </p>
                        <br />
                        <p class='blogContent'>
                        </p>
                        <br />
                        <p class='blogContent'>
                        </p>
                        <br />
                        <p class='blogContent'>
                        </p>
                        "
        );
        $wordpressServices["wordpress-setup"] = array(
          "title" => "WordPress Setup",
          "section" => "<p class='blogContent'>
                         Lorem ipsum
                       </p>
                       <br />
                       <p class='blogContent clearContent'>
                       </p>
                       <br />
                       <p class='blogContent'>
                       </p>
                       <br />
                       <p class='blogContent'>
                       </p>
                       <br />
                       <p class='blogContent'>
                       </p>
                       "
        );
        $wordpressServices["wordpress-update"] = array(
          "title" => "WordPress Update",
          "section" => "<p class='blogContent'>
                          Lorem ipsum
                        </p>
                        <br />
                        <p class='blogContent clearContent'>
                        </p>
                        <br />
                        <p class='blogContent'>
                        </p>
                        <br />
                        <p class='blogContent'>
                        </p>
                        <br />
                        <p class='blogContent'>
                        </p>
                        "
        );
        $wordpressServices["website-uptime-monitoring"] = array(
          "title" => "Uptime Monitoring",
          "section" => "<p class='blogContent'>
                         Lorem ipsum
                       </p>
                       <br />
                       <p class='blogContent clearContent'>
                       </p>
                       <br />
                       <p class='blogContent'>
                       </p>
                       <br />
                       <p class='blogContent'>
                       </p>
                       <br />
                       <p class='blogContent'>
                       </p>
                       "
        );
        $wordpressServices["website-security-scan"] = array(
          "title" => "Website Security Scan",
          "section" => "<p class='blogContent'>
                          Lorem ipsum
                        </p>
                        <br />
                        <p class='blogContent clearContent'>
                        </p>
                        <br />
                        <p class='blogContent'>
                        </p>
                        <br />
                        <p class='blogContent'>
                        </p>
                        <br />
                        <p class='blogContent'>
                        </p>
                        "
        );
        $wordpressServices["website-analytics"] = array(
          "title" => "Website Analytics",
          "section" => "<p class='blogContent'>
                         Lorem ipsum
                       </p>
                       <br />
                       <p class='blogContent clearContent'>
                       </p>
                       <br />
                       <p class='blogContent'>
                       </p>
                       <br />
                       <p class='blogContent'>
                       </p>
                       <br />
                       <p class='blogContent'>
                       </p>
                       "
        );
        $wordpressServices["database-backups"] = array(
          "title" => "Database Backups",
          "section" => "<p class='blogContent'>
                          Lorem ipsum
                        </p>
                        <br />
                        <p class='blogContent clearContent'>
                        </p>
                        <br />
                        <p class='blogContent'>
                        </p>
                        <br />
                        <p class='blogContent'>
                        </p>
                        <br />
                        <p class='blogContent'>
                        </p>
                        "
        );
        $wordpressServices["hosting-transfers"] = array(
          "title" => "Hosting Transfers",
          "section" => "<p class='blogContent'>
                         Lorem ipsum
                       </p>
                       <br />
                       <p class='blogContent clearContent'>
                       </p>
                       <br />
                       <p class='blogContent'>
                       </p>
                       <br />
                       <p class='blogContent'>
                       </p>
                       <br />
                       <p class='blogContent'>
                       </p>
                       "
        );

  foreach ($wordpressServices as $wordpressServicename => $wordpressService) {
    $wordpressServices[$wordpressServicename]["wordpress-service"] = $wordpressServicename;
}

return $wordpressServices;
}
?>
