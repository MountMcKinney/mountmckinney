<?php
  function display_campfire_html($cfstoryname,$cfstory){
    //build HTML output here
    $output = "";
    $output = $output . "<li>";
    $output = $output .'<a href="campfire-blog.php?php='.$cfstoryname.'">';
    $output = $output ."<figure>";
    $output = $output .'<img src="'.$cfstory["img"] .'" alt="'.$cfstory["name"].'">';
    $output = $output ."<figcaption>".$cfstory["location"]."</figcaption>";
    $output = $output ."</figure>";
    $output = $output ."</a>";
    $output = $output ."</li>";

    return $output;
  }

  $cfstories = array();
  $cfstories["clearwater-lake"] = array(
    "img" => "../img/cl-onf.jpg",
    "name" => "Clearwater Lake, Ocala National Forest",
    "location" => "Clearwater Lake"
  );
  $cfstories["denali"] = array(
    "img" => "../img/denali.jpg",
    "name" => "Denali National Park, Alaska",
    "location" => "Denali National Park"
  );
  $cfstories["arches"] = array(
    "img" => "../img/arch.jpg",
    "name" => "Clearwater Lake, Ocala National Forest",
    "location" => "Clearwater Lake"
  );
  $cfstories["yosemite"] = array(
    "img" => "../img/yosemite.jpg",
    "name" => "Yosemite National Park, California",
    "location" => "Yosemite National Park"
  );
?>
