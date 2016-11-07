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
  "title" => "Web Development & Design",
  "popup" => "Are you in need of a new website? How about a redesign of your current one? Mount McKinney can create from scratch custom sites or sites in WordPress, Squarespace, Wix, or whatever platform you want.",
  "section" => "<p class='serviceContent'>
                  <strong>Web development</strong> and <strong>web design</strong> are actually very different. Think of web development as a contractor building a house and web design as an interior designer making that house look amazing.
                </p>
                <br />
                <p class='serviceContent clearContent'>
                  The good news? <strong>At Mount McKinney, we excel at both</strong>.
                </p>
                <br />
                <p class='serviceContent'>
                  Here at Mount McKinney, we spend our whole day living and breathing web development and design trends so you don&apos;t have to. We always strive to provide websites as beautiful as the great outdoors!
                </p>
                <br />
                <p class='serviceContent'>
                  Mount McKinney is happy to serve you whether you need a new site or a redesign of your current site for better design and usability.
                </p>
                <br />
                <p class='serviceContent'>
                  We build websites in whatever platform suits your needs including <strong>WordPress</strong>, <strong>Squarespace</strong>, <strong>Wix</strong>. The benefit of building a site in these types platforms is that they are quick to create and easier to maintain.
                </p>
                <br />
                <p class='serviceContent'>
                  These platforms do have their limitations though. That&apos;s why Mount McKinney also builds <strong>custom websites</strong> to fit your needs and exact specifications because we know that one size fits all, does&apos;t always fit.
                </p>
                <br />
                <br />
                <br />
                <p class='serviceContent'>
                  Whether you need a blog to share your cooking adventures, a portfolio to show off your wedding photography, or a full e-commerce site to sell your custom clothing line we can help bring your ideas to life. Mount McKinney will do everything in our power to help you and your business reach your peak!
                </p>
                <br />
                <p class='serviceContent'>
                  Are you ready to step up your web presence? Check out our packages below! Not sure which package fits your business&apos;s needs? Take our quiz and let us help you find the right package.
                  <div class='servicesContact'>
                    <a class='typeform-share button' href='https://mountmckinney.typeform.com/to/IUHF6N' data-mode='1' target='_blank'>Help Me Choose!</a>
                  </div>
                </p>
                <div class='planPage'>
                  <div class='plans'>
                    <div class='supportPlan basicPlan'>
                      <h3 class='basic'>Basic</h3>
                      <h1 class='price'>$2-3k</h1>
                      <h5>Great for: bloggers, freelancers, etc.</h5>
                      <ul>
                        <li class='altRow' title='Mount McKinney guarantees to respond within 24 hours.'>Amazing Customer Support!</li>
                        <li title='Mount McKinney will respond to your questions, concerns, and requests via email.'>Email Support</li>
                        <li class='altRow' title='We will ensure your plugins are up to date and secure. If a plugin is a known security concern or causes slow downs, Mount McKinney can suggest alternatives.'>Plugin & Theme Updating</li>
                        <li title='Is your site up and running right now? Are you sure? How do you know? Mount McKinney&apos;s Uptime Monitoring service will check every 30 minutes to ensure it&apos;s still up. If for some reason it does go down, we will alert you and can investigate the cause.'>30 Minute Uptime Monitoring</li>
                        <li class='altRow' title='Mount McKinney will backup your database on a weekly basis to ensure that if something catastrophic happens you&apos;ll have your site back up and running in no time.'>Weekly Server Backups</li>
                        <li title='Mount McKinney will run a monthly security check-up to ensure nothing malicious is living on your site. If there is, we will work to eradicate it.'>Monthly Security Scans</li>
                        <li class='altRow' title='Mount McKinney will set up a cache on your WordPress site.'>Cache Setup</li>
                        <li title='The Basic plan does not provide a discount on Mount McKinney&apos;s rate for working on projects.'>No Discount on Projects</li>
                        <li class='altRow' title='These quick fixes cannot be combined to form a large project.'>2 Quick Fixes Included*</li>
                        <li title='The Basic plan does not provide access to the WordPress Virtue theme by Kadence Themes.'>No Access to Virtue Theme</li>
                      </ul>
                      <div class='planButton basicPlanButton'>
                        <a href='http://localhost/store/#!/Monthly-WordPress-Support-Basic/p/73472710/category=0'>Sign Me Up!</a>
                      </div>
                    </div>
                    <div class='supportPlan recommendedPlan premierPlan'>
                      <h3 class='premier'>premierPlan</h3>
                      <h1 class='price'>$4-6k</h1>
                      <h5>Great for: bloggers, freelancers, etc.</h5>
                      <ul>
                        <li title='Mount McKinney guarantees to respond within 8 hours'>Amazing Customer Support!</li>
                        <li class='altRow' title='You will have access to a chat portal to receive live help.'>Email/Chat Support</li>
                        <li title='We will ensure your plugins are up to date and secure. If a plugin is a known security concern or causes slow downs, Mount McKinney can suggest alternatives.'>Plugin & Theme Updating</li>
                        <li class='altRow' title='Is your site up and running right now? Are you sure? How do you know? Mount McKinney&apos;s Uptime Monitoring service will check every 5 minutes to ensure it&apos;s still up. If for some reason it does go down, we will alert you and can investigate the cause.'>5 Minute Uptime Monitoring</li>
                        <li title='Mount McKinney will backup your database on a weekly basis to ensure that if something catastrophic happens you&apos;ll have your site back up and running in no time.'>Daily Server Backups</li>
                        <li class='altRow' title='Mount McKinney will run a weekly security check-up to ensure nothing malicious is living on your site. If there is, we will work to eradicate it.'>Weekly Security Scans</li>
                        <li title='Mount McKinney will set up a cache on your WordPress site.'>Cache Setup</li>
                        <li class='altRow' title='This discount applies to web development, web design, logo design, and WordPress fixes.'>5% Discount on Hourly Rate</li>
                        <li title='These quick fixes cannot be combined to form a large project.'>4 Quick Fixes Included*</li>
                        <li class='altRow' title='You will have access to the beautiful Virtue Theme by Kadence Themes.'>Free Access to Virtue Theme</li>
                      </ul>
                      <div class='planButton premierPlanButton'>
                        <a href='http://localhost/store/#!/Monthly-WordPress-Support-Premier/p/73472844/category=0&forcescroll=true'>Sign Me Up!</a>
                      </div>
                    </div>
                    <div class='supportPlan vipPlan'>
                      <h3 class='vip'>VIP</h3>
                      <h1 class='price'>Varies</h1>
                      <h5>Great for: bloggers, freelancers, etc.</h5>
                      <ul>
                        <li class='altRow' title='Mount McKinney guarantees to respond within 4 hours'>Amazing Customer Support!</li>
                        <li title='You will have access to a chat portal to receive live help. You will also be able to schedule phone support.'>Email/Chat/Phone Support</li>
                        <li class='altRow' title='We will ensure your plugins are up to date and secure. If a plugin is a known security concern or causes slow downs, Mount McKinney can suggest alternatives.'>Plugin & Theme Updating</li>
                        <li title='Is your site up and running right now? Are you sure? How do you know? Mount McKinney&apos;s Uptime Monitoring service will check every minute to ensure it&apos;s still up. If for some reason it does go down, we will alert you and can investigate the cause.'>1 Minute Uptime Monitoring</li>
                        <li class='altRow' title='Mount McKinney will backup your database on a weekly basis to ensure that if something catastrophic happens you&apos;ll have your site back up and running in no time.'>Daily Server Backups</li>
                        <li title='Mount McKinney will run a daily security check-up to ensure nothing malicious is living on your site. If there is, we will work to eradicate it.'>Daily Security Scans</li>
                        <li class='altRow' title='Mount McKinney will set up a cache on your WordPress site.'>Cache Setup</li>
                        <li title='This discount applies to web development, web design, logo design, and WordPress fixes.'>10% Discount on Hourly Rate</li>
                        <li class='altRow' title='These quick fixes cannot be combined to form a large project.'>7 Quick Fixes Included*</li>
                        <li title='You will have access to the beautiful Virtue Theme by Kadence Themes.'>Free Access to Virtue Theme</li>
                      </ul>
                      <div class='planButton vipPlanButton'>
                        <a href='http://localhost/store/#!/Monthly-WordPress-Support-VIP/p/73472845/category=0&forcescroll=true'>Sign Me Up!</a>
                      </div>
                    </div>
                  </div>
                  <div id='accordion' class='finePrint'>
                    <h6>Rates Subject to Change</h6>
                    <div>
                      <p>
                        Rates are per managed domain and are subject to change at anytime. Subscribers will be notified of any changes to pricing at least 30 days prior to change. Months are purchased in advance. There are no contracts, you are able to cancel at any time.
                      </p>
                    </div>
                    <h6>What&apos;s a Quick Fix?</h6>
                    <div>
                      <p>
                        Quick Fixes are defined as jobs that Mount McKinney determines will take 30 mins or less. You cannot stack multiple small jobs to make a large project. You can find out more info on the <a href='http://localhost/service/?service=quick-fix'>Quick Fix</a> page.
                      </p>
                    </div>
                    <h6>Need More Answers?</h6>
                    <div>
                      <p>
                        Check out our <a href='http://localhost/faq'>FAQ</a> page.
                      </p>
                    </div>
                  </div>
                </div>
                "
 );
 $services["care-plan"] = array(
   "thumb" => "img/services/monthlySupport.svg",
   "title" => "Monthly Website Care Plans",
   "popup" => "What would you rather focus on, fixing technical issues or growing your business? Thought so. Let Mount McKinney take care of your site maintenance so you can get back to focusing on what you do best!",
   "section" => "<p class='serviceContent'>
                   Maintaining a website is incredibly important but it&apos;s also extremely time consuming. Let Mount McKinney take care take care of your site maintenance so you can get back to focusing on what you do best!
                 </p>
                 <br />
                 <p class='serviceContent'>
                   We believe it shouldn&apos;t be difficult to get in touch someone to help you with your website issue. Here at Mount McKinney, even our Basic plan guarantees you will be responded to within 24 hours (often much earlier)!
                 </p>
                 <br />
                 <p class='serviceContent'>
                   Are you ready to get rid of your technical headaches? Check out our packages below (Basic, Premier, & VIP) to learn more! If you have a WordPress site, make sure to check out our <a href='http://localhost/service/?service=wordpress-care-plan'>Monthly WordPress Care Plans</a>!
                 </p>
                 <br />
                 <div class='planPage'>
                   <div class='plans'>
                     <div class='supportPlan basicPlan'>
                       <h3 class='basic'>Basic</h3>
                       <a href='http://localhost/store/#!/Monthly-WordPress-Support-Basic/p/73472710/category=0'>
                        <h1 class='price'>$59<span class='smallText'>/mo</span></h1>
                       </a>
                       <h5 class='dynamicDesktopContent' title='Great for those deciding if this is a viable career option and those who work this as a side hustle. Basically, those that just need a little help.'>Who this plan is for<span class='ui-icon-help'> ?</span></h5>
                       <ul class='dynamicDesktopContent'>
                         <li class='altRow' title='Support will respond within 24 hours. Mount McKinney is all about amazing customer support!'>Awesome Customer Support<span class='ui-icon-help'> ?</span></li>
                         <li title='Mount McKinney will respond to your questions, concerns, and requests via email. Catch us on a good day and we may even talk about your hopes and dreams!'>Email Support<span class='ui-icon-help'> ?</span></li>
                         <li class='altRow' title='Mount McKinney&apos;s Basic Plan does not provide any Site Analytics data'>No Analytics Reporting<span class='ui-icon-help'> ?</span></li>
                         <li title='Is your site up and running right now? Are you sure? How do you know? Mount McKinney&apos;s Uptime Monitoring service will check every 30 minutes to ensure it&apos;s still up. If for some reason it does go down, we will alert you and can investigate the cause.'>30 Minute Uptime Monitoring<span class='ui-icon-help'> ?</span></li>
                         <li class='altRow' title='Mount McKinney&apos;s Basic plan does not provide MailChimp assistance.'>No MailChimp Support<span class='ui-icon-help'> ?</span></li>
                         <li title='Mount McKinney will backup your database on a weekly basis to ensure that if something catastrophic happens you&apos;ll have your site back up and running in no time.'>Weekly Server Backups<span class='ui-icon-help'> ?</span></li>
                         <li class='altRow' title='Mount McKinney&apos;s Basic Plan does not provide support for hosting transfers. We can still help you, it will just be an additional fee.'>No Access to Hosting Transfer Help<span class='ui-icon-help'> ?</span></li>
                         <li title='Mount McKinney will run a monthly security check-up to ensure nothing malicious is living on your site. If there is, we will work to eradicate it.'>Monthly Security Scans<span class='ui-icon-help'> ?</span></li>
                         <li class='altRow' title='The Basic plan does not provide a discount on Mount McKinney&apos;s rate for working on projects.'>No Discount on Projects<span class='ui-icon-help'> ?</span></li>
                         <li title='These quick fixes cannot be combined to form a large project.'>2 Quick Fixes Included*<span class='ui-icon-help'> ?</span></li>
                         <li class='altRow' title='Mount McKinney&apos;s Basic plan does not provide assistance creating email accounts.'>No Email Creation Support<span class='ui-icon-help'> ?</span></li>
                       </ul>
                       <div id='basicAccordion' class='dynamicMobileContent'>
                         <h5 class='dynamicMobileContent moreInfo'>Who this plan is for</h5>
                           <div>
                             <p>
                               Great for those deciding if this is a viable career option and those who do this as a side hustle. Also, those that just need a little help.
                             </p>
                           </div>
                           <h6 class='altRow'>Awesome Customer Support</h6>
                             <div>
                               <p>
                                 Support will respond within 24 hours. Mount McKinney is all about amazing customer support!
                               </p>
                             </div>
                           <h6>Email Support</h6>
                             <div>
                               <p>
                                 Mount McKinney will respond to your questions, concerns, and requests via email. Catch us on a good day and we may even talk about your hopes and dreams!
                               </p>
                             </div>
                           <h6 class='altRow'>No Analytics Reporting</h6>
                             <div>
                               <p>
                                 Mount McKinney&apos;s Basic Plan does not provide any Site Analytics data.
                               </p>
                             </div>
                           <h6>30 Minute Uptime Monitoring</h6>
                             <div>
                               <p>
                                 Is your site up and running right now? Are you sure? How do you know? Mount McKinney&apos;s Uptime Monitoring service will check every 30 minutes to ensure it&apos;s still up. If for some reason it does go down, we will alert you and can investigate the cause.
                               </p>
                             </div>
                           <h6 class='altRow'>No MailChimp Support</h6>
                             <div>
                               <p>
                                 Mount McKinney&apos;s Basic plan does not provide MailChimp assistance.
                               </p>
                             </div>
                           <h6>Weekly Server Backups</h6>
                             <div>
                               <p>
                                 Mount McKinney will backup your database on a weekly basis to ensure that if something catastrophic happens you&apos;ll have your site back up and running in no time.
                               </p>
                             </div>
                           <h6 class='altRow'>No Access to Hosting Transfer Help</h6>
                             <div>
                               <p>
                                 Mount McKinney&apos;s Basic Plan does not provide support for hosting transfers. We can still help you, it will just be an additional fee.
                               </p>
                             </div>
                           <h6>Monthly Security Scans</h6>
                             <div>
                               <p>
                                 Mount McKinney will run a monthly security check-up to ensure nothing malicious is living on your site. If there is, we will work to eradicate it.
                               </p>
                             </div>
                           <h6 class='altRow'>No Discount on Projects</h6>
                             <div>
                               <p>
                                 The Basic plan does not provide a discount on Mount McKinney&apos;s rate for working on projects.
                               </p>
                             </div>
                           <h6>2 Quick Fixes Included*</h6>
                             <div>
                               <p>
                                 These quick fixes cannot be combined to form a large project.
                               </p>
                             </div>
                           <h6 class='altRow'>No Email Creation Support</h6>
                             <div>
                               <p>
                                 Mount McKinney&apos;s Basic plan does not provide assistance creating email accounts.
                               </p>
                             </div>
                       </div>
                       <div class='planButton basicPlanButton'>
                         <a href='http://localhost/store/#!/Monthly-WordPress-Support-Basic/p/73472710/category=0'>Sign Me Up!</a>
                       </div>
                     </div>
                     <div class='supportPlan recommendedPlan premierPlan'>
                       <h3 class='premier'>Premier</h3>
                       <h1 class='price'>$99<span class='smallText'>/mo</span></h1>
                       <h5 class='dynamicDesktopContent' title='Great for professional bloggers, freelancers, and those getting serious about doing business online. Also ninjas, this is perfect for ninjas.'>Who this plan is for<span class='ui-icon-help'> ?</span></h5>
                       <ul class='dynamicDesktopContent'>
                         <li title='Support will respond within 10 hours. Mount McKinney is all about amazing customer support!'>Priority Customer Support<span class='ui-icon-help'> ?</span></li>
                         <li class='altRow' title='You will have access to a chat portal to receive live help.'>Email/Chat Support<span class='ui-icon-help'> ?</span></li>
                         <li title='Mount McKinney will provide a weekly report of your site&apos;s visitors.'>Weekly Analytics Report<span class='ui-icon-help'> ?</span></li>
                         <li class='altRow' title='Is your site up and running right now? Are you sure? How do you know? Mount McKinney&apos;s Uptime Monitoring service will check every 5 minutes to ensure it&apos;s still up. If for some reason it does go down, we will alert you and can investigate the cause.'>5 Minute Uptime Monitoring<span class='ui-icon-help'> ?</span></li>
                         <li title='Mount McKinney can assist you with setting up your MailChimp account.'>MailChimp Setup<span class='ui-icon-help'> ?</span></li>
                         <li class='altRow' title='Mount McKinney will backup your database on a daily basis to ensure that if something catastrophic happens, coffee on your computer perhaps, you will still have the important files from your website, even if you are down a computer and a latte.'>Daily Server Backups<span class='ui-icon-help'> ?</span></li>
                         <li title='Mount McKinney will provide support to help you navigate the frustrations of transferring from one hosting service to another.'>Hosting Transfer Help<span class='ui-icon-help'> ?</span></li>
                         <li class='altRow' title='Mount McKinney will run a weekly security check-up to ensure nothing malicious is living on your site. If there is, we will work to eradicate it.'>Weekly Security Scans<span class='ui-icon-help'> ?</span></li>
                         <li title='This discount applies to web development, web design, logo design, WordPress fixes, and quick fixes.'>5% Discount on Hourly Rate<span class='ui-icon-help'> ?</span></li>
                         <li class='altRow' title='These quick fixes cannot be combined to form a large project.'>4 Quick Fixes Included*<span class='ui-icon-help'> ?</span></li>
                         <li title='Mount McKinney can provide help creating email accounts.'>Email Creation Support<span class='ui-icon-help'> ?</span></li>
                       </ul>
                       <div id='premierAccordion' class='dynamicMobileContent'>
                         <h5 class='dynamicMobileContent moreInfo'>Who this plan is for</h5>
                           <div>
                             <p>
                               Great for professional bloggers, freelancers, and those getting serious about doing business online. Also ninjas, this is perfect for ninjas.
                             </p>
                           </div>
                           <h6 class='altRow'>Priority Customer Support</h6>
                             <div>
                               <p>
                                 Support will respond within 10 hours. Mount McKinney is all about amazing customer support!
                               </p>
                             </div>
                           <h6>Email/Chat Support</h6>
                             <div>
                               <p>
                                 You will have access to a chat portal to receive live help. Catch us on a good day and we may even talk about your hopes and dreams!
                               </p>
                             </div>
                           <h6 class='altRow'>Weekly Analytics Report</h6>
                             <div>
                               <p>
                                 Mount McKinney will provide a weekly report of your site&apos;s visitors.
                               </p>
                             </div>
                           <h6>5 Minute Uptime Monitoring</h6>
                             <div>
                               <p>
                                 Is your site up and running right now? Are you sure? How do you know? Mount McKinney&apos;s Uptime Monitoring service will check every 5 minutes to ensure it&apos;s still up. If for some reason it does go down, we will alert you and can investigate the cause.
                               </p>
                             </div>
                           <h6 class='altRow'>MailChimp Setup</h6>
                             <div>
                               <p>
                                 Mount McKinney can assist you with setting up your MailChimp account.
                               </p>
                             </div>
                           <h6>Daily Server Backups</h6>
                             <div>
                               <p>
                                 Mount McKinney will backup your database on a daily basis to ensure that if something catastrophic happens you&apos;ll have your site back up and running in no time.
                               </p>
                             </div>
                           <h6 class='altRow'>Hosting Transfer Help</h6>
                             <div>
                               <p>
                                 Mount McKinney will provide support to help you navigate the frustrations of transferring from one hosting service to another.
                               </p>
                             </div>
                           <h6>Weekly Security Scans</h6>
                             <div>
                               <p>
                                 Mount McKinney will run a weekly security check-up to ensure nothing malicious is living on your site. If there is, we will work to eradicate it.
                               </p>
                             </div>
                           <h6 class='altRow'>5% Discount on Projects</h6>
                             <div>
                               <p>
                                 This discount applies to web development, web design, logo design, and WordPress fixes.'>5% Discount on Hourly Rate</li>
                               </p>
                             </div>
                           <h6>4 Quick Fixes Included*</h6>
                             <div>
                               <p>
                                 These quick fixes cannot be combined to form a large project.'>4 Quick Fixes Included*
                               </p>
                             </div>
                           <h6 class='altRow'>Email Creation Support</h6>
                             <div>
                               <p>
                                 Mount McKinney can provide help creating email accounts.
                               </p>
                             </div>
                       </div>
                       <div class='planButton premierPlanButton'>
                         <a href='http://localhost/store/#!/Monthly-WordPress-Support-Premier/p/73472844/category=0&forcescroll=true'>Sign Me Up!</a>
                       </div>
                     </div>
                     <div class='supportPlan vipPlan'>
                       <h3 class='vip'>VIP</h3>
                       <h1 class='price'>$129<span class='smallText'>/mo</span></h1>
                       <h5 class='dynamicDesktopContent' title='Great for small business owners, rock stars, and full-time freelancers. Basically, those too busy to want to lift a finger to fix their WordPress ever again.'>Who this plan is for<span class='ui-icon-help'> ?</span></h5>
                       <ul class='dynamicDesktopContent'>
                         <li class='altRow' title='Support will respond within 4 hours. Mount McKinney is all about amazing customer support!'>Amazing Customer Support!<span class='ui-icon-help'> ?</span></li>
                         <li title='You will have access to a chat portal to receive live help. You will also be able to schedule phone support.'>Email/Chat/Phone Support<span class='ui-icon-help'> ?</span></li>
                         <li class='altRow' title='Mount McKinney will provide a weekly report of your site&apos;s visitors.'>Weekly Analytics Report<span class='ui-icon-help'> ?</span></li>
                         <li title='Is your site up and running right now? Are you sure? How do you know? Mount McKinney&apos;s Uptime Monitoring service will check every minute to ensure it&apos;s still up. If for some reason it does go down, we will alert you and can investigate the cause.'>1 Minute Uptime Monitoring<span class='ui-icon-help'> ?</span></li>
                         <li class='altRow' title='Mount McKinney can assist you with setting up your MailChimp account.'>MailChimp Setup<span class='ui-icon-help'> ?</span></li>
                         <li title='Mount McKinney will backup your database on a daily basis to ensure that if something catastrophic happens, coffee on your computer perhaps, you will still have the important files from your website, even if you are down a computer and a latte.'>Daily Server Backups<span class='ui-icon-help'> ?</span></li>
                         <li class='altRow' title='Mount McKinney will provide support to help you navigate the frustrations of transferring from one hosting service to another.'>Hosting Transfer Help<span class='ui-icon-help'> ?</span></li>
                         <li title='Mount McKinney will run a daily security check-up to ensure nothing malicious is living on your site. If there is, we will work to eradicate it.'>Daily Security Scans<span class='ui-icon-help'> ?</span></li>
                         <li class='altRow' title='This discount applies to web development, web design, logo design, and WordPress fixes.'>10% Discount on Hourly Rate<span class='ui-icon-help'> ?</span></li>
                         <li title='These quick fixes cannot be combined to form a large project.'>7 Quick Fixes Included*<span class='ui-icon-help'> ?</span></li>
                         <li class='altRow' title='Mount McKinney can provide help creating email accounts.'>Email Creation Support<span class='ui-icon-help'> ?</span></li>
                       </ul>
                       <div id='vipAccordion' class='dynamicMobileContent'>
                         <h5 class='dynamicMobileContent moreInfo'>Who this plan is for</h5>
                           <div>
                             <p>
                               Great for small business owners, rock stars, and full-time freelancers. Basically, those too busy to want to lift a finger to fix their WordPress ever again.
                             </p>
                           </div>
                           <h6 class='altRow'>VIP Support</h6>
                             <div>
                               <p>
                                 Support will respond within 4 hours. Mount McKinney is all about amazing customer support!
                               </p>
                             </div>
                           <h6>Email/Chat/Phone Support</h6>
                             <div>
                               <p>
                                 You will have access to a chat portal to receive live help. You will also be able to schedule phone support. Catch us on a good day and we may even talk about your hopes and dreams!
                               </p>
                             </div>
                           <h6 class='altRow'>Weekly Analytics Report + Analysis</h6>
                             <div>
                               <p>
                                 Mount McKinney will do more than just provide a report of your site&apos;s visitors. We will go over that with you and provide recommendations to help increase traffic!
                               </p>
                             </div>
                           <h6>1 Minute Uptime Monitoring</h6>
                             <div>
                               <p>
                                 Is your site up and running right now? Are you sure? How do you know? Mount McKinney&apos;s Uptime Monitoring service will check every minute to ensure it&apos;s still up. If for some reason it does go down, we will alert you and can investigate the cause.
                               </p>
                             </div>
                           <h6 class='altRow'>MailChimp Setup</h6>
                             <div>
                               <p>
                                 Mount McKinney can assist you with setting up your MailChimp account.
                               </p>
                             </div>
                           <h6>Daily Server Backups</h6>
                             <div>
                               <p>
                                 Mount McKinney will backup your database on a daily basis to ensure that if something catastrophic happens you&apos;ll have your site back up and running in no time.
                               </p>
                             </div>
                           <h6 class='altRow'>Hosting Transfer Help</h6>
                             <div>
                               <p>
                                 Mount McKinney will provide support to help you navigate the frustrations of transferring from one hosting service to another.
                               </p>
                             </div>
                           <h6>Daily Security Scans</h6>
                             <div>
                               <p>
                                 Mount McKinney will run a daily security check-up to ensure nothing malicious is living on your site. If there is, we will work to eradicate it.
                               </p>
                             </div>
                           <h6 class='altRow'>10% Discount on Hourly Rate</h6>
                             <div>
                               <p>
                                 This discount applies to web development, web design, logo design, and projects to fix issues on your site.
                               </p>
                             </div>
                           <h6>7 Quick Fixes Included*</h6>
                             <div>
                               <p>
                                 These quick fixes cannot be combined to form a large project.
                               </p>
                             </div>
                           <h6 class='altRow'>Email Creation Support</h6>
                             <div>
                               <p>
                                 Mount McKinney can provide help creating email accounts.
                               </p>
                             </div>
                       </div>
                       <div class='planButton vipPlanButton'>
                         <a href='http://localhost/store/#!/Monthly-WordPress-Support-VIP/p/73472845/category=0&forcescroll=true'>Sign Me Up!</a>
                       </div>
                     </div>
                   </div>
                   <div id='accordion' class='finePrint'>
                     <h6>Rates Subject to Change</h6>
                     <div>
                       <p>
                         Rates are per managed domain and are subject to change at anytime. Subscribers will be notified of any changes to pricing at least 30 days prior to change. Months are purchased in advance. There are no contracts, you are able to cancel at any time.
                       </p>
                     </div>
                     <h6>What&apos;s a Quick Fix?</h6>
                     <div>
                       <p>
                         Quick Fixes are defined as jobs that Mount McKinney determines will take 30 mins or less. You cannot stack multiple small jobs to make a large project. You can find out more info on the <a href='http://localhost/service/?service=quick-fix'>Quick Fix</a> page.
                       </p>
                     </div>
                     <h6>Platforms Covered</h6>
                     <div>
                       <p>
                         Platforms supported: Squarespace, Drupal, Weebly, Wix, Joomla, Shopify, Blogger, Tumblr, and even custom built sites.
                         <br />
                         Is your site built on something not listed? <a href=''>Contact us</a> to find out if we can maintain it for you!
                       </p>
                     </div>
                     <h6>Need More Answers?</h6>
                     <div>
                       <p>
                         Check out our <a href='http://localhost/faq'>FAQ</a> page.
                       </p>
                     </div>
                   </div>
                 </div>
                 "
  );
  $services["wordpress-care-plan"] = array(
    "thumb" => "img/services/wordpressMonthlySupport.svg",
    "title" => "Monthly WordPress Care Plans",
    "popup" => "Imagine never having another WordPress headache. Mount McKinney can care for your WordPress site so you can get back to doing what you do best.",
    "section" => "<p class='serviceContent'>
                    Imagine never having another <strong>WordPress headache</strong>. Maintaining WordPress doesn&apos;t have to be a pain. Mount McKinney&apos;s Monthly WordPress Care Plans take care of all those little annoyances so you can get back to doing what you do best!
                  </p>
                  <br />
                  <p class='serviceContent'>
                    You know what else shouldn&apos;t be a pain? Getting in touch with someone to help you with your WordPress issue. Here at Mount McKinney, even our Basic plan guarantees you will be responded to within 24 hours (often much earlier)!
                  </p>
                  <br />
                  <p class='serviceContent'>
                    Mount McKinney&apos;s Monthly Care Plans come in 3 flavors: Basic, Premier, & VIP.
                  </p>
                  <br />
                  <div class='planPage'>
                    <div class='plans'>
                      <div class='supportPlan basicPlan'>
                        <h3 class='basic'>Basic</h3>
                        <a href='http://localhost/store/#!/Monthly-WordPress-Support-Basic/p/73472710/category=0'>
                          <h1 class='price'>$39<span class='smallText'>/mo</span></h1>
                        </a>
                        <h5 class='dynamicDesktopContent' title='Great for those deciding if this is a viable career option and those who do whatever it is you do as a side hustle. Basically, those that just need a little help.'>Who this plan is for<span class='ui-icon-help'> ?</span></h5>
                        <ul class='dynamicDesktopContent'>
                          <li class='altRow' title='Support will respond within 24 hours. Mount McKinney is all about amazing customer support!'>Awesome Customer Support<span class='ui-icon-help'> ?</span></li>
                          <li title='Mount McKinney will respond to your questions, concerns, and requests via email. Catch us on a good day and we may even talk about your hopes and dreams!'>Email Support<span class='ui-icon-help'> ?</span></li>
                          <li class='altRow' title='Mount McKinney will ensure your WordPress stays up to date with the latest stable releases. We will test to ensure it will not affect your plugins prior to updating.'>WordPress Core Updating<span class='ui-icon-help'> ?</span></li>
                          <li title='We will ensure your plugins are up to date and secure. If a plugin is a known security concern or causes slow downs, Mount McKinney can suggest alternatives.'>Plugin & Theme Updating<span class='ui-icon-help'> ?</span></li>
                          <li class='altRow' title='Mount McKinney&apos;s Basic Plan does not provide any Site Analytics data'>No Analytics Reporting<span class='ui-icon-help'> ?</span></li>
                          <li title='Is your site up and running right now? Are you sure? How do you know? Mount McKinney&apos;s Uptime Monitoring service will check every 30 minutes to ensure it&apos;s still up. If for some reason it does go down, we will alert you and can investigate the cause.'>30 Minute Uptime Monitoring<span class='ui-icon-help'> ?</span></li>
                          <li class='altRow' title='Mount McKinney&apos;s Basic plan does not provide MailChimp assistance.'>No MailChimp Support<span class='ui-icon-help'> ?</span></li>
                          <li title='Mount McKinney will backup your database on a weekly basis to ensure that if something catastrophic happens you&apos;ll have your site back up and running in no time.'>Weekly Server Backups<span class='ui-icon-help'> ?</span></li>
                          <li class='altRow' title='Mount McKinney&apos;s Basic Plan does not provide support for hosting transfers. We can still help you, it will just be an additional fee.'>No Access to Hosting Transfer Help<span class='ui-icon-help'> ?</span></li>
                          <li title='Mount McKinney will run a monthly security check-up to ensure nothing malicious is living on your site. If there is, we will work to eradicate it.'>Monthly Security Scans<span class='ui-icon-help'> ?</span></li>
                          <li class='altRow' title='Mount McKinney will set up a cache on your WordPress site.'>Cache Setup<span class='ui-icon-help'> ?</span></li>
                          <li title='The Basic plan does not provide a discount on Mount McKinney&apos;s rate for working on projects.'>No Discount on Projects<span class='ui-icon-help'> ?</span></li>
                          <li class='altRow' title='These quick fixes cannot be combined to form a large project.'>2 Quick Fixes Included*<span class='ui-icon-help'> ?</span></li>
                          <li title='The Basic plan does not provide access to the WordPress Virtue theme by Kadence Themes.'>No Access to Virtue Theme<span class='ui-icon-help'> ?</span></li>
                          <li class='altRow' title='Mount McKinney&apos;s Basic plan does not provide assistance creating email accounts.'>No Email Creation Support<span class='ui-icon-help'> ?</span></li>
                        </ul>
                        <div id='basicAccordion' class='dynamicMobileContent'>
                          <h5 class='dynamicMobileContent moreInfo'>Who this plan is for</h5>
                            <div>
                              <p>
                                Great for those deciding if this is a viable career option and those who do this as a side hustle. Also, those that just need a little help.
                              </p>
                            </div>
                            <h6 class='altRow'>Awesome Customer Support</h6>
                              <div>
                                <p>
                                  Support will respond within 24 hours. Mount McKinney is all about amazing customer support!
                                </p>
                              </div>
                            <h6>Email Support</h6>
                              <div>
                                <p>
                                  Mount McKinney will respond to your questions, concerns, and requests via email. Catch us on a good day and we may even talk about your hopes and dreams!
                                </p>
                              </div>
                            <h6 class='altRow'>WordPress Core Updating</h6>
                              <div>
                                <p>
                                  Mount McKinney will ensure your WordPress stays up to date with the latest stable releases. We will test to ensure it will not affect your plugins prior to updating.
                                </p>
                              </div>
                            <h6>Plugin & Theme Updating</h6>
                              <div>
                                <p>
                                  We will ensure your plugins are up to date and secure. If a plugin is a known security concern or causes slow downs, Mount McKinney can suggest alternatives.
                                </p>
                              </div>
                            <h6 class='altRow'>No Analytics Reporting</h6>
                              <div>
                                <p>
                                  Mount McKinney&apos;s Basic Plan does not provide any Site Analytics data.
                                </p>
                              </div>
                            <h6>30 Minute Uptime Monitoring</h6>
                              <div>
                                <p>
                                  Is your site up and running right now? Are you sure? How do you know? Mount McKinney&apos;s Uptime Monitoring service will check every 30 minutes to ensure it&apos;s still up. If for some reason it does go down, we will alert you and can investigate the cause.
                                </p>
                              </div>
                            <h6 class='altRow'>No MailChimp Support</h6>
                              <div>
                                <p>
                                  Mount McKinney&apos;s Basic plan does not provide MailChimp assistance.
                                </p>
                              </div>
                            <h6>Weekly Server Backups</h6>
                              <div>
                                <p>
                                  Mount McKinney will backup your database on a weekly basis to ensure that if something catastrophic happens you&apos;ll have your site back up and running in no time.
                                </p>
                              </div>
                            <h6 class='altRow'>No Access to Hosting Transfer Help</h6>
                              <div>
                                <p>
                                  Mount McKinney&apos;s Basic Plan does not provide support for hosting transfers. We can still help you, it will just be an additional fee.
                                </p>
                              </div>
                            <h6>Monthly Security Scans</h6>
                              <div>
                                <p>
                                  Mount McKinney will run a monthly security check-up to ensure nothing malicious is living on your site. If there is, we will work to eradicate it.
                                </p>
                              </div>
                            <h6 class='altRow'>Cache Setup</h6>
                              <div>
                                <p>
                                  Mount McKinney will set up a cache on your WordPress site.
                                </p>
                              </div>
                            <h6>No Discount on Projects</h6>
                              <div>
                                <p>
                                  The Basic plan does not provide a discount on Mount McKinney&apos;s rate for working on projects.
                                </p>
                              </div>
                            <h6 class='altRow'>2 Quick Fixes Included*</h6>
                              <div>
                                <p>
                                  These quick fixes cannot be combined to form a large project.
                                </p>
                              </div>
                            <h6>No Access to Virtue Theme</h6>
                              <div>
                                <p>
                                  The Basic plan does not provide access to the WordPress Virtue theme by Kadence Themes.
                                </p>
                              </div>
                            <h6 class='altRow'>No Email Creation Support</h6>
                              <div>
                                <p>
                                  Mount McKinney&apos;s Basic plan does not provide assistance creating email accounts.
                                </p>
                              </div>
                          </div>
                          <div class='planButton basicPlanButton'>
                            <a href='http://localhost/store/#!/Monthly-WordPress-Support-Basic/p/73472710/category=0'>Sign Me Up!</a>
                          </div>
                        </div>
                      <div class='supportPlan recommendedPlan premierPlan'>
                        <h3 class='premier'>Premier</h3>
                        <a href='http://localhost/store/#!/Monthly-WordPress-Support-Premier/p/73472844/category=0&forcescroll=true'>
                          <h1 class='price'>$79<span class='smallText'>/mo</span></h1>
                        </a>
                        <h5 class='dynamicDesktopContent' title='Great for professional bloggers, freelancers, and those getting serious about doing business online. Also ninjas, this is perfect for ninjas.'>Who this plan is for<span class='ui-icon-help'> ?</span></h5>
                        <ul class='dynamicDesktopContent'>
                          <li title='Support will respond within 10 hours. Mount McKinney is all about amazing customer support!'>Priority Customer Support<span class='ui-icon-help'> ?</span></li>
                          <li class='altRow' title='You will have access to a chat portal to receive live help. Catch us on a good day and we may even talk about your hopes and dreams!'>Email/Chat Support<span class='ui-icon-help'> ?</span></li>
                          <li title='Mount McKinney will ensure your WordPress stays up to date with the latest stable releases. We will test to ensure it will not affect your plugins prior to updating.'>WordPress Core Updating<span class='ui-icon-help'> ?</span></li>
                          <li class='altRow' title='We will ensure your plugins are up to date and secure. If a plugin is a known security concern or causes slow downs, Mount McKinney can suggest alternatives.'>Plugin & Theme Updating<span class='ui-icon-help'> ?</span></li>
                          <li title='Mount McKinney will provide a weekly report of your site&apos;s visitors.'>Weekly Analytics Report<span class='ui-icon-help'> ?</span></li>
                          <li class='altRow' title='Is your site up and running right now? Are you sure? How do you know? Mount McKinney&apos;s Uptime Monitoring service will check every 5 minutes to ensure it&apos;s still up. If for some reason it does go down, we will alert you and can investigate the cause.'>5 Minute Uptime Monitoring<span class='ui-icon-help'> ?</span></li>
                          <li title='Mount McKinney can assist you with setting up your MailChimp account.'>MailChimp Setup<span class='ui-icon-help'> ?</span></li>
                          <li class='altRow' title='Mount McKinney will backup your database on a daily basis to ensure that if something catastrophic happens you&apos;ll have your site back up and running in no time.'>Daily Server Backups<span class='ui-icon-help'> ?</span></li>
                          <li title='Mount McKinney will provide support to help you navigate the frustrations of transferring from one hosting service to another.'>Hosting Transfer Help<span class='ui-icon-help'> ?</span></li>
                          <li class='altRow' title='Mount McKinney will run a weekly security check-up to ensure nothing malicious is living on your site. If there is, we will work to eradicate it.'>Weekly Security Scans<span class='ui-icon-help'> ?</span></li>
                          <li title='Mount McKinney will set up a cache on your WordPress site'>Cache Setup<span class='ui-icon-help'> ?</span></li>
                          <li class='altRow' title='This discount applies to web development, web design, logo design, and WordPress fixes.'>5% Discount on Hourly Rate<span class='ui-icon-help'> ?</span></li>
                          <li title='These quick fixes cannot be combined to form a large project.'>4 Quick Fixes Included*<span class='ui-icon-help'> ?</span></li>
                          <li class='altRow' title='You will have access to the beautiful Virtue Theme by Kadence Themes.'>Free Access to Virtue Theme<span class='ui-icon-help'> ?</span></li>
                          <li title='Mount McKinney can provide help creating email accounts.'>Email Creation Support<span class='ui-icon-help'> ?</span></li>
                        </ul>
                        <div id='premierAccordion' class='dynamicMobileContent'>
                          <h5 class='dynamicMobileContent moreInfo'>Who this plan is for</h5>
                            <div>
                              <p>
                                Great for professional bloggers, freelancers, and those getting serious about doing business online. Also ninjas, this is perfect for ninjas.
                              </p>
                            </div>
                            <h6 class='altRow'>Priority Customer Support</h6>
                              <div>
                                <p>
                                  Support will respond within 10 hours. Mount McKinney is all about amazing customer support!
                                </p>
                              </div>
                            <h6>Email/Chat Support</h6>
                              <div>
                                <p>
                                  You will have access to a chat portal to receive live help. Catch us on a good day and we may even talk about your hopes and dreams!
                                </p>
                              </div>
                            <h6 class='altRow'>WordPress Core Updating</h6>
                              <div>
                                <p>
                                  Mount McKinney will ensure your WordPress stays up to date with the latest stable releases. We will test to ensure it will not affect your plugins prior to updating.
                                </p>
                              </div>
                            <h6>Plugin & Theme Updating</h6>
                              <div>
                                <p>
                                  We will ensure your plugins are up to date and secure. If a plugin is a known security concern or causes slow downs, Mount McKinney can suggest alternatives.
                                </p>
                              </div>
                            <h6 class='altRow'>Weekly Analytics Report</h6>
                              <div>
                                <p>
                                  Mount McKinney will provide a weekly report of your site&apos;s visitors.
                                </p>
                              </div>
                            <h6>5 Minute Uptime Monitoring</h6>
                              <div>
                                <p>
                                  Is your site up and running right now? Are you sure? How do you know? Mount McKinney&apos;s Uptime Monitoring service will check every 5 minutes to ensure it&apos;s still up. If for some reason it does go down, we will alert you and can investigate the cause.
                                </p>
                              </div>
                            <h6 class='altRow'>MailChimp Setup</h6>
                              <div>
                                <p>
                                  Mount McKinney can assist you with setting up your MailChimp account.
                                </p>
                              </div>
                            <h6>Daily Server Backups</h6>
                              <div>
                                <p>
                                  Mount McKinney will backup your database on a daily basis to ensure that if something catastrophic happens you&apos;ll have your site back up and running in no time.
                                </p>
                              </div>
                            <h6 class='altRow'>Hosting Transfer Help</h6>
                              <div>
                                <p>
                                  Mount McKinney will provide support to help you navigate the frustrations of transferring from one hosting service to another.
                                </p>
                              </div>
                            <h6>Weekly Security Scans</h6>
                              <div>
                                <p>
                                  Mount McKinney will run a weekly security check-up to ensure nothing malicious is living on your site. If there is, we will work to eradicate it.
                                </p>
                              </div>
                            <h6 class='altRow'>Cache Setup</h6>
                              <div>
                                <p>
                                  Mount McKinney will set up a cache on your WordPress site.
                                </p>
                              </div>
                            <h6>5% Discount on Projects</h6>
                              <div>
                                <p>
                                  This discount applies to web development, web design, logo design, and WordPress fixes.'>5% Discount on Hourly Rate</li>
                                </p>
                              </div>
                            <h6 class='altRow'>4 Quick Fixes Included*</h6>
                              <div>
                                <p>
                                  These quick fixes cannot be combined to form a large project.'>4 Quick Fixes Included*
                                </p>
                              </div>
                            <h6>No Access to Virtue Theme</h6>
                              <div>
                                <p>
                                  You will have access to the beautiful Virtue Theme by Kadence Themes.'>Free Access to Virtue Theme</li>
                                </p>
                              </div>
                            <h6 class='altRow'>Email Creation Support</h6>
                              <div>
                                <p>
                                  Mount McKinney can provide help creating email accounts.
                                </p>
                              </div>
                        </div>
                        <div class='planButton premierPlanButton'>
                          <a href='http://localhost/store/#!/Monthly-WordPress-Support-Premier/p/73472844/category=0&forcescroll=true'>Sign Me Up!</a>
                        </div>
                      </div>
                      <div class='supportPlan vipPlan'>
                        <h3 class='vip'>VIP</h3>
                        <a href='http://localhost/store/#!/Monthly-WordPress-Support-VIP/p/73472845/category=0&forcescroll=true'>
                          <h1 class='price'>$109<span class='smallText'>/mo</span></h1>
                        </a>
                        <h5 class='dynamicDesktopContent' title='Great for small business owners, rock stars, and full-time freelancers. Basically, those too busy to want to lift a finger to fix their WordPress ever again.'>Who this plan is for<span class='ui-icon-help'> ?</span></h5>
                        <ul class='dynamicDesktopContent'>
                          <li class='altRow' title='Support will respond within 4 hours. Mount McKinney is all about amazing customer support!'>VIP Support<span class='ui-icon-help'> ?</span></span></li>
                          <li title='You will have access to a chat portal to receive live help. You will also be able to schedule phone support. Catch us on a good day and we may even talk about your hopes and dreams!'>Email/Chat/Phone Support<span class='ui-icon-help'> ?</span></li>
                          <li class='altRow' title='Mount McKinney will ensure your WordPress stays up to date with the latest stable releases. We will test to ensure it will not affect your plugins prior to updating.'>WordPress Core Updating<span class='ui-icon-help'> ?</span></li>
                          <li title='We will ensure your plugins are up to date and secure. If a plugin is a known security concern or causes slow downs, Mount McKinney can suggest alternatives.'>Plugin & Theme Updating<span class='ui-icon-help'> ?</span></li>
                          <li class='altRow' title='Mount McKinney will do more than just provide a report of your site&apos;s visitors. We will go over that with you and provide recommendations to help increase traffic!'>Weekly Analytics Report + Analysis<span class='ui-icon-help'> ?</span></li>
                          <li title='Is your site up and running right now? Are you sure? How do you know? Mount McKinney&apos;s Uptime Monitoring service will check every minute to ensure it&apos;s still up. If for some reason it does go down, we will alert you and can investigate the cause.'>1 Minute Uptime Monitoring<span class='ui-icon-help'> ?</span></li>
                          <li class='altRow' title='Mount McKinney can assist you with setting up your MailChimp account.'>MailChimp Setup<span class='ui-icon-help'> ?</span></li>
                          <li title='Mount McKinney will backup your database on a daily basis to ensure that if something catastrophic happens you&apos;ll have your site back up and running in no time.'>Daily Server Backups<span class='ui-icon-help'> ?</span></li>
                          <li class='altRow' title='Mount McKinney will provide support to help you navigate the frustrations of transferring from one hosting service to another.'>Hosting Transfer Help<span class='ui-icon-help'> ?</span></li>
                          <li title='Mount McKinney will run a daily security check-up to ensure nothing malicious is living on your site. If there is, we will work to eradicate it.'>Daily Security Scans<span class='ui-icon-help'> ?</span></li>
                          <li class='altRow' title='Mount McKinney will set up a cache on your WordPress site.'>Cache Setup<span class='ui-icon-help'> ?</span></li>
                          <li title='This discount applies to web development, web design, logo design, and WordPress fixes.'>10% Discount on Hourly Rate<span class='ui-icon-help'> ?</span></li>
                          <li class='altRow' title='These quick fixes cannot be combined to form a large project.'>7 Quick Fixes Included*<span class='ui-icon-help'> ?</span></li>
                          <li title='You will have access to the beautiful Virtue Theme by Kadence Themes.'>Free Access to Virtue Theme<span class='ui-icon ui-icon-help'></li>
                          <li class='altRow' title='Mount McKinney can provide help creating email accounts.'>Email Creation Support<span class='ui-icon-help'> ?</span></li>
                        </ul>
                        <div id='vipAccordion' class='dynamicMobileContent'>
                          <h5 class='dynamicMobileContent moreInfo'>Who this plan is for</h5>
                            <div>
                              <p>
                                Great for small business owners, rock stars, and full-time freelancers. Basically, those too busy to want to lift a finger to fix their WordPress ever again.
                              </p>
                            </div>
                            <h6 class='altRow'>VIP Support</h6>
                              <div>
                                <p>
                                  Support will respond within 4 hours. Mount McKinney is all about amazing customer support!
                                </p>
                              </div>
                            <h6>Email/Chat/Phone Support</h6>
                              <div>
                                <p>
                                  You will have access to a chat portal to receive live help. You will also be able to schedule phone support. Catch us on a good day and we may even talk about your hopes and dreams!
                                </p>
                              </div>
                            <h6 class='altRow'>WordPress Core Updating</h6>
                              <div>
                                <p>
                                  Mount McKinney will ensure your WordPress stays up to date with the latest stable releases. We will test to ensure it will not affect your plugins prior to updating.
                                </p>
                              </div>
                            <h6>Plugin & Theme Updating</h6>
                              <div>
                                <p>
                                  We will ensure your plugins are up to date and secure. If a plugin is a known security concern or causes slow downs, Mount McKinney can suggest alternatives.
                                </p>
                              </div>
                            <h6 class='altRow'>Weekly Analytics Report + Analysis</h6>
                              <div>
                                <p>
                                  Mount McKinney will do more than just provide a report of your site&apos;s visitors. We will go over that with you and provide recommendations to help increase traffic!
                                </p>
                              </div>
                            <h6>1 Minute Uptime Monitoring</h6>
                              <div>
                                <p>
                                  Is your site up and running right now? Are you sure? How do you know? Mount McKinney&apos;s Uptime Monitoring service will check every minute to ensure it&apos;s still up. If for some reason it does go down, we will alert you and can investigate the cause.
                                </p>
                              </div>
                            <h6 class='altRow'>MailChimp Setup</h6>
                              <div>
                                <p>
                                  Mount McKinney can assist you with setting up your MailChimp account.
                                </p>
                              </div>
                            <h6>Daily Server Backups</h6>
                              <div>
                                <p>
                                  Mount McKinney will backup your database on a daily basis to ensure that if something catastrophic happens you&apos;ll have your site back up and running in no time.
                                </p>
                              </div>
                            <h6 class='altRow'>Hosting Transfer Help</h6>
                              <div>
                                <p>
                                  Mount McKinney will provide support to help you navigate the frustrations of transferring from one hosting service to another.
                                </p>
                              </div>
                            <h6>Daily Security Scans</h6>
                              <div>
                                <p>
                                  Mount McKinney will run a daily security check-up to ensure nothing malicious is living on your site. If there is, we will work to eradicate it.
                                </p>
                              </div>
                            <h6 class='altRow'>Cache Setup</h6>
                              <div>
                                <p>
                                  Mount McKinney will set up a cache on your WordPress site.
                                </p>
                              </div>
                            <h6>10% Discount on Hourly Rate</h6>
                              <div>
                                <p>
                                  This discount applies to web development, web design, logo design, and WordPress fixes.
                                </p>
                              </div>
                            <h6 class='altRow'>7 Quick Fixes Included*</h6>
                              <div>
                                <p>
                                  These quick fixes cannot be combined to form a large project.
                                </p>
                              </div>
                            <h6>Free Access to Virtue Theme</h6>
                              <div>
                                <p>
                                  You will have access to the beautiful Virtue Theme by Kadence Themes.
                                </p>
                              </div>
                            <h6 class='altRow'>Email Creation Support</h6>
                              <div>
                                <p>
                                  Mount McKinney can provide help creating email accounts.
                                </p>
                              </div>
                        </div>
                        <div class='planButton vipPlanButton'>
                          <a href='http://localhost/store/#!/Monthly-WordPress-Support-VIP/p/73472845/category=0&forcescroll=true'>Sign Me Up!</a>
                        </div>
                      </div>
                    </div>
                    <br />
                    <p class='serviceContent'>
                      Need something that isn&apos;t listed?
                      <div class='servicesContact'>
                        <a class='typeform-share button' href='https://mountmckinney.typeform.com/to/IUHF6N' data-mode='1' target='_blank'>We Can Help</a>
                      </div>
                    </p>
                    <div id='accordion' class='finePrint'>
                      <h6>Rates Subject to Change</h6>
                      <div>
                        <p>
                          Rates are per managed domain and are subject to change at anytime. Subscribers will be notified of any changes to pricing at least 30 days prior to change. Months are purchased in advance. There are no contracts, you are able to cancel at any time.
                        </p>
                      </div>
                      <h6>What&apos;s a Quick Fix?</h6>
                      <div>
                        <p>
                          Quick Fixes are defined as jobs that Mount McKinney determines will take 30 mins or less. You cannot stack multiple small jobs to make a large project. You can find out more info on the <a href='http://localhost/service/?service=quick-fix'>Quick Fix</a> page.
                        </p>
                      </div>
                      <h6>Need More Answers?</h6>
                      <div>
                        <p>
                          Check out our <a href='http://localhost/faq'>FAQ</a> page.
                        </p>
                      </div>
                    </div>
                  </div>
                  "
   );
   $services["logo-design"] = array(
     "thumb" => "img/services/logoDesign.svg",
     "title" => "Logo Design",
     "popup" => "Don&apos;t have a logo yet or your current logo feel out of date? Mount McKinney can work with you to create something special, just for you!",
     "section" => "<p class='serviceContent'>
                     First impressions are everything. Your logo is the first thing people will see about your company. Making it of the upmost importance.
                   </p>
                   <br />
                   <p class='serviceContent clearContent'>
                     Mount McKinney would love to create a <strong>beautiful</strong> logo to fit your <strong>custom</strong> needs. We work with you to craft a logo that will encapsulate your company&apos;s vision.
                   </p>
                   <br />
                   <p class='serviceContent'>
                     Are you ready to have a logo worth admiring? Let us know below and we&apos;ll reach out shortly!
                   </p>
                    <div class='planPage'>
                      <div class='plans'>
                        <div class='logoPlan'>
                          <h3 class='premier'>Logo Design</h3>
                          <h1 class='price'>$250</h1>
                          <div id='logoAccordion'>
                            <h6>Custom Logo Design</h6>
                            <div>
                              <p>
                                Mount McKinney will work with you to create a beautiful logo that will represent your brand well for years to come.
                              </p>
                            </div>
                          </div>
                          <div class='planButton logoPlanButton'>
                            <a href='https://mountmckinney.typeform.com/to/IUHF6N' data-mode='1' target='_blank'>Create My Logo!</a>
                          </div>
                        </div>
                      </div>
                    </div>
                   "
   );
   $services["quick-fix"] = array(
     "thumb" => "img/services/quickFix.svg",
     "title" => "Quick Fixes",
     "popup" => "Do you just need a quick fix on your website like fixing a plugin that won&apos;t update, changing some colors on your site, updating your theme, or creating email addresses? If it&apos;s a small project under 30 mins then a quick fix is perfect for you.",
     "section" => "<p class='serviceContent'>
                      Quick fixes are projects we determine will take <strong>30 minutes or less</strong>. Each quick fix is for only one small project. For example: creating an email account, fixing errors, and providing a security scan are 3 separate quick fixes. If you need multiple fixes done on your site, please <a href='https://mountmckinney.typeform.com/to/IUHF6N' data-mode='1' target='_blank'>contact us</a> for a custom quote.
                   </p>
                   <br />
                   <p class='serviceContent clearContent'>
                      Quick fixes are always paid in advance. Payment is collected via PayPal or credit card. Please ensure the information you provide when purchasing a quick fix is the correct and the easiest to get in touch with you so we can resolve your project as fast as possible.
                   </p>
                   <br />
                   <p class='serviceContent clearContent'>
                      See below for examples of quick fixes. If you have questions about whether something is a quick fix or not, you can always shoot us a quick <a href='mailto:info@support.mountmckinney.com?Subject=What%27s%20a%20Quick%20Fix%3F'>email</a>.
                   </p>
                   <br />
                   <p class='serviceContent'>
                      If for any reason we deem the project as not being a quick fix or are unable to resolve your issue, Mount McKinney will refund your money immediately. If it is a situation where we deem the fix will take longer than 30 minutes we will reach out with a quote for you.
                   </p>
                   <div class='planPage'>
                     <div class='plans'>
                       <div class='logoPlan'>
                         <h3 class='premier'>Quick Fix</h3>
                         <h1 class='price'>$45</h1>
                         <h5>Examples of Possible Quick Fixes</h5>
                         <ul>
                           <li class='altRow'>Amazing Customer Support!</li>
                           <li>Updating Plugins/Themes</li>
                           <li>Fixing a MailChimp Issue</li>
                           <li>Changing Color Schemes</li>
                           <li>Changing Fonts</li>
                           <li>Creating Email Accounts</li>
                           <li>Website Security Scans</li>
                         </ul>
                         <div class='planButton logoPlanButton'>
                           <a href='http://localhost/store/#!/Monthly-WordPress-Support-VIP/p/73472845/category=0&forcescroll=true'>I Need A Quick Fix</a>
                         </div>
                       </div>
                     </div>
                   </div>
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
