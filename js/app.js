jQuery('.title').hide().fadeIn(3000);

jQuery(function($){
     $( '.menu-btn').click(function(){
       $('.responsive-menu').toggleClass('expand');
       $('.home-header').toggleClass('hidden');
     })
})

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
           success: function () {
               $('#contact-name').load("inc/contact-thankyou.php");
               $('#contact-us').hide();
           },
       }
   });
 };

 function postContactToGoogle() {
  var email = $('#sub_form_email').val();
  var first = $('#sub_form_name').val();

      $.ajax({
          url: "https://docs.google.com/forms/d/1gzeVUb99GZYX4Dy9R0MCfr3kn0_typhQqN0JOZbW9rA/formResponse",
          data: { "entry.2088672430": email,
          "entry.1029484234": first},
          type: "POST",
          dataType: "xml",
          statusCode: {
            success: function () {
                $('#sub').load("inc/subscribe-thankyou.php");
                $('#sub-formpage').hide();
            },
        }
    });
  };
