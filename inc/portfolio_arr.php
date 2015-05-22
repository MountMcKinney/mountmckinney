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
    "img" => "../img/port-tents4sale",
    "thumbnail" => "../img/port-thumb-tents4sale",
    "name" => "tents4sale.com"
  );
  $cfstories[102] = array(
    "img" => "../img/port-blog",
    "thumbnail" => "../img/port-thumb-blog",
    "name" => "blog-site.com"
  );
  $cfstories[103] = array(
    "img" => "../img/port-bikes",
    "thumbnail" => "../img/port-thumb-bikes",
    "name" => "bikesbikesbikes.com"
  );
  $cfstories[104] = array(
    "img" => "../img/port-marriage-abbey",
    "thumbnail" => "../img/port-thumb-marriage-abbey",
    "name" => "marriageabbey.com"
  );
  $cfstories[105] = array(
    "img" => "../img/port-sport",
    "thumbnail" => "../img/port-thumb-sport",
    "name" => "sport2sport.com"
  );
?>
