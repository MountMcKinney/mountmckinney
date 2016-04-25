// This causes the Mount McKinney name and text to fade in
$('.title').hide().delay(100).fadeIn(2500);

//This is for creating a pop up form upon clicking a Contact Us button on the home page
$('.contactPopUp').click(function(){
  $('.popupForm').fadeIn(1200).addClass('displayPopup').removeClass('popupForm');
  // $('.overlay').css("display", "block");
});

// This is for after submission of the form, fadeout
$('#c-submit-button').click(function() {
  $('.displayPopup').fadeOut(10000);
  $('.displayPopup').addClass('popupForm');
});

// This function is if they want to leave the form without filling it outline
$('.popupExit').click(function(){
    $('.displayPopup').fadeOut(2000);
    $('.displayPopup').addClass('popupForm');
});

//This is for creating a pop up form upon clicking a Contact Us button on the home page
$('.subFormPopup').click(function(){
  $('.subForm').fadeIn(1200).addClass('displaySubForm').removeClass('subForm');
  // $('.overlay').css("display", "block");
});

// This is for after submission of the form, fadeout
$('#c-submit-button').click(function() {
  $('.displaySubForm').fadeOut(10000);
  $('.displaySubForm').addClass('subForm');
});

// This function is if they want to leave the form without filling it outline
$('.popupSubExit').click(function(){
    $('.displaySubForm').fadeOut(2000);
    $('.displaySubForm').addClass('subForm');
});

// $('.overlay').click(function(){
//   $('.displayPopup').fadeOut(1000).addClass('popupForm').removeClass('displayPopup');
//   $('.overlay').hide();
// });

// Mobile menu
$(document).ready(function () {
    $('.menuBtn').on('click', function(event){
    	event.preventDefault();
    	// create menu variables
    	var slideoutMenu = $('.mobileMenu');
    	var slideoutMenuWidth = $('.mobileMenu').width();

    	// toggle open class
    	slideoutMenu.toggleClass("open");

    	// slide menu
    	if (slideoutMenu.hasClass("open")) {
	    	slideoutMenu.animate({
		    	left: "0px"
	    	});
    	} else {
	    	slideoutMenu.animate({
		    	left: -slideoutMenuWidth
	    	}, 250);
    	}
    });
});

$('.topStoryCaption').mouseover(function(){
  $('.topStoryImg').css("-webkit-filter", "blur(0px)");
});
