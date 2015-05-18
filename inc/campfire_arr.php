<?php
  function display_campfire_html($cfstoryname,$cfstory){
    //build HTML output here
    $output = "";
    $output .= "<li>";
    $output .= '<a href="campfire.php?location='.$cfstoryname.'">';
    $output .= "<figure>";
    $output .= '<img src="'.$cfstory["img"] .'" alt="'.$cfstory["name"].'">';
    $output .= "<figcaption>".$cfstory["location"]."</figcaption>";
    $output .= "</figure>";
    $output .= "</a>";
    $output .= "</li>";

    return $output;
  }

  $cfstories = array();
  $cfstories["clearwater"] = array(
    "img" => <?php echo BASE_URL; ?>"img/cl-onf.jpg",
    "name" => "Clearwater Lake, Ocala National Forest",
    "location" => "Clearwater Lake"
  );
  $cfstories["denali"] = array(
    "img" => <?php echo BASE_URL; ?>"/img/denali.jpg",
    "name" => "Denali National Park, Alaska",
    "location" => "Denali National Park"
  );
  $cfstories["arches"] = array(
    "img" => <?php echo BASE_URL; ?>"/img/arch.jpg",
    "name" => "Arches National Park, Utah",
    "location" => "Arches"
  );
  $cfstories["yosemite"] = array(
    "img" => <?php echo BASE_URL; ?>"/img/yosemite.jpg",
    "name" => "Yosemite National Park, California",
    "location" => "Yosemite National Park"
  );
?>
