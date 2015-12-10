<?php
  function display_campfire_html($cfstory){
    //build HTML output here
    $output = "";
    $output .= "<li>";
    $output .= '<a href="'.BASE_URL.'campfire/?story='.$cfstory["story"].'">';
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
  // $cfstories["nc-fall-foliage-stikes-back"] = array(
  //   "img" => "img/cf-nc-foliage-strikes-main.jpg",
  //   "name" => "Fall Foliage Pt. Duex!",
  //   "location" => "Maggie Valley, NC",
  //   "p1" => ""
  //   "p2" => "",
  //   "aside1" => "img/cf-nc-foliage-strikes-aside1.jpg",
  //   "aside1_alt" => "",
  //   "p3" => "",
  //   "p4" => "",
  //   "aside2" => "img/cf-nc-foliage-strikes-aside2.jpg",
  //   "aside2_alt" => "",
  //   "p5" => "",
  //   "p6" => "I almost forgot my announcement that I spoke of last post! I&#39;d like to officially welcome the newest addition to the Mount McKinney family! ...my beard! ...what? Were you expecting different news? Sorry, maybe I should&#39;ve worded that different. Oh well, live and learn. Regardless, thought I&#39;d say something about it since it&#39;s in most of the pictures from this post and the previous one.",
  //   "p7" => "Much to my wife&#39;s chagrin, I love having it and plan on keeping it at least until the Florida summer starts up again (which can honestly be as early as March). For any guys out there debating whether or not to don the crumb catcher, I recommend giving it a try. It&#39;s an exercise in patience to make it past the itching and ridicule you&#39;ll undoubtedly receive the first week or so (well unless you&#39;re a Greek man whose facial grows at an unnatural rate, you know who you are).",
  //   "catch" => "Remember, Adventure is Calling!",
  //   "signature" => "John McKinney",
  //   "date" => "December 10th, 2015"
  // );
  $cfstories["nc-fall-foliage"] = array(
    "img" => "img/cf-nc-fall-foliage-main.jpg",
    "name" => "Fall Foliage",
    "location" => "Maggie Valley, NC",
    "p1" => "This is my long overdue post about our trip to North Carolina. I tell ya, sometimes it&#39;s way too easy to let things get away from you. I think my New Years resolution is to write these while I&#39;m on the trip, that and to make blogging a much more regular thing. Expect to see a new blog post every other Monday afternoon. Ya I think that&#39;s a good goal to have, not too overwhelming right? Better than buying a gym membership that doesn&#39;t get used after the first few weeks of the year. Definitely never done that before... We&#39;ll see how this goes. Wish me luck I guess?",
    "p2" => "Now, where was I? Oh right! I was about to tell you about my trip to Maggie Valley, NC just outside of Asheville. The last week of October, my wife and I, joined by another married couple friend of ours loaded up the car and headed north for a trip to see the Fall foliage. This has become an annual trip for me over the past few years with friends but now as a newly married man I was able to make it a couples weekend.",
    "aside1" => "img/cf-nc-fall-foliage-aside1.jpg",
    "aside1_alt" => "The steep climb up the Chimney Tops",
    "p3" => "It turns out we came at the perfect time for our multi-day trip. The leaves were amazing! They had only started to change at the elevation our cabin was at. The picture above is from our back patio of the cabin. No camping for me this time, our friends and my wife prefer the comforts a cabin provide. Anyway, the trees just outside cabin started as mostly yellow and by the end of our trip were a conglomeration of yellow, orange, and red. It always amazes me how beautiful it is to look at trees.",
    "p4" => "Our first day trip for hiking was to the beautiful Great Smoky Mountain National Park. Nestled between Cherokee, NC and Gatlinburg, TN (two rather touristy towns) is this gorgeous piece of protected national land. It was a place I had road tripped to the past couple years with friends but this was a different experience than previous trips. The Sun was out most of the day and it was on the warmer side that day so our climb up the Chimney Tops was actually painful on the hands. You can see the rocks that we climbed in the picture to the right. The rocks burned our hands as we ascended, but boy is that view ever worth it.",
    "aside2" => "img/cf-nc-fall-foliage-aside2.jpg",
    "aside2_alt" => "The cool waterfall water crashing down on us",
    "p5" => "After burning the hands we headed down the mountain and headed to our next destination, a waterfall not far from our cabin. Not sure why but I always love sticking my head under waterfalls (especially when the water is ice cold). It certainly was cold, but well worth the dunk. That night was spent relaxing in the hot tub at the cabin. After a long day of hiking it was exactly what we needed.",
    "p6" => "The next day was a day off from hiking. In the morning we headed over to Hendersonville to Grandad&#39;s Apple Farm. Surprisingly warm out and definitely late in the season our dreams of picking an apple straight from the tree were kind of dashed. I was able to find one good apple to pluck but it took longer than we&#39;d like to admit to find that good one. While there we had a nice picnic lunch and made sure to grab some delicious apple snacks to go with our food. If you go there I highly recommend the apple cider smoothie and the apple dumpling a la mode, quite delicious.",
    "p7" => "Next up was Burntshirt Vineyards, a lovely vineyard that served some surprisingly good wine. Reminding me slightly of the vineyards I toured in Napa Valley, though those were a good bit larger. It was well worth the trip especially because it was right down the road from Grandad&#39;s Farm.",
    "p8" => "Lastly, I have a big announcement! Well...I will in my next post! Be sure to check out Fall Foliage 2: The Foliage Strikes Back on Monday to find out what it is!",
    "catch" => "Remember, Adventure is Calling!",
    "signature" => "John McKinney",
    "date" => "December 10th, 2015"
  );
  $cfstories["nm-sandia"] = array(
    "img" => "img/cf-nm-peak.jpg",
    "name" => "Sandia Peak",
    "location" => "Sandia Peak, NM",
    "p1" => "Sadly, this is the end of our trip. Thank you New Mexico for an incredible trip. The last trip for us was to the Sandia Peak. Seated atop one of the Sandia Mountain peaks is Sandia Peak, a ski area and restaurant. Apparently, High Finance is the highest full service restaurant in the US. To get up to the peak you take a tramway, the longest aerial tram ride in the US.",
    "p2" => "We rode our gondola up to the top. Looking out from the windows you could get some incredible views of Albuquerque and the Sandia Mountains. Thankfully, I&#39;m not afraid of heights or else I might have had a rougher trip up to the peak. However, even if you aren&#39;t afraid of heights you may still feel woozy if you happen to look through the slits in the air grate on the floor.",
    "aside1" => "img/cf-nm-peak-aside1.jpg",
    "aside1_alt" => "The gondola we took all the way to the top",
    "p3" => "We reached the peak of 10,000 feet, got off the gondola, and almost kissed the ground (kidding). We stopped by High Finance for a drink and sat out on the deck to enjoy the view with the beer. It was an amazing view, we saw mountains littering the landscape. Below, the city of Albuquerque sprawled out before us and all of it looked so tiny.",
    "p4" => "After finishing up our drinks, we headed out on a trail along the mountain&#39;s crest. Everytime we stopped for a picture at a vista point, the views improved. Pushing deeper into the woods we found a spot we particularly liked. It had a panoramic view with the least amount of tree obstruction.",
    "aside2" => "img/cf-nm-peak-aside2.jpg",
    "aside2_alt" => "Me admiring the view from 10,000 feet",
    "p5" => "My wife and I sat and enjoyed the peaceful calm at 10,000 feet. The deafening silence provided a wonderful soundtrack to the views we were basking in. It&#39;s one of the things I love most about going out into nature. Far away from the bustling of our daily lives, you are able to see what is truly important. The silence you find in the great outdoors relaxes you, if it&#39;s been awhile since you last experienced it, get out! Go! Have an adventure!",
    "catch" => "Remember, Adventure is Calling!",
    "signature" => "John McKinney",
    "date" => "August 23rd, 2015"
  );
  $cfstories["nm-bandelier"] = array(
    "img" => "img/cf-nm-band.jpg",
    "name" => "Bandelier National Monument",
    "location" => "Bandelier National Monument, NM",
    "p1" => "After eating lunch at Jemez Falls and checking out the Valles Caldera we headed over to the Bandelier National Monument near Los Alamos. As we rolled in, so did the storms. We were worried this would keep us from getting to see this interesting piece of history. The Rangers, informed us that the storms looked like they would be staying up on the plateau and the canyon should be fine. We waited a few minutes and then headed out in the light rain.",
    "p2" => "Thankfully, after a few more minutes, the rain subsided. After a short stroll, slightly damp, we arrived at the monument. It was definitely an impressive sight. We saw the cave dwellings, built into the side of the canyon walls. Below, there was remnants of a rather large village.",
    "aside1" => "img/cf-nm-band-aside.jpg",
    "aside1_alt" => "The village below the cave dwellings",
    "p3" => "We walked along the nicely laid out steps, with railings up to the entrance of the first dwelling that we could enter via ladder. There was already someone in that one and a family with two small children waiting to get in. We decided that we would just skip this one and enter the next one. Following the path a little further along we saw a few <a href='https://en.wikipedia.org/wiki/Petroglyph'>petroglyphs</a> on the walls inside and outside the dwellings.",
    "p4" => "There were clearly multiple &#34;floors&#34; of dwellings, as well as having multi-level houses down below. We came across the next ladder and climbed up, as a tall person I can say that I would not have fared well in those back then. In reading the guide from the ranger station, the average male was 5 foot 6 and the average female was 5 foot. I&#39;m not sure how someone even that size could stay in those very long. I was hunched over my entire time in the dwelling.",
    "aside2" => "img/cf-nm-band-aside2.jpg",
    "aside2_alt" => "Me and my wife, cramped in the cave dwellings",
    "p5" => "We exited that dwelling and moved along to the last dwelling that you could enter in that area, I enjoyed this one much more. It was tall enough for me to stand upright and move around. I could definitely enjoy an amazing night&#39;s sleep in that dark cave.",
    "p6" => "In reading the guide book more to find out about this interesting people, I learned that life was difficult and the average lifespan was only 35 years. So maybe my dark cave would not have provided me that good night&#39;s sleep after all, at least not back then. It&#39;s always important to remember how good we have it in this day and age. I enjoyed my experience learning more about the people who once inhabited the walls of the Frijoles Canyon.",
    "catch" => "Remember, Adventure is Calling!",
    "signature" => "John McKinney",
    "date" => "August 18th, 2015"
  );
  $cfstories["nm-jemez"] = array(
    "img" => "img/cf-nm-jemez-falls.jpg",
    "name" => "Jemez Falls and Valles Caldera",
    "location" => "Jemez Falls, NM",
    "p1" => "This was the most diverse day of the trip. We headed out from the Sandia foothills near Albuquerque and made our way to the red rock deserts on the way to the Soda Dam near Jemez Springs. The red rock deserts were beautiful, a vibrant red like I had never seen. It felt like I was on Mars. From there we headed to the Soda Dam.",
    "p2" => "The Soda Dam, an interesting sight to say the least, is a dam formed by the collection of minerals. It looked a lot like something out of a science fiction movie. It was definitely not your typical waterfall, but was worth the stop on our way. After that brief stop, we followed the road into the mountains. We winded our way through the sprawling pine tree lined paths.",
    "aside1" => "img/cf-nm-jemez-aside.jpg",
    "aside1_alt" => "My wife, dangling her legs off a cliff near a waterfall",
    "p3" => "We stopped for lunch at Jemez Falls, it reminded me of pictures of Colorado. I&#39;m partial to the green mountain landscapes like these over the brown ones, like the Sandia Mountains. It was beautiful, we spent a great deal of time exploring here. We climbed on rocks, sat near the edges of cliffs, and skipped rocks on the river. Eventually, however, we did have to leave.",
    "p4" => "From there we drove toward Bandelier National Monument. We came around a bend and were compelled to stop. There were these incredible plains with mountains surrounding them. A long time ago, a super volcano stood where the Valles Caldera stands. The Valles was formed by this super volcano collapsing.",
    "aside2" => "img/cf-nm-valles.jpg",
    "aside2_alt" => "The Valles Caldera",
    "p5" => "We stood and stared at the immense beauty of the sight. I learned from locals later that evening that elk typically roam the Valles. Sadly, we didn&#39;t see any elk while we were there. It was hard to believe that in one day we had seen so much. New Mexico had certainly not disappointed and we weren&#39;t even done for the day.",
    "p6" => "Finally, we left the beautiful plains of the Valles and made our way to Bandelier. It was difficult to understand just how big the Valles is. As we were driving around the perimeter we looked down and had few things to judge the size against. Then, we saw a SUV driving on one of the roads in the middle. It looked much smaller than we felt it should. After research into the Valles, we learned that it is almost 14 miles wide.",
    "catch" => "Remember, Adventure is Calling!",
    "signature" => "John McKinney",
    "date" => "August 18th, 2015"
  );
  $cfstories["nm-home"] = array(
    "img" => "img/cf-nm-home.jpg",
    "name" => "Finding Beauty Close to Home",
    "location" => "Albuquerque, NM",
    "p1" => "We stayed in the foothills of the Sandia Mountains on historic Route 66. It was my first time on Route 66, unfortunately, we didn&#39;t spend much time exploring it. We did play the classic Chuck Berry song while on it though. It&#39;s amazing the wildlife that grows regardless of climate. Every time we left the house we saw rabbits and while leaving the house one evening we even got to see a bobcat. I was thankful to be in a house that was surrounded by so much nature.",
    "p2" => "There were a number of beautiful trails into the foothills near our house. One evening, my wife and I ventured out onto one before dinner. We began down the path and came upon a couple of large boulders stacked on top of each other. We, of course, climbed them. After taking a couple goofy pictures, we climbed down and continued on our path.",
    "aside1" => "img/cf-nm-home-aside.jpg",
    "aside1_alt" => "Goofy picture on a rock near the house",
    "p3" => "We came to a fork in the path and opted to take the more rugged, primitive trail. We followed it along and made a few wrong turns here and there trying to stay on the path. Finally after walking on that path a good ways, we decided we didn&#39;t think it was prudent to continue on the trail. There were too many points that we could easily lose the trail on the way back. So we headed back before we got ourselves lost.",
    "p4" => "We came back to that fork and headed onto the other trail that is much more defined. Though even this trail had plenty of cacti protruding into the trail. You had to be watchful of where you stepped in some areas. At one point the road sloped downward pushing me to speed up my walk. At the bottom there to greet me was a cacti about chest high. Thankfully, I stopped prior to getting stuck.",
    "aside2" => "img/cf-nm-home-aside2.jpg",
    "aside2_alt" => "My wife flexing like a strong man",
    "p5" => "At the crest of the hill we stopped and just admired the late afternoon Sun painting its golden rays on the foothills. This sun soaked horizon provided a beautiful scene for our evening hike.",
    "catch" => "Remember, Adventure is Calling!",
    "signature" => "John McKinney",
    "date" => "August 15th, 2015"
  );
  $cfstories["nm-kasha-katuwe"] = array(
    "img" => "img/cf-nm-kasha-katuwe.jpg",
    "name" => "Kasha-Katuwe Tent Rocks",
    "location" => "Kasha-Katuwe, NM",
    "p1" => "The first hike of the trip was to go to the Kasha Katuwe Tent Rocks National Monument (say that 5x fast). This is a slot canyon west of Santa Fe, definitely worth the hike. This was my first experience in a slot canyon.",
    "p2" => "As we walked up to the entrance, the canyon walls felt more and more ominous. We traversed through narrow points where the canyon floor was smaller than the width of my shoes. At one point, we had to crouch walk under a boulder easily large enough to squash us. Thankfully, it was firmly wedged between the canyon walls. We twisted and turned our way and finally came to a point where the trail turned toward the top of the canyon.",
    "aside1" => "img/cf-nm-kk.jpg",
    "aside1_alt" => "Hiking through the slot canyon",
    "p3" => "As interesting as it was being inside the slot canyon, it wasn&#39;t until we rose high above the canyon floor that the sights became breathtaking. We climbed the makeshift rock stairs. I kept thinking, what was the first person to do this thinking. There were points that would certainly have been extremely difficult if not for the railroad ties added to the trail to help create better steps.",
    "p4" => "We climbed higher and higher, each time we turned around we were rewarded with an increasingly beautiful view. We turned around and saw the iconic tent rock formations this site is known for. We ascended more of the path and turned around again, this time seeing more of the canyon, more of the tent rocks, and this time mountains off in the distance. Now I knew there was something truly worth it to climb to the top for. I pushed harder and hiked faster, I wanted to see the vista at the peak.",
    "aside2" => "img/cf-nm-kk-vista.jpg",
    "aside2_alt" => "The view was truly something incredible.",
    "p5" => "Reaching that peak was well worth the hike. What a gorgeous site, the land stretched on for miles and miles. Off in the distance in nearly every direction there were mountains. Down below you could see the tent rocks and the people traversing their way in and out of the canyon. The view compelled us to be speechless (which if you&#39;ve ever met me is not my natural state).",
    "p6" => "It was difficult to want to trek down to the car from such awe inspiring beauty. Eventually, we had to make that journey though. As we reached the car, my wife had to make her customary statement whenever we do any sort of climb like that, &#34;Can you believe we were just at the top of that?!&#34; It&#39;s not really a trip for me unless I hear her say that.",
    "catch" => "Remember, Adventure is Calling!",
    "signature" => "John McKinney",
    "date" => "August 13th, 2015"
  );
  $cfstories["nm-diversity"] = array(
    "img" => "img/cf-nm-dive-main.jpg",
    "name" => "American Southwest Diversity",
    "location" => "Albuquerque, NM",
    "p1" => "This was my first trip to the American Southwest for a hiking trip. I have to admit, I was not expecting it to be nearly as beautiful as it was. I expected New Mexico to be a vast desert with little diversity in the landscape. I always kind of wondered why people would live in what I viewed as such as a harsh climate. I was never so happy to be wrong.",
    "p2" => "I&#39;ll be going into more detail about a couple of the places we hiked in subsequent posts. This is just a small post about my overall experience in NM.",
    "aside1" => "img/cf-nm-dive-aside1.jpg",
    "aside1_alt" => "Red rock beauty",
    "p3" => "We spent a week in and around the Albuquerque area (still can&#39;t spell that right without spellcheck). Our house for the week nestled in the Sandia Mountains. As we ventured out into the wilderness, the true beauty of the state became apparent. We saw red rock deserts, pine tree covered mountains, Native American cave dwellings, the Rio Grande, white limestone mountains, and plains resembling those in Wyoming. I was amazed that on one particular driving day, we saw most of that list in just a few hours.",
    "p4" => "The climate was also comfortable, this being August and the weather while warm was nothing compared to Florida&#39;s 90&#39;s and humid summer days. Personally, I&#39;m just more partial to hiking in cooler weather and like to save my multi-hour hikes for the cooler months.",
    "aside2" => "img/cf-nm-jemez.jpg",
    "aside2_alt" => "Me at the edge of a cliff near a waterfall",
    "p5" => "Overall I was very impressed with the New Mexico. I always love diverse landscapes. Mountains are majestic to me, most likely due to the fact that the highest natural point in Florida is Britton Hill. This hill is a towering 312 feet. Even foothills are wonderful to someone who grew up 50 feet or less above sea level. I think my next trip to the Southwest will be to finally check out the Big Five in Utah or to see the Grand Canyon from up close, as opposed to just flying over it. ",
    "p6" => "However, as gorgeous as the Southwest was, I&#39;m happy to be living in the Southeast. I have never been so thirsty for a week straight, my throat was constantly dry. I&#39;m sure I&#39;d get use to it, I&#39;m just not sure I would want to. I don&#39;t mind the heat and humidity of Florida and the non-summer months are incredible weather-wise.",
    "catch" => "Remember, Adventure is Calling!",
    "signature" => "John McKinney",
    "date" => "August 10th, 2015"
  );
  $cfstories["slideball"] = array(
    "img" => "img/cf-slideball.jpg",
    "name" => "Slip &#39;n Slide Kickball",
    "location" => "Gainesville, FL",
    "p1" => "One of the most amazing ways to spend an afternoon.",
    "p2" => "Thursday, a friend told me about slip &#39;n slide kickball, by Sunday we were playing our first game. Today, I&#39;ll be detailing our game and the supplies you&#39;ll need to make this happen at your next get together. Our supplies:",
    "aside1" => "img/cf-slideball-setup.jpg",
    "aside1_alt" => "Set up of the field prior to the game",
    "p3" => "<dl class='tc-blog-list'>
              <dt>4 4ft. inflatable kiddie pools for bases</dt>
              <dt>4 10x25ft. heavy duty plastic painting sheets</dt>
              <dt>Baby soap (don&#39;t want stinging in your eyes)</dt>
              <dt>A ball (we used a flat soccerball)</dt>
              <dt>Something to keep the sheets down (tent stakes work great)</dt>
              <dt>Hose</dt>
              <dt>Water</dt>
            </dl>",
    "p4" => "We blew up the kiddie pools, laid out the plastic sheets, and put water and soap on everything. It was a high-scoring affair, I believe one game was around 19-17 and the other shorter game was 16-8. The score was obviously less important than the fun (though my team won both games...just saying). We made the rules up as we went. Cutting outs from 3 to an inning to 2, requiring slides at every base (even on a home run), and deciding whether you could steal bases or not halfway through the game. It felt a lot like when you&#39;re young, creating games with the neighborhood kids. It was a blast.",
    "aside2" => "img/cf-slideball-after.jpg",
    "aside2_alt" => "After the game is over, we just spent a good 10 mins running around sliding",
    "p5" => "There were mishaps for sure, people knocking over the pools (due to the sheer speed a slip &#39;n slide launches you), slipping in the outfield, and kicks that somehow went backwards. For example: we, being adults now (sort of), were a little weary of our initial slide. However, after you learn the oh so important, NEVER SLIDE ON YOUR STOMACH AS AN ADULT, you&#39;re fine.",
    "p6" => "About 30 mins into the game, it started to pour, it was great! Our sliding went further and the mistakes increased greatly, all increasing the laughter. There are few activities where you hope it will rain on you, this is one.",
    "p7" => "Following the game, we spent time just running between each of the bases sliding. I haven&#39;t felt that much like a kid in a long time. It was a great feeling, one I plan to try and recreate this coming weekend when we play slip &#39;n slide kickball. Let the good times roll...or slide in this case.",
    "p8" => "If you have the time, I highly recommend giving this a try. It&#39;s a great way to get outside and have some fun.",
    "catch" => "Remember, Adventure is Calling!",
    "signature" => "John McKinney",
    "date" => "July 27th, 2015"
  );
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
    "date" => "May 26th, 2015"
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
    "date" => "May 19th, 2015"
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
    "date" => "March 9th, 2015"
  );
  $cfstories["about-me"] = array(
    "img" => "img/contact-pic-me.jpg",
    "name" => "Who Am I?",
    "location" => "This is a story all about yours truly",
    "p1" => "Welcome to the very first Campfire Story here at Mount McKinney! This is an exciting time for me. I figured in my first post I should share a little about myself and explain why you should take any of the advice I give in my How To section, called <a href='http://mountmckinney.com/twocents/'>Two Cents</a>.",
    "p2" => "First off we&#39ll get the introductions out of the way, my name is John and I am a web developer. I love creating web sites and would love to be the web developer for your next project. I have lots of great info on what I provide on both the <a href='http://mountmckinney.com/services'>Services</a> and the <a href='http://mountmckinney.com/portfolio/'>Portfolio</a> pages. If you'd like to discuss a possible project in detail, feel free to shoot me an <a href='mailto:john@mountmckinney.com'>email</a>.",
    "aside1" => "img/cf-destin-beach.jpg",
    "aside1_alt" => "Destin, FL",
    "p3" => "I grew up on the Panhandle of Florida with some of the world&#39s most beautiful beaches. At a young age, I fell in love with the outdoors. I remember spending hours pretending I was a spy or a soldier with the other boys my age in the woods around our neighborhood. As I got older, my fascination with the outdoors only grew. I bike to work just to get outside more, kayak when I can on the weekends, and take walks on local trails. I&#39m most at home outside the walls of my house.",
    "p4" => "As for the <a href='http://mountmckinney.com/campfirestories/'>Campfire Stories</a>, I will be bringing you tales of my time in the great outdoors. This could cover anything from backpacking camping trips to remote areas of Yosemite, car camping trips to Yellowstone, beach camping on the Gulf of Mexico, or even just a beautiful trail that I take with my lovely wife. I look forward to sharing these adventures with all of you. If you have a suggestion for where my next adventure should be, then I would love to hear your thoughts! Drop me an email or comment on my posts anytime.",
    "aside2" => "img/cf-banks-tahoe.jpg",
    "aside2_alt" => "Lake Tahoe with Banks",
    "p5" => "As for the tips I&#39ll be giving you in the How To section, I am by no means an expert and if you disagree with any of my recommendations, then I would love to hear your opinion on what you think. I love learning and researching, if I&#39m passionate about a topic I will spend hours upon hours reading articles on that subject. If I am going to purchase something to use in the backcountry, I will read expert advice so that I know I have the best product for the money. This is what I promise you, that when I give you a recommendation on what fixed blade knife to buy, how to survive a bear attack, or what food to eat on the trail know that it comes after a large amount of research on a topic. You can think of my articles as a summary of opinions. Instead of you taking time to read all about what product, say a sleeping bag, to buy, I have done that for you.",
    "p6" => "Sound good? Great, I hope you enjoy my articles!",
    "catch" => "Remember, Adventure is Calling!",
    "signature" => "John McKinney",
    "date" => "February 27, 2015"
  );
  foreach ($cfstories as $cfstoryname => $cfstory) {
    $cfstories[$cfstoryname]["story"] = $cfstoryname;
}

return $cfstories;
}
?>
