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
    $output .= "<div class='blogHead'>";
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
  $services["wordpress-support"] = array(
    "thumb" => "img/services/wordpressMaintenance.svg",
    "title" => "WordPress Support",
    "section" => "<p class='blogContent'>
                    What would you rather focus on, fixing technical issues in Wordpress or growing your business? Thought so. Let Mount McKinney take care of your Wordpress issues so you can get back to focusing on what you do best!
                  </p>
                  <p class='blogContent'>
                    Can't figure out why that plugin won't work? Migrating from one hosting platform to another? Site running slow? Mount McKinney can help with all this and more! Check out what services we provide below!
                  </p>
                  <ul class='wordpressServiceList portfolioImages'>
                   <li>
                    <a href='".BASE_URL.'wordpress/?wordpress-service=monthly-support'."'>
                    <figure>
                      <img class='wordpressImg' src='".BASE_URL.'img/services/monthlySupport.svg'."'>
                      <figcaption>Monthly Support Plans</figcaption>
                    </figure>
                    </a>
                   </li>
                   <li>
                    <a href='".BASE_URL.'wordpress/?wordpress-service=wordpress-maintenance'."'>
                    <figure>
                      <img class='wordpressImg' src='".BASE_URL.'img/services/wordpressMaintenance.svg'."'>
                      <figcaption>WordPress Maintenance</figcaption>
                    </figure>
                    </a>
                   </li>
                   <li>
                    <a href='".BASE_URL.'wordpress/?wordpress-service=wordpress-design'."'>
                    <figure>
                      <img class='wordpressImg' src='".BASE_URL.'img/services/wordpressDesign.svg'."'>
                      <figcaption>WordPress Site Design</figcaption>
                    </figure>
                    </a>
                   </li>
                   <li>
                    <a href='".BASE_URL.'wordpress/?wordpress-service=wordpress-setup'."'>
                    <figure>
                      <img class='wordpressImg' src='".BASE_URL.'img/services/wordpressSetup.svg'."'>
                      <figcaption>WordPress Setup</figcaption>
                    </figure>
                    </a>
                   </li>
                   <li>
                    <a href='".BASE_URL.'wordpress/?wordpress-service=wordpress-update'."'>
                    <figure>
                      <img class='wordpressImg' src='".BASE_URL.'img/services/wordpressUpdate.svg'."'>
                      <figcaption>WordPress Update</figcaption>
                    </figure>
                    </a>
                   </li>
                   <li>
                    <a href='".BASE_URL.'wordpress/?wordpress-service=website-uptime-monitoring'."'>
                    <figure>
                      <img class='wordpressImg' src='".BASE_URL.'img/services/websiteUptimeMonitoring.svg'."'>
                      <figcaption>Monitoring of Website Uptime</figcaption>
                    </figure>
                    </a>
                   </li>
                   <li>
                    <a href='".BASE_URL.'wordpress/?wordpress-service=website-security-scan'."'>
                    <figure>
                      <img class='wordpressImg' src='".BASE_URL.'img/services/websiteSecurityScan.svg'."'>
                      <figcaption>WordPress Site Scan</figcaption>
                    </figure>
                    </a>
                   </li>
                   <li>
                    <a href='".BASE_URL.'wordpress/?wordpress-service=website-analytics'."'>
                    <figure>
                      <img class='wordpressImg' src='".BASE_URL.'img/services/websiteAnalytics.svg'."'>
                      <figcaption>WordPress Site Analytics</figcaption>
                    </figure>
                    </a>
                   </li>
                   <li>
                    <a href='".BASE_URL.'wordpress/?wordpress-service=database-backups'."'>
                    <figure>
                      <img class='wordpressImg' src='".BASE_URL.'img/services/database.svg'."'>
                      <figcaption>Database Backups</figcaption>
                    </figure>
                    </a>
                   </li>
                   <li>
                    <a href='".BASE_URL.'wordpress/?wordpress-service=hosting-transfers'."'>
                    <figure>
                      <img class='wordpressImg' src='".BASE_URL.'img/services/hostingTransfers.svg'."'>
                      <figcaption>Site Hosting Transfers</figcaption>
                    </figure>
                    </a>
                   </li>
                   <li>
                    <a href='".BASE_URL.'service/?service=logo-design'."'>
                    <figure>
                      <img class='wordpressImg' src='".BASE_URL.'img/services/logoDesign.svg'."'>
                      <figcaption>Logo Design</figcaption>
                    </figure>
                    </a>
                   </li>
                   <li>
                    <a href='".BASE_URL.'service/?service=quick-fix'."'>
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
