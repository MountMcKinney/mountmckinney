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
  $services["southern-charm"] = array(
    "thumb" => "img/services/campfireFutureUse.jpg",
    "title" => "Service Name",
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

                  </aside>
                  <br />
                  <p class='blogContent'>
                  </p>
                  "
   );
  foreach ($services as $servicename => $service) {
    $services[$servicename]["service"] = $servicename;
}

return $services;
}
?>
