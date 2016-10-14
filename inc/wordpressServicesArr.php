<?php

  function displayWordpressServiceHtml($wordpressService){
    //build HTML output here
    $output = "";
    $output .= "<li>";
    $output .= '<a href="'.BASE_URL.'wordpress/?wordpress-service='.$wordpressService["wordpress-service"].'">';
    $output .= "<figure>";
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
    $output .= "<div class='blogHead'>";
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
          "section" => "<p class='blogContent'>
                          Lorem ipsum
                        </p>
                        <br />
                        <div>
                          <div class='support-plan'>
                            <h3>Basic</h3>
                            <h1 class='price'>$29</h1>
                            <ul>
                              <li>Reason 1</li>
                              <li>Reason 2</li>
                              <li>Reason 3</li>
                            </ul>
                          </div>
                          <div class='support-plan recommended-plan'>
                            <h3>Pro</h3>
                            <h1 class='price'>$59</h1>
                            <ul>
                              <li>Reason 3</li>
                              <li>Reason 4</li>
                              <li>Reason 5</li>
                            </ul>
                          </div>
                          <div class='support-plan'>
                            <h3>Super Duper</h3>
                            <h1 class='price'>$99</h1>
                            <ul>
                              <li>Reason 6</li>
                              <li>Reason 7</li>
                              <li>Reason 8</li>
                            </ul>
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
          "title" => "Website Uptime Monitoring",
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
