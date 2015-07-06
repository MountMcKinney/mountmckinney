<?php
  function display_twocents_html($tcblog){
    //build HTML output here
    $output = "";
    $output .= "<li>";
    $output .= '<a href="twocent/?story='.$tcblog["story"].'">';
    $output .= "<figure>";
    $output .= '<img src="'.BASE_URL.$tcblog["img"] .'" alt="'.$tcblog["info"].'">';
    $output .= "<figcaption>".$tcblog["title"]."</figcaption>";
    $output .= "</figure>";
    $output .= "</a>";
    $output .= "</li>";

    return $output;
  }

  function display_twocents_blog($tcblog){
    //build HTML output here
    $output = "";
    $output .= "<div class='blog-head'>";
    $output .= '<img src="'.BASE_URL.$tcblog["img"] .'" class="blog-header-img" alt="'.$tcblog["info"].'">';
    $output .= "</div>";
    $output .= '<p class="blog-content">'.$tcblog["p1"].'</p>';
    $output .= '<aside class="aside1">'.'<img src="'.BASE_URL.$tcblog["aside1"] .'" alt="'.$tcblog["aside1_alt"].'">'.'</aside>';
    $output .= '<p class="blog-content">'.$tcblog["p2"].'</p>';
    $output .= '<p class="blog-content">'.$tcblog["p3"].'</p>';
    $output .= '<p class="blog-content">'.$tcblog["p4"].'</p>';
    $output .= '<p class="blog-content">'.$tcblog["p5"].'</p>';
    $output .= '<p class="blog-content">'.$tcblog["p6"].'</p>';
    $output .= '<p class="blog-content">'.$tcblog["p7"].'</p>';
    $output .= '<p class="blog-content">'.$tcblog["p8"].'</p>';
    $output .= '<p class="blog-content">'.$tcblog["p9"].'</p>';
    $output .= '<p class="blog-content">'.$tcblog["p10"].'</p>';
    $output .= '<p class="blog-catch">'.$tcblog["catch"].'</p>';
    $output .= '<p class="blog-signature">'.$tcblog["signature"].'<br>'.'<br>'.$tcblog["date"].'</p>';
    return $output;
  }

  // function get_recent_tcblogs() {
  //     $recent = array();
  //     $all = get_all_tcblogs();
  //
  //     $total_tcblogs = count($all);
  //     $position = 0;
  //
  //     foreach($all as $tcblog) {
  //         $position = $position + 1;
  //         if ($total_tcblogs - $position < 4) {
  //             $recent[] = $tcblog;
  //         }
  //     }
  //     return $recent;
  // }


  function get_tcblogs_count() {
    return count(get_all_tcblogs());
  }

  function get_tcblogs_subset($positionStart, $positionEnd) {
      $subset = array();
      $all = get_all_tcblogs();

      $position = 0;
      foreach($all as $tcblog) {
          $position += 1;
          if ($position >= $positionStart && $position <= $positionEnd) {
              $subset[] = $tcblog;
          }
      }
      return $subset;
  }

function get_all_tcblogs() {
  $tcblogs = array();
  // $tcblogs["backpack"] = array(
  //   "img" => "img/tc-backpack.png",
  //   "title" => "Proper Packing Techniques",
  //   "info" => "How to properly pack a backpack",
  //   "name" => "Packing",
  //   "p1" => "",
  //   "p2" => "",
  //   "p3" => "",
  //   "aside1" => "",
  //   "aside1_alt" => "",
  //   "p4" => "",
  //   "p5" => "",
  //   "p6" => "",
  //   "p7" => "",
  //   "p8" => "",
  //   "catch" => "Remember, Adventure is Calling!",
  //   "signature" => "John McKinney",
  //   "date" => "May 26th, 2015 "
  // );

  $tcblogs["sawyer-mini"] = array(
    "img" => "img/tc-sawyer-mini.jpg",
    "title" => "Best Water Filtration",
    "info" => "The best portable water filtration",
    "name" => "Sawyer Mini",
    "p1" => "The Sawyer Mini is worth every bit of the $20 I spent on it. It&#39s lightweight, portable, and doesn&#39t take up a lot of room in your pack. I remember seeing the LifeStraw and thinking, while it&#39s a great idea for emergency situations it seems very limited. You would have to lean down near the water and sip from the stream. You have no way of transferring water to a water bottle for later drinking. I suppose you could fill your bottles and sip from them, but this seems ineffective as now your bottles are contaminated. The other option, is water filtration tablets. I&#39ve tried these before and while they&#39re effective, they can leave the water tasting...less than ideal.",
    "p2" => "Then there is the Sawyer Mini. The compact water filtration system that cleans water effectively and doesn&#39t leave the water tasting terrible. It comes with a foldable water pouch so you can collect water from the stream. From there you screw on the Sawyer and either squeeze the water out of the pouch into your water bottle or you can drink it from the Sawyer. Another benefit of the Sawyer is it can be attached inline to a Camelbak. I haven&#39t personally done this, because I don&#39t have a Camelbak but it is fairly straightforward to do from what I&#39ve seen online.",
    "aside1" => "img/tc-river.jpg",
    "aside1_alt" => "When in the backcountry, clean water is essential",
    "p3" => "The Sawyer being the right choice for me became cemented the first time I used it while on a weekend hike in the mountains of Georgia. I was extremely thirsty and instead of having to lean down near the stream and drink while holding myself up from not falling in the stream. I was able to simply lean down fill up a water pouch and drink. It was a simple affair, it left me impressed with the Sawyer.",
    "p4" => "Having clean drinking water while camping is paramount, and to do so without adding extra weight is especially useful. Water is adds a large amount of weight to your pack but an obvious necessity. Having a way to not have to cut down on the amount you will need to carry without having to boil the water to make it safe is always worth the cost. At around $20 it&#39s not a painful cost for a large benefit. The Sawyer is my go to for having filtered water on my hikes. Stay hydrated, not thirsty my friends.",
    "catch" => "Remember, Adventure is Calling!",
    "signature" => "John McKinney",
    "date" => "June 4th, 2015 "
  );

  $tcblogs["trad-backpack"] = array(
    "img" => "img/tc-trad-back-overboard.jpg",
    "title" => "Why I Don't Use A Traditional Pack",
    "info" => "Why I don't use a tradtional backpack in the woods",
    "name" => "My Backpack",
    "p1" => "A few years ago, I was walking to class and got caught in a torrential downpour. I had an important project in my backpack as well as my laptop. I sprinted into the nearest building and waited out the storm. Thankfully, my project wasn&#39t ruined and my laptop was ok. However, the experience was enough for me to spend money to ensure the safety of my belongings. I went home, got on Amazon, and bought a waterproof backpack from Overboard. Now, almost 4 years later, it&#39s still my go to backpack. I ride my bike to work a large amount of the time. It is not uncommon to get stuck in a downpour and my Overboard pack protects my belongings. What does this have to do with camping deep in the woods?",
    "p2" => "Well, the Overboard pack is still my choice of backpack, even when hiking. I know that it doesn&#39t have the internal frame that traditional packs have and doesn&#39t have all the bells and whistles that other packs have. For me though, it&#39s exactly what I need. When I&#39m out hiking in the woods, the last thing I want to think about is if my sleeping bag, tent, and clothes are going to get soaked if a thunderstorm rolls in. I know they have rain covers for regular packs but why buy something extra on top of an already expensive pack?",
    "aside1" => "img/tc-storm.jpg",
    "aside1_alt" => "Now I'm prepared no matter what",
    "p3" => "I know that other packs are made of lighter weight materials but it&#39s not like my bag is heavy, at just about 3 lbs. For far less than a typical pack I get IP66 protection and while that means it&#39s not completely waterproof it performs more than satisfactory. It has a pocket on each side as well as an internal pocket and has various loops to clip items to it on the outside. I am always looking for an upgraded pack that is extremely light and waterproof at the same time, but I rarely find any that offer what I&#39m looking for. If they do, they are often quite expensive and don&#39t offer a large enough improvement to justify the cost.",
    "p4" => "For awhile, I really wanted the 35L Sea to Summit Hydraulic Pack. I thought it would be my new go to pack. It has 5L more than my current pack and is completely waterproof. There was a great sale so I picked it up. I tried packing all the things I had packed in my 30L pack and found it to be more difficult. Maybe it&#39s the way space is used in the Sea to Summit versus the Overboard. Possibly it was because of the difference in shape, the rectangular Overboard versus the cylindrical Sea to Summit. I&#39m not sure why it didn&#39t fit as much. This was the bag I had wanted for a few months and when I got it I was disappointed. So for now I will continue to use my Overboard pack.",
    "catch" => "Remember, Adventure is Calling!",
    "signature" => "John McKinney",
    "date" => "June 16th, 2015 "
  );
  $tcblogs["fixed-blade"] = array(
    "img" => "img/tc-fixed-blade.jpg",
    "title" => "Choosing A Fixed Blade Knife",
    "info" => "How to choose a fixed blade knife",
    "name" => "Fixed Blade",
    "p1" => "There are so many fixed blade knives out there. I know there are as many opinions about which knife is best than there is knives in the world. However, in my opinion I think the one that makes the most sense for the money is the Schrade SCHF26. I wanted something that was quality and would last but wouldn&#39t break the bank. At only $34 on Amazon, the price is excellent and the quality is wonderful as well.",
    "p2" => "First, I would like to suggest the types of things you should look for in a knife:",
    "aside1" => "img/tc-knife-rambo.jpg",
    "aside1_alt" => "Rambo's ridiculously large knife",
    "p3" => "<dl class='tc-blog-list'>
                <dt>Full-tang:</dt>
                  <dd>You don&#39t want it breaking when you are doing strenuous tasks, as that can be very dangerous</dd>
                <dt>9-11&#34 overall length for the knife, with about a 5&#34 blade:</dt>
                  <dd>This is the sweetspot for allowing you to do things that require more detail such as carving or skinning, while still allowing you to have the strength of a blade that can be used to baton wood</dd>
                  <dd>You&#39re not Rambo, you don&#39t really need the giant knife</dd>
                <dt>Sharp pointed tip:</dt>
                  <dd>There are many different styles of knives out there. However, I like the sharp pointed tip as it is the most versatile</dd>
                  <dd>The sharp point allows the best defense against animals, can be used as a screwdriver, and can even pry difficult cans</dd>
                <dt>Flat ground spine and a single edge blade:</dt>
                  <dd>The flat spine allows the knife to more easily be used as a fire starter</dd>
                  <dd>The single edge blade allows you to use the knife for batoning, this would be much more difficult with a double edge blade</dd>
              </dl>",
    "p4" => "All the knives I looked into were full-tang. I did a large amount of looking around before deciding upon the SCHF26. I originally thought I would go with the KA-BAR US Marine Corp, the Ontario 499 Air Force, or the SOG Seal Pup Elite. All are great knives, however, when I held them in my hand they just didn&#39t find feel quite right. I have large hands, so it is important to me to have a handle that is long enough. The KA-BAR and the Seal Pup just felt a little short in my hand for comfort. The Ontario had similar specs as the KA-BAR but was difficult to find locally so I ended up passing on it.",
    "p5" => "After passing on those, I began a new search. My new selections brought me to the KA-BAR BK-22 and the Schrade SCHF9. I thought I would go with the BK-22, I had it in my shopping cart and everything. It was an excellent knife, highly rated, and not a bad price at about $80 on Amazon. The BK-22 has a thick spine at a quarter inch and can take a beating. It&#39s made from 1095 Cro-Van steel Solid. I was about to purchase it, when someone suggested I look at the SCHF26. As I looked into it I began to like it more and more. I watched videos and articles comparing the BK-22 and the SCHF26 and most people agreed that the SCHF26 is just a better value.",
    "p6" => "I pulled the trigger and ordered the SCHF26. I love it. The grip has a rubbery feel, it feels like it wouldn&#39t slip out of my hand even if I was doing something in the rain. It has a spine that is a quarter inch thick and flat. It has a sharp point and is a single edge blade. The weight distribution just felt right in my hands. It was a length I liked by staying just under 11&#34 and had a large handle at 5.4&#34. I&#39m very happy with my purchase, needless to say.",
    "p7" => "For selecting your own knife, there are many that will work. I was splitting hairs comparing many knives, many of which I didn&#39t list. People get very opinionated about which knife is best, and that&#39s fine, we are all passionate about different things. I just think that as long as it is a knife that is full-tang, the right size, the right shape, and made of a good material you will be fine. Often, picking a knife is best done by placing it in your hand and determining if it passes the initial gut test. Good luck picking out a knife and if you have questions or comments, feel free to leave them below!",
    "catch" => "Remember, Adventure is Calling!",
    "signature" => "John McKinney",
    "date" => "May 12th, 2015 "
  );
  $tcblogs["3-day-spring-pack"] = array(
    "img" => "img/tc-three-day-spring.jpg",
    "title" => "The 3 Day Spring Backpack",
    "info" => "How to pack a 3 day pack for Spring",
    "name" => "3 Day Spring Pack",
    "p1" => "I always have my bag packed, when it&#39s time to go I don&#39t spend time thinking about what I need. I take things out to wash and clean after a trip and then immediately place them back in the pack. I carry a 30 liter pack, I&#39m always looking for ways to lower the weight and hopefully get down to a 20 liter pack. It&#39s a backpack from Overboard that is rated to survive quick submersions. It&#39s definitely not the traditional backpacker&#39s pack but it works well for me.",
    "p2" => "Today, I thought I would give you a glimpse into my 3 season pack. I would take this pack for a trip that was up to 5 days long. I look for things that pack down small and are lightweight but still provide the necessary protection. I look for deals on gear and equipment so I can get the most for my money. Most of the things I&#39ve bought were from Sierra Trading Post, Moosejaw, and Amazon.",
    "aside1" => "img/tc-trad-back-overboard.jpg",
    "aside1_alt" => "Contents of my bag, laid out",
    "p3" => "<dl class='tc-blog-list'>
              <dt>Sleeping bag: Kelty 20F Cosmic Down 550 Fill - Long</dt>
              <dt>Eagle Creek Pack-It Specter Compression Cube, inside:</dt>
                <dd>T-shirts (quick drying and lightweight)</dd>
                <dd>Athletic shorts (quick drying and lightweight)</dd>
                <dd>A pair of Adidas athletic boxers (light and quick drying)</dd>
                <dd>Smartwool Outdoor Sport Mini Socks</dd>
              <dt>Klymit Insulated Static V Sleeping Pad</dt>
              <dt>REI Half Dome 2 Plus Tent</dt>
              <dt>REI Half Dome 2 Plus Footprint</dt>
              <dt>50&#39 Paracord</dt>
              <dt>UCO Stormproof Match Kit</dt>
              <dt>Magnesium/Flint Fire Starter (for emergencies)</dt>
              <Sawyer SP128 Mini Water Filtration System</dt>
                <dd>This has a 16 oz reusable water pouch</dd>
              <dt>Timbuk2 Clear Flexito Toiletry Kit - Small, inside (all travel sizes):</dt>
                <dd>3 oz bottle of camp soap</dd>
                <dd>Toothpaste/toothbrush</dd>
                <dd>Floss</dd>
                <dd>Sun screen</dd>
                <dd>Mouthwash</dd>
                <dd>Deodorant (Just because I&#39m in the woods doesn&#39t mean I want to smell bad)</dd>
                <dd>Earplugs</dd>
              <dt>Babywipes</dt>
              <dt>Adventure Medical Kit Dayhiker First Aid Kit</dt>
              <dt>2 9x11 Loksaks</dt>
              <dt>Food: (varies)</dt>
                <dd>Peanut Butter</dd>
                <dd>Jelly Packets</dd>
                <dd>Sandwich thins</dd>
                <dd>Jerky (I like Trader Joe&#39s Turkey the best)</dd>
                <dd>Fruit strips</dd>
                <dd>Hard Cheese (like parmesan)</dd>
                <dd>Dehydrated fruit</dd>
                <dd>Oranges (worth the weight to me)</dd>
                <dd>Almonds/Trail mix</dd>
              <dt>Black Diamond Spot Headlamp</dt>
              <dt>Emergency Rain Poncho</dt>
              <dt>The North Face Quince Down Jacket (packs into it&#39s own pocket and doubles as a pillow)</dt>
              <dt>Keffiyeh (a lightweight head covering similar to a bandana but larger, great for protecting from the sun)</dt>
              <dt>Attached to the outside of my pack:</dt>
                <dd>Emergency whistle (attached to my shoulder strap of my bag)</dd>
                <dd>Compass and Map (outside pocket)</dd>
                <dd>Lightweight Nike running hat</dd>
                <dd>The Deuce of Spades and a bag of tp (Lightweight Trowel. Hey, nature calls out in the wild)</dd>
                <dd>2 24 oz reusable water bottles</dd>
              <dt>Things on my person but not in my pack:</dt>
                <dd>Schrade SCHF26 Fixed Blade Knife</dd>
                <dd>Wallet</dd>
                <dd>Phone</dd>
                <dd>Nikon D40 Camera (not the top of the line but gets the job done)</dd>
                <dd>Ex Officio boxers</dd>
                <dd>Dri-fit shirt</dd>
                <dd>Shorts</dd>
                <dd>Icebreaker Multisport Light Micro Socks</dd>
                <dd>Nike Free Trainer (Definitely not traditional hiking shoe/boot but because my pack is light I can wear more comfortable shoes and not worry about the need for ankle support)</dd>
              <dt>When it&#39s cooler out I include:</dt>
                <dd>Columbia Omni-heat half-zip pullover</dd>
                <dd>Beanie</dd>
                <dd>Long underwear</dd>
                <dd>Gore Bike Wear Soft Shell Windstopper Gloves</dd>
            </dl>",
    "p4" => "I hope by seeing what&#39s in my pack you have a better understanding of things you need to pack and things you can leave at home. I&#39m always looking for ways to leave more at home so I can carry less weight. If you have any suggestions, make sure to leave a comment.",
    "catch" => "Remember, Adventure is Calling!",
    "signature" => "John McKinney",
    "date" => "April 17th, 2015 "
  );

  foreach($tcblogs as $tcblogname => $tcblog){
    $tcblogs[$tcblogname]["story"] = $tcblogname;
  }
  return $tcblogs;
}
?>


<!-- <dl class='tc-blog-list'>
  <dt>Sleeping bag: Kelty 20F Cosmic Down 550 Fill - Long</dt>
  <dt>Eagle Creek Pack-It Specter Compression Cube, inside:</dt>
    <dd>T-shirts (quick drying and lightweight)</dd>
    <dd>Athletic shorts (quick drying and lightweight)</dd>
    <dd>A pair of Adidas athletic boxers (light and quick drying)</dd>
    <dd>Smartwool Outdoor Sport Mini Socks</dd>
  <dt>Klymit Insulated Static V Sleeping Pad</dt>
  <dt>REI Half Dome 2 Plus Tent</dt>
  <dt>REI Half Dome 2 Plus Footprint</dt>
  <dt>50’ Paracord</dt>
  <dt>UCO Stormproof Match Kit</dt>
  <dt>Magnesium/Flint Fire Starter (for emergencies)</dt>
  <Sawyer SP128 Mini Water Filtration System</dt>
    <dd>This has a 16 oz reusable water pouch</dd>
</dl> -->
