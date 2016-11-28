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
                  Here at Mount McKinney, we&apos;re different. We believe being honest and having integrity is of the upmost importance. Mount McKinney will never sell you anything we don&apos;t believe you need. We always strive to provide affordable websites that are easy to use and as awe-inspiring as the great outdoors!
                </p>
                <br />
                <p class='serviceContent'>
                  Whether you are in need of a redesign of your current site or are in need of for your first website, Mount McKinney is here to help! We build websites in whatever platform suits your needs including, but not limited to, <strong>WordPress</strong>, <strong>Squarespace</strong>, and <strong>Wix</strong>. The benefit of building a site in platforms such as these is that they are quick to create and easier to maintain.
                </p>
                <br />
                <p class='serviceContent'>
                  These platforms do have their limitations though. That&apos;s why Mount McKinney also builds <strong>custom websites</strong> to fit your needs and exact specifications because we know that one size fits all, does&apos;t always fit.
                </p>
                <br />
                <p class='serviceContent'>
                  So, regardless if you run a blog sharing your cooking adventures, a portfolio to showing off your wedding photography, or a full e-commerce site to selling your custom clothing line we will do everything we can to help you and your business reach your peak!
                </p>
                <br />
                <p class='serviceContent'>
                  Are you ready to step up your web presence? Check out our packages below! These packages are just meant to give you a general idea of price and can change depending on your specific needs. Not sure which package fits your business&apos;s needs? Take our quiz and let us help you find the right package.
                </p>
                <div class='planPage'>
                  <div class='plans'>
                    <div class='supportPlan basicPlan'>
                      <h3 class='basic'>WordPress</h3>
                       <h1 class='price'>$2-3k</h1>
                      <h5 class='dynamicDesktopContent'  title='People all over the world use WordPress. It allows users without extensive technical knowledge to make small changes such as publishing blog posts and picking colors for themes. However, among other drawbacks, WordPress sites are heavier (load slower) than other template platforms or a custom solution. We can often spot a WordPress site almost immediately. For many, this is trade-off is perfect for them.'>Why WordPress<span class='ui-icon-help'> ?</span></h5>
                      <ul class='dynamicDesktopContent'>
                        <li class='altRow' title='Your site will be built or redesigned in the WordPress platform.'>Sites Built in WordPress<span class='ui-icon-help'> ?</span></li>
                        <li title='Home, About, Contact are all included.'>Pages Always Included<span class='ui-icon-help'> ?</span></li>
                        <li class='altRow' title='Things you may want to possibly add to your site: Blog, E-Commerce, Portfolio, Products/Services, Gallery, Forum, Live Chat, Social Media Integration, Support, Testimonials, News, FAQs'>Typically Requested Components<span class='ui-icon-help'> ?</span></li>
                        <li title='Mount McKinney always creates websites with SEO in mind. We follow current web standards for ensuring your site is as optimized as possible.'>SEO Centric<span class='ui-icon-help'> ?</span></li>
                        <li class='altRow' title='Mount McKinney always makes sure the site looks and functions great on any screen size.'>Mobile Friendly<span class='ui-icon-help'> ?</span></li>
                        <li title='We will train you and your team on how to update content, make minor styling changes, and keep the site up to date. If you would rather have us handle that, we have Monthly WordPress Care Plans as well.'>Training Provided<span class='ui-icon-help'> ?</span></li>
                        <li class='altRow' title='Mount McKinney will make recommendations on templates and will help tweak those templates to make it yours.'>User Experience Focused<span class='ui-icon-help'> ?</span></li>
                        <li title='We will install everything needed to run WordPress on your server.'>Setup of WordPress on Server<span class='ui-icon-help'> ?</span></li>
                        <li class='altRow' title='Cost of website varies and is determinded by the complexity and extent of the project.'>Cost of Website<span class='ui-icon-help'> ?</span></li>
                        <li title='Mount McKinney will provide a free month of WordPress maintenance support. If you would like to continue receiving this support after a month, we have our Monthly WordPress Care Plans.'>1 Free Month of Support<span class='ui-icon-help'> ?</span></li>
                      </ul>
                      <div id='basicAccordion' class='dynamicMobileContent'>
                        <h5 class='dynamicMobileContent moreInfo'>Why WordPress</h5>
                          <div>
                            <p>
                              People all over the world use WordPress. It allows users without extensive technical knowledge to make small changes such as publishing blog posts and picking colors for themes. However, among other drawbacks, WordPress sites are heavier (load slower) than other template platforms or a custom solution. We can often spot a WordPress site almost immediately. For many, this is trade-off is perfect for them.
                            </p>
                          </div>
                          <h6 class='altRow'>Sites Built in WordPress</h6>
                            <div>
                              <p>
                                Your site will be built or redesigned in the WordPress platform.
                              </p>
                            </div>
                          <h6>Pages Always Included</h6>
                            <div>
                              <p>
                                Home, About, Contact are all included.
                              </p>
                            </div>
                          <h6 class='altRow'>Typically Requested Components</h6>
                            <div>
                              <p>
                                Things you may want to possibly add to your site: Blog, E-Commerce, Portfolio, Products/Services, Gallery, Forum, Live Chat, Social Media Integration, Support, Testimonials, News, FAQs
                              </p>
                            </div>
                          <h6>SEO Centric</h6>
                            <div>
                              <p>
                                Mount McKinney always creates websites with SEO in mind. We follow current web standards for ensuring your site is as optimized as possible.
                              </p>
                            </div>
                          <h6 class='altRow'>Mobile Friendly</h6>
                            <div>
                              <p>
                                Mount McKinney always makes sure the site looks and functions great on any screen size.
                              </p>
                            </div>
                          <h6>Training Provided</h6>
                            <div>
                              <p>
                                We will train you and your team on how to update content, make minor styling changes, and keep the site up to date. If you would rather have us handle that, we have Monthly Website Care Plans as well.
                              </p>
                            </div>
                          <h6 class='altRow'>User Experience Focused</h6>
                            <div>
                              <p>
                                Mount McKinney will make recommendations on templates and will help tweak those templates to make it yours.
                              </p>
                            </div>
                          <h6>Setup of WordPress on Server</h6>
                            <div>
                              <p>
                                We will install everything needed to run WordPress on your server.
                              </p>
                            </div>
                          <h6 class='altRow'>Cost of Website</h6>
                            <div>
                              <p>
                                Cost of website varies and is determinded by the complexity and extent of the project.
                              </p>
                            </div>
                          <h6>1 Free Month of Support</h6>
                            <div>
                              <p>
                                Mount McKinney will provide a free month of website maintenance support. If you would like to continue receiving this support after a month, we have our Monthly WordPress Care Plans.
                              </p>
                            </div>
                      </div>
                      <div class='planButton basicPlanButton'>
                        <a class='typeform-share link' href='https://mountmckinney.typeform.com/to/IUHF6N' data-mode='1' target='_blank'>Sign Me Up!</a>
                      </div>
                    </div>
                    <div class='supportPlan recommendedPlan premierPlan'>
                      <h3 class='premier'>Template</h3>
                      <h1 class='price'>$2-4k</h1>
                      <h5 class='dynamicDesktopContent' title='Template sites are often lighter (load faster) than WordPress and are more user-friendly than a custom site, allowing users to add store products, make small changes, and publish blog posts without much technical expertise. However, that ease of use does come at a cost, sacrificing the ability to make the site look and feel exactly how you need. For most people, that trade-off is fine with them.'>Why Template<span class='ui-icon-help'> ?</span></h5>
                      <ul class='dynamicDesktopContent'>
                        <li title='Sites created using Squarespace, Wix, Joomla, Drupal, Weebly, Shopify, Blogger, and Tumblr. If you have another platform in mind, drop us a line and see if we can create your site in it.'>Sites Built in These Platforms<span class='ui-icon-help'> ?</span></li>
                        <li class='altRow' title='Home, About, Contact are all included.'>Pages Always Included<span class='ui-icon-help'> ?</span></li>
                        <li title='Things you may want to possibly add to your site: Blog, E-Commerce, Portfolio, Products/Services, Gallery, Forum, Live Chat, Social Media Integration, Support, Testimonials, News, FAQs'>Typically Requested Components<span class='ui-icon-help'> ?</span></li>
                        <li class='altRow' title='Mount McKinney always creates websites with SEO in mind. We follow current web standards for ensuring your site is as optimized as possible.'>SEO Centric<span class='ui-icon-help'> ?</span></li>
                        <li title='Mount McKinney always makes sure the site looks and functions great on any screen size.'>Mobile Friendly<span class='ui-icon-help'> ?</span></li>
                        <li class='altRow' title='We will train you and your team on how to update content, make minor styling changes, and keep the site up to date. If you would rather have us handle that, we have Monthly Website Care Plans as well.'>Training Provided<span class='ui-icon-help'> ?</span></li>
                        <li title='Mount McKinney will make recommendations on templates and will help tweak those templates to make it yours.'>User Experience Focused<span class='ui-icon-help'> ?</span></li>
                        <li class='altRow' title='We will ensure all necessary files are correctly placed on your server.'>Adding Files to Server<span class='ui-icon-help'> ?</span></li>
                        <li title='Cost of website varies and is determinded by the complexity and extent of the project.'>Cost of Website<span class='ui-icon-help'> ?</span></li>
                        <li class='altRow' title='Mount McKinney will provide a free month of website maintenance support. If you would like to continue receiving this support after a month, we have our Monthly Website Care Plans.'>1 Free Month of Support<span class='ui-icon-help'> ?</span></li>
                      </ul>
                      <div id='premierAccordion' class='dynamicMobileContent'>
                      <h5 cla class='dynamicMobileContent moreInfo'>Why Template</h5>
                        <div>
                          <p>
                            Template sites are often lighter (load faster) than WordPress and are more user-friendly than a custom site, allowing users to add store products, make small changes, and publish blog posts without much technical expertise. However, that ease of use does come at a cost, sacrificing the ability to make the site look and feel exactly how you need. For most people, that trade-off is fine with them.
                          </p>
                        </div>
                        <h6 class='altRow'>Sites Built in These Platforms</h6>
                          <div>
                            <p>
                              Sites created using Squarespace, Wix, Joomla, Drupal, Weebly, Shopify, Blogger, and Tumblr. If you have another platform in mind, drop us a line and see if we can create your site in it.
                            </p>
                          </div>
                        <h6>Pages Always Included</h6>
                          <div>
                            <p>
                              Home, About, Contact are all included.
                            </p>
                          </div>
                        <h6 class='altRow'>Typically Requested Components</h6>
                          <div>
                            <p>
                              Things you may want to possibly add to your site: Blog, E-Commerce, Portfolio, Products/Services, Gallery, Forum, Live Chat, Social Media Integration, Support, Testimonials, News, FAQs
                            </p>
                          </div>
                        <h6>SEO Centric</h6>
                          <div>
                            <p>
                              Mount McKinney always creates websites with SEO in mind. We follow current web standards for ensuring your site is as optimized as possible.
                            </p>
                          </div>
                        <h6 class='altRow'>Mobile Friendly</h6>
                          <div>
                            <p>
                              Mount McKinney always makes sure the site looks and functions great on any screen size.
                            </p>
                          </div>
                        <h6>Training Provided</h6>
                          <div>
                            <p>
                              We will train you and your team on how to update content, make minor styling changes, and keep the site up to date. If you would rather have us handle that, we have Monthly Website Care Plans as well.
                            </p>
                          </div>
                        <h6 class='altRow'>User Experience Focused</h6>
                          <div>
                            <p>
                              Mount McKinney will make recommendations on templates and will help tweak those templates to make it yours.
                            </p>
                          </div>
                        <h6>Adding Files to Server</h6>
                          <div>
                            <p>
                              We will ensure all necessary files are correctly placed on your server.
                            </p>
                          </div>
                        <h6 class='altRow'>Cost of Website</h6>
                          <div>
                            <p>
                              Cost of website varies and is determinded by the complexity and extent of the project.
                            </p>
                          </div>
                        <h6>1 Free Month of Support</h6>
                          <div>
                            <p>
                              Mount McKinney will provide a free month of website maintenance support. If you would like to continue receiving this support after a month, we have our Monthly Website Care Plans.
                            </p>
                          </div>
                      </div>
                      <div class='planButton premierPlanButton'>
                        <a class='typeform-share link' href='https://mountmckinney.typeform.com/to/IUHF6N' data-mode='1' target='_blank'>Sign Me Up!</a>
                      </div>
                    </div>
                    <div class='supportPlan vipPlan'>
                      <h3 class='vip'>Custom</h3>
                      <h1 class='price'>Varies</h1>
                      <h5 class='dynamicDesktopContent' title='A custom site is perfect for those who want the site to look and function exactly how they want. It's more expensive than a WordPress or Template site, but what you are left with is something entirely yours. If you need someone to maintain your site for you, we can help with that. We have monthly care plans to make your life easier.'>Why Custom<span class='ui-icon-help'> ?</span></h5>
                      <ul class='dynamicDesktopContent'>
                      <li class='altRow' title='Sites created using a combination of HTML5, CSS3, JavaScript, and either AngularJS or PHP depending on needs. Don&apos;t worry if you have no idea what any of that means.'>Sites Created Using<span class='ui-icon-help'> ?</span></li>
                      <li title='Home, About, Contact are all included.'>Pages Always Included<span class='ui-icon-help'> ?</span></li>
                      <li class='altRow' title='Things you may want to possibly add to your site: Blog, E-Commerce, Portfolio, Products/Services, Gallery, Forum, Live Chat, Social Media Integration, Support, Testimonials, News, FAQs'>Typically Requested Components<span class='ui-icon-help'> ?</span></li>
                      <li title='Mount McKinney always creates websites with SEO in mind. We follow current web standards for ensuring your site is as optimized as possible.'>SEO Centric<span class='ui-icon-help'> ?</span></li>
                      <li class='altRow' title='Mount McKinney always makes sure the site looks and functions great on any screen size.'>Mobile Friendly<span class='ui-icon-help'> ?</span></li>
                      <li title='We can train you and your team on how to make changes and keep the site up to date. If you would rather have Mount McKinney handle that, we have Monthly Website Care Plans as well.'>Training Provided<span class='ui-icon-help'> ?</span></li>
                      <li class='altRow' title='Mount McKinney will work with you to determine exactly what your business is looking for in the look and feel of a site. From that conversation, we will provide mockups of possible designs. We are here for you every step of the way.'>User Experience Focused<span class='ui-icon-help'> ?</span></li>
                      <li title='We will ensure all necessary files are correctly placed on your server.'>Adding Files to Server<span class='ui-icon-help'> ?</span></li>
                      <li class='altRow' title='Cost of website varies and is determinded by the complexity and extent of the project.'>Cost of Website<span class='ui-icon-help'> ?</span></li>
                      <li title='Mount McKinney will provide a free month of website maintenance support. If you would like to continue receiving this support after a month, we have our Monthly Website Care Plans.'>1 Free Month of Support<span class='ui-icon-help'> ?</span></li>
                      </ul>
                      <div id='vipAccordion' class='dynamicMobileContent'>
                        <h5 class='dynamicMobileContent moreInfo'>Why Custom</h5>
                          <div>
                            <p>
                              A custom site is perfect for those who want the site to look and function exactly how they want. It's more expensive than a WordPress or Template site, but what you are left with is something entirely yours. If you need someone to maintain your site for you, we can help with that. We have monthly care plans to make your life easier.
                            </p>
                          </div>
                          <h6 class='altRow'>Sites Created Using</h6>
                            <div>
                              <p>
                                Sites created using a combination of HTML5, CSS3, JavaScript, and either AngularJS or PHP depending on needs. Don&apos;t worry if you have no idea what any of that means.
                              </p>
                            </div>
                          <h6>Pages Always Included</h6>
                            <div>
                              <p>
                                Home, About, Contact are all included.
                              </p>
                            </div>
                          <h6 class='altRow'>Typically Requested Components</h6>
                            <div>
                              <p>
                                Things you may want to possibly add to your site: Blog, E-Commerce, Portfolio, Products/Services, Gallery, Forum, Live Chat, Social Media Integration, Support, Testimonials, News, FAQs
                              </p>
                            </div>
                          <h6>SEO Centric</h6>
                            <div>
                              <p>
                                Mount McKinney always creates websites with SEO in mind. We follow current web standards for ensuring your site is as optimized as possible.
                              </p>
                            </div>
                          <h6 class='altRow'>Mobile Friendly</h6>
                            <div>
                              <p>
                                Mount McKinney always makes sure the site looks and functions great on any screen size.
                              </p>
                            </div>
                          <h6>Training Provided</h6>
                            <div>
                              <p>
                                We will train you and your team on how to update content, make minor styling changes, and keep the site up to date. If you would rather have us handle that, we have Monthly Website Care Plans as well.
                              </p>
                            </div>
                          <h6 class='altRow'>User Experience Focused</h6>
                            <div>
                              <p>
                                Mount McKinney will make recommendations on templates and will help tweak those templates to make it yours.
                              </p>
                            </div>
                          <h6>Adding Files to Server</h6>
                            <div>
                              <p>
                                We will ensure all necessary files are correctly placed on your server.
                              </p>
                            </div>
                          <h6 class='altRow'>Cost of Website</h6>
                            <div>
                              <p>
                                Cost of website varies and is determinded by the complexity and extent of the project.
                              </p>
                            </div>
                          <h6>1 Free Month of Support</h6>
                            <div>
                              <p>
                                Mount McKinney will provide a free month of website maintenance support. If you would like to continue receiving this support after a month, we have our Monthly Website Care Plans.
                              </p>
                            </div>
                      </div>
                      <div class='planButton vipPlanButton'>
                        <a  href='https://mountmckinney.typeform.com/to/IUHF6N' data-mode='1' target='_blank'>Sign Me Up!</a>
                      </div>
                    </div>
                  </div>
                  <div id='accordion' class='finePrint'>
                    <h6>Website Cost</h6>
                    <div>
                      <p>
                        The short answer: Our prices vary depending on your needs. We would never give you a quote without talking to you and figuring out the specifics. However, based on prior experience we do have ballpark ranges on our <a href='http://mountmckinney.com/service/?service=web-development'>Web Development & Design</a> page.
                        <br/ >
                        The long answer: To truly find what it will cost, we need to have a conversation with you. We are all about relationships here at Mount McKinney and we need to find out what functionality you need in a site, what the site&apos;s purpose is, etc. After speaking with you we can work on a firm quote taking into account your specific situation and needs.
                        <br />
                        Just like most things that are as variable as building a website, if a web developer gives you an instant quote, run away like you&apos;re being chased by <span>Sasquatch</span>! (Perferrably right to us!)
                      </p>
                    </div>
                    <h6>Rates Subject to Change</h6>
                    <div>
                      <p>
                        Rates are per managed domain and are subject to change at anytime. Subscribers will be notified of any changes to pricing at least 30 days prior to change. Months are purchased in advance. There are no contracts, you are able to cancel at any time.
                      </p>
                    </div>
                    <h6>What&apos;s a Quick Fix?</h6>
                    <div>
                      <p>
                        Quick Fixes are defined as jobs that Mount McKinney determines will take 30 mins or less. You cannot stack multiple small jobs to make a large project. You can find out more info on the <a href='http://mountmckinney.com/service/?service=quick-fix'>Quick Fix</a> page.
                      </p>
                    </div>
                    <h6>Platforms Covered</h6>
                    <div>
                      <p>
                        Platforms supported: Squarespace, Drupal, Weebly, Wix, Joomla, Shopify, Blogger, Tumblr, and even custom built sites.
                        <br />
                        Is your site built on something not listed? <a class='typeform-share link' href='https://mountmckinney.typeform.com/to/IUHF6N' data-mode='1' target='_blank'>Contact us</a> to find out if we can maintain it for you!
                      </p>
                    </div>
                    <h6>Need More Answers?</h6>
                    <div>
                      <p>
                        Check out our <a href='http://mountmckinney.com/faq'>FAQ</a> page.
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
                   Maintaining a website is incredibly important but it&apos;s also extremely time consuming. Mount McKinney helps busy people keep their site secure and beautiful without all the headache. Let Mount McKinney take care take care of your site maintenance so you can get back to focusing on what you do best!
                 </p>
                 <br />
                 <p class='serviceContent'>
                   We believe it shouldn&apos;t be difficult to get in touch someone to help you with your website issue. Here at Mount McKinney, even our Basic plan guarantees you will be responded to within 24 hours (often much earlier)!
                 </p>
                 <br />
                 <p class='serviceContent'>
                   Are you ready to get rid of your technical headaches? Check out our packages below (Basic, Premier, & VIP) to learn more! If you have a WordPress site, make sure to check out our <a href='http://mountmckinney.com/service/?service=wordpress-care-plan'>Monthly WordPress Care Plans</a>!
                 </p>
                 <div>
                   <div class='toggleSwitch'>
                     <input type='checkbox' id='switchCheck' class='checkbox'>
                     <label class='toggleLabel' for='switchCheck'></label>
                     <div class='leftOption'>Monthly</div>
                     <div class='rightOption'>Yearly</div>
                     <div class='slider'></div>
                     <h6 class='toggleDescription'>2 Months Free for All Yearly Subscriptions</h6>
                   </div>
                 </div>

                 <div class='planPage'>
                   <div class='plans'>
                     <div class='supportPlan basicPlan'>
                       <h3 class='basic'>Basic</h3>
                       <a class='leftOptionDiv' href='http://store.mountmckinney.com/#!/Monthly-Website-Support-Basic/p/74707735/category=21497750'>
                        <h1 class='price leftOptionDiv'>$60<span class='smallText'>/mo</span></h1>
                       </a>
                       <h6 class='slashPricing rightOptionDiv'>Before Discount: <strike>$720/yr</strike></h6>
                       <h1 class='price rightOptionDiv'>$50<span class='smallText'>/mo</span></h1>
                       <h6 class='slashPricing rightOptionDiv'>After Discount: $600/yr</h6>
                       <h5 class='dynamicDesktopContent' title='Great for those who don&t need much, just a little help now and then.'>Who this plan is for<span class='ui-icon-help'> ?</span></h5>
                       <ul class='dynamicDesktopContent'>
                         <li class='altRow' title='Support will respond within 24 hours. Mount McKinney is all about amazing customer support!'>Response within 24 hours<span class='ui-icon-help'> ?</span></li>
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
                               Great for those who don&t need much, just a little help now and then.
                             </p>
                           </div>
                           <h6 class='altRow'>Response within 24 hours</h6>
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
                         <a href='http://store.mountmckinney.com/#!/Monthly-Website-Support-Basic/p/74707735/category=21497750'>Sign Me Up!</a>
                       </div>
                     </div>
                     <div class='supportPlan recommendedPlan premierPlan'>
                       <h3 class='premier'>Premier</h3>
                       <a class='leftOptionDiv' href='http://store.mountmckinney.com/#!/Monthly-Website-Support-Basic/p/74707735/category=21497750'>
                        <h1 class='price leftOptionDiv'>$100<span class='smallText'>/mo</span></h1>
                       </a>
                       <h6 class='slashPricing rightOptionDiv'>Before Discount: <strike>$1,200/yr</strike></h6>
                       <h1 class='price rightOptionDiv'>$83<span class='smallText'>/mo</span></h1>
                       <h6 class='slashPricing rightOptionDiv'>After Discount: $1,000/yr</h6>
                       <h5 class='dynamicDesktopContent' title='Great for professional bloggers, freelancers, and those getting serious about doing business online. Also ninjas, this is perfect for ninjas.'>Who this plan is for<span class='ui-icon-help'> ?</span></h5>
                       <ul class='dynamicDesktopContent'>
                         <li title='Support will respond within 10 hours. Mount McKinney is all about amazing customer support!'>Response within 10 hours<span class='ui-icon-help'> ?</span></li>
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
                           <h6 class='altRow'>Response within 10 hours</h6>
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
                         <a href='http://store.mountmckinney.com/#!/Monthly-Website-Support-Premier/p/74707734/category=21497750'>Sign Me Up!</a>
                       </div>
                     </div>
                     <div class='supportPlan vipPlan'>
                       <h3 class='vip'>VIP</h3>
                       <a class='leftOptionDiv' href='http://store.mountmckinney.com/#!/Monthly-Website-Support-Basic/p/74707735/category=21497750'>
                        <h1 class='price leftOptionDiv'>$130<span class='smallText'>/mo</span></h1>
                       </a>
                       <h6 class='slashPricing rightOptionDiv'>Before Discount: <strike>$1,560/yr</strike></h6>
                       <h1 class='price rightOptionDiv'>$108<span class='smallText'>/mo</span></h1>
                       <h6 class='slashPricing rightOptionDiv'>After Discount: $1,300/yr</h6>
                       <h5 class='dynamicDesktopContent' title='Great for small business owners, rock stars, and full-time freelancers. Basically, those too busy to want to lift a finger to fix their WordPress ever again.'>Who this plan is for<span class='ui-icon-help'> ?</span></h5>
                       <ul class='dynamicDesktopContent'>
                         <li class='altRow' title='Support will respond within 4 hours. Mount McKinney is all about amazing customer support!'>Response within 4 hours<span class='ui-icon-help'> ?</span></li>
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
                           <h6 class='altRow'>Response within 4 hours</h6>
                             <div>
                               <p>
                                 Support will respond within Response within 4 hours. Mount McKinney is all about amazing customer support!
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
                         <a href='http://store.mountmckinney.com/#!/Monthly-Website-Support-VIP/p/74707733/category=21497750'>Sign Me Up!</a>
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
                         Quick Fixes are defined as jobs that Mount McKinney determines will take 30 mins or less. You cannot stack multiple small jobs to make a large project. You can find out more info on the <a href='http://mountmckinney.com/service/?service=quick-fix'>Quick Fix</a> page.
                       </p>
                     </div>
                     <h6>Platforms Covered</h6>
                     <div>
                       <p>
                         Platforms supported: Squarespace, Drupal, Weebly, Wix, Joomla, Shopify, Blogger, Tumblr, and even custom built sites.
                         <br />
                         Is your site built on something not listed? <a class='typeform-share link' href='https://mountmckinney.typeform.com/to/IUHF6N' data-mode='1' target='_blank'>Contact us</a> to find out if we can maintain it for you!
                       </p>
                     </div>
                     <h6>Need More Answers?</h6>
                     <div>
                       <p>
                         Check out our <a href='http://mountmckinney.com/faq'>FAQ</a> page.
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
                  <div>
                    <div class='toggleSwitch'>
                      <input type='checkbox' id='switchCheck' class='checkbox'>
                      <label class='toggleLabel' for='switchCheck'></label>
                      <div class='leftOption'>Monthly</div>
                      <div class='rightOption'>Yearly</div>
                      <div class='slider'></div>
                      <h6 class='toggleDescription'>2 Months Free for All Yearly Subscriptions</h6>
                    </div>
                  </div>

                  <div class='planPage'>
                    <div class='plans'>
                      <div class='supportPlan basicPlan'>
                        <h3 class='basic'>Basic</h3>
                        <a class='leftOptionDiv' href='http://store.mountmckinney.com/#!/Monthly-WordPress-Support-Basic/p/73472710/category=21262075'>
                          <h1 class='price leftOptionDiv'>$40<span class='smallText'>/mo</span></h1>
                        </a>
                        <h6 class='slashPricing rightOptionDiv'>Before Discount: <strike>$480/yr</strike></h6>
                        <h1 class='price rightOptionDiv'>$34<span class='smallText'>/mo</span></h1>
                        <h6 class='slashPricing rightOptionDiv'>After Discount: $400/yr</h6>
                        <h5 class='dynamicDesktopContent' title='Great for those who don&t need much, just a little help now and then.'>Who this plan is for<span class='ui-icon-help'> ?</span></h5>
                        <ul class='dynamicDesktopContent'>
                          <li class='altRow' title='Support will respond within 24 hours. Mount McKinney is all about amazing customer support!'>Response within 24 hours<span class='ui-icon-help'> ?</span></li>
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
                                Great for those who don&t need much, just a little help now and then.
                              </p>
                            </div>
                            <h6 class='altRow'>Response within 24 hours</h6>
                              <div>
                                <p>
                                  Support will respond within 24 hours. Mount McKinney is all about Response within 24 hours!
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
                            <a href='http://store.mountmckinney.com/#!/Monthly-WordPress-Support-Basic/p/73472710/category=21262075'>Sign Me Up!</a>
                          </div>
                        </div>
                      <div class='supportPlan recommendedPlan premierPlan'>
                        <h3 class='premier'>Premier</h3>
                        <a class='leftOptionDiv' href='http://store.mountmckinney.com/#!/Monthly-WordPress-Support-Premier/p/73472844/category=21262075'>
                          <h1 class='price leftOptionDiv'>$80<span class='smallText'>/mo</span></h1>
                        </a>
                        <h6 class='slashPricing rightOptionDiv'>Before Discount: <strike>$960/yr</strike></h6>
                        <h1 class='price rightOptionDiv'>$67<span class='smallText'>/mo</span></h1>
                        <h6 class='slashPricing rightOptionDiv'>After Discount: $800/yr</h6>
                        <h5 class='dynamicDesktopContent' title='Great for professional bloggers, freelancers, and those getting serious about doing business online. Also ninjas, this is perfect for ninjas.'>Who this plan is for<span class='ui-icon-help'> ?</span></h5>
                        <ul class='dynamicDesktopContent'>
                          <li title='Support will respond within 10 hours. Mount McKinney is all about amazing customer support!'>Response within 10 hours<span class='ui-icon-help'> ?</span></li>
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
                            <h6 class='altRow'>Response within 10 hours</h6>
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
                          <a href='http://store.mountmckinney.com/#!/Monthly-WordPress-Support-Premier/p/73472844/category=21262075'>Sign Me Up!</a>
                        </div>
                      </div>
                      <div class='supportPlan vipPlan'>
                        <h3 class='vip'>VIP</h3>
                        <a class='leftOptionDiv' href='http://store.mountmckinney.com/#!/Monthly-WordPress-Support-VIP/p/73472845/category=21262075'>
                          <h1 class='price leftOptionDiv'>$110<span class='smallText'>/mo</span></h1>
                        </a>
                        <h6 class='slashPricing rightOptionDiv'>Before Discount: <strike>$1,320/yr</strike></h6>
                        <h1 class='price rightOptionDiv'>$92<span class='smallText'>/mo</span></h1>
                        <h6 class='slashPricing rightOptionDiv'>After Discount: $1,100/yr</h6>
                        <h5 class='dynamicDesktopContent' title='Great for small business owners, rock stars, and full-time freelancers. Basically, those too busy to want to lift a finger to fix their WordPress ever again.'>Who this plan is for<span class='ui-icon-help'> ?</span></h5>
                        <ul class='dynamicDesktopContent'>
                          <li class='altRow' title='Support will respond within 4 hours. Mount McKinney is all about amazing customer support!'>Response within 4 hours<span class='ui-icon-help'> ?</span></span></li>
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
                            <h6 class='altRow'>Response within 4 hours</h6>
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
                          <a href='http://store.mountmckinney.com/#!/Monthly-WordPress-Support-VIP/p/73472845/category=21262075'>Sign Me Up!</a>
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
                          Quick Fixes are defined as jobs that Mount McKinney determines will take 30 mins or less. You cannot stack multiple small jobs to make a large project. You can find out more info on the <a href='http://mountmckinney.com/service/?service=quick-fix'>Quick Fix</a> page.
                        </p>
                      </div>
                      <h6>Need More Answers?</h6>
                      <div>
                        <p>
                          Check out our <a href='http://mountmckinney.com/faq'>FAQ</a> page.
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
                   <p class='serviceContent'>
                     Mount McKinney would love to create a <strong>beautiful</strong> logo to fit your needs. We work with you to craft a logo that will encapsulate your company&apos;s vision.
                   </p>
                   <br />
                   <p class='serviceContent'>
                     Are you ready to have a logo worth admiring? Let us know below and we&apos;ll reach out shortly!
                   </p>
                    <div class='planPage'>
                      <div class='plans'>
                        <div class='logoPlan'>
                          <h3 class='premier'>Logo Design</h3>
                          <h6 class='slashPricing'>Prices Starting at:</h6>
                          <h1 class='price'>Varies</h1>
                          <div id='logoAccordion'>
                            <h6>Custom Logo Design</h6>
                            <div>
                              <p>
                                Mount McKinney will take the time to get to know you, your business, and who your clients are. We will work with you to create a beautiful logo that will represent your brand well for years to come.
                              </p>
                            </div>
                            <h6 class='altRow'>3 Rounds of Major Revisions Included</h6>
                            <div>
                              <p>
                                Mount McKinney always includes 3 rounds of major revisions after the initial planning phase when we get into the development of the logo. What happens if we need more than 3? We handle that on a case by case basis.
                              <br/>
                              <br/>
                                An example of a major revision would be moving photos and text around the page. This type of revision changes the layout of the logo which is laid out using certain proportions and guidelines.
                              <br/>
                              <br/>
                                A minor revision may be changing the shade of green we use on your font (unless it causes us to make other major color changes).
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
                           <li>Updating WordPress Plugins/Theme</li>
                           <li class='altRow'>CSS Changes (Colors, Fonts, Spacing)</li>
                           <li>Uploading New Content</li>
                           <li class='altRow'>Creating Email Accounts</li>
                           <li>Backing Up a Database</li>
                           <li class='altRow'>Fixing Errors</li>
                           <li>Website Security Scan</li>
                           <li class='altRow'>Fixing a MailChimp Issue</li>
                         </ul>
                         <div class='planButton logoPlanButton'>
                           <a target='_blank' href='http://store.mountmckinney.com/#!/Quick-Fix/p/74367497/category=21593294'>I Need A Quick Fix</a>
                         </div>
                       </div>
                     </div>
                   </div>
                   "
   );
  foreach ($services as $servicename => $service) {
    $services[$servicename]["service"] = $servicename;
  }

return $services;
}
?>
