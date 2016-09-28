<?php

  function displayWordpressServiceHtml($wordpressService){
    //build HTML output here
    $output = "";
    $output .= "<li>";
    $output .= '<a href="'.BASE_URL.'wordpress-service/?wordpress-service='.$wordpressService["wordpress-service"].'">';
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
  $wordpressServices["southern-charm"] = array(
    "thumb" => "img/wordpressServices/campfireFutureUse.jpg",
    "title" => "Wordpress Service Name",
    "section" => "<p class='blogContent'>

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
                  <aside class='asideLeft asideLandscape'>
                    <img src='../img/wordpressService/aside/italianCountrysideAside2.jpg' alt='The Italian Countryside'>
                  </aside>
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
