<?php
  function display_twocents_html($tcblogname,$tcblog){
    //build HTML output here
    $output = "";
    $output .= "<li>";
    $output .= '<a href="tcblog.php?story='.$tcblogname.'">';
    $output .= "<figure>";
    $output .= '<img src="'.BASE_URL.$tcblog["img"] .'" alt="'.$tcblog["info"].'">';
    $output .= "<figcaption>".$tcblog["title"]."</figcaption>";
    $output .= "</figure>";
    $output .= "</a>";
    $output .= "</li>";

    return $output;
  }

  $tcblogs = array();
  $tcblogs["backpack"] = array(
    "img" => "../img/tc-backpack.png",
    "title" => "Proper Packing Techniques",
    "info" => "How to properly pack a backpack",
    "name" => "Packing"
  );
  $tcblogs["fixed-blade"] = array(
    "img" => "../img/tc-fixed-blade.jpg",
    "title" => "Choosing A Fixed Blade Knife",
    "info" => "How to choose a fixed blade knife",
    "name" => "Fixed Blade"
  );
  $tcblogs["3-day-pack"] = array(
    "img" => "../img/tc-overboard-pack.jpg",
    "title" => "3 Day Backpack",
    "info" => "How to pack a 3 day pack",
    "name" => "3 Day Pack"
  );
  $tcblogs["sawyer-mini"] = array(
    "img" => "../img/tc-sawyer-mini.jpg",
    "title" => "Best Water Filtration",
    "info" => "The best portable water filtration",
    "name" => "Sawyer Mini"
  );
?>
