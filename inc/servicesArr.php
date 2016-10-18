<?php

  function displayServiceHtml($service){
    //build HTML output here
    $output = "";
    $output .= "<li>";
    $output .= '<a href="'.BASE_URL.'service/?service='.$service["service"].'">';
    $output .= "<figure title='".$service['popup']."'>";
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
  "popup" => "Are you in need of a new website? Or a redesign of your current one? Mount McKinney can create from scratch websites or in WordPress, Squarespace, Wix, or whatever platform you want.",
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
   "popup" => "Your current website feeling stale? Are your users complaining of how difficult it is to find things on your site? Do you fear that you haven't stayed up to date with the latest modern design trends? Mount McKinney can redesign your site to make it more beautiful and more user-friendly!",
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
    "popup" => "Do you have a WordPress blog or website and need help managing it? Mount McKinney provides this service in 3 options, click here to learn more about them!",
    "section" => "<div class='planPage'>
                    <div class='plans'>
                      <div class='supportPlan basicPlan'>
                        <h3 class='basic'>Basic</h3>
                        <h1 class='price'>$29</h1>
                        <ul>
                          <li class='altRow'>Amazing Customer Support!</li>
                          <li>Email Support</li>
                          <li class='altRow' title='We will ensure your plugins are up to date and secure. If a plugin is a known security concern or causes slow downs, Mount McKinney can suggest alternatives.'>Plugin & Theme Updating</li>
                          <li title='Is your site up and running right now? Are you sure? How do you know? Mount McKinney&#039;s Uptime Monitoring service will check every 30 minutes to ensure it&#039;s still up. If for some reason it does go down, we will alert you and can investigate the cause.'>30 Minute Uptime Monitoring</li>
                          <li class='altRow' title='Mount McKinney will backup your database on a daily basis to ensure that if something catastrophic happens, coffee on your computer perhaps, you will still have the important files from your website, even if you are down a computer and a latte.'>Weekly Server Backups</li>
                          <li title='Mount McKinney will run a monthly security check-up to ensure nothing malicious is living on your site. If there is, we will work to eradicate it.'>Monthly Security Scans</li>
                          <li class='altRow' title='Mount McKinney will set up a cache on your WordPress site.'>Cache Setup</li>
                          <li>No Discount on Hourly Rate</li>
                          <li class='altRow' title='These quick fixes cannot be combined to form a large project.'>2 Quick Fixes Included*</li>
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
                          <li>Amazing Customer Support!</li>
                          <li class='altRow' title='You will have access to a chat portal to receive live help.'>Email/Chat Support</li>
                          <li title='We will ensure your plugins are up to date and secure. If a plugin is a known security concern or causes slow downs, Mount McKinney can suggest alternatives.'>Plugin & Theme Updating</li>
                          <li class='altRow' title='Is your site up and running right now? Are you sure? How do you know? Mount McKinney&#039;s Uptime Monitoring service will check every 5 minutes to ensure it&#039;s still up. If for some reason it does go down, we will alert you and can investigate the cause.'>5 Minute Uptime Monitoring</li>
                          <li title='Mount McKinney will backup your database on a daily basis to ensure that if something catastrophic happens, coffee on your computer perhaps, you will still have the important files from your website, even if you are down a computer and a latte.'>Daily Server Backups</li>
                          <li class='altRow' title='Mount McKinney will run a weekly security check-up to ensure nothing malicious is living on your site. If there is, we will work to eradicate it.'>Weekly Security Scans</li>
                          <li title='Mount McKinney will set up a cache on your WordPress site and monitor the cache monthly to maintain high performance.'>Cache Setup & Monthly Monitoring</li>
                          <li class='altRow' title='This discount applies to web development, web design, logo design, WordPress fixes, and quick fixes.'>10% Discount on Hourly Rate</li>
                          <li title='These quick fixes cannot be combined to form a large project.'>4 Quick Fixes Included*</li>
                          <li class='altRow' title='You will have access to the beautiful Virtue Theme by Kadence Themes.'>Free Access to Virtue Theme</li>
                        </ul>
                        <div class='planButton plusPlanButton'>
                          <a href='http://localhost/store/#!/Monthly-WordPress-Support-Plus/p/73472844/category=0&forcescroll=true'>Sign Me Up!</a>
                        </div>
                      </div>
                      <div class='supportPlan vipPlan'>
                        <h3 class='vip'>VIP</h3>
                        <h1 class='price'>$99</h1>
                        <ul>
                          <li class='altRow'>Amazing Customer Support!</li>
                          <li title='You will have access to a chat portal to receive live help. You will also be able to schedule phone support.'>Email/Chat/Phone Support</li>
                          <li class='altRow' title='We will ensure your plugins are up to date and secure. If a plugin is a known security concern or causes slow downs, Mount McKinney can suggest alternatives.'>Plugin & Theme Updating</li>
                          <li title='Is your site up and running right now? Are you sure? How do you know? Mount McKinney&#039;s Uptime Monitoring service will check every minute to ensure it&#039;s still up. If for some reason it does go down, we will alert you and can investigate the cause.'>1 Minute Uptime Monitoring</li>
                          <li class='altRow' title='Mount McKinney will backup your database on a daily basis to ensure that if something catastrophic happens, coffee on your computer perhaps, you will still have the important files from your website, even if you are down a computer and a latte.'>Real-time Server Backups**</li>
                          <li title='Mount McKinney will run a daily security check-up to ensure nothing malicious is living on your site. If there is, we will work to eradicate it.'>Daily Security Scans</li>
                          <li class='altRow' title='Mount McKinney will set up a cache on your WordPress site and monitor the cache weekly to maintain high performance.'>Cache Setup & Weekly Monitoring</li>
                          <li title='This discount applies to web development, web design, logo design, WordPress fixes, and quick fixes.'>20% Discount on Hourly Rate</li>
                          <li class='altRow' title='These quick fixes cannot be combined to form a large project.'>7 Quick Fixes Included*</li>
                          <li title='You will have access to the beautiful Virtue Theme by Kadence Themes.'>Free Access to Virtue Theme</li>
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
    "popup" => "Does your WordPress blog or website need a little TLC? Mount McKinney can provide a wide-range of services. A full list of WordPress services can be found here.",
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
     "popup" => "Don&#039;t have a logo yet or your current logo feel out of date? Mount McKinney can work with you to create something special, just for you!",
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
                   "
   );
   $services["quick-fix"] = array(
     "thumb" => "img/services/quickFix.svg",
     "title" => "Quick Fix",
     "popup" => "Do you just need a quick fix on your website like fixing that plugin that won&#039;t update, changing some colors on your site, updating your theme, or backing up your database? If it&#039;s a small project under 30 mins then a quick fix is perfect for you.",
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
