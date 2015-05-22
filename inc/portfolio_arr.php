<?php
  function display_portfolio_html($websitenum,$website){
    //build HTML output here
    $output = "";
    $output .= "<li>";
    // $output .= '<a href="campfire.php?location='.$website["img"].'/">';
    $output .= "<figure>";
    $output .= '<img src="'.BASE_URL.$website["thumbnail"] .'" alt="'.$website["name"].'">';
    $output .= "<figcaption>".$website["name"]."</figcaption>";
    $output .= "</figure>";
    // $output .= "</a>";
    $output .= "</li>";

    return $output;
  }

  $websites = array(
  $cfstories[101] = array(
    "img" => "../img/",
    "thumbnail" => "",
    "name" => "Toys4sale.com"
  );
  $cfstories[102] = array(
    "img" => "../img/",
    "thumbnail" => "",
    "name" => "Toys4sale.com"
  );
  $cfstories[103] = array(
    "img" => "../img/",
    "thumbnail" => "",
    "name" => "Toys4sale.com"
  );
  $cfstories[104] = array(
    "img" => "../img/",
    "thumbnail" => "",
    "name" => "Toys4sale.com"
  );
  $cfstories[105] = array(
    "img" => "../img/",
    "thumbnail" => "",
    "name" => "Toys4sale.com"
  );
?>
