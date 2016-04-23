<?php
  function display_portfolio_html($websiteSKU,$website){
    //build HTML output here
    $output = "";
    $output .= "<li>";
    $output .= '<a href="http://'.$website["site"].'" target="_blank">';
    $output .= "<figure>";
    $output .= '<img src="'.$website["thumbnail"] .'" alt="'.$website["name"].'">';
    $output .= '<figcaption>'.$website["name"].'</figcaption>';
    $output .= "</figure>";
    $output .= "</a>";
    $output .= "</li>";

    return $output;
  }

    $websites = array();
    $websites["wwb"] = array(
      "thumbnail" => "/img/portfolio/wwb.jpg",
      "name" => "White, Wyne, and Bree",
      "site" => "wwandb.website"
    );
    $websites["icecream"] = array(
      "thumbnail" => "/img/portfolio/3flavorsshop.png",
      "name" => "The 3 Flavors Shop",
      "site" => "3flavorsshop.com"
    );
    $websites["burger"] = array(
      "thumbnail" => "/img/portfolio/ketchupwithyalater.jpg",
      "name" => "Ketchup With Ya Later",
      "site" => "ketchuplater.com"
    );
    $websites["neurofit"] = array(
      "thumbnail" => "/img/portfolio/neurofit.png",
      "name" => "NeuroFit",
      "site" => "neurofit.website"
    );
  ?>
