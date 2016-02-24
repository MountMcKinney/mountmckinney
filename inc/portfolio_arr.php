<?php
  function display_portfolio_html($websiteSKU,$website){
    //build HTML output here
    $output = "";
    $output .= "<li>";
    $output .= '<a href="http://'.$website["site"].'">';
    $output .= "<figure>";
    $output .= '<img src="'.$website["thumbnail"] .'" alt="'.$website["name"].'">';
    $output .= '<figcaption>'.$website["name"].'</figcaption>';
    $output .= "</figure>";
    $output .= "</a>";
    $output .= "</li>";

    return $output;
  }

    $websites = array();
    $websites["icecream"] = array(
      "thumbnail" => "/img/3flavorsshop.png",
      "name" => "The 3 Flavors Shop",
      "site" => "3flavorsshop.com"
    );
    $websites["burger"] = array(
      "thumbnail" => "/img/ketchupwithyalater.png",
      "name" => "Ketchup With Ya Later",
      "site" => "ketchuplater.com"
    );
    // $websites["backcountrydeals"] = array(
    //   "img" => "/img/port-back.jpeg",
    //   "thumbnail" => "/img/port-thumb-back.jpg",
    //   "name" => "backcountrydeals.com"
    // );
    // $websites["boats"] = array(
    //   "img" => "/img/port-boats.png",
    //   "thumbnail" => "/img/port-thumb-boats.png",
    //   "name" => "boatsboatsboats.com"
    // );
    // $websites["marriageabbey"] = array(
    //   "img" => "/img/port-marriage.jpeg",
    //   "thumbnail" => "/img/port-thumb-marriage.jpg",
    //   "name" => "marriageabbey.com"
    // );
    // $websites["rental"] = array(
    //   "img" => "/img/port-rental.jpeg",
    //   "thumbnail" => "/img/port-thumb-rental.jpg",
    //   "name" => "usedrentalequipment.com"
    // );
  ?>
