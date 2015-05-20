<?php
  function display_campfire_html($cfstoryname,$cfstory){
    //build HTML output here
    $output = "";
    $output .= "<li>";
    $output .= '<a href="campfire.php?location='.$cfstoryname.'/">';
    $output .= "<figure>";
    $output .= '<img src="'.BASE_URL.$cfstory["img"] .'" alt="'.$cfstory["name"].'">';
    $output .= "<figcaption>".$cfstory["location"]."</figcaption>";
    $output .= "</figure>";
    $output .= "</a>";
    $output .= "</li>";

    return $output;
  }

  $cfstories = array();
  $cfstories[101] = array(
    "img" => "../img/cl-onf.jpg",
    "name" => "Clearwater Lake, Ocala National Forest",
    "location" => "Clearwater Lake"
  );
  $cfstories[102] = array(
    "img" => "../img/denali.jpg",
    "name" => "Denali National Park, Alaska",
    "location" => "Denali National Park"
  );
  $cfstories[103] = array(
    "img" => "../img/arch.jpg",
    "name" => "Arches National Park, Utah",
    "location" => "Arches National Park"
  );
  $cfstories[104] = array(
    "img" => "../img/yosemite.jpg",
    "name" => "Yosemite National Park, California",
    "location" => "Yosemite National Park"
  );
  $cfstories[105] = array(
    "img" => "../img/yosemite.jpg",
    "name" => "Yosemite National Park, California",
    "location" => "Yosemite National Park"
  );
?>
