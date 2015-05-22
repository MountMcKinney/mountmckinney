<?php
  function display_campfire_html($cfstoryname,$cfstory){
    //build HTML output here
    $output = "";
    $output .= "<li>";
    $output .= '<a href="campfire.php?name='.$cfstoryname.'">';
    $output .= "<figure>";
    $output .= '<img src="'.BASE_URL.$cfstory["img"] .'" alt="'.$cfstory["location"].'">';
    $output .= "<figcaption>".$cfstory["name"]."</figcaption>";
    $output .= "</figure>";
    $output .= "</a>";
    $output .= "</li>";

    return $output;
  }

  $cfstories = array();
  $cfstories["clearwater_lake"] = array(
    "img" => "img/cl-onf.jpg",
    "name" => "Clearwater Lake",
    "location" => "Ocala National Forest, FL"
  );
  $cfstories["grayton_beach"] = array(
    "img" => "img/denali.jpg",
    "name" => "Grayton Beach",
    "location" => "Santa Rosa Beach, FL"
  );
  $cfstories["juniper_springs"] = array(
    "img" => "img/arch.jpg",
    "name" => "Juniper Springs",
    "location" => "Ocala National Forest, FL"
  );
  $cfstories["cohutta_mountain"] = array(
    "img" => "img/yosemite.jpg",
    "name" => "Cohutta Mountain Loop",
    "location" => "Cohutta Mountain, GA"
  );

  // foreach($cfstories as $cstoryname => $cfstory){
  //   $cfstories[$cfstoryname]["storyname"] = $cfstoryname;
  // }
  // return $cfstories;
?>
