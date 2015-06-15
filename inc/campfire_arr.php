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

  function display_campfire_blog($cfstoryname,$cfstory){
    //build HTML output here
    $output = "";
    $output .= "<div class='blog-head'>";
    $output .= '<img src="'.BASE_URL.$cfstory["img"] .'" class="blog-header-img" alt="'.$cfstory["location"].'">';
    $output .= "</div>";
    $output .= '<p class="blog-content">'.$cfstory["p1"].'</p>';
    $output .= '<p class="blog-content">'.$cfstory["p2"].'</p>';
    $output .= '<aside class="aside1">'.'<img src="'.BASE_URL.$cfstory["aside1"] .'" alt="'.$cfstory["aside1_alt"].'">'.'</aside>';
    $output .= '<p class="blog-content">'.$cfstory["p3"].'</p>';
    $output .= '<p class="blog-content">'.$cfstory["p4"].'</p>';
    $output .= '<aside class="aside2">'.'<img src="'.BASE_URL.$cfstory["aside2"] .'" alt="'.$cfstory["aside2_alt"].'">'.'</aside>';
    $output .= '<p class="blog-content">'.$cfstory["p5"].'</p>';
    $output .= '<p class="blog-content">'.$cfstory["p6"].'</p>';
    $output .= '<p class="blog-catch">'.$cfstory["catch"].'</p>';
    $output .= '<p class="blog-signature">'.$cfstory["signature"].'</p>';
    $output .= '<p class="blog-signature">'.$cfstory["date"].'</p>';
    return $output;
  }


  $cfstories = array();
  $cfstories["cohutta_mountain"] = array(
    "img" => "img/cf-cohutta-mountain.jpg",
    "name" => "Cohutta Mountain Loop",
    "location" => "Cohutta Wilderness, GA",
    "p1" => "",
    "p2" => "",
    "aside1" => "img/cf-cl-onf-tent.jpg",
    "aside1_alt" => "Campground, my tent",
    "p3" => "",
    "p4" => "",
    "aside2" => "img/cf-cl-onf-odd.jpg",
    "aside2_alt" => "The best party people ever",
    "p5" => "",
    "p6" => ".",
    "catch" => "Always remember, Adventure is Calling!",
    "signature" => "John McKinney",
    "date" => "March 9th, 2015 "
  );
  $cfstories["juniper_springs"] = array(
    "img" => "img/cf-juniper-swim-hole.jpg",
    "name" => "Juniper Springs",
    "location" => "Ocala National Forest, FL",
    "p1" => "",
    "p2" => "",
    "aside1" => "img/cf-cl-onf-tent.jpg",
    "aside1_alt" => "Campground, my tent",
    "p3" => "",
    "p4" => "",
    "aside2" => "img/cf-cl-onf-odd.jpg",
    "aside2_alt" => "The best party people ever",
    "p5" => "",
    "p6" => ".",
    "catch" => "Always remember, Adventure is Calling!",
    "signature" => "John McKinney",
    "date" => "March 19th, 2015 "
  );
  $cfstories["grayton_beach"] = array(
    "img" => "img/cf-grayton-beach.jpg",
    "name" => "Grayton Beach",
    "location" => "Santa Rosa Beach, FL",
    "p1" => "",
    "p2" => "",
    "aside1" => "img/cf-cl-onf-tent.jpg",
    "aside1_alt" => "Campground, my tent",
    "p3" => "",
    "p4" => "",
    "aside2" => "img/cf-cl-onf-odd.jpg",
    "aside2_alt" => "The best party people ever",
    "p5" => "",
    "p6" => ".",
    "catch" => "Always remember, Adventure is Calling!",
    "signature" => "John McKinney",
    "date" => "May 7th, 2015 "
  );
  $cfstories["clearwater_lake"] = array(
    "img" => "img/cf-clear-onf-lake.jpg",
    "name" => "Clearwater Lake",
    "location" => "Ocala National Forest, FL",
    "p1" => "Getting away from it all is one of the best things you can do sometimes. When the stresses of modern day life become too much, sometimes getting out into the wilderness can be just what the doctor ordered. You come back refreshed and renewed and that’s exactly what happened to me this past weekend. Some friends and I got away to the Ocala National Forest for a little car camping.",
    "p2" => "When we arrived Friday evening it was already dark (which is always frustrating to set up a tent in) and rain was threatening. Thankfully the rain held off and we were able to get our tents up and fire going. We reheated some baked ziti that one of the friends had made and froze for our dinner. This turned out to be one of the nastiest meals I’ve had. Thankfully, when you’re hungry you just don’t care. The wood was a little wet and smoked a large amount because of that. This caused the ziti to have a smoked flavor that did not complement it. Between the four of us, we emptied about ⅓ of a container of parmesan on to the pasta (it was the only thing that seemed to neutralize the smoky flavor). The next few hours were us sitting around the fire sharing stories, cracking open a few beers, and of course, poking fun at the friend’s terribly executed dinner. We headed to bed but didn’t realize that we had a snorer amongst us. How I wish I would’ve grabbed ear plugs before bed. A night of tossing and turning attempting to block the noise was ahead of me.",
    "aside1" => "img/cf-cl-onf-tent.jpg",
    "aside1_alt" => "Campground, my tent",
    "p3" => "Saturday morning I woke up early and went for a hike by myself around the lake. Everything was still in the forest except for a group of 4 deer who didn’t seem to care too much about me. They crossed the trail a few hundred feet ahead of me looking for breakfast. It was a peaceful time to relax and be alone with my thoughts. The beauty of nature always makes me contemplate what’s necessary in life. As I came back from my morning hike the whole campsite began to wake up and get their day started. I took another mid-morning hike with one of my friends. It was a great time to just hang out with him and catch up on life. The rest of the day was spent lounging around the campsite and throwing the football down by the lake.",
    "p4" => "That night, we met a group who definitely knew how to have a good time. They were celebrating a milestone, one of the guy’s 60th birthday. It was 4 friends and their families. Each had the exact same Jeep just in a different color. They had neon shirts, neon painted croquet balls, led string lights everywhere all of which corresponded to the color of their Jeep. They had black lights hooked up to their Jeeps to accentuate all the neon colors.",
    "aside2" => "img/cf-cl-onf-odd.jpg",
    "aside2_alt" => "The best party people ever",
    "p5" => "In speaking with them, they had met when they worked for their city to build a haunted house. They had done that for years and collected a large amount of haunted props throughout the years. They told me about how Halloween at their homes consists of house hopping between the 4 of them and checking out their incredibly elaborate displays. One guy had a “rain room”, in which he set up pipes to create fake rain as you walked across a bridge that would move due to hydraulics. Needless to say, they take Halloween to another level. I want to visit them in October and see these amazing houses.",
    "p6" => "Thankfully, I had ear plugs Saturday night. I slept like a rock and think I only woke up once. Sunday was our clean up and head out day. It put an end to an amazing weekend. It was unbelievable how quickly the time went by, I can’t wait to go again though. I hope if you haven’t been camping, you get out there and try it. Start with car camping and maybe you’ll eventually move into some more backcountry type through-hiking. Even if you don’t, just go be outdoors. There is so much outside our wifi and paved city streets. Also, become friends with the weird people at your campsite, they’re often the best way to get memorable moments.",
    "catch" => "Always remember, Adventure is Calling!",
    "signature" => "John McKinney",
    "date" => "March 9th, 2015 "
  );
  $cfstories["about-me"] = array(
    "img" => "img/contact-pic-me.jpg",
    "name" => "Who Am I?",
    "location" => "This is a story all about yours truly",
    "p1" => "Welcome to the very first Campfire Story here at Mount McKinney! This is an exciting time for me. I figured in my first post I should share a little about myself and explain why you should take any of the advice I give in my How To section, called <a href='twocents.php'>Two Cents</a>.",
    "p2" => "First off we’ll get the introductions out of the way, my name is John and I am a front-end developer. I love creating web sites and would love to be the web developer for your next project. If you would like more information on my services or would like to discuss a possible project you can check out my <a href='portfolio/portfolio.php'>Portfolio</a> or shoot me an <a href='mailto:john@mountmckinney.com'>email</a>.",
    "aside1" => "img/cf-destin-beach.jpg",
    "aside1_alt" => "Destin, FL",
    "p3" => "I grew up on the Panhandle of Florida with some of the world’s most beautiful beaches. At a young age, I fell in love with the outdoors. I remember spending hours pretending I was a spy or a soldier with the other boys my age in the woods around our neighborhood. As I got older, my fascination with the outdoors only grew. I bike to work just to get outside more, kayak when I can on the weekends, and take walks on local trails. I’m most at home outside the walls of my house.",
    "p4" => "As for the <a href='campfirestories/campfirestories.php'>Campfire Stories</a>, I will be bringing you tales of my time in the great outdoors. This could cover anything from backpacking camping trips to remote areas of Yosemite, car camping trips to Yellowstone, beach camping on the Gulf of Mexico, or even just a beautiful trail that I take with my lovely wife. I look forward to sharing these adventures with all of you. If you have a suggestion for where my next adventure should be, then I would love to hear your thoughts! Drop me an email or comment on my posts anytime.",
    "aside2" => "img/cf-banks-tahoe.jpg",
    "aside2_alt" => "Lake Tahoe with Banks",
    "p5" => "As for the tips I’ll be giving you in the Two Cents section, I am by no means an expert and if you disagree with any of my recommendations, then I would love to hear your opinion. I love learning and researching, if I’m passionate about a topic I will spend hours upon hours reading articles on it. If I am going to purchase something to use in the backcountry, I will read expert advice so that I know I have the best product for the money. This is what I promise you, that when I give you a recommendation on what fixed blade knife to buy, how to survive a bear attack, or what food to eat on the trail know that it comes after a large amount of research on a topic. You can think of my articles as a summary of opinions. Instead of you spending hours to read all about what sleeping bag to buy, just take a look at the compiled opinions on my site.",
    "p6" => "Sound good? Great, I hope you enjoy my articles!",
    "catch" => "Always remember, Adventure is Calling!",
    "signature" => "John McKinney",
    "date" => "February 27, 2015 "
  );

  // foreach($cfstories as $cstoryname => $cfstory){
  //   $cfstories[$cfstoryname]["storyname"] = $cfstoryname;
  // }
  // return $cfstories;
?>
