<?php
  function display_campfire_html($cfstory){
    //build HTML output here
    $output = "";
    $output .= "<li>";
    $output .= '<a href="campfire.php?story='.$cfstory["story"].'">';
    $output .= "<figure>";
    $output .= '<img src="'.BASE_URL.$cfstory["img"] .'" alt="'.$cfstory["location"].'">';
    $output .= "<figcaption>".$cfstory["name"]."</figcaption>";
    $output .= "</figure>";
    $output .= "</a>";
    $output .= "</li>";

    return $output;
  }

  function display_campfire_blog($cfstory){
    //build HTML output here
    $output = "";
    $output .= "<div class='blog-head'>";
    $output .= '<img src="'.BASE_URL.$cfstory["img"] .'" class="blog-header-img" alt="'.$cfstory["location"].'">';
    $output .= "</div>";
    $output .= '<p class="blog-content">'.$cfstory["p1"].'</p>';
    $output .= '<aside class="aside1">'.'<img src="'.BASE_URL.$cfstory["aside1"] .'" alt="'.$cfstory["aside1_alt"].'">'.'</aside>';
    $output .= '<p class="blog-content">'.$cfstory["p2"].'</p>';
    $output .= '<p class="blog-content">'.$cfstory["p3"].'</p>';
    $output .= '<aside class="aside2">'.'<img src="'.BASE_URL.$cfstory["aside2"] .'" alt="'.$cfstory["aside2_alt"].'">'.'</aside>';
    $output .= '<p class="blog-content">'.$cfstory["p4"].'</p>';
    $output .= '<p class="blog-content">'.$cfstory["p5"].'</p>';
    $output .= '<p class="blog-content">'.$cfstory["p6"].'</p>';
    $output .= '<p class="blog-content">'.$cfstory["p7"].'</p>';
    $output .= '<p class="blog-content">'.$cfstory["p8"].'</p>';
    $output .= '<p class="blog-content">'.$cfstory["p9"].'</p>';
    $output .= '<p class="blog-content">'.$cfstory["p10"].'</p>';
    $output .= '<p class="blog-catch">'.$cfstory["catch"].'</p>';
    $output .= '<p class="blog-signature">'.$cfstory["signature"].'<br>'.'<br>'.$cfstory["date"].'</p>';
    return $output;
  }

// function get_recent_cfstories() {
//     $recent = array();
//     $all = get_all_cfstories();
//
//     $total_cfstories = count($all);
//     $position = 0;
//
//     foreach($all as $cfstory) {
//         $position = $position + 1;
//         if ($total_cfstories - $position < 4) {
//             $recent[] = $cfstory;
//         }
//     }
//     return $recent;
// }


function get_cfstories_count() {
  return count(get_all_cfstories());
}

function get_cfstories_subset($positionStart, $positionEnd) {
    $subset = array();
    $all = get_all_cfstories();

    $position = 0;
    foreach($all as $cfstory) {
        $position += 1;
        if ($position >= $positionStart && $position <= $positionEnd) {
            $subset[] = $cfstory;
        }
    }
    return $subset;
}

function get_all_cfstories() {
  $cfstories = array();
  $cfstories["cohutta_mountain"] = array(
    "img" => "img/cf-cohutta-mountain.jpg",
    "name" => "Cohutta Mountain Loop",
    "location" => "Cohutta Wilderness, GA",
    "p1" => "This past weekend, a friend and I headed up to the Cohutta Mountains in Northwest Georgia to hike the Cohutta Mountain Loop. It was absolutely gorgeous out there. We parked at the Three Forks Trailhead and headed out on the East Cowpen trail. My friend had a running watch to measure our distance traveled as well as elevation changes throughout the trip. We started at an elevation of 3,200 ft. and began to descend into the Cohutta Wilderness.",
    "p2" => "What we didn&#39t know when we started off on the trail was the lack of water that would be available on the trail we took. I had read some reviews of the area and some stories from the specific loop we were planning on doing and all the pictures were of people down by a river. What I didn&#39t realize was that the first time we&#39d see a river on the trail we took in would be when we got to the Jacks River after hiking just under 8 miles and dropping 2,000 ft. in elevation.",
    "aside1" => "img/cf-cohutta-tent.jpg",
    "aside1_alt" => "Our tent near the river",
    "p3" => "We had some water but I drink a lot and when we got down to the river after those 8 miles, I drank 4 bottles of water immediately and then another 4 when I got to camp. We used the Sawyer Mini for water filtration. It is definitely one of the best purchases I&#39ve ever made, it&#39s ultra portable and cleans the water effectively.",
    "p4" => "We then had to wade our way through the stream a couple of times to get to an open area to make camp. Slipping my feet into the cold water stream water after a good day of hiking was one of the more refreshing feelings I&#39ve had. The area we found was right on the river bank, just far enough back to have dry, solid ground but still right on the river. We set up the camp, started a fire, and ate dinner. It was so peaceful out there. The sound of the river lulled me to sleep, well that is until 5 mins after closing my eyes when nature called. All that water I guzzled to get rehydrated was ready to be set free. I must have woken up 4-5 times that night.",
    "aside2" => "img/cf-cohutta-me.jpg",
    "aside2_alt" => "Me being goofy down by the falls",
    "p5" => "The next morning, we packed up camp and headed down to see the Jack&#39s River Falls. The hike down to the Falls was great. As we weaved our way around the river down we started to hear the thundering sound of a waterfall. The falls were beautiful, we just stopped and stared at them for awhile, neither of us wanting to move on. We pushed further to try and get different views of the natural beauty that was before us. After having our fill, who am I kidding I could still be there staring at them, we headed out on the trail back toward our car. We were at an elevation of 1,200 ft. now and were dreading the climb back.",
    "p6" => "The trail back was definitely painful, 2,000 ft. increase in 8 miles. We would boo out loud whenever the trail dropped in elevation for more than a few steps knowing that we would have to climb it again. The most frustrating thing was not the elevation increases, but that we thought there would be water on this trail. We quickly realized we were wrong and we would need to conserve water as we watched the trail we were on and the river part ways. We did stop for lunch at an area that clearly fed into the river, however, it had been dried up to mostly mud at this time of year.",
    "p7" => "If I was to do another hike in this area, which I would definitely not be opposed to, I would take the Jack&#39s River Trail the whole way. The lack of water on the trail we took was definitely a detriment to us staying an extra night out there. If we were take a trail that stayed on or close to the river the whole way we definitely would have stayed longer. Oh well, you live and you learn right? All in all we descended 2,000 ft. and ascended that same amount, as well as hiking a total of 20 miles. Definitely not a bad way to spend a Memorial Day weekend.",
    "p8" => "We stayed in Atlanta Sunday night so we would be fresh driving home the next day. That post backpacking shower is one of the best things that this life has to offer. After getting cleaned up, we went out for dinner at the Brick Store Pub in Decatur. Their beer selection was exactly what was needed after hiking 20 miles in 2 days. I don&#39t know if it was the best beer I&#39ve ever had but it definitely tasted like it.",
    "catch" => "Remember, Adventure is Calling!",
    "signature" => "John McKinney",
    "date" => "May 26th, 2015 "
  );
  $cfstories["juniper_springs"] = array(
    "img" => "img/cf-juniper-swim-hole.jpg",
    "name" => "Juniper Springs",
    "location" => "Ocala National Forest, FL",
    "p1" => "Down here in Florida, it&#39s already in the 90&#39s even in early May. Those temperatures can make camping a lot more uncomfortable. Add the daily afternoon thunderstorm and you can see why most don&#39t camp in Florida in the summer. Despite that my wife and I joined another married couple and headed out for one last camping trip in Florida before it&#39s unbearable to camp until September. It was an amazing time, the weather wasn&#39t too hot and the thunderstorms subsided for a sunny weekend.",
    "p2" => "When we arrived Saturday morning, we set up our 6 person mansion of a tent that we shared for the night. You would never lug this thing into the backcountry, but it was every bit of car camping luxury. It was definitely interesting to be able to actually stand up at all, let alone fully upright while in the tent. My little 2 person tent barely lets me kneel.",
    "aside1" => "img/cf-juniper-tent.jpg",
    "aside1_alt" => "Our 6 persion mansion",
    "p3" => "After setting up our camp and tent we headed out for a short hike. The water around Juniper Springs, is gorgeous and crystal clear. We didn&#39t venture onto the Florida Trail which goes right near Juniper Spring, due to it not having much shade and it was already high 80s. We stuck to the short nature trails around the campground and the swimming area. While on our short hike, we snapped some shots of a few turtles sunbathing. It was a lazy Saturday for us and for all of nature. We made our way to the springs for a dip in the chilly spring waters. It felt amazing once we got in, but boy that initial descent into the water is painful.",
    "p4" => "After a late lunch and a game of bocce ball, we headed back to the springs for swimming round 2. The heat had subsided a good bit and that made the jump back into the water that much more freezing. We spent the afternoon relaxing, jumping off the platform into the water, and racing each other in the water. It was a wonderful day to get away from not only the heat but the city as well. Our evening was spent playing card games, sitting around the fire, and chatting.",
    "aside2" => "img/cf-juniper-turtle.jpg",
    "aside2_alt" => "Turtles sunbathing",
    "p5" => "Sunday, my wife and I took another short hike in the morning and even got to see a deer 10 ft ahead of us before she scurried into the woods. I love relaxing weekends like these. The fresh air and sunny skies are exactly what I need. Out in the peace and quiet you can gather your thoughts and let go of the things that seem so important in your daily life. I think that&#39s the real beauty of the outdoors, they allow you to forget what you deem important and focus on what truly is: your friends, family, and of course having a little fun.",
    "catch" => "Remember, Adventure is Calling!",
    "signature" => "John McKinney",
    "date" => "May 19th, 2015 "
  );
  $cfstories["grayton_beach"] = array(
    "img" => "img/cf-grayton-beach.jpg",
    "name" => "Grayton Beach",
    "location" => "Santa Rosa Beach, FL",
    "p1" => "My wife and I packed up Tuesday night and headed to the beach house a few hours from home, our stuff loaded up in the car and bikes secured on the trunk bike rack. I say secured but what I mean is we thought they were secured. I learned two valuable lessons this past Tuesday, don&#39t skimp on a bike rack and make sure you&#39ve double and triple checked that you&#39ve installed it correctly. We were in such a hurry and it was the first time we had used our bike rack that I didn&#39t place the side straps in the position they needed to be. It was probably not best to try a new bike rack out for the first time on a multi-hour interstate trip...I guess I learned three valuable lessons then.",
    "p2" => "Anyway, we were on the interstate for 30 mins and everything seemed to be fine, I had been keeping a constant eye on the bikes to make sure they weren&#39t wobbling. Then not more than a minute later, we drove over a dip in the road. It was enough of a bounce to cause the lower bar to swing closed and caused the bikes to swing down toward the road. I immediately pulled over to the shoulder and inspected the bikes. Thankfully the only damage was that on my wife&#39s new bike (when I say new I mean one day old) the front tire had dragged on the asphalt and burned a hole in the tire and tube. It definitely could&#39ve been worse. We reattached the bikes and drove back the 30 mins home, put the bikes inside and headed out again. That was all the excitement we had this trip.",
    "aside1" => "img/cf-grayton-sunset.jpg",
    "aside1_alt" => "Sunsets on the beach",
    "p3" => "Though I didn&#39t go camping in Grayton it was still a wonderful trip spent on some of the most beautiful beaches in the world. It was the week leading up to my brother&#39s wedding, and my family and I spent 5 days in a house 30 ft. from the beginning of the dunes. Being landlocked for the last several years has made me appreciate the time I get on the ocean. Lakes and springs just don&#39t cut it for me compared to the beach, not sure why maybe it&#39s because I grew up on the white, sugar sand beaches of the Gulf Coast of Florida.",
    "p4" => "We had family and friends come in from all over to relax for the week leading up to the wedding with us. Our days were spent lounging on the sand and swimming in the crystal clear water. The sunsets, as you can see, are second to none here on the Emerald Coast.",
    "aside2" => "img/cf-grayton-water.jpg",
    "aside2_alt" => "Serene water during the bike ride",
    "p5" => "My dad rented some beach cruisers for the house, so at least we got to ride bikes even without ours. We rode through a couple of the quaint towns on 30A. Life moves more slowly in these little beach towns but if you were to ask any resident, they would say that&#39s exactly why they live there.",
    "p6" => "If you&#39ve never had the opportunity to check out the Gulf Coast, I highly recommend a vacation there. If you want the best weather, make sure to check out May or September. It&#39s still plenty warm enough for swimming but not so hot that you feel like a turkey on Thanksgiving. Regardless of when you go, I promise you won&#39t be disappointed.",
    "catch" => "Remember, Adventure is Calling!",
    "signature" => "John McKinney",
    "date" => "May 10th, 2015"
  );
  $cfstories["clearwater_lake"] = array(
    "img" => "img/cf-clear-onf-lake.jpg",
    "name" => "Clearwater Lake",
    "location" => "Ocala National Forest, FL",
    "p1" => "Getting away from it all is one of the best things you can do sometimes. When the stresses of modern day life become too much, sometimes getting out into the wilderness can be just what the doctor ordered. You come back refreshed and renewed and that&#39s exactly what happened to me this past weekend. Some friends and I got away to the Ocala National Forest for a little car camping.",
    "p2" => "When we arrived Friday evening it was already dark (which is always frustrating to set up a tent in) and rain was threatening. Thankfully the rain held off and we were able to get our tents up and fire going. We reheated some baked ziti that one of the friends had made and froze for our dinner. This turned out to be one of the nastiest meals I&#39ve had. Thankfully, when you&#39re hungry you just don&#39t care. The wood was a little wet and smoked a large amount because of that. This caused the ziti to have a smoked flavor that did not complement it. Between the four of us, we emptied about ⅓ of a container of parmesan on to the pasta (it was the only thing that seemed to neutralize the smoky flavor). The next few hours were us sitting around the fire sharing stories, cracking open a few beers, and of course, poking fun at the friend&#39s terribly executed dinner. We headed to bed but didn&#39t realize that we had a snorer amongst us. How I wish I would&#39ve grabbed ear plugs before bed. A night of tossing and turning attempting to block the noise was ahead of me.",
    "aside1" => "img/cf-cl-onf-tent.jpg",
    "aside1_alt" => "Campground, my tent",
    "p3" => "Saturday morning I woke up early and went for a hike by myself around the lake. Everything was still in the forest except for a group of 4 deer who didn&#39t seem to care too much about me. They crossed the trail a few hundred feet ahead of me looking for breakfast. It was a peaceful time to relax and be alone with my thoughts. The beauty of nature always makes me contemplate what&#39s necessary in life. As I came back from my morning hike the whole campsite began to wake up and get their day started. I took another mid-morning hike with one of my friends. It was a great time to just hang out with him and catch up on life. The rest of the day was spent lounging around the campsite and throwing the football down by the lake.",
    "p4" => "That night, we met a group who definitely knew how to have a good time. They were celebrating a milestone, one of the guy&#39s 60th birthday. It was 4 friends and their families. Each had the exact same Jeep just in a different color. They had neon shirts, neon painted croquet balls, led string lights everywhere all of which corresponded to the color of their Jeep. They had black lights hooked up to their Jeeps to accentuate all the neon colors.",
    "aside2" => "img/cf-cl-onf-odd.jpg",
    "aside2_alt" => "The best party people ever",
    "p5" => "In speaking with them, they had met when they worked for their city to build a haunted house. They had done that for years and collected a large amount of haunted props throughout the years. They told me about how Halloween at their homes consists of house hopping between the 4 of them and checking out their incredibly elaborate displays. One guy had a &#34rain room&#34, in which he set up pipes to create fake rain as you walked across a bridge that would move due to hydraulics. Needless to say, they take Halloween to another level. I want to visit them in October and see these amazing houses.",
    "p6" => "Thankfully, I had ear plugs Saturday night. I slept like a rock and think I only woke up once. Sunday was our clean up and head out day. It put an end to an amazing weekend. It was unbelievable how quickly the time went by, I can&#39t wait to go again though. I hope if you haven&#39t been camping, you get out there and try it. Start with car camping and maybe you&#39ll eventually move into some more backcountry type through-hiking. Even if you don&#39t, just go be outdoors. There is so much outside our wifi and paved city streets. Also, become friends with the weird people at your campsite, they often provide the most memorable moments.",
    "catch" => "Remember, Adventure is Calling!",
    "signature" => "John McKinney",
    "date" => "March 9th, 2015 "
  );
  $cfstories["about-me"] = array(
    "img" => "img/contact-pic-me.jpg",
    "name" => "Who Am I?",
    "location" => "This is a story all about yours truly",
    "p1" => "Welcome to the very first Campfire Story here at Mount McKinney! This is an exciting time for me. I figured in my first post I should share a little about myself and explain why you should take any of the advice I give in my How To section, called <a href='twocents.php'>Two Cents</a>.",
    "p2" => "First off we&#39ll get the introductions out of the way, my name is John and I am a front-end developer. I love creating web sites and would love to be the web developer for your next project. If you would like more information on my services or would like to discuss a possible project you can check out my <a href='portfolio/portfolio.php'>Portfolio</a> or shoot me an <a href='mailto:john@mountmckinney.com'>email</a>.",
    "aside1" => "img/cf-destin-beach.jpg",
    "aside1_alt" => "Destin, FL",
    "p3" => "I grew up on the Panhandle of Florida with some of the world&#39s most beautiful beaches. At a young age, I fell in love with the outdoors. I remember spending hours pretending I was a spy or a soldier with the other boys my age in the woods around our neighborhood. As I got older, my fascination with the outdoors only grew. I bike to work just to get outside more, kayak when I can on the weekends, and take walks on local trails. I&#39m most at home outside the walls of my house.",
    "p4" => "As for the <a href='campfirestories/campfirestories.php'>Campfire Stories</a>, I will be bringing you tales of my time in the great outdoors. This could cover anything from backpacking camping trips to remote areas of Yosemite, car camping trips to Yellowstone, beach camping on the Gulf of Mexico, or even just a beautiful trail that I take with my lovely wife. I look forward to sharing these adventures with all of you. If you have a suggestion for where my next adventure should be, then I would love to hear your thoughts! Drop me an email or comment on my posts anytime.",
    "aside2" => "img/cf-banks-tahoe.jpg",
    "aside2_alt" => "Lake Tahoe with Banks",
    "p5" => "As for the tips I&#39ll be giving you in the How To section, I am by no means an expert and if you disagree with any of my recommendations, then I would love to hear your opinion on what you think. I love learning and researching, if I&#39m passionate about a topic I will spend hours upon hours reading articles on that subject. If I am going to purchase something to use in the backcountry, I will read expert advice so that I know I have the best product for the money. This is what I promise you, that when I give you a recommendation on what fixed blade knife to buy, how to survive a bear attack, or what food to eat on the trail know that it comes after a large amount of research on a topic. You can think of my articles as a summary of opinions. Instead of you taking time to read all about what product, say a sleeping bag, to buy, I have done that for you.",
    "p6" => "Sound good? Great, I hope you enjoy my articles!",
    "catch" => "Remember, Adventure is Calling!",
    "signature" => "John McKinney",
    "date" => "February 27, 2015 "
  );
  foreach ($cfstories as $cfstoryname => $cfstory) {
    $cfstories[$cfstoryname]["story"] = $cfstoryname;
}

return $cfstories;
}
?>
