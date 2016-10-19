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
  "section" => "<p class='serviceContent'>
                  <strong>Web development</strong> and <strong>web design</strong> are actually very different. Think of web development as a contractor building a house and web design as an interior designer making that house look amazing.
                </p>
                <br />
                <p class='serviceContent clearContent'>
                  The good news? <strong>Mount McKinney excels at both</strong>.
                </p>
                <br />
                <p class='serviceContent'>
                  Here at Mount McKinney, we spend our whole day living and breathing web development and design trends. There&#039;s a lot to know but we love it. We always strive to provide websites as beautiful as the great outdoors!
                </p>
                <br />
                <p class='serviceContent'>
                  Mount McKinney is happy to serve you whether you need someone to build a new site, change the structure of your current site, or redesign your site for better design and usability. We build websites in WordPress, Squarespace, Wix, or whatever platform you wish to use. The benefit of building a site in these platforms is that they are easier to maintain. We also build custom websites to fit your needs and your exact specifications because one size fits all, does&#039;t always fit.
                </p>
                <br />
                <p class='serviceContent'>
                  Are you ready to step up your web presence? Let us know below and we&#039;ll reach out shortly!
                  <div class='servicesContact'>
                    <a class='typeform-share button' href='https://mountmckinney.typeform.com/to/IUHF6N' data-mode='1' target='_blank'>Drop Us A Line</a>
                  </div>
                </p>
                "
 );
 $services["web-design"] = array(
   "thumb" => "img/services/webDesign.svg",
   "title" => "Web Design",
   "popup" => "Your current website feeling stale? Are your users complaining of how difficult it is to find things on your site? Do you fear that you haven't stayed up to date with the latest modern design trends? Mount McKinney can redesign your site to make it more beautiful and more user-friendly!",
   "section" => "<p class='serviceContent'>
                   Does your current website feel great to navigate? Does it look like a work of art? If not, Mount McKinney can redesign your site to make it more <strong>beautiful</strong> and more <strong>user-friendly</strong>!
                 </p>
                 <br />
                 <p class='serviceContent clearContent'>
                   <strong>Web development</strong> and <strong>web design</strong> are actually very different. Think of web development as a contractor building a house and web design as an interior designer making that house look amazing.
                 </p>
                 <br />
                 <p class='serviceContent clearContent'>
                   The good news? <strong>Mount McKinney excels at both</strong>.
                 </p>
                 <br />
                 <p class='serviceContent'>
                   We have an eye for design and are constantly trying to stay up to date with current design trends to ensure your website is gorgeous. We believe fonts, colors, and layouts should reflect who we are as a business. We understand that design is incredibly important. The truth is, a good looking site can make a huge diffence in whether a prospect becomes a customer or not.
                 </p>
                 <br />
                 <p class='serviceContent'>
                   Are you ready to have a site worthy of the Louvre? Let us know and we&#039;ll reach out shortly!
                   <div class='servicesContact'>
                     <a class='typeform-share button' href='https://mountmckinney.typeform.com/to/IUHF6N' data-mode='1' target='_blank'>Make My Site Beautiful</a>
                   </div>
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
  // $services["marketing-automation"] = array(
  //   "thumb" => "img/services/marketingAutomation.svg",
  //   "title" => "Marketing Automation",
  //   "popup" => "Marketing automation is a great tool that will allow you to generate more leads and revenue by engaging your prospects and customers more often. This is all done by letting the computer do the work, not you.",
  //   "section" => "<p class='serviceContent'>
  //                   Whether you have heard of marketing automation doesn&#039;t really matter. Most of you don&#039;t care how it does x, y, and z. You care that it will generate more revenue for you. You care that it will keep your customers happy which in turn means they will be more likely to be a return customer.
  //                   We understand that, so all we say here is that you will love that you are able to reach out to customers and prospects more often without having to do nearly as much work.
  //                 </p>
  //                 <br />
  //                 <p class='serviceContent clearContent'>
  //                   If you ever do want to geek out with us about how the system works, we are happy to explain it.
  //                 </p>
  //                 <br />
  //                 <p class='serviceContent'>
  //                   Are you ready learn more about how automating your marketing will help your business? Let us know below and we&#039;ll reach out shortly!
  //                   <div class='servicesContact'>
  //                     <a class='typeform-share button' href='https://mountmckinney.typeform.com/to/IUHF6N' data-mode='1' target='_blank'>Create My Logo!</a>
  //                   </div>
  //                 </p>
  //                 "
  // );
  $services["wordpress-support"] = array(
    "thumb" => "img/services/wordpressMaintenance.svg",
    "title" => "WordPress Support",
    "popup" => "Does your WordPress blog or website need a little TLC? Mount McKinney can provide a wide-range of services. A full list of WordPress services can be found here.",
    "section" => "<p class='serviceContent'>
                    What would you rather focus on, fixing technical issues in Wordpress or growing your business? Thought so.
                    <br />
                    Let Mount McKinney take care of your Wordpress issues so you can get back to focusing on what you do best!
                  </p>
                  <br />
                  <p class='serviceContent'>
                    Can't figure out why that plugin won't work? Migrating from one hosting platform to another? Site running slow?
                    <br />
                    Mount McKinney can help with all this and more! Check out what services we provide below!
                  </p>
                  <ul class='wordpressServiceList'>
                   <li>
                    <a href='".BASE_URL.'wordpress/?wordpress-service=monthly-support'."' title='Do you have a WordPress blog or website and need help managing it? Mount McKinney provides this service in 3 options, click here to learn more about them!'>
                    <figure>
                      <img class='wordpressImg' src='".BASE_URL.'img/services/monthlySupport.svg'."'>
                      <figcaption>Monthly Support Plans</figcaption>
                    </figure>
                    </a>
                   </li>
                   <li>
                    <a href='".BASE_URL.'wordpress/?wordpress-service=wordpress-maintenance'."' title='WordPress site running slow? Getting errors when trying to update a plugin? We can fix that!'>
                    <figure>
                      <img class='wordpressImg' src='".BASE_URL.'img/services/wordpressMaintenance.svg'."'>
                      <figcaption>WordPress Maintenance</figcaption>
                    </figure>
                    </a>
                   </li>
                   <li>
                    <a href='".BASE_URL.'wordpress/?wordpress-service=wordpress-design'."' title='When&#039;s the last time you changed your WordPress theme? Doing so can seem like a huge undertaking to make sure everything looks good after the transition. So, why not let Mount McKinney take care of it for you?'>
                    <figure>
                      <img class='wordpressImg' src='".BASE_URL.'img/services/wordpressDesign.svg'."'>
                      <figcaption>WordPress Site Design</figcaption>
                    </figure>
                    </a>
                   </li>
                   <li>
                    <a href='".BASE_URL.'wordpress/?wordpress-service=wordpress-setup'."' title='New to blogging or just new to WordPress? Mount McKinney can set you up with everything you need to get started blogging on this powerful platform! We even have partnerships with marketers who are happy to help you get more readers.'>
                    <figure>
                      <img class='wordpressImg' src='".BASE_URL.'img/services/wordpressSetup.svg'."'>
                      <figcaption>WordPress Setup</figcaption>
                    </figure>
                    </a>
                   </li>
                   <li>
                    <a href='".BASE_URL.'wordpress/?wordpress-service=wordpress-update'."' title='Did you know that keeping WordPress up to date is essential to maintaining the security of your site? We can make sure errors are handled quickly and the process is seamless.'>
                    <figure>
                      <img class='wordpressImg' src='".BASE_URL.'img/services/wordpressUpdate.svg'."'>
                      <figcaption>WordPress Update</figcaption>
                    </figure>
                    </a>
                   </li>
                   <li>
                    <a href='".BASE_URL.'wordpress/?wordpress-service=website-uptime-monitoring'."' title='Do you know when your site goes down? Mount McKinney can update you within a few minutes of your site going down so we can act quickly to fix the issue.'>
                    <figure>
                      <img class='wordpressImg' src='".BASE_URL.'img/services/websiteUptimeMonitoring.svg'."'>
                      <figcaption>Uptime Monitoring</figcaption>
                    </figure>
                    </a>
                   </li>
                   <li>
                    <a href='".BASE_URL.'wordpress/?wordpress-service=website-security-scan'."' title='Do you have any malware living on your site? We can find out for you!'>
                    <figure>
                      <img class='wordpressImg' src='".BASE_URL.'img/services/websiteSecurityScan.svg'."'>
                      <figcaption>WordPress Site Scan</figcaption>
                    </figure>
                    </a>
                   </li>
                   <li>
                    <a href='".BASE_URL.'wordpress/?wordpress-service=website-analytics'."' title='Do you know how many views your site is getting? Do your pages load slowly? How&#039;s your SEO? These are all things we can help with!'>
                    <figure>
                      <img class='wordpressImg' src='".BASE_URL.'img/services/websiteAnalytics.svg'."'>
                      <figcaption>WordPress Site Analytics</figcaption>
                    </figure>
                    </a>
                   </li>
                   <li>
                    <a href='".BASE_URL.'wordpress/?wordpress-service=database-backups'."' title='When&#039;s the last time you backed up your website data to an external hard drive? We recommend doing so frequently to avoid losing anything.'>
                    <figure>
                      <img class='wordpressImg' src='".BASE_URL.'img/services/database.svg'."'>
                      <figcaption>Database Backups</figcaption>
                    </figure>
                    </a>
                   </li>
                   <li>
                    <a href='".BASE_URL.'wordpress/?wordpress-service=hosting-transfers'."' title='Does your website keep going down? Is it feeling slow? Just ready for a new server hosting platform? If so, Mount McKinney is happy to take care of this process for you to make it as painless as possible for you. We can also make recommendations for good hosts.'>
                    <figure>
                      <img class='wordpressImg' src='".BASE_URL.'img/services/hostingTransfers.svg'."'>
                      <figcaption>Site Hosting Transfers</figcaption>
                    </figure>
                    </a>
                   </li>
                   <li>
                    <a href='".BASE_URL.'service/?service=logo-design'."' title='Don&#039;t have a logo yet or your current logo feel out of date? Mount McKinney can work with you to create something special, just for you!'>
                    <figure>
                      <img class='wordpressImg' src='".BASE_URL.'img/services/logoDesign.svg'."'>
                      <figcaption>Logo Design</figcaption>
                    </figure>
                    </a>
                   </li>
                   <li>
                    <a href='".BASE_URL.'service/?service=quick-fix'."' title='Do you just need a quick fix on your website like fixing a plugin that won&#039;t update, changing some colors on your site, updating your theme, or backing up your database? If it&#039;s a small project under 30 mins then a quick fix is perfect for you.'>
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
  //   "section" => "<p class='serviceContent'>
  //                   Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
  //                 </p>
  //                 <br />
  //                 <p class='serviceContent clearContent'>
  //                   Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
  //                 </p>
  //                 <br />
  //                 <p class='serviceContent'>
  //                   Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
  //                 </p>
  //                 <br />
  //                 <p class='serviceContent'>
  //                 </p>
  //                 <br />
  //                 <p class='serviceContent'>
  //                 </p>
  //                 "
  //  );
  // $services["wordpress-setup"] = array(
  //   "thumb" => "img/services/wordpressSetup.svg",
  //   "title" => "Wordpress Setup",
  //   "section" => "<p class='serviceContent'>
  //                   Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
  //                 </p>
  //                 <br />
  //                 <p class='serviceContent clearContent'>
  //                   Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
  //                 </p>
  //                 <br />
  //                 <p class='serviceContent'>
  //                   Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
  //                 </p>
  //                 <br />
  //                 <p class='serviceContent'>
  //                 </p>
  //                 <br />
  //                 <p class='serviceContent'>
  //                 </p>
  //                 "
  //  );
   $services["logo-design"] = array(
     "thumb" => "img/services/logoDesign.svg",
     "title" => "Logo Design",
     "popup" => "Don&#039;t have a logo yet or your current logo feel out of date? Mount McKinney can work with you to create something special, just for you!",
     "section" => "<p class='serviceContent'>
                     First impressions are everything. Your logo is the first thing people will see about your company. Making it of the upmost importance.
                   </p>
                   <br />
                   <p class='serviceContent clearContent'>
                     Mount McKinney would love to create a <strong>beautiful</strong> logo to fit your <strong>custom</strong> needs. We work with you to craft a logo that will encapsulate your company&#039;s vision.
                   </p>
                   <br />
                   <p class='serviceContent'>
                     Are you ready to have a logo worth admiring? Let us know below and we&#039;ll reach out shortly!
                     <div class='servicesContact'>
                       <a class='typeform-share button' href='https://mountmckinney.typeform.com/to/IUHF6N' data-mode='1' target='_blank'>Create My Logo!</a>
                     </div>
                   </p>
                   "
   );
   $services["quick-fix"] = array(
     "thumb" => "img/services/quickFix.svg",
     "title" => "Quick Fix",
     "popup" => "Do you just need a quick fix on your website like fixing a plugin that won&#039;t update, changing some colors on your site, updating your theme, or backing up your database? If it&#039;s a small project under 30 mins then a quick fix is perfect for you.",
     "section" => "<p class='serviceContent'>
                      Do you just need a quick fix on your website like fixing a plugin that won&#039;t update, changing some colors on your site, updating your theme, or backing up your database? If it&#039;s a small project under 30 mins then a quick fix is perfect for you.
                   </p>
                   <br />
                   <p class='serviceContent clearContent'>
                      Quick fixes are things Mount McKinney determines will take about <strong>30 minutes or less</strong> to resolve. Each quick fix is for only one small project. Meaning creating an email account, fixing errors, and providing a security scan are 3 separate quick fixes. If you need multiple fixes done on your site, please contact us for a custom quote.
                   </p>
                   <br />
                   <p class='serviceContent clearContent'>
                      If you have questions about whether something is a quick fix or not, you can always shoot us a quick email. <strong>Examples of quick fixes</strong> include updating plugins or themes, changing color schemes or fonts, creating email accounts, and scanning your website for security issues.
                   </p>
                   <br />
                   <p class='serviceContent'>
                      Quick fixes are always paid in advance. Payment is collected via PayPal or credit card. Please ensure the information you provide when purchasing a quick fix is the easiest to get in touch with you so we can take care of your issues as fast as possible.
                   </p>
                   <br />
                   <p class='serviceContent'>
                      If for any reason we deem the project as not being a quick fix or are unable to resolve your issue, Mount McKinney will refund your money immediately. If it is a situation where we deem the fix will take longer than 30 minutes we will reach out with a quote for you.
                   </p>
                   <br />
                   <p class='serviceContent'>
                      <div class='serviceStore'>
                       <a href='http://localhost/store/#!/Monthly-WordPress-Support-VIP/p/73472845/category=0&forcescroll=true'>I Need A Quick Fix</a>
                      </div>
                   </p>
                   "
   );
  //  $services["wordpress-update"] = array(
  //    "thumb" => "img/services/wordpressUpdate.svg",
  //    "title" => "WordPress Update",
  //    "section" => "<p class='serviceContent'>
  //                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
  //                  </p>
  //                  <br />
  //                  <p class='serviceContent clearContent'>
  //                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
  //                  </p>
  //                  <br />
  //                  <p class='serviceContent'>
  //                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
  //                  </p>
  //                  <br />
  //                  <p class='serviceContent'>
  //                  </p>
  //                  <br />
  //                  <p class='serviceContent'>
  //                  </p>
  //                  "
  //   );
  //   $services["backups"] = array(
  //      "thumb" => "img/services/database.svg",
  //      "title" => "Database Backups & Hosting",
  //      "section" => "<p class='serviceContent'>
  //                      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
  //                    </p>
  //                    <br />
  //                    <p class='serviceContent clearContent'>
  //                      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
  //                    </p>
  //                    <br />
  //                    <p class='serviceContent'>
  //                      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
  //                    </p>
  //                    <br />
  //                    <p class='serviceContent'>
  //                    </p>
  //                    <br />
  //                    <p class='serviceContent'>
  //                    </p>
  //                    "
  //     );
      // $services["transfers"] = array(
      //   "thumb" => "img/services/hostingTransfers.svg",
      //   "title" => "Hosting Transfers",
      //   "section" => "<p class='serviceContent'>
      //                   Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      //                 </p>
      //                 <br />
      //                 <p class='serviceContent clearContent'>
      //                   Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      //                 </p>
      //                 <br />
      //                 <p class='serviceContent'>
      //                   Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      //                 </p>
      //                 <br />
      //                 <p class='serviceContent'>
      //                 </p>
      //                 <br />
      //                 <aside class='asideLeft asideLandscape'>
      //
      //                 </aside>
      //                 <br />
      //                 <p class='serviceContent'>
      //                 </p>
      //                 "
      //  );
  foreach ($services as $servicename => $service) {
    $services[$servicename]["service"] = $servicename;
  }

return $services;
}
?>
