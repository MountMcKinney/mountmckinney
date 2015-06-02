<?php
  function display_portfolio_html($websiteSKU,$website){
    //build HTML output here
    $output = "";
    $output .= "<li>";
    $output .= '<a href="'.BASE_URL.$website["img"].'/">';
    $output .= "<figure>";
    $output .= '<img src="'.BASE_URL.$website["thumbnail"] .'" alt="'.$website["name"].'">';
    $output .= '<figcaption>"'.BASE_URL.$website["name"].'</figcaption>"';
    $output .= "</figure>";
    $output .= "</a>";
    $output .= "</li>";

    return $output;
  }

    $websites = array(
    $websites[tent] = array(
      "img" => "/img/port-tents4sale",
      "thumbnail" => "/img/port-thumb-tents4sale",
      "name" => "tents4sale.com"
    );
    $websites[super] = array(
      "img" => "/img/port-superhero",
      "thumbnail" => "/img/port-thumb-superhero",
      "name" => "superhero-fan-site.com"
    );
    $websites[boats] = array(
      "img" => "/img/port-boats.png",
      "thumbnail" => "/img/port-thumb-boats.png",
      "name" => "boatsboatsboats.com"
    );
    $websites[marriageabbey] = array(
      "img" => "/img/port-marriage-abbey",
      "thumbnail" => "/img/port-thumb-marriage-abbey.jpg",
      "name" => "marriageabbey.com"
    );
    $websites[sport] = array(
      "img" => "/img/port-sport",
      "thumbnail" => "/img/port-thumb-sport",
      "name" => "sport2sport.com"
    );
  ?>
