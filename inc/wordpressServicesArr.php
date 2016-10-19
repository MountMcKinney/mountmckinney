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
          "img" => "monthlySupport.svg",
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
          "section" => "<p class='serviceContent'>
                         Is your WordPress site <strong>running slow</strong>? Are you getting errors when trying to <strong>update a plugin</strong>? We can fix that!
                       </p>
                       <br />
                       <p class='serviceContent clearContent'>
                         Mount McKinney will make sure all of your plugins are <strong>up to date</strong> and <strong>secure</strong>. If we find a plugin known to be a security concern, we search for better options for you.
                       </p>
                       <br />
                       <p class='serviceContent'>
                         Many plugins, even popular ones, cause your site to run slowly. Mount McKinney will speed test your site and determine if a particular plugin is causing slow downs.
                       </p>
                       <br />
                       <p class='serviceContent'>
                         Mount McKinney&#039;s <a href='http://localhost/wordpress/?wordpress-service=monthly-support'>Monthly WordPress Support Plans</a> are an excellent way to get all these features and more!
                       </p>
                       <br />
                       <p class='serviceContent'>
                         Does your WordPress site need maintenance but not ready to sign-up for our monthly support plan?
                         <div class='servicesContact'>
                           <a class='typeform-share button' href='https://mountmckinney.typeform.com/to/vx9QaK' data-mode='1' target='_blank'>Reach Out</a>
                         </div>
                       </p>
                       "
        );
        $wordpressServices["wordpress-design"] = array(
          "title" => "WordPress Design",
          "section" => "<p class='serviceContent'>
                          When&#039;s the last time you changed your WordPress theme? Doing so can seem like a huge undertaking to make sure everything looks good after the transition. So, why not let Mount McKinney take care of it for you?
                        </p>
                        <br />
                        <p class='serviceContent clearContent'>
                          Need advice or recommendations on a new theme for your blog or website? Mount McKinney can work with you to find a theme that fits your business needs.
                        </p>
                        <br />
                        <p class='serviceContent'>
                          Already have a theme you love but just need someone to tweak the design to fit your particular vision? Mount McKinney can help with that as well!
                        </p>
                        <br />
                        <p class='serviceContent'>
                          Mount McKinney&#039;s <a href='http://localhost/wordpress/?wordpress-service=monthly-support'>Monthly WordPress Support Plans</a> give you free access to the gorgeous and versatile Virtue theme by Kadence Themes as well as many more features!
                        </p>
                        <br />
                        <p class='serviceContent'>
                          Need a new theme or help with your current theme?
                          <div class='servicesContact'>
                            <a class='typeform-share button' href='https://mountmckinney.typeform.com/to/vx9QaK' data-mode='1' target='_blank'>Reach Out</a>
                          </div>
                        </p>
                        "
        );
        $wordpressServices["wordpress-setup"] = array(
          "title" => "WordPress Setup",
          "section" => "<p class='serviceContent'>
                          New to blogging or just new to WordPress? Mount McKinney can set you up with everything you need to get started blogging on this powerful platform! In addition, we even have partnerships with marketers who are happy to help you get more readers.
                       </p>
                       <br />
                       <p class='serviceContent clearContent'>
                          We can help whether you need help installing WordPress on your server, picking a theme, or just need help learning to use WordPress!
                       </p>
                       <br />
                       <p class='serviceContent'>
                         Mount McKinney&#039;s <a href='http://localhost/wordpress/?wordpress-service=monthly-support'>Monthly WordPress Support Plans</a> are an excellent way to get this feature and many more!
                       </p>
                       <br />
                       <p class='serviceContent'>
                         Do you need help setting up your WordPress site but not ready to sign-up for our monthly support plan?
                         <div class='servicesContact'>
                           <a class='typeform-share button' href='https://mountmckinney.typeform.com/to/vx9QaK' data-mode='1' target='_blank'>Set Me Up</a>
                         </div>
                       </p>
                       "
        );
        $wordpressServices["wordpress-update"] = array(
          "title" => "WordPress Update",
          "section" => "<p class='serviceContent'>
                          Did you know that keeping WordPress up to date is essential to maintaining the security of your site? We can make sure errors are handled quickly and the process is seamless.
                        </p>
                        <br />
                        <p class='serviceContent'>
                          Mount McKinney&#039;s <a href='http://localhost/wordpress/?wordpress-service=monthly-support'>Monthly WordPress Support Plans</a> are an excellent way to get get this feature and many more!
                        </p>
                        <br />
                        <p class='serviceContent'>
                          Does your WordPress site need to be updated but you&#039;re not ready to sign-up for our monthly support plan?
                          <div class='servicesContact'>
                            <a class='typeform-share button' href='https://mountmckinney.typeform.com/to/vx9QaK' data-mode='1' target='_blank'>Update My Site</a>
                          </div>
                        </p>
                        "
        );
        $wordpressServices["website-uptime-monitoring"] = array(
          "title" => "Uptime Monitoring",
          "section" => "<p class='serviceContent'>
                         Do you know when your site goes down? Mount McKinney can update you within a few minutes of your site going down so we can act quickly to fix the issue.
                       </p>
                       <br />
                       <p class='serviceContent'>
                         Mount McKinney&#039;s <a href='http://localhost/wordpress/?wordpress-service=monthly-support'>Monthly WordPress Support Plans</a> are an excellent way to get this feature and many more!
                       </p>
                       <br />
                       <p class='serviceContent'>
                         Are you looking for uptime monitoring without a monthly support plan?
                         <div class='servicesContact'>
                           <a class='typeform-share button' href='https://mountmckinney.typeform.com/to/vx9QaK' data-mode='1' target='_blank'>Monitor My Site</a>
                         </div>
                       </p>
                       "
        );
        $wordpressServices["website-security-scan"] = array(
          "title" => "Website Security Scan",
          "section" => "<p class='serviceContent'>
                          Do you have any malware living on your site? We can find out for you! Regular security scans are essential to protecting your customers.
                        </p>
                        <br />
                        <p class='serviceContent'>
                          Mount McKinney&#039;s <a href='http://localhost/wordpress/?wordpress-service=monthly-support'>Monthly WordPress Support Plans</a> are an excellent way to get this feature and many more!
                        </p>
                        <br />
                        <p class='serviceContent'>
                          Would you like us to scan your site for malware without signing-up for our monthly support plan?
                          <div class='servicesContact'>
                            <a class='typeform-share button' href='https://mountmckinney.typeform.com/to/vx9QaK' data-mode='1' target='_blank'>Scan My Site</a>
                          </div>
                        </p>
                        "
        );
        $wordpressServices["website-analytics"] = array(
          "title" => "Website Analytics",
          "section" => "<p class='serviceContent'>
                         Do you know how many views your site is getting? Do your pages load slowly? How&#039;s your SEO? These are all things we can help with!
                       </p>
                       <br />
                       <p class='serviceContent clearContent'>
                         We can show you not only how many views your site is getting, but also what pages they are clicking the most and where they&#039;re coming from. We&#039;ll show what keywords are being most used to find your site so you can target your ads.
                       </p>
                       <br />
                       <p class='serviceContent'>
                         Would you like to begin tracking visitors to your site?
                         <div class='servicesContact'>
                           <a class='typeform-share button' href='https://mountmckinney.typeform.com/to/vx9QaK' data-mode='1' target='_blank'>Analyze My Site</a>
                         </div>
                       </p>
                       "
        );
        $wordpressServices["database-backups"] = array(
          "title" => "Database Backups",
          "section" => "<p class='serviceContent'>
                          When&#039;s the last time you backed up your website data to an external hard drive? We recommend doing so frequently to avoid losing anything.
                        </p>
                        <br />
                        <p class='serviceContent clearContent'>
                          We have options for weekly, daily, and realtime backups. The realtime backups are only available if your hosting platform supports it.
                        </p>
                        <br />
                        <p class='serviceContent'>
                          Mount McKinney&#039;s <a href='http://localhost/wordpress/?wordpress-service=monthly-support'>Monthly WordPress Support Plans</a> are an excellent way to get this feature and many more!
                        </p>
                        <br />
                        <p class='serviceContent'>
                          Ready for peace of mind with your data but not ready to sign-up for our monthly support plan?
                          <div class='servicesContact'>
                            <a class='typeform-share button' href='https://mountmckinney.typeform.com/to/vx9QaK' data-mode='1' target='_blank'>Backup My Site</a>
                          </div>
                        </p>
                        "
        );
        $wordpressServices["hosting-transfers"] = array(
          "title" => "Hosting Transfers",
          "section" => "<p class='serviceContent'>
                         Does your website keep going down? Is it feeling slow? Just ready for a new server hosting platform? If so, Mount McKinney is happy to take care of this process for you to make it as painless as possible for you.
                       </p>
                       <br />
                       <p class='serviceContent clearContent'>
                         Not sure what hosting platform to use? We can give you recommendations for good, reliable hosts.
                       </p>
                       <p class='serviceContent'>
                         Mount McKinney&#039;s <a href='http://localhost/wordpress/?wordpress-service=monthly-support'>Monthly WordPress Support Plans</a> are an excellent way to get this feature and many more!
                       </p>
                       <br />
                       <p class='serviceContent'>
                         Just need to transfer your site but not ready to sign-up for our monthly support plan?
                         <div class='servicesContact'>
                           <a class='typeform-share button' href='https://mountmckinney.typeform.com/to/vx9QaK' data-mode='1' target='_blank'>Help Me Transfer</a>
                         </div>
                       </p>
                       "
        );

  foreach ($wordpressServices as $wordpressServicename => $wordpressService) {
    $wordpressServices[$wordpressServicename]["wordpress-service"] = $wordpressServicename;
}

return $wordpressServices;
}
?>
