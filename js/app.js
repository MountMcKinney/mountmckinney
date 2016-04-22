// This causes the Mount McKinney name and text to fade in
$('.title').hide().delay(100).fadeIn(2500);

// This controls the mobile menu
// It also overwrites some of the current classes to accomodate
  // being able to see the menu easier due to its opacity
$(function(){
     $('.menu-btn').click(function(){
       $('.responsive-menu').toggleClass('expand');
       $('.home-header').toggleClass('hidden');
       $('.breadcrumb').toggleClass('hide-bread')
     });
});

//This is for creating a pop up form upon clicking a Contact Us button on the home page
$('.contactPopUp').click(function(){
  $('.popupForm').fadeIn(1200).addClass('displayPopup').removeClass('popupForm');
  $('.overlay').css("display", "block");
});

// This is for after submission of the form, fadeout
$('#c-submit-button').click(function() {
  $('.displayPopup').delay(3000).fadeOut(1000);
});

// This function is if they want to leave the form without filling it outline
$('.overlay').click(function(){
  $('.displayPopup').hide();
});
