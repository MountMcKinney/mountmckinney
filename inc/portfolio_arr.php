<?php
  function display_portfolio_html($websiteSKU,$website){
    //build HTML output here
    $output = "";
    $output .= "<li>";
    $output .= '<a href="example.php?name='.$websiteSKU.'">';
    $output .= "<figure>";
    $output .= '<img src="'.$website["thumbnail"] .'" alt="'.$website["name"].'">';
    $output .= '<figcaption>'.$website["name"].'</figcaption>';
    $output .= "</figure>";
    $output .= "</a>";
    $output .= "</li>";

    return $output;
  }

    $websites = array();
    $websites["backcountrydeals"] = array(
      "img" => "/img/port-back.jpeg",
      "thumbnail" => "/img/port-thumb-back.jpg",
      "name" => "backcountrydeals.com"
    );
    $websites["icecream"] = array(
      "img" => "/img/port-threeflavors.jpeg",
      "thumbnail" => "/img/port-thumb-threeflavors.jpg",
      "name" => "3flavorsshop.com"
    );
    $websites["boats"] = array(
      "img" => "/img/port-boats.png",
      "thumbnail" => "/img/port-thumb-boats.png",
      "name" => "boatsboatsboats.com"
    );
    $websites["marriageabbey"] = array(
      "img" => "/img/port-marriage.jpeg",
      "thumbnail" => "/img/port-thumb-marriage.jpg",
      "name" => "marriageabbey.com"
    );
    $websites["rental"] = array(
      "img" => "/img/port-rental.jpeg",
      "thumbnail" => "/img/port-thumb-rental.jpg",
      "name" => "usedrentalequipment.com"
    );
  ?>
