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
    $output .= $wordpressService["contact"];
    return $output;
  }

function getWordpressServicesCount() {
  return count(getAllWordpressServices());
}

function getAllWordpressServices() {
  $wordpressServices = array();
        $wordpressServices["monthly-support"] = array(
          "title" => "Monthly Support Plans",
          "contact" => "<div class='wordpressForm'>
                          <iframe src='https://services.cognitoforms.com/f/SkK_LHLpKUmLPQLt_eXuZQ?id=7' style='position:relative;width:1px;min-width:100%;*width:100%;' frameborder='0' scrolling='yes' seamless='seamless' height='751' width='100%'></iframe>
                          <script src='https://services.cognitoforms.com/scripts/embed.js'></script>
                        </div>",
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
        $wordpressServices["wordpress-maintenance"] = array(
          "title" => "Wordpress Maintenance",
          "contact" => "<div class='wordpressForm'>
                          <iframe src='https://services.cognitoforms.com/f/SkK_LHLpKUmLPQLt_eXuZQ?id=7' style='position:relative;width:1px;min-width:100%;*width:100%;' frameborder='0' scrolling='yes' seamless='seamless' height='751' width='100%'></iframe>
                          <script src='https://services.cognitoforms.com/scripts/embed.js'></script>
                        </div>",
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
          "contact" => "<div class='wordpressForm'>
                          <iframe src='https://services.cognitoforms.com/f/SkK_LHLpKUmLPQLt_eXuZQ?id=7' style='position:relative;width:1px;min-width:100%;*width:100%;' frameborder='0' scrolling='yes' seamless='seamless' height='751' width='100%'></iframe>
                          <script src='https://services.cognitoforms.com/scripts/embed.js'></script>
                        </div>",
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
          "contact" => "<div class='wordpressForm'>
                          <iframe src='https://services.cognitoforms.com/f/SkK_LHLpKUmLPQLt_eXuZQ?id=7' style='position:relative;width:1px;min-width:100%;*width:100%;' frameborder='0' scrolling='yes' seamless='seamless' height='751' width='100%'></iframe>
                          <script src='https://services.cognitoforms.com/scripts/embed.js'></script>
                        </div>",
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
          "contact" => "<div class='wordpressForm'>
                          <iframe src='https://services.cognitoforms.com/f/SkK_LHLpKUmLPQLt_eXuZQ?id=7' style='position:relative;width:1px;min-width:100%;*width:100%;' frameborder='0' scrolling='yes' seamless='seamless' height='751' width='100%'></iframe>
                          <script src='https://services.cognitoforms.com/scripts/embed.js'></script>
                        </div>",
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
          "contact" => "<div class='wordpressForm'>
                          <iframe src='https://services.cognitoforms.com/f/SkK_LHLpKUmLPQLt_eXuZQ?id=7' style='position:relative;width:1px;min-width:100%;*width:100%;' frameborder='0' scrolling='yes' seamless='seamless' height='751' width='100%'></iframe>
                          <script src='https://services.cognitoforms.com/scripts/embed.js'></script>
                        </div>",
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
          "contact" => "<div class='wordpressForm'>
                          <iframe src='https://services.cognitoforms.com/f/SkK_LHLpKUmLPQLt_eXuZQ?id=7' style='position:relative;width:1px;min-width:100%;*width:100%;' frameborder='0' scrolling='yes' seamless='seamless' height='751' width='100%'></iframe>
                          <script src='https://services.cognitoforms.com/scripts/embed.js'></script>
                        </div>",
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
          "contact" => "<div class='wordpressForm'>
                          <iframe src='https://services.cognitoforms.com/f/SkK_LHLpKUmLPQLt_eXuZQ?id=7' style='position:relative;width:1px;min-width:100%;*width:100%;' frameborder='0' scrolling='yes' seamless='seamless' height='751' width='100%'></iframe>
                          <script src='https://services.cognitoforms.com/scripts/embed.js'></script>
                        </div>",
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
          "contact" => "<div class='wordpressForm'>
                          <iframe src='https://services.cognitoforms.com/f/SkK_LHLpKUmLPQLt_eXuZQ?id=7' style='position:relative;width:1px;min-width:100%;*width:100%;' frameborder='0' scrolling='yes' seamless='seamless' height='751' width='100%'></iframe>
                          <script src='https://services.cognitoforms.com/scripts/embed.js'></script>
                        </div>",
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
          "contact" => "<div class='wordpressForm'>
                          <iframe src='https://services.cognitoforms.com/f/SkK_LHLpKUmLPQLt_eXuZQ?id=7' style='position:relative;width:1px;min-width:100%;*width:100%;' frameborder='0' scrolling='yes' seamless='seamless' height='751' width='100%'></iframe>
                          <script src='https://services.cognitoforms.com/scripts/embed.js'></script>
                        </div>",
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
