<?php
  function display_campfire_html($cfstoryname,$cfstory){
    //build HTML output here
    $output = "";
    $output .= "<li>";
    $output .= '<a href="tcblog.php?location='.$cfstoryname.'/">';
    $output .= "<figure>";
    $output .= '<img src="'.BASE_URL.$cfstory["img"] .'" alt="'.$cfstory["name"].'">';
    $output .= "<figcaption>".$cfstory["location"]."</figcaption>";
    $output .= "</figure>";
    $output .= "</a>";
    $output .= "</li>";

    return $output;
  }

  $cfstories = array();
  $cfstories["backpack"] = array(
    "img" => "../backpack.png",
    "title" => "Proper Packing Techniques",
    "info"=> "How to properly pack a backpack"
  );
  $cfstories["winter_tent"] = array(
    "img" => "../img/nl.jpg",
    "title" => "Proper Packing Techniques",
    "info"=> "How to properly pack a backpack"
  );
  $cfstories["firestarter"] = array(
    "img" => "../img/fire.jpg",
    "title" => "Proper Packing Techniques",
    "info"=> "How to properly pack a backpack"
  );
  $cfstories["chopping_wood"] = array(
    "img" => "../img/axe.jpg",
    "title" => "Proper Packing Techniques",
    "info"=> "How to properly pack a backpack"
  );
?>



      <li><a href=""><figure>
        <img src="img/nl.jpg" alt="">
        <figcaption>Pitch a winter tent</figcaption>
        </figure></a></li>
      <li><a href=""><figure>
        <img src="img/fire.jpg" alt="">
        <figcaption>Start a fire</figcaption>
        </figure></a></li>
      <li><a href=""><figure>
        <img src="img/backpack.png" alt="">
        <figcaption>Pack your pack</figcaption>
        </figure></a></li>
      <li><a href=""><figure>
        <img src="img/axe.jpg" alt="">
        <figcaption>Chop wood</figcaption>
        </figure></a></li>
