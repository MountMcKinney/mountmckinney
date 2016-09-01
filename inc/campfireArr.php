<?php

  function displayCampfireFeatured($topStory){
    //build HTML output here
    $output = "";
    $output .= '<a href="'.BASE_URL.'campfire/?story='.$topStory["story"].'">';
    $output .= '<img src="'.BASE_URL.$topStory["img"] .'" alt="'.$topStory["info"].'class="topStoryImg">';
    $output .= "<h1 class='topStoryCaption'>".$topStory["title"]."</h1>";
    $output .= '</a>';

    return $output;
  }

  function displayCampfireHtml($cfstory){
    //build HTML output here
    $output = "";
    $output .= "<li>";
    $output .= '<a href="'.BASE_URL.'campfire/?story='.$cfstory["story"].'">';
    $output .= "<figure>";
    $output .= '<img src="'.BASE_URL.$cfstory["thumb"] .'" alt="'.$cfstory["info"].'">';
    $output .= "<figcaption>".$cfstory["title"]."</figcaption>";
    $output .= "</figure>";
    $output .= "</a>";
    $output .= "</li>";

    return $output;
  }

  function displayCampfireBlog($cfstory){
    //build HTML output here
    $output = "";
    $output .= "<div class='blogHead'>";
    $output .= '<img src="'.BASE_URL.$cfstory["img"] .'" class="blogHeaderImg" alt="'.$cfstory["info"].'">';
    $output .= "</div>";
    $output .= $cfstory["section"];
    $output .= "<br />";
    $output .= "<hr />";
    $output .= "<br />";
    $output .= '<p class="blogCatch">'.$cfstory["catch"].'</p>';
    $output .= '<p class="blogSignature">'.$cfstory["date"].'</p>';
    return $output;
  }

function getCfstoriesCount() {
  return count(getAllCfstories());
}

function getCfstoriesSubset($positionStart, $positionEnd) {
    $subset = array();
    $all = getAllCfstories();

    $position = 0;
    foreach($all as $cfstory) {
        $position += 1;
        if ($position >= $positionStart && $position <= $positionEnd) {
            $subset[] = $cfstory;
        }
    }
    return $subset;
}

function getAllCfstories() {
  $cfstories = array();
  // $cfstories["southern-charm"] = array(
  //   "img" => "img/blog/header/savannahSouthernCharm.jpg",
  //   "thumb" => "img/blog/thumb/savannahSouthernCharmThumb.jpg",
  //   "title" => "Southern Charm",
  //   "info" => "Get Out And Live!",
  //   "section" => "<p class='blogContent'>
  //
  //                 </p>
  //                 <br />
  //                 <aside class='asideRight asideLandscape'>
  //                   <img src='../img/blog/aside/paris.jpg' alt='A Paris Sunset'>
  //                 </aside>
  //                 <br />
  //                 <p class='blogContent clearContent'>
  //                 </p>
  //                 <br />
  //                 <p class='blogContent'>
  //                 </p>
  //                 <br />
  //                 <p class='blogContent'>
  //                 </p>
  //                 <br />
  //                 <aside class='asideLeft asideLandscape'>
  //                   <img src='../img/blog/aside/italianCountrysideAside2.jpg' alt='The Italian Countryside'>
  //                 </aside>
  //                 <br />
  //                 <p class='blogContent'>
  //                 </p>
  //                 <br />
  //                 <p class='blogContent'>
  //                 </p>
  //                 <br />
  //                 <p class='blogContent'>
  //                 </p>
  //                 <br />
  //                 <p class='blogContent'>
  //                 </p>
  //                 <br />
  //                 <p class='blogContent'>
  //                 </p>
  //                 ",
  //   "catch" => "Remember, Adventure is Calling!",
  //   "signature" => "John McKinney",
  //   "date" => "May 10th, 2016"
  //  );
  $cfstories["irish-adventures"] = array(
    "img" => "img/blog/header/irishAdventuresKinsale.jpg",
    "thumb" => "img/blog/thumb/irishAdventuresKinsaleThumb.jpg",
    "title" => "Irish Adventures",
    "info" => "Ireland",
    "section" => "<p class='blogContent'>
                    It only took the entire summer for me to finally write about our trip to Ireland. As our flight took off from Orlando in mid-May, I knew we would be embarking on a truly once in a lifetime trip. After a short connection in Boston, we departed for Shannon! I had never been to Ireland but I knew I was excited to go and I knew I would love it. Boy was I right, it was hard to leave such a breathtakingly beautiful country. My grandmother had come to America from Ireland when she was a little girl. Being in a place that only 2 generations before had been my family&#039;s home made me immediately feel at home there. Not to mention that I definitely could pass for an Irish citizen, well at least until I spoke obviously.
                  </p>
                  <br />
                  <aside class='asideRight asideLandscape'>
                    <img src='../img/blog/aside/jameson.jpg' alt='Wife and I at the Jameson Distillery'>
                  </aside>
                  <br />
                  <p class='blogContent clearContent'>
                    It&#039;s been a long time since I was as tired as I was that first day. The flight was overnight and I slept for at most 45 mins. Never really been able to sleep on planes (or in cars for that matter). Thankfully, I was at least comfortable, as I had sprung the extra cash for a bulkhead seat. I am 6&#039; 4&#034; so that extra legroom was a lifesaver. As we got into our rental car, I sat in the driver&#039;s seat and immediately just felt odd. I was sitting on the opposite side of the car from my everyday driving. Changing gears, grabbing my water bottle, and even holding my wife&#039;s hand was now my left hand&#039;s responsibility. For the most part, we were fine driving on the left side of the road, though we did have one close call when I had to make a right turn while going around a bend in a busy town with tour buses all around me.
                  </p>
                  <br />
                  <p class='blogContent'>
                    Oh those wretched tour buses. The smallest of them take up the entire lane and most venture into your lane. I honestly felt bad for the people in them, they wouldn&#039;t experience Ireland the way my wife and I did. They couldn&#039;t take a detour, change their plans last minute, or just stop on the side of the road to hike. They missed some of the most amazing sights that we experienced.
                  </p>
                  <br />
                  <aside class='asideLeft asideLandscape'>
                    <img src='../img/blog/aside/cobhCathedral.jpg' alt='St. Colman&#39;s Cathedral in Cobh, Ireland'>
                  </aside>
                  <br />
                  <p class='blogContent'>
                    Our first major stop was to experience that great liquid gold, Irish whiskey. We headed south from Shannon to Middleton, the home of the Jameson Distillery. What a blast that was. I learned so much and got to drink some delicious whiskey doing it. At the end of the tour, I participated in a taste test with Jameson 12 yr, Jonnie Walker Black, and Jack Daniels. Somehow, I feel they didn&#039;t exactly go for top-shelf when it came to bourbon.
                  </p>
                  <br />
                  <p class='blogContent'>
                    After our whiskey tour, we headed to Cobh to see St. Colman&#039;s Cathedral. This massive gothic Cathedral towers over the town, as you can see in the picture. The Cathedral was gorgeous (as were all the Cathedrals we visited in Ireland). This one, right on the Cork Harbour, provided picturesque views both inside and out.
                  </p>
                  <br />
                  <p class='blogContent'>
                    From there, we made our way to where we&#039;d be staying the first night, Kinsale. A small town on the River Bandon on the South edge of Ireland, Kinsale is a quaint town that is well worth the stop for the night. Our first (but not last) Irish poured Guinness was ordered in a pub in Kinsale. We felt a bit like zombies that first day except without wanting to eat braaaaaainnnssss. I had gotten less than an hour of sleep in 40 hours. Needless to say, I was very excited when that first day&#039;s rest came. I was out as soon as my head hit the pillow.
                  </p>
                  ",
    "catch" => "Remember, Adventure is Calling!",
    "signature" => "John McKinney",
    "date" => "September 1st, 2016"
   );
  $cfstories["southern-charm"] = array(
    "img" => "img/blog/header/savannahSouthernCharm.jpg",
    "thumb" => "img/blog/thumb/savannahSouthernCharmThumb.jpg",
    "title" => "Southern Charm",
    "info" => "Savannah, GA",
    "section" => "<aside class='asidePortraitSmall asideLeft'>
                    <img src='../img/blog/aside/savannahCity.jpg' alt='Me and a statue just hanging out'>
                  </aside>
                  <br />
                  <p class='blogContent'>
                    Sometimes you need to just get away and revitalize yourself. In mid-April, it was time for me and my wife to do just that. We decided a B&B trip to Savannah, GA for the weekend was the perfect getaway. It was a wonderful, relaxing experience in one of my favorite cities. We stayed at the <a href='http://dresserpalmerhouse.com/'>Dresser Palmer House</a> right near <a href='http://visithistoricsavannah.com/forsyth-park/'>Forsyth Park</a>. The weather was gorgeous, only feeling hot when we went hiking in non-shaded parts of <a href='http://gastateparks.org/SkidawayIsland'>Skidaway Island State Park</a> and being cold enough to wear a jacket in the evenings.
                  </p>
                  <br />
                  <aside class='asideLandscape asideRight'>
                    <img src='../img/blog/aside/savannahForsythe.jpg' alt='Me hitting a double at 19th Century baseball'>
                  </aside>
                  <br />
                  <p class='blogContent'>
                    Most of our Friday was spent driving up to Savannah. Friday night was spent going to dinner at the <a href='http://www.crystalbeerparlor.com/'>Crystal Beer Parlor</a> eating one of the best peach cobblers I&#039;ve ever had and then going for a long walk around the city to walk off said cobbler. Overall, a pretty chill night.
                  </p>
                  <br />
                  <p class='blogContent'>
                    Saturday we headed out to the <a href='http://www.gastateparks.org/Wormsloe'>Wormsloe Historic Site</a> (unfortunate name if you ask me) which is the colonial estate of Noble Jones (awesome name). Wormsloe has the most amazing drive, a canopy of live oaks and Spanish moss creating a drive like no other. The drive was incredible and I was able to capture it on the GoPro with time lapse which you can see below. After driving in, there are some trails you can take, as well as tours of the historic recreations of the village led by rangers. These historic recreations include a blacksmith shop and a small house. Wormsloe was certainly something worth checking out at least once.
                  </p>
                  <br />
                  <aside class='asideLandscape asideLeft'>
                    <img src='../img/blog/aside/savannahFortBaseball.jpg' alt='Me hitting a double at 19th Century baseball'>
                  </aside>
                  <br />
                  <p class='blogContent'>
                    After Wormsloe, we made the short drive to Skidaway Island State Park. This state park had a nice trail leading out to a river. On the banks of the river, we stood just enjoying the silence of nature. Such a peaceful moment with the water softly flowing by and lapping up onto the riverbank. Heading back into the city, Saturday evening was spent walking around the city, people watching from a bench in one of the parks, and of course going to the giant candy shop on River Street. We attended the vigil Mass at St. John the Baptist Cathedral as well which is a beautiful church and a definite must see.
                  </p>
                  <br />
                  <!-- Html for video in the campfire array
                   <p class='blogContent blogVideo'>
                     <video controls muted poster='../img/blog/videos/poster/savannahWormsloe.jpg'>
                       <source src='../img/blog/videos/wormsloe.mp4' type='video/mp4'>
                       <source src='../img/blog/videos/wormsloe.ogg' type='video/ogg'>
                       Your browser does not support the video tag.
                     </video>
                   </p>
                   <br /> -->
                  <p class='blogContent'>
                    Sunday at the B&B we had delicious peaches and cream french toast which I&#039;m still dreaming about. Before leaving Savannah we went to <a href='https://www.nps.gov/fopu/index.htmFort'>Fort Pulaski</a>, which ended up being the highlight of our trip. This 19th Century fort is on the way to Tybee Island and is a National Monument. You can read the full write-up I did of Fort Pulaski for the sports/outdoor blog website, Sportody, <a href='http://www.sportody.com/blog/must-do-historical-sites-near-savannah-fort-pulaski'>here</a>. However, the gist of the experience was that there were tons of cannons (always a favorite of mine), we played 19th Century baseball (I got a double), and the fort was awesome! Basically, you need to go to Savannah immediately!
                  </p>
                  ",
    "catch" => "Remember, Adventure is Calling!",
    "signature" => "John McKinney",
    "date" => "May 10th, 2016"
   );
  $cfstories["world-is-your-oyster"] = array(
    "img" => "img/blog/header/canadianRockies.jpg",
    "thumb" => "img/blog/thumb/canadianRockiesThumb.jpg",
    "title" => "The World Is Your Oyster",
    "info" => "Get Out And Live!",
    "section" => "<p class='blogContent'>
                    I invite you to try an exercise with me. Close your eyes and picture a place you&#39;ve always wanted to go. Picture what this place looks like. Is it a majestic mountain, a waterfall crashing upon the rocks below, or a city in some distant land? Next, think of what this place would smell like. Do hints of primrose and pine fill the air? Maybe it&#39;s homemade Italian pasta and a bottle of old wine that saturate your senses. Lastly, what do you hear? Is French music playing? How about birds singing their happy songs as they go about their day? Or maybe the only sound for miles is your footsteps and the wind. Go ahead, close your eyes now, I&#39;ll wait.
                  </p>
                  <br />
                  <aside class='asideRight asideLandscape'>
                    <img src='../img/blog/aside/paris.jpg' alt='A Paris Sunset'>
                  </aside>
                  <br />
                  <p class='blogContent clearContent'>
                    Have you done it yet? No? Why not? It&#39;s not going to hurt, well unless you&#39;re driving and reading this. In that case, why are you looking at your phone while driving?!
                  </p>
                  <br />
                  <p class='blogContent'>
                    Whatever it is you picture, whether it&#39;s the Italian countryside, the American Southwest, Paris, or the Canadian Rockies I want you to do something for me. I want you to go there! I want you to take the trip you&#39;ve been dreaming about day in and day out.
                  </p>
                  <br />
                  <p class='blogContent'>
                    I hope your day already has a large amount of adventure. I hope it doesn&#39;t seem to drag on from one day to the next. I hope it doesn&#39;t consist of you waking up, sitting at a desk constantly checking the clock, sitting in traffic, and finally crawling into bed all to do it over again the next day. However, if it does then it&#39;s time to get out there and change that. First, you probably want to find a different job, one that fulfills you more. Second, it&#39;s time for you to get out and experience the great adventure that is life.
                  </p>
                  <br />
                  <aside class='asideLeft asideLandscape'>
                    <img src='../img/blog/aside/italianCountrysideAside2.jpg' alt='The Italian Countryside'>
                  </aside>
                  <br />
                  <p class='blogContent'>
                    I&#39;m not saying you should quit your job and travel the world until you&#39;re flat broke. We all have responsibilities to family and you need to have money in order to travel. However, that doesn&#39;t mean we can&#39;t still do the things we want to do and go to the places we&#39;ve always wanted to see. I believe we find ways to fund and find time for the things we make a true priority in our lives.
                  </p>
                  <br />
                  <p class='blogContent'>
                    What&#39;s holding you back from getting out there? Do you feel like you can&#39;t get away from the office? I understand that feeling. It&#39;s very common to feel like you can&#39;t leave due to fears of how your clients or colleagues could focus without you there. The truth is, though, they&#39;ll get along just fine without you. I know that can make some people sad or feel unimportant. I don&#39;t mean to get you down. I tell you that to free you from putting so much stock in your job that you forget to ever truly live.
                  </p>
                  <br />
                  <p class='blogContent'>
                    Is money the issue that&#39;s keeping you from traveling? If so, I have a couple recommendations for you. First, set up a dedicated travel account. Then, set up automatic transfers to that travel account. Next step, don&#39;t look at the balance very often and you&#39;ll be amazed at quickly the money accumulates. Another tip, would be to cut out things that are less important than traveling to you and then take the money you&#39;ve saved and put it in the account. Go out to eat all the time? Cook more at home. Drink Starbucks every day? Brew your own coffee. Cable is expensive and if you really want to watch TV, the <a href='http://www.gomohu.com/'>Mohu</a> Leaf and <a href='http://www.hulu.com/'>Hulu</a> are much more affordable options.
                  </p>
                  <br />
                  <p class='blogContent'>
                    I read an <a href='http://www.huffingtonpost.com/2013/08/03/top-5-regrets-of-the-dying_n_3640593.html'>article</a> recently that talked about the top 5 regrets of those who were about to die. I think 3 of the 5 are especially poignant. &#34;I wish I&#39;d had the courage to live a life true to myself, not the life others expected of me.&#34; &#34;I wish I hadn&#39;t worked so hard.&#34; &#34;I wish that I had let myself be happier.&#34 Don&#39;t get to the end of your days and wonder what you did with your life and wish you could&#39;ve lived differently. Live this life out as the grand adventure that it is.
                  </p>
                  <br />
                  <p class='blogContent'>
                    So what&#39;s next? Well...get out! Go! Why are you reading this when there is a wonderful world to explore?! There is only one thing in this life that you&#39;ve been given that is never able to be replenished...time. Make the most of your time. Whatever you do, just keep in mind these words of wisdom &#34;We weren&#39;t meant to be born, pay bills, and die.&#34; Get out and live!
                  </p>
                  ",
    "catch" => "Remember, Adventure is Calling!",
    "signature" => "John McKinney",
    "date" => "March 23rd, 2016"
   );
  $cfstories["nc-fall-foliage-stikes-back"] = array(
    "img" => "img/blog/header/foliageStrikesMain.jpg",
    "thumb" => "img/blog/thumb/foliageStrikesMainThumb.jpg",
    "title" => "Fall Foliage, Pt. Duex!",
    "info" => "Maggie Valley, NC",
    "section" => "<p class='blogContent'>
                    I love the mountains, nothing else causes me to say &#34;wow!&#34;, &#34;woah!&#34;, and &#34;that&#39;s beautiful!&#34; so often...other than when I&#39;m with my wife, of course. This was our final full day and we spent it exploring the Blue Ridge Parkway, an amazing way to finish up the trip. As we drove down the winding roads, we found ourselves constantly wanting to pull over to take pictures, each vista seemingly more beautiful than the last. The best stop we made was at Waterrock Knob.
                  </p>
                  <br />
                  <p class='blogContent'>
                    An awe-inspiring place, Waterrock Knob boasts one of the highest peaks along the Blue Ridge. The parking lot has incredible views for sure, allowing you to see above the whole horizon. The best views are at the top of the trail of the peak at the back of the parking lot. We set out on the walking path that turned into a trail shortly. Most of the leaves on the trees along the trail had already fallen due to the high altitude. This ended up being a blessing as it allowed us to see the incredible views along the hike without being obstructed. The peak offered even better views and was well worth the effort it took to climb. The most interesting thing was seeing the road winding through the mountains. From our vantage, cars resembled toys and people were mere ants.
                  </p>
                  <br />
                  <aside class='asideRight asideLandscape'>
                    <img src='../img/blog/aside/foliageStrikesAside1.jpg' alt='The wife and I hiking up the mountains'>
                  </aside>
                  <br />
                  <p class='blogContent'>
                    We continued the winding road through the mountains. I love driving these type of roads, they&#39;re just plain fun and when you add the fall foliage it&#39;s even better. The trailhead of our next hike had a picnic table and we used the opportunity to have a surface to eat on. The weather had gotten windy and cold due to the altitude so it wasn&#39;t as pleasant as we had hoped when we initially packed our picnic lunch. As we looked up from our table to the cliff high above us, I noticed some people on top of it. I remember thinking how high up they were and that it was going to hurt to make that climb.
                  </p>
                  <br />
                  <p class='blogContent'>
                    The trail was steep but paved for the beginning, definitely a good thigh workout! Hiking is one of those things that&#39;s always worth it when you reach your destination, no matter how painful it was at the time. This was no exception. Knowing the hike ends with a waterfall or a mountain summit always help me push further than I think I can at the bottom. Saying this makes me realize I&#39;m essentially a donkey chasing after a carrot.
                  </p>
                  <br />
                  <aside class='asideLeft asideLandscape'>
                    <img src='../img/blog/aside/foliageStrikesAside2.jpg' alt='The whole group looking over our last vista'>
                  </aside>
                  <br />
                  <p class='blogContent'>
                    The trees along the trail were dense, which made the point where it finally opened up at the summit, even more, amazing. The view seemed to stretch on forever. I can still see the mountain peaks in the distance rising above the valleys. Various collections of oranges, reds, yellows, greens, and browns littered the horizon. Some areas looked like a fire was ablaze on the mountain, while other areas almost glowed with their golden leaves.
                  </p>
                  <br />
                  <p class='blogContent'>
                    Every view we saw was incredible, I loved our time in the Blue Ridge Mountains. I can&#39;t wait until next year when I get to make the trek up to see foliage once again. Until next year fall foliage!
                  </p>
                  <br />
                  <p class='blogContent'>
                    I almost forgot my announcement that I spoke of in the last post! I&#39;d like to officially welcome the newest addition to the Mount McKinney family! ...my beard! ...what? Were you expecting different news? Sorry, maybe I should&#39;ve worded that different. Oh well, live and learn. Regardless, thought I should say something about it since it&#39;s in most of the pictures from this post and the previous one.
                  </p>
                  <br />
                  <p class='blogContent'>
                    Much to my wife&#39;s chagrin, I love having it and plan on keeping it at least until the Florida summer starts up again (which can honestly be as early as March). For any guys out there debating whether or not to don the crumb catcher, I recommend giving it a try. It&#39;s an exercise in patience to make it past the itching and ridicule you&#39;ll undoubtedly receive the first week or so (well unless you&#39;re a Greek man whose facial grows at an unnatural rate, you know who you are).
                  </p>
                  ",
    "catch" => "Remember, Adventure is Calling!",
    "signature" => "John McKinney",
    "date" => "December 15th, 2015"
  );
  $cfstories["nc-fall-foliage"] = array(
    "img" => "img/blog/header/fallFoliageMain.jpg",
    "thumb" => "img/blog/thumb/fallFoliageMainThumb.jpg",
    "title" => "Fall Foliage",
    "info" => "Maggie Valley, NC",
    "section" => "<p class='blogContent'>
                    This is my long overdue post about our trip to North Carolina. I tell ya, sometimes it&#39;s way too easy to let things get away from you. I think my New Years resolution is to write these while I&#39;m on the trip, that and to make blogging a much more regular thing. Expect to see a new blog post every other Monday afternoon. Ya, I think that&#39;s a good goal to have, not too overwhelming right? Better than buying a gym membership that doesn&#39;t get used after the first few weeks of the year. Definitely never done that before... We&#39;ll see how this goes. Wish me luck I guess?
                  </p>
                  <br />
                  <p class='blogContent'>
                    Now, where was I? Oh right! I was about to tell you about my trip to Maggie Valley, NC just outside of Asheville. The last week of October, my wife and I, joined by another married couple friend of ours loaded up the car and headed north for a trip to see the Fall foliage. This has become an annual trip for me over the past few years with friends but now as a newly married man, I was able to make it a couples weekend.
                  </p>
                  <br />
                  <aside class='asideRight asideLandscape'>
                    <img src='../img/blog/aside/fallFoliageAside1.jpg' alt='The steep climb up the Chimney Tops'>
                  </aside>
                  <br />
                  <p class='blogContent'>
                    It turns out we came at the perfect time for our multi-day trip. The leaves were amazing! They had only started to change at the elevation our cabin was at. The picture above is from our back patio of the cabin. No camping for me this time, our friends and my wife prefer the comforts a cabin provide. Anyway, the trees just outside cabin started as mostly yellow and by the end of our trip were a conglomeration of yellow, orange, and red. It always amazes me how beautiful it is to look at trees.
                  </p>
                  <p class='blogContent'>
                    Our first day trip for hiking was to the beautiful Great Smoky Mountain National Park. Nestled between Cherokee, NC and Gatlinburg, TN (two rather touristy towns) is this gorgeous piece of protected national land. It was a place I had road tripped to the past couple years with friends, but this was a different experience than previous trips. The Sun was out most of the day and it was on the warmer side that day so our climb up the Chimney Tops was actually painful on the hands. You can see the rocks that we climbed in the picture to the right. The rocks burned our hands as we ascended, but boy is that view ever worth it.
                  </p>
                  <br />
                  <aside class='asideLeft asideLandscape'>
                    <img src='../img/blog/aside/fallFoliageAside2.jpg' alt='The cool waterfall water crashing down on us'>
                  </aside>
                  <br />
                  <p class='blogContent'>
                    After burning our hands, we headed down the mountain and headed to our next destination, a waterfall not far from our cabin. Not sure why but I always love sticking my head under waterfalls (especially when the water is ice cold). It certainly was cold, but well worth the dunk. That night was spent relaxing in the hot tub at the cabin. After a long day of hiking, it was exactly what we needed.
                  </p>
                  <br />
                  <p class='blogContent'>
                    The next day was a day off from hiking. In the morning, we headed over to Hendersonville to Grandad&#39;s Apple Farm. Surprisingly warm out and definitely late in the season our dreams of picking an apple straight from the tree were kind of dashed. I was able to find one good apple to pluck, but it took longer than we&#39;d like to admit to find that good one. While there we had a nice picnic lunch and made sure to grab some delicious apple snacks to go with our food. If you go there I highly recommend the apple cider smoothie and the apple dumpling a la mode, quite delicious.
                  </p>
                  <br />
                  <p class='blogContent'>
                    Next up was Burntshirt Vineyards, a lovely vineyard that served some surprisingly good wine. Reminding me slightly of the vineyards I toured in Napa Valley, though those were a good bit larger. It was well worth the trip especially because it was right down the road from Grandad&#39;s Farm. We had a tour of the vineyards and received lots of great info on how they make the wine. It was a tranquil and quaint place, I think just relaxing on the rocking chairs was my favorite part. Although a close second was the wine tasting.
                  </p>
                  <br />
                  <p class='blogContent'>
                    Lastly, I have a big announcement! Well...I will in my next post! Be sure to check out <a href='http://mountmckinney.com/campfire/?story=nc-fall-foliage-stikes-back'>Fall Foliage 2: The Foliage Strikes Back</a> on Monday to find out what it is!
                  </p>
                  ",
    "catch" => "Remember, Adventure is Calling!",
    "signature" => "John McKinney",
    "date" => "December 10th, 2015"
  );
  $cfstories["nm-sandia"] = array(
    "img" => "img/blog/header/peak.jpg",
    "thumb" => "img/blog/thumb/peakThumb.jpg",
    "title" => "Sandia Peak",
    "info" => "Sandia Peak, NM",
    "section" => "<p class='blogContent'>
                    Sadly, this is the end of our trip. Thank you New Mexico for an incredible trip. The last trip for us was to the Sandia Peak. Seated atop one of the Sandia Mountain peaks is Sandia Peak, a ski area and restaurant. Apparently, High Finance is the highest full service restaurant in the US. To get up to the peak you take a tramway, the longest aerial tram ride in the US.
                  </p>
                  <br />
                  <aside class='asideRight asideLandscape'>
                    <img src='../img/blog/aside/peakAside1.jpg' alt='The gondola we took all the way to the top'>
                  </aside>
                  <br />
                  <p class='blogContent'>
                    We rode our gondola up to the top. Looking out from the windows you could get some incredible views of Albuquerque and the Sandia Mountains. Thankfully, I&#39;m not afraid of heights or else I might have had a rougher trip up to the peak. However, even if you aren&#39;t afraid of heights you may still feel woozy if you happen to look through the slits in the air grate on the floor.
                  </p>
                  <br />
                  <aside class='asideLeft asideLandscape'>
                    <img src='../img/blog/aside/peakAside2.jpg' alt='Me admiring the view from 10,000 feet'>
                  </aside>
                  <br />
                  <p class='blogContent'>
                    We reached the peak of 10,000 feet, got off the gondola, and almost kissed the ground (kidding). We stopped by High Finance for a drink and sat out on the deck to enjoy the view with the beer. It was an amazing view, we saw mountains littering the landscape. Below, the city of Albuquerque sprawled out before us and all of it looked so tiny.
                  </p>
                  <br />
                  <p class='blogContent'>
                    After finishing up our drinks, we headed out on a trail along the mountain&#39;s crest. Everytime we stopped for a picture at a vista point, the views improved. Pushing deeper into the woods we found a spot we particularly liked. It had a panoramic view with the least amount of tree obstruction.
                  </p>
                  <br />
                  <p class='blogContent'>
                    My wife and I sat and enjoyed the peaceful calm at 10,000 feet. The deafening silence provided a wonderful soundtrack to the views we were basking in. It&#39;s one of the things I love most about going out into nature. Far away from the bustling of our daily lives, you are able to see what is truly important. The silence you find in the great outdoors relaxes you, if it&#39;s been awhile since you last experienced it, get out! Go! Have an adventure!
                  </p>
                  ",
    "catch" => "Remember, Adventure is Calling!",
    "signature" => "John McKinney",
    "date" => "August 23rd, 2015"
  );
  $cfstories["nm-bandelier"] = array(
    "img" => "img/blog/header/band.jpg",
    "thumb" => "img/blog/thumb/bandThumb.jpg",
    "title" => "Bandelier National Monument",
    "info" => "Bandelier National Monument, NM",
    "section" => "<p class='blogContent'>
                    After eating lunch at Jemez Falls and checking out the Valles Caldera we headed over to the Bandelier National Monument near Los Alamos. As we rolled in, so did the storms. We were worried this would keep us from getting to see this interesting piece of history. The Rangers, informed us that the storms looked like they would be staying up on the plateau and the canyon should be fine. We waited a few minutes and then headed out in the light rain.
                  </p>
                  <br />
                  <aside class='asideRight asideLandscape'>
                    <img src='../img/blog/aside/bandAside.jpg' alt='The village below the cave dwellings'>
                  </aside>
                  <br />
                  <p class='blogContent'>
                    Thankfully, after a few more minutes, the rain subsided. After a short stroll, slightly damp, we arrived at the monument. It was definitely an impressive sight. We saw the cave dwellings, built into the side of the canyon walls. Below, there was remnants of a rather large village.
                  </p>
                  <br />
                  <aside class='asideLeft asideLandscape'>
                    <img src='../img/blog/aside/bandAside2.jpg' alt='Me and my wife, cramped in the cave dwellings'>
                  </aside>
                  <br />
                  <p class='blogContent'>
                    We walked along the nicely laid out steps, with railings up to the entrance of the first dwelling that we could enter via ladder. There was already someone in that one and a family with two small children waiting to get in. We decided that we would just skip this one and enter the next one. Following the path a little further along we saw a few <a href='https://en.wikipedia.org/wiki/Petroglyph'>petroglyphs</a> on the walls inside and outside the dwellings.
                  </p>
                  <br />
                  <p class='blogContent'>
                      There were clearly multiple &#34;floors&#34; of dwellings, as well as having multi-level houses down below. We came across the next ladder and climbed up, as a tall person I can say that I would not have fared well in those back then. In reading the guide from the ranger station, the average male was 5 foot 6 and the average female was 5 foot. I&#39;m not sure how someone even that size could stay in those very long. I was hunched over my entire time in the dwelling.
                  </p>
                  <br />
                  <p class='blogContent'>
                    We exited that dwelling and moved along to the last dwelling that you could enter in that area, I enjoyed this one much more. It was tall enough for me to stand upright and move around. I could definitely enjoy an amazing night&#39;s sleep in that dark cave.
                  </p>
                  <br />
                  <p class='blogContent'>
                    In reading the guide book more to find out about this interesting people, I learned that life was difficult and the average lifespan was only 35 years. So maybe my dark cave would not have provided me that good night&#39;s sleep after all, at least not back then. It&#39;s always important to remember how good we have it in this day and age. I enjoyed my experience learning more about the people who once inhabited the walls of the Frijoles Canyon.
                  </p>
                  ",
    "catch" => "Remember, Adventure is Calling!",
    "signature" => "John McKinney",
    "date" => "August 18th, 2015"
  );
  $cfstories["nm-jemez"] = array(
    "img" => "img/blog/header/jemezFalls.jpg",
    "thumb" => "img/blog/thumb/jemezFallsThumb.jpg",
    "title" => "Jemez Falls and Valles Caldera",
    "info" => "Jemez Falls, NM",
    "section" => "<p class='blogContent'>
                    This was the most diverse day of the trip. We headed out from the Sandia foothills near Albuquerque and made our way to the red rock deserts on the way to the Soda Dam near Jemez Springs. The red rock deserts were beautiful, a vibrant red like I had never seen. It felt like I was on Mars. From there we headed to the Soda Dam.
                  </p>
                  <br />
                  <aside class='asideRight asideLandscape'>
                    <img src='../img/blog/aside/jemezAside.jpg' alt='My wife, dangling her legs off a cliff near a waterfall'>
                  </aside>
                  <br />
                  <p class='blogContent'>
                    The Soda Dam, an interesting sight to say the least, is a dam formed by the collection of minerals. It looked a lot like something out of a science fiction movie. It was definitely not your typical waterfall, but was worth the stop on our way. After that brief stop, we followed the road into the mountains. We winded our way through the sprawling pine tree lined paths.
                  </p>
                  <br />
                  <p class='blogContent'>
                    We stopped for lunch at Jemez Falls, it reminded me of pictures of Colorado. I&#39;m partial to the green mountain landscapes like these over the brown ones, like the Sandia Mountains. It was beautiful, we spent a great deal of time exploring here. We climbed on rocks, sat near the edges of cliffs, and skipped rocks on the river. Eventually, however, we did have to leave.
                  </p>
                  <br />
                  <aside class='asideLeft asideLandscape'>
                    <img src='../img/blog/aside/valles.jpg' alt='The Valles Caldera'>
                  </aside>
                  <br />
                  <p class='blogContent'>
                    From there we drove toward Bandelier National Monument. We came around a bend and were compelled to stop. There were these incredible plains with mountains surrounding them. A long time ago, a super volcano stood where the Valles Caldera stands. The Valles was formed by this super volcano collapsing.
                  </p>
                  <br />
                  <p class='blogContent'>
                    We stood and stared at the immense beauty of the sight. I learned from locals later that evening that elk typically roam the Valles. Sadly, we didn&#39;t see any elk while we were there. It was hard to believe that in one day we had seen so much. New Mexico had certainly not disappointed and we weren&#39;t even done for the day.
                  </p>
                  <br />
                  <p class='blogContent'>
                    Finally, we left the beautiful plains of the Valles and made our way to Bandelier. It was difficult to understand just how big the Valles is. As we were driving around the perimeter we looked down and had few things to judge the size against. Then, we saw a SUV driving on one of the roads in the middle. It looked much smaller than we felt it should. After research into the Valles, we learned that it is almost 14 miles wide.
                  </p>
                  ",
    "catch" => "Remember, Adventure is Calling!",
    "signature" => "John McKinney",
    "date" => "August 18th, 2015"
  );
  $cfstories["nm-home"] = array(
    "img" => "img/blog/header/home.jpg",
    "thumb" => "img/blog/thumb/homeThumb.jpg",
    "title" => "Finding Beauty Close to Home",
    "info" => "Albuquerque, NM",
    "section" => "<p class='blogContent'>
                    We stayed in the foothills of the Sandia Mountains on historic Route 66. It was my first time on Route 66, unfortunately, we didn&#39;t spend much time exploring it. We did play the classic Chuck Berry song while on it though. It&#39;s amazing the wildlife that grows regardless of climate. Every time we left the house we saw rabbits and while leaving the house one evening we even got to see a bobcat. I was thankful to be in a house that was surrounded by so much nature.
                  </p>
                  <br />
                  <aside class='asideRight asideLandscape'>
                    <img src='../img/blog/aside/homeAside.jpg' alt='Goofy picture on a rock near the house'>
                  </aside>
                  <br />
                  <p class='blogContent'>
                    There were a number of beautiful trails into the foothills near our house. One evening, my wife and I ventured out onto one before dinner. We began down the path and came upon a couple of large boulders stacked on top of each other. We, of course, climbed them. After taking a couple goofy pictures, we climbed down and continued on our path.
                  </p>
                  <br />
                  <aside class='asideLeft asideLandscape'>
                    <img src='../img/blog/aside/homeAside2.jpg' alt='My wife flexing like a strong man'>
                  </aside>
                  <br />
                  <p class='blogContent'>
                    We came to a fork in the path and opted to take the more rugged, primitive trail. We followed it along and made a few wrong turns here and there trying to stay on the path. Finally after walking on that path a good ways, we decided we didn&#39;t think it was prudent to continue on the trail. There were too many points that we could easily lose the trail on the way back. So we headed back before we got ourselves lost.
                  </p>
                  <br />
                  <p class='blogContent'>
                    We came back to that fork and headed onto the other trail that is much more defined. Though even this trail had plenty of cacti protruding into the trail. You had to be watchful of where you stepped in some areas. At one point the road sloped downward pushing me to speed up my walk. At the bottom there to greet me was a cacti about chest high. Thankfully, I stopped prior to getting stuck.
                  </p>
                  <br />
                  <p class='blogContent'>
                    At the crest of the hill we stopped and just admired the late afternoon Sun painting its golden rays on the foothills. This sun soaked horizon provided a beautiful scene for our evening hike.
                  </p>
                  ",
    "catch" => "Remember, Adventure is Calling!",
    "signature" => "John McKinney",
    "date" => "August 15th, 2015"
  );
  $cfstories["nm-kasha-katuwe"] = array(
    "img" => "img/blog/header/kashaKatuwe.jpg",
    "thumb" => "img/blog/thumb/kashaKatuweThumb.jpg",
    "title" => "Kasha-Katuwe Tent Rocks",
    "info" => "Kasha-Katuwe, NM",
    "section" => "<p class='blogContent'>
                    The first hike of the trip was to go to the Kasha Katuwe Tent Rocks National Monument (say that 5x fast). This is a slot canyon west of Santa Fe, definitely worth the hike. This was my first experience in a slot canyon.
                  </p>
                  <br />
                  <aside class='asideRight asideLandscape'>
                    <img src='../img/blog/aside/kk.jpg' alt='Hiking through the slot canyon'>
                  </aside>
                  <br />
                  <p class='blogContent'>
                    As we walked up to the entrance, the canyon walls felt more and more ominous. We traversed through narrow points where the canyon floor was smaller than the width of my shoes. At one point, we had to crouch walk under a boulder easily large enough to squash us. Thankfully, it was firmly wedged between the canyon walls. We twisted and turned our way and finally came to a point where the trail turned toward the top of the canyon.
                  </p>
                  <br />
                  <p class='blogContent'>
                    As interesting as it was being inside the slot canyon, it wasn&#39;t until we rose high above the canyon floor that the sights became breathtaking. We climbed the makeshift rock stairs. I kept thinking, what was the first person to do this thinking. There were points that would certainly have been extremely difficult if not for the railroad ties added to the trail to help create better steps.
                  </p>
                  <br />
                  <aside class='asideLeft asideLandscape'>
                    <img src='../img/blog/aside/kkVista.jpg' alt='The view was truly something incredible.'>
                  </aside>
                  <br />
                  <p class='blogContent'>
                    We climbed higher and higher, each time we turned around we were rewarded with an increasingly beautiful view. We turned around and saw the iconic tent rock formations this site is known for. We ascended more of the path and turned around again, this time seeing more of the canyon, more of the tent rocks, and this time mountains off in the distance. Now I knew there was something truly worth it to climb to the top for. I pushed harder and hiked faster, I wanted to see the vista at the peak.
                  </p>
                  <br />
                  <p class='blogContent'>
                    Reaching that peak was well worth the hike. What a gorgeous site, the land stretched on for miles and miles. Off in the distance in nearly every direction there were mountains. Down below you could see the tent rocks and the people traversing their way in and out of the canyon. The view compelled us to be speechless (which if you&#39;ve ever met me is not my natural state).
                  </p>
                  <br />
                  <p class='blogContent'>
                    It was difficult to want to trek down to the car from such awe inspiring beauty. Eventually, we had to make that journey though. As we reached the car, my wife had to make her customary statement whenever we do any sort of climb like that, &#34;Can you believe we were just at the top of that?!&#34; It&#39;s not really a trip for me unless I hear her say that.
                  </p>
                  ",
    "catch" => "Remember, Adventure is Calling!",
    "signature" => "John McKinney",
    "date" => "August 13th, 2015"
  );
  $cfstories["nm-diversity"] = array(
    "img" => "img/blog/header/diveMain.jpg",
    "thumb" => "img/blog/thumb/diveMainThumb.jpg",
    "title" => "American Southwest Diversity",
    "info" => "Albuquerque, NM",
    "section" => "<p class='blogContent'>
                    This was my first trip to the American Southwest for a hiking trip. I have to admit, I was not expecting it to be nearly as beautiful as it was. I expected New Mexico to be a vast desert with little diversity in the landscape. I always kind of wondered why people would live in what I viewed as such as a harsh climate. I was never so happy to be wrong.
                  </p>
                  <br />
                  <aside class='asideRight asideLandscape'>
                    <img src='../img/blog/aside/jemez.jpg' alt='Me at the edge of a cliff near a waterfall'>
                  </aside>
                  <br />
                  <p class='blogContent'>
                    I&#39;ll be going into more detail about a couple of the places we hiked in subsequent posts. This is just a small post about my overall experience in NM.
                  </p>
                  <br />
                  <p class='blogContent'>
                    We spent a week in and around the Albuquerque area (still can&#39;t spell that right without spellcheck). Our house for the week nestled in the Sandia Mountains. As we ventured out into the wilderness, the true beauty of the state became apparent. We saw red rock deserts, pine tree covered mountains, Native American cave dwellings, the Rio Grande, white limestone mountains, and plains resembling those in Wyoming. I was amazed that on one particular driving day, we saw most of that list in just a few hours.
                  </p>
                  <br />
                  <aside class='asideLeft asideLandscape'>
                    <img src='../img/blog/aside/diveAside1.jpg' alt='The New Mexican Landscape'>
                  </aside>
                  <br />
                  <p class='blogContent'>
                    The climate was also comfortable, this being August and the weather while warm was nothing compared to Florida&#39;s 90&#39;s and humid summer days. Personally, I&#39;m just more partial to hiking in cooler weather and like to save my multi-hour hikes for the cooler months.
                  </p>
                  <br />
                  <p class='blogContent'>
                    Overall I was very impressed with the New Mexico. I always love diverse landscapes. Mountains are majestic to me, most likely due to the fact that the highest natural point in Florida is Britton Hill. This hill is a towering 312 feet. Even foothills are wonderful to someone who grew up 50 feet or less above sea level. I think my next trip to the Southwest will be to finally check out the Big Five in Utah or to see the Grand Canyon from up close, as opposed to just flying over it.
                  </p>
                  <br />
                  <p class='blogContent'>
                    However, as gorgeous as the Southwest was, I&#39;m happy to be living in the Southeast. I have never been so thirsty for a week straight, my throat was constantly dry. I&#39;m sure I&#39;d get use to it, I&#39;m just not sure I would want to. I don&#39;t mind the heat and humidity of Florida and the non-summer months are incredible weather-wise.
                  </p>
                  ",
    "catch" => "Remember, Adventure is Calling!",
    "signature" => "John McKinney",
    "date" => "August 10th, 2015"
  );
  $cfstories["slideball"] = array(
    "img" => "img/blog/header/slideball.jpg",
    "thumb" => "img/blog/thumb/slideballThumb.jpg",
    "title" => "Slip &#39;n Slide Kickball",
    "info" => "Gainesville, FL",
    "section" => "<p class='blogContent'>
                    One of the most amazing ways to spend an afternoon.
                  </p>
                  <br />
                  <p class='blogContent'>
                    Thursday, a friend told me about slip &#39;n slide kickball, by Sunday we were playing our first game. Today, I&#39;ll be detailing our game and the supplies you&#39;ll need to make this happen at your next get together. Our supplies:
                  </p>
                  <br />
                  <aside class='asideRight asideLandscape'>
                    <img src='../img/blog/aside/slideballSetup.jpg' alt='Set up of the field prior to the game'>
                  </aside>
                  <br />
                  <p class='blogContent'>
                    <dl class='campfireList'>
                      <dt>4 4ft. inflatable kiddie pools for bases</dt>
                      <dt>4 10x25ft. heavy duty plastic painting sheets</dt>
                      <dt>Baby soap (don&#39;t want stinging in your eyes)</dt>
                      <dt>A ball (we used a flat soccerball)</dt>
                      <dt>Something to keep the sheets down (tent stakes work great)</dt>
                      <dt>Hose</dt>
                      <dt>Water</dt>
                    </dl>
                  </p>
                  <br />
                  <p class='blogContent'>
                    We blew up the kiddie pools, laid out the plastic sheets, and put water and soap on everything. It was a high-scoring affair, I believe one game was around 19-17 and the other shorter game was 16-8. The score was obviously less important than the fun (though my team won both games...just saying). We made the rules up as we went. Cutting outs from 3 to an inning to 2, requiring slides at every base (even on a home run), and deciding whether you could steal bases or not halfway through the game. It felt a lot like when you&#39;re young, creating games with the neighborhood kids. It was a blast.
                  </p>
                  <br />
                  <aside class='asideLeft asideLandscape'>
                    <img src='../img/blog/aside/slideballAfter.jpg' alt='After the game is over, we just spent a good 10 mins running around sliding'>
                  </aside>
                  <br />
                  <p class='blogContent'>
                    There were mishaps for sure, people knocking over the pools (due to the sheer speed a slip &#39;n slide launches you), slipping in the outfield, and kicks that somehow went backwards. For example: we, being adults now (sort of), were a little weary of our initial slide. However, after you learn the oh so important, NEVER SLIDE ON YOUR STOMACH AS AN ADULT, you&#39;re fine.
                  </p>
                  <br />
                  <p class='blogContent'>
                    About 30 mins into the game, it started to pour, it was great! Our sliding went further and the mistakes increased greatly, all increasing the laughter. There are few activities where you hope it will rain on you, this is one.
                  </p>
                  <br />
                  <p class='blogContent'>
                    Following the game, we spent time just running between each of the bases sliding. I haven&#39;t felt that much like a kid in a long time. It was a great feeling, one I plan to try and recreate this coming weekend when we play slip &#39;n slide kickball. Let the good times roll...or slide in this case.
                  </p>
                  <br />
                  <p class='blogContent'>
                    If you have the time, I highly recommend giving this a try. It&#39;s a great way to get outside and have some fun.
                  </p>
                  ",
    "catch" => "Remember, Adventure is Calling!",
    "signature" => "John McKinney",
    "date" => "July 27th, 2015"
  );
  $cfstories["trad-backpack"] = array(
    "img" => "img/blog/header/trees.jpg",
    "thumb" => "img/blog/thumb/treesThumb.jpg",
    "title" => "It Isn&#39;t The Size Of Your Pack",
    "info" => "Why I don't use a tradtional backpack in the woods",
    "section" => "<p class='blogContent'>
                    A few years ago, I was walking to class and got caught in a torrential downpour. I had an important project in my backpack as well as my laptop. I sprinted into the nearest building and waited out the storm. Thankfully, my project wasn&#39t ruined and my laptop was ok. However, the experience was enough for me to spend money to ensure the safety of my belongings.
                  </p>
                  <br />
                  <aside class='asideRight asideLandscape'>
                    <img src='../img/blog/aside/mountainsWeight.jpg' alt='Now, I'm prepared no matter what'>
                  </aside>
                  <br />
                  <p class='blogContent'>
                    I went home, got on Amazon, and bought a waterproof backpack from Overboard. Now, almost 4 years later, it&#39s still my go to backpack. I ride my bike to work a large amount of the time. It is not uncommon to get stuck in a downpour and my Overboard pack protects my belongings. What does this have to do with camping deep in the woods?
                  </p>
                  <br />
                  <p class='blogContent'>
                    Well, the Overboard pack is still my choice of backpack, even when hiking. I know that it doesn&#39t have the internal frame that traditional packs have and doesn&#39t have all the bells and whistles that other packs have. For me though, it&#39s exactly what I need.
                  </p>
                  <br />
                  <aside class='asideLeft asideLandscape'>
                    <img src='../img/blog/aside/tradBackOverboard.jpg' alt='Even as the storms roll in, I'm covered'>
                  </aside>
                  <br />
                  <p class='blogContent'>
                    When I&#39m out hiking in the woods, the last thing I want to think about is if my sleeping bag, tent, and clothes are going to get soaked if a thunderstorm rolls in. I know they have rain covers for regular packs but why buy something extra on top of an already expensive pack?
                  </p>
                  <br />
                  <p class='blogContent'>
                    I know that other packs are made of lighter weight materials but it&#39s not like my bag is heavy, at just about 3 lbs. For far less than a typical pack I get IP66 protection and while that means it&#39s not completely waterproof it performs more than satisfactory. It has a pocket on each side as well as an internal pocket and has various loops to clip items to it on the outside. I am always looking for an upgraded pack that is extremely light and waterproof at the same time, but I rarely find any that offer what I&#39m looking for. If they do, they are often quite expensive and don&#39t offer a large enough improvement to justify the cost.
                  </p>
                  <br />
                  <p class='blogContent'>
                    For awhile, I really wanted the 35L Sea to Summit Hydraulic Pack. I thought it would be my new go to pack. It has 5L more than my current pack and is completely waterproof. There was a great sale so I picked it up. I tried packing all the things I had packed in my 30L pack and found it to be more difficult. Maybe it&#39s the way space is used in the Sea to Summit versus the Overboard. Possibly it was because of the difference in shape, the rectangular Overboard versus the cylindrical Sea to Summit. I&#39m not sure why it didn&#39t fit as much. This was the bag I had wanted for a few months and when I got it I was disappointed. So for now I will continue to use my Overboard pack.
                  </p>
                  ",
    "catch" => "Remember, Adventure is Calling!",
    "signature" => "John McKinney",
    "date" => "June 16th, 2015 "
  );
  $cfstories["sawyer-mini"] = array(
    "img" => "img/blog/header/river.jpg",
    "thumb" => "img/blog/thumb/riverThumb.jpg",
    "title" => "Best Water Filtration",
    "info" => "The best portable water filtration",
    "section" => "<p class='blogContent'>
                    The Sawyer Mini is worth every bit of the $20 I spent on it. It&#39s lightweight, portable, and doesn&#39t take up a lot of room in your pack. I remember seeing the LifeStraw and thinking, while it&#39s a great idea for emergency situations it seems very limited. You would have to lean down near the water and sip from the stream. You have no way of transferring water to a water bottle for later drinking.
                  </p>
                  <br />
                  <aside class='asideRight asideLandscape'>
                    <img src='../img/blog/aside/sawyerDirty.jpg' alt='When in the backcountry, clean water is essential'>
                  </aside>
                  <br />
                  <p class='blogContent'>
                    I suppose you could fill your bottles and sip from them, but this seems ineffective as now your bottles are contaminated. The other option, is water filtration tablets. I&#39ve tried these before and while they&#39re effective, they can leave the water tasting...less than ideal.
                  </p>
                  <br />
                  <p class='blogContent'>
                    Then there is the Sawyer Mini. The compact water filtration system that cleans water effectively and doesn&#39t leave the water tasting terrible. It comes with a foldable water pouch so you can collect water from the stream.
                  </p>
                  <br />
                  <p class='blogContent'>
                    From there you screw on the Sawyer and either squeeze the water out of the pouch into your water bottle or you can drink it from the Sawyer. Another benefit of the Sawyer is it can be attached inline to a Camelbak. I haven&#39t personally done this, because I don&#39t have a Camelbak but it is fairly straightforward to do from what I&#39ve seen online.
                  </p>
                  <br />
                  <aside class='asideLeft asideLandscape'>
                    <img src='../img/blog/aside/sawyerMini.jpg' alt='Cleaning dirty water will keep you alive'>
                  </aside>
                  <br />
                  <p class='blogContent'>
                    The Sawyer being the right choice for me became cemented the first time I used it while on a weekend hike in the mountains of Georgia. I was extremely thirsty and instead of having to lean down near the stream and drink while holding myself up from not falling in the stream. I was able to simply lean down fill up a water pouch and drink. It was a simple affair, it left me impressed with the Sawyer.
                  </p>
                  <br />
                  <p class='blogContent'>
                    Having clean drinking water while camping is paramount, and to do so without adding extra weight is especially useful. Water is adds a large amount of weight to your pack but an obvious necessity.
                  </p>
                  <br />
                  <p class='blogContent'>
                    Having a way to not have to cut down on the amount you will need to carry without having to boil the water to make it safe is always worth the cost. At around $20 it&#39s not a painful cost for a large benefit. The Sawyer is my go to for having filtered water on my hikes. Stay hydrated, not thirsty my friends.
                  </p>
                  ",
    "catch" => "Remember, Adventure is Calling!",
    "signature" => "John McKinney",
    "date" => "June 4th, 2015 "
  );
  $cfstories["cohutta-mountain"] = array(
    "img" => "img/blog/header/cohuttaMountain.jpg",
    "thumb" => "img/blog/thumb/cohuttaMountainThumb.jpg",
    "title" => "Cohutta Mountain Loop",
    "info" => "Cohutta Wilderness, GA",
    "section" => "<p class='blogContent'>
                    This past weekend, a friend and I headed up to the Cohutta Mountains in Northwest Georgia to hike the Cohutta Mountain Loop. It was absolutely gorgeous out there. We parked at the Three Forks Trailhead and headed out on the East Cowpen trail. My friend had a running watch to measure our distance traveled as well as elevation changes throughout the trip. We started at an elevation of 3,200 ft. and began to descend into the Cohutta Wilderness.
                  </p>
                  <br />
                  <p class='blogContent'>
                    What we didn&#39t know when we started off on the trail was the lack of water that would be available on the trail we took. I had read some reviews of the area and some stories from the specific loop we were planning on doing and all the pictures were of people down by a river. What I didn&#39t realize was that the first time we&#39d see a river on the trail we took in would be when we got to the Jacks River after hiking just under 8 miles and dropping 2,000 ft. in elevation.
                  </p>
                  <br />
                  <aside class='asideRight asideLandscape'>
                    <img src='../img/blog/aside/cohuttaTent.jpg' alt='Our tent near the river'>
                  </aside>
                  <br />
                  <p class='blogContent'>
                    We had some water but I drink a lot and when we got down to the river after those 8 miles, I drank 4 bottles of water immediately and then another 4 when I got to camp. We used the Sawyer Mini for water filtration. It is definitely one of the best purchases I&#39ve ever made, it&#39s ultra portable and cleans the water effectively.
                  </p>
                  <br />
                  <p class='blogContent'>
                    We then had to wade our way through the stream a couple of times to get to an open area to make camp. Slipping my feet into the cold water stream water after a good day of hiking was one of the more refreshing feelings I&#39ve had. The area we found was right on the river bank, just far enough back to have dry, solid ground but still right on the river. We set up the camp, started a fire, and ate dinner. It was so peaceful out there. The sound of the river lulled me to sleep, well that is until 5 mins after closing my eyes when nature called. All that water I guzzled to get rehydrated was ready to be set free. I must have woken up 4-5 times that night.
                  </p>
                  <br />
                  <aside class='asideLeft asideLandscape'>
                    <img src='../img/blog/aside/cohuttaMe.jpg' alt='Me being goofy down by the falls'>
                  </aside>
                  <br />
                  <p class='blogContent'>
                    The next morning, we packed up camp and headed down to see the Jack&#39s River Falls. The hike down to the Falls was great. As we weaved our way around the river down we started to hear the thundering sound of a waterfall. The falls were beautiful, we just stopped and stared at them for awhile, neither of us wanting to move on. We pushed further to try and get different views of the natural beauty that was before us. After having our fill, who am I kidding I could still be there staring at them, we headed out on the trail back toward our car. We were at an elevation of 1,200 ft. now and were dreading the climb back.
                  </p>
                  <br />
                  <p class='blogContent'>
                    The trail back was definitely painful, 2,000 ft. increase in 8 miles. We would boo out loud whenever the trail dropped in elevation for more than a few steps knowing that we would have to climb it again. The most frustrating thing was not the elevation increases, but that we thought there would be water on this trail. We quickly realized we were wrong and we would need to conserve water as we watched the trail we were on and the river part ways. We did stop for lunch at an area that clearly fed into the river, however, it had been dried up to mostly mud at this time of year.
                  </p>
                  <br />
                  <p class='blogContent'>
                    If I was to do another hike in this area, which I would definitely not be opposed to, I would take the Jack&#39s River Trail the whole way. The lack of water on the trail we took was definitely a detriment to us staying an extra night out there. If we were take a trail that stayed on or close to the river the whole way we definitely would have stayed longer. Oh well, you live and you learn right? All in all we descended 2,000 ft. and ascended that same amount, as well as hiking a total of 20 miles. Definitely not a bad way to spend a Memorial Day weekend.
                  </p>
                  <br />
                  <p class='blogContent'>
                    We stayed in Atlanta Sunday night so we would be fresh driving home the next day. That post backpacking shower is one of the best things that this life has to offer. After getting cleaned up, we went out for dinner at the Brick Store Pub in Decatur. Their beer selection was exactly what was needed after hiking 20 miles in 2 days. I don&#39t know if it was the best beer I&#39ve ever had but it definitely tasted like it.
                  </p>
                  ",
    "catch" => "Remember, Adventure is Calling!",
    "signature" => "John McKinney",
    "date" => "May 26th, 2015"
  );
  $cfstories["juniper-springs"] = array(
    "img" => "img/blog/header/juniperSwimHole.jpg",
    "thumb" => "img/blog/thumb/juniperSwimHoleThumb.jpg",
    "title" => "Juniper Springs",
    "info" => "Ocala National Forest, FL",
    "section" => "<p class='blogContent'>
                    Down here in Florida, it&#39s already in the 90&#39s even in early May. Those temperatures can make camping a lot more uncomfortable. Add the daily afternoon thunderstorm and you can see why most don&#39t camp in Florida in the summer. Despite that my wife and I joined another married couple and headed out for one last camping trip in Florida before it&#39s unbearable to camp until September. It was an amazing time, the weather wasn&#39t too hot and the thunderstorms subsided for a sunny weekend.
                  </p>
                  <br />
                  <aside class='asideRight asideLandscape'>
                    <img src='../img/blog/aside/juniperTent.jpg' alt='Our 6 persion mansion'>
                  </aside>
                  <br />
                  <p class='blogContent'>
                    When we arrived Saturday morning, we set up our 6 person mansion of a tent that we shared for the night. You would never lug this thing into the backcountry, but it was every bit of car camping luxury. It was definitely interesting to be able to actually stand up at all, let alone fully upright while in the tent. My little 2 person tent barely lets me kneel.
                  </p>
                  <br />
                  <p class='blogContent'>
                    After setting up our camp and tent we headed out for a short hike. The water around Juniper Springs, is gorgeous and crystal clear. We didn&#39t venture onto the Florida Trail which goes right near Juniper Spring, due to it not having much shade and it was already high 80s. We stuck to the short nature trails around the campground and the swimming area. While on our short hike, we snapped some shots of a few turtles sunbathing. It was a lazy Saturday for us and for all of nature. We made our way to the springs for a dip in the chilly spring waters. It felt amazing once we got in, but boy that initial descent into the water is painful.
                  </p>
                  <br />
                  <aside class='asideLeft asideLandscape'>
                    <img src='../img/blog/aside/juniperTurtle.jpg' alt='Turtles sunbathing'>
                  </aside>
                  <br />
                  <p class='blogContent'>
                    After a late lunch and a game of bocce ball, we headed back to the springs for swimming round 2. The heat had subsided a good bit and that made the jump back into the water that much more freezing. We spent the afternoon relaxing, jumping off the platform into the water, and racing each other in the water. It was a wonderful day to get away from not only the heat but the city as well. Our evening was spent playing card games, sitting around the fire, and chatting.
                  </p>
                  <br />
                  <p class='blogContent'>
                    Sunday, my wife and I took another short hike in the morning and even got to see a deer 10 ft ahead of us before she scurried into the woods. I love relaxing weekends like these. The fresh air and sunny skies are exactly what I need. Out in the peace and quiet you can gather your thoughts and let go of the things that seem so important in your daily life. I think that&#39s the real beauty of the outdoors, they allow you to forget what you deem important and focus on what truly is: your friends, family, and of course having a little fun.
                  </p>
                  <br />
                  ",
    "catch" => "Remember, Adventure is Calling!",
    "signature" => "John McKinney",
    "date" => "May 19th, 2015"
  );
  $cfstories["fixed-blade"] = array(
    "img" => "img/blog/header/fixedBlade.jpg",
    "thumb" => "img/blog/thumb/fixedBladeThumb.jpg",
    "title" => "Choosing A Fixed Blade Knife",
    "info" => "How to choose a fixed blade knife",
    "section" => "<p class='blogContent'>
                    There are so many fixed blade knives out there. I know there are as many opinions about which knife is best than there is knives in the world. However, in my opinion I think the one that makes the most sense for the money is the Schrade SCHF26. I wanted something that was quality and would last but wouldn&#39t break the bank. At only $34 on Amazon, the price is excellent and the quality is wonderful as well.
                  </p>
                  <br />
                  <p class='blogContent'>
                    First, I would like to suggest the types of things you should look for in a knife:
                  </p>
                  <br />
                  <aside class='asideRight asideLandscape'>
                    <img src='../img/blog/aside/knifeRambo.jpg' alt='Rambo's ridiculously large knife'>
                  </aside>
                  <br />
                  <p class='blogContent'>
                    <dl class='campfireList'>
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
                    </dl>
                  </p>
                  <br />
                  <p class='blogContent'>
                    All the knives I looked into were full-tang. I did a large amount of looking around before deciding upon the SCHF26. I originally thought I would go with the KA-BAR US Marine Corp, the Ontario 499 Air Force, or the SOG Seal Pup Elite. All are great knives, however, when I held them in my hand they just didn&#39t find feel quite right. I have large hands, so it is important to me to have a handle that is long enough. The KA-BAR and the Seal Pup just felt a little short in my hand for comfort. The Ontario had similar specs as the KA-BAR but was difficult to find locally so I ended up passing on it.
                  </p>
                  <br />
                  <aside class='asideLeft asideLandscape'>
                    <img src='../img/blog/aside/blades.jpg' alt='Some of your choices'>
                  </aside>
                  <br />
                  <p class='blogContent'>
                    After passing on those, I began a new search. My new selections brought me to the KA-BAR BK-22 and the Schrade SCHF9. I thought I would go with the BK-22, I had it in my shopping cart and everything. It was an excellent knife, highly rated, and not a bad price at about $80 on Amazon. The BK-22 has a thick spine at a quarter inch and can take a beating. It&#39s made from 1095 Cro-Van steel Solid. I was about to purchase it, when someone suggested I look at the SCHF26. As I looked into it I began to like it more and more. I watched videos and articles comparing the BK-22 and the SCHF26 and most people agreed that the SCHF26 is just a better value.
                  </p>
                  <br />
                  <p class='blogContent'>
                    I pulled the trigger and ordered the SCHF26. I love it. The grip has a rubbery feel, it feels like it wouldn&#39t slip out of my hand even if I was doing something in the rain. It has a spine that is a quarter inch thick and flat. It has a sharp point and is a single edge blade. The weight distribution just felt right in my hands. It was a length I liked by staying just under 11&#34 and had a large handle at 5.4&#34. I&#39m very happy with my purchase, needless to say.
                  </p>
                  <br />
                  <p class='blogContent'>
                    For selecting your own knife, there are many that will work. I was splitting hairs comparing many knives, many of which I didn&#39t list. People get very opinionated about which knife is best, and that&#39s fine, we are all passionate about different things. I just think that as long as it is a knife that is full-tang, the right size, the right shape, and made of a good material you will be fine. Often, picking a knife is best done by placing it in your hand and determining if it passes the initial gut test. Good luck picking out a knife and if you have questions or comments, feel free to leave them below!
                  </p>
                  ",
    "catch" => "Remember, Adventure is Calling!",
    "signature" => "John McKinney",
    "date" => "May 12th, 2015 "
  );
  $cfstories["grayton-beach"] = array(
    "img" => "img/blog/header/graytonBeach.jpg",
    "thumb" => "img/blog/thumb/graytonBeachThumb.jpg",
    "title" => "Grayton Beach",
    "info" => "Santa Rosa Beach, FL",
    "section" => "<p class='blogContent'>
                    My wife and I packed up Tuesday night and headed to the beach house a few hours from home, our stuff loaded up in the car and bikes secured on the trunk bike rack. I say secured but what I mean is we thought they were secured. I learned two valuable lessons this past Tuesday, don&#39t skimp on a bike rack and make sure you&#39ve double and triple checked that you&#39ve installed it correctly. We were in such a hurry and it was the first time we had used our bike rack that I didn&#39t place the side straps in the position they needed to be. It was probably not best to try a new bike rack out for the first time on a multi-hour interstate trip...I guess I learned three valuable lessons then.
                  </p>
                  <br />
                  <aside class='asideRight asideLandscape'>
                    <img src='../img/blog/aside/graytonSunset.jpg' alt='Sunsets on the beach'>
                  </aside>
                  <br />
                  <p class='blogContent'>
                    Anyway, we were on the interstate for 30 mins and everything seemed to be fine, I had been keeping a constant eye on the bikes to make sure they weren&#39t wobbling. Then not more than a minute later, we drove over a dip in the road. It was enough of a bounce to cause the lower bar to swing closed and caused the bikes to swing down toward the road. I immediately pulled over to the shoulder and inspected the bikes. Thankfully the only damage was that on my wife&#39s new bike (when I say new I mean one day old) the front tire had dragged on the asphalt and burned a hole in the tire and tube. It definitely could&#39ve been worse. We reattached the bikes and drove back the 30 mins home, put the bikes inside and headed out again. That was all the excitement we had this trip.
                  </p>
                  <br />
                  <aside class='asideLeft asideLandscape'>
                    <img src='../img/blog/aside/graytonWater.jpg' alt='Serene water during the bike ride'>
                  </aside>
                  <br />
                  <p class='blogContent'>
                    Though I didn&#39t go camping in Grayton it was still a wonderful trip spent on some of the most beautiful beaches in the world. It was the week leading up to my brother&#39s wedding, and my family and I spent 5 days in a house 30 ft. from the beginning of the dunes. Being landlocked for the last several years has made me appreciate the time I get on the ocean. Lakes and springs just don&#39t cut it for me compared to the beach, not sure why maybe it&#39s because I grew up on the white, sugar sand beaches of the Gulf Coast of Florida.
                  </p>
                  <br />
                  <p class='blogContent'>
                    We had family and friends come in from all over to relax for the week leading up to the wedding with us. Our days were spent lounging on the sand and swimming in the crystal clear water. The sunsets, as you can see, are second to none here on the Emerald Coast.
                  </p>
                  <br />
                  <p class='blogContent'>
                    My dad rented some beach cruisers for the house, so at least we got to ride bikes even without ours. We rode through a couple of the quaint towns on 30A. Life moves more slowly in these little beach towns but if you were to ask any resident, they would say that&#39s exactly why they live there.
                  </p>
                  <br />
                  <p class='blogContent'>
                    If you&#39ve never had the opportunity to check out the Gulf Coast, I highly recommend a vacation there. If you want the best weather, make sure to check out May or September. It&#39s still plenty warm enough for swimming but not so hot that you feel like a turkey on Thanksgiving. Regardless of when you go, I promise you won&#39t be disappointed.
                  </p>
                  ",
    "catch" => "Remember, Adventure is Calling!",
    "signature" => "John McKinney",
    "date" => "May 10th, 2015"
  );
  $cfstories["3-day-spring-pack"] = array(
    "img" => "img/blog/header/scale.jpg",
    "thumb" => "img/blog/thumb/scaleThumb.jpg",
    "title" => "The 3 Day Spring Backpack",
    "info" => "How to pack a 3 day pack for Spring",
    "section" => "<p class='blogContent'>
                    I always have my bag packed, when it&#39s time to go I don&#39t spend time thinking about what I need. I take things out to wash and clean after a trip and then immediately place them back in the pack. I carry a 30 liter pack, I&#39m always looking for ways to lower the weight and hopefully get down to a 20 liter pack.
                  </p>
                  <br />
                  <aside class='asideLeft asideLandscape'>
                    <img src='../img/blog/aside/tradBackOverboard.jpg' alt='Contents of my bag, laid out'>
                  </aside>
                  <br />
                  <p class='blogContent'>
                    I currently use an Overboard 30L that is rated to survive quick submersions. It&#39s definitely not the traditional backpacker&#39s pack but it works well for me.
                  </p>
                  <br />
                  <p class='blogContent'>
                    Today, I thought I would give you a glimpse into my 3 season pack. I would take this pack for a trip that was up to 5 days long. I look for things that pack down small and are lightweight but still provide the necessary protection.
                  </p>
                  <br />
                  <p class='blogContent'>
                    I typically look for deals on gear and equipment so I can get the most for my money. Most of the things I&#39ve bought were from Sierra Trading Post, Moosejaw, and Amazon. Though I&#39m always looking for a deal I&#39m not afraid to spend the extra money on quality products that will last a long time.
                  </p>
                  <br />
                  <p class='blogContent'>
                    Frugality is not the same as being cheap. People who are cheap want to spend the least amount possible on that purchase. The problem is the product often breaks down quicker and needs to be replaced causing you to spend more in the long run. Frugal people want to spend the least amount for the best quality for a product that will last the longest.
                  </p>
                  <br />
                  <p class='blogContent'>
                    <dl class='campfireList'>
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
                            <aside class='asideRight asideLandscape'>
                              <img src='../img/blog/aside/threeDaySpring.jpg' alt='Now I'm prepared no matter what'>
                            </aside>
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
                    </dl>
                  </p>
                  <br />
                  <p class='blogContent'>
                    I hope by seeing what&#39s in my pack you have a better understanding of things you need to pack and things you can leave at home. I&#39m always looking for ways to leave more at home so I can carry less weight. If you have any suggestions, make sure to leave a comment.
                  </p>
                  ",
    "catch" => "Remember, Adventure is Calling!",
    "signature" => "John McKinney",
    "date" => "April 17th, 2015 "
  );
  $cfstories["clearwater-lake"] = array(
    "img" => "img/blog/header/clearwaterOcalaLake.jpg",
    "thumb" => "img/blog/thumb/clearwaterOcalaLakeThumb.jpg",
    "title" => "Clearwater Lake",
    "info" => "Ocala National Forest, FL",
    "section" => "<p class='blogContent'>
                    Getting away from it all is one of the best things you can do sometimes. When the stresses of modern day life become too much, sometimes getting out into the wilderness can be just what the doctor ordered. You come back refreshed and renewed and that&#39s exactly what happened to me this past weekend. Some friends and I got away to the Ocala National Forest for a little car camping.
                  </p>
                  <br />
                  <aside class='asideRight asideLandscape'>
                    <img src='../img/blog/aside/clearwaterOcalaTent.jpg' alt='Campground, my tent'>
                  </aside>
                  <br />
                  <p class='blogContent'>
                    When we arrived Friday evening it was already dark (which is always frustrating to set up a tent in) and rain was threatening. Thankfully the rain held off and we were able to get our tents up and fire going. We reheated some baked ziti that one of the friends had made and froze for our dinner. This turned out to be one of the nastiest meals I&#39ve had. Thankfully, when you&#39re hungry you just don&#39t care. The wood was a little wet and smoked a large amount because of that. This caused the ziti to have a smoked flavor that did not complement it. Between the four of us, we emptied about ⅓ of a container of parmesan on to the pasta (it was the only thing that seemed to neutralize the smoky flavor). The next few hours were us sitting around the fire sharing stories, cracking open a few beers, and of course, poking fun at the friend&#39s terribly executed dinner. We headed to bed but didn&#39t realize that we had a snorer amongst us. How I wish I would&#39ve grabbed ear plugs before bed. A night of tossing and turning attempting to block the noise was ahead of me.
                  </p>
                  <br />
                  <p class='blogContent'>
                    Saturday morning I woke up early and went for a hike by myself around the lake. Everything was still in the forest except for a group of 4 deer who didn&#39t seem to care too much about me. They crossed the trail a few hundred feet ahead of me looking for breakfast. It was a peaceful time to relax and be alone with my thoughts. The beauty of nature always makes me contemplate what&#39s necessary in life. As I came back from my morning hike the whole campsite began to wake up and get their day started. I took another mid-morning hike with one of my friends. It was a great time to just hang out with him and catch up on life. The rest of the day was spent lounging around the campsite and throwing the football down by the lake.
                  </p>
                  <br />
                  <p class='blogContent'>
                    That night, we met a group who definitely knew how to have a good time. They were celebrating a milestone, one of the guy&#39s 60th birthday. It was 4 friends and their families. Each had the exact same Jeep just in a different color. They had neon shirts, neon painted croquet balls, led string lights everywhere all of which corresponded to the color of their Jeep. They had black lights hooked up to their Jeeps to accentuate all the neon colors.
                  </p>
                  <br />
                  <aside class='asideLeft asideLandscape'>
                    <img src='../img/blog/aside/clearwaterOcalaOdd.jpg' alt='The best party people ever'>
                  </aside>
                  <br />
                  <p class='blogContent'>
                    In speaking with them, they had met when they worked for their city to build a haunted house. They had done that for years and collected a large amount of haunted props throughout the years. They told me about how Halloween at their homes consists of house hopping between the 4 of them and checking out their incredibly elaborate displays. One guy had a &#34rain room&#34, in which he set up pipes to create fake rain as you walked across a bridge that would move due to hydraulics. Needless to say, they take Halloween to another level. I want to visit them in October and see these amazing houses.
                  </p>
                  <br />
                  <p class='blogContent'>
                    Thankfully, I had ear plugs Saturday night. I slept like a rock and think I only woke up once. Sunday was our clean up and head out day. It put an end to an amazing weekend. It was unbelievable how quickly the time went by, I can&#39t wait to go again though. I hope if you haven&#39t been camping, you get out there and try it. Start with car camping and maybe you&#39ll eventually move into some more backcountry type through-hiking. Even if you don&#39t, just go be outdoors. There is so much outside our wifi and paved city streets. Also, become friends with the weird people at your campsite, they often provide the most memorable moments.
                  </p>
                  ",
    "catch" => "Remember, Adventure is Calling!",
    "signature" => "John McKinney",
    "date" => "March 9th, 2015"
  );
  $cfstories["about-me"] = array(
    "img" => "img/blog/header/whoAmI.jpg",
    "thumb" => "img/blog/thumb/whoAmIThumb.jpg",
    "title" => "Who Am I?",
    "info" => "This is a story all about yours truly",
    "section" => "<p class='blogContent'>
                    Welcome to the very first Campfire Story here at Mount McKinney! This is an exciting time for me.
                  </p>
                  <br />
                  <aside class='asideRight asideLandscape'>
                    <img src='../img/blog/aside/destinBeach.jpg' alt='Beaches at Destin, FL'>
                  </aside>
                  <br />
                  <p class='blogContent'>
                    First off we&#39ll get the introductions out of the way, my name is John and I am a web developer. I love creating web sites and would love to be the web developer for your next project. Please check out my <a href='http://mountmckinney.com/portfolio/'>Portfolio</a> for more info. If you'd like to discuss a possible project in detail, feel free to shoot me an <a href='mailto:john@mountmckinney.com'>email</a>.
                  </p>
                  <br />
                  <p class='blogContent'>
                    I grew up on the Panhandle of Florida with some of the world&#39s most beautiful beaches. At a young age, I fell in love with the outdoors. I remember spending hours pretending I was a spy or a soldier with the other boys my age in the woods around our neighborhood. As I got older, my fascination with the outdoors only grew. I bike to work just to get outside more, kayak when I can on the weekends, and take walks on local trails. I&#39m most at home outside the walls of my house.
                  </p>
                  <br />
                  <aside class='asideLeft asideLandscape'>
                    <img src='../img/blog/aside/banksTahoe.jpg' alt='Lake Tahoe with Banks'>
                  </aside>
                  <br />
                  <p class='blogContent'>
                    As for the <a href='http://mountmckinney.com/campfirestories/'>Campfire Stories</a>, I will be bringing you tales from my time spent in the great outdoors. This could cover anything from backpacking in Denali, road trips to the Smokey Mountains, beach camping on the Gulf of Mexico, or even just a beautiful trail that I take with my lovely wife. I look forward to sharing these adventures with all of you. If you have a suggestion for where my next adventure should be, then I would love to hear your thoughts! Drop me an email or comment on my posts anytime.
                  </p>
                  <br />
                  <p class='blogContent'>
                    If I am going to purchase something to use in the backcountry, I have to make sure I get the best product for the money. This is what I promise you, that when I give you a recommendation on what fixed blade knife to buy, how to survive a bear attack, or what food to eat on the trail know that it comes after a countless hours of research. You can think of my articles as a summary of opinions. Instead of you taking time to read all about what product, say a sleeping bag, to buy, I have done that for you.
                  </p>
                  <br />
                  <p class='blogContent'>
                    Sound good? Great, I hope you enjoy my articles!
                  </p>
                  ",
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
