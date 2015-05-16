$(function($){
         $( '.menu-btn' ).click(function(){
           $('.responsive-menu').toggleClass('expand')
         })
      });


function postPortfolioToGoogle() {
 var email = $('#connect_email').val();
 var first = $('#connect_name').val();
 var comment = $('#connect_comments').val();

     $.ajax({
         url: "https://docs.google.com/forms/d/1lsJSZEwwBVjwWbBbI4Yj9gAiOt_Q_boZ_kV7HXR0jA0/formResponse",
         data: { "entry.307489032": email,
         "entry.528305603": first, "entry.1946196515": comment},
         type: "POST",
         dataType: "xml",
         statusCode: {
           0: function () {
               $('#contact-name').load("contact-thankyou.html");
               $('#contact-us').hide();
           },
          //  success: function () {
          //      $('#sub').load("thankyou.html");
          //      $('#sub-formpage').hide();
          //  }
       }
   });
 };

 // jQuery(function($){
 //   $("body").append('<div id="overlay"></div>
 //         <div id="cfstory-lightbox" class="dialog">
 //           <div class="closer"></div>
 //           <div class="content panes">
 //             <div class="pane" style="display:block;">
 //               <h3 id="blog-top-h3">Clearwater Lake</h3><br/>
 //               <h3>Ocala National Forest</h3>
 //               <div class="blog-head"></div>
 //               <div class="blog-body" style="max-height:1000px">
 //                 <br/>
 //                 <p>Getting away from it all is one of the best things you can do sometimes. You come back refreshed and renewed and that is exactly what happened to me this weekend. Some friends and I got away to the Ocala National Forest for a little car camping. </p>
 //                 <aside><img src="img/odd-onf.jpg" alt="The most colorful people I have met"></aside>
 //             </div>
 //           </div>
 //         </div>
 //       </div>')});
 //  jQuery(function($){
 //    $('div.closer').bind('click', function(){document.getElementById("overlay").style.display="none";
 //   document.getElementById('cfstory-lightbox').style.display="none"})});
