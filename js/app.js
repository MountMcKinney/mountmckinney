// Variable to hold request
var request;

// Bind to the submit event of our form
$("#sub-formpage").submit(function(event){

    // Abort any pending request
    if (request) {
        request.abort();
    }
    // setup some local variables
    var $form = $(this);

    // Let's select and cache all the fields
    var $inputs = $form.find("input, select, button, textarea");

    // Serialize the data in the form
    var serializedData = $form.serialize();

    // Let's disable the inputs for the duration of the Ajax request.
    // Note: we disable elements AFTER the form data has been serialized.
    // Disabled form elements will not be serialized.
    $inputs.prop("disabled", true);

    // Fire off the request to /form.php
    request = $.ajax({
        url: "https://docs.google.com/forms/d/1gzeVUb99GZYX4Dy9R0MCfr3kn0_typhQqN0JOZbW9rA/formResponse",
        type: "POST",
        data: serializedData
    });

    // Callback handler that will be called on success
    request.done(function (response, textStatus, jqXHR){
        // Log a message to the console
        console.log("Yay! You'll now get all the info");
    });

    // Callback handler that will be called on failure
    request.fail(function (jqXHR, textStatus, errorThrown){
        // Log the error to the console
        console.error(
            "The following error occurred: "+
            textStatus, errorThrown
        );
    });

    // Callback handler that will be called regardless
    // if the request failed or succeeded
    request.always(function () {
        // Reenable the inputs
        $inputs.prop("disabled", false);
    });

    // Prevent default posting of form
    event.preventDefault();
});

$("#contact-us").submit(function(event){

    // Abort any pending request
    if (request) {
        request.abort();
    }
    // setup some local variables
    var $form = $(this);

    // Let's select and cache all the fields
    var $inputs = $form.find("input, select, button, textarea");

    // Serialize the data in the form
    var serializedData = $form.serialize();

    // Let's disable the inputs for the duration of the Ajax request.
    // Note: we disable elements AFTER the form data has been serialized.
    // Disabled form elements will not be serialized.
    $inputs.prop("disabled", true);

    // Fire off the request to /form.php
    request = $.ajax({
        url: "https://docs.google.com/forms/d/1lsJSZEwwBVjwWbBbI4Yj9gAiOt_Q_boZ_kV7HXR0jA0",
        type: "post",
        data: serializedData
    });

    // Callback handler that will be called on success
    request.done(function (response, textStatus, jqXHR){
        // Log a message to the console
        console.log("Yay! You will now get all the info");
    });

    // Callback handler that will be called on failure
    request.fail(function (jqXHR, textStatus, errorThrown){
        // Log the error to the console
        console.error(
            "The following error occurred: "+
            textStatus, errorThrown
        );
    });

    // Callback handler that will be called regardless
    // if the request failed or succeeded
    request.always(function () {
        // Reenable the inputs
        $inputs.prop("disabled", false);
    });

    // Prevent default posting of form
    event.preventDefault();
});














// var $title = $('.title');
// var $menu-btn = $('.menu-btn');
// var $menu-btn-index = $('.menu-btn-index');
// var $responsive-menu = $('.responsive-menu');
//
// $title.hide().fadeIn(3500);
//
// function(){
//    $menu-btn.click(function(){
//      $responsive-menu.toggleClass('expand');
//    })
// };
// function(){
//    $menu-btn-index.click(function(){
//      $.responsive-menu.toggleClass('expand');
//    })
// };
// //(function() {
// //
// //  "use strict";
// //
// //  var toggles = document.querySelectorAll(".cmn-toggle-switch");
// //
// //  for (var i = toggles.length - 1; i >= 0; i--) {
// //    var toggle = toggles[i];
// //    toggleHandler(toggle);
// //  };
// //
// //  function toggleHandler(toggle) {
// //    toggle.addEventListener( "click", function(e) {
// //      e.preventDefault();
// //      (this.classList.contains("active") === true) ? this.classList.remove("active") : this.classList.add("active");
// //    });
// //  }
// //})();
// //
// //(function(){
// //   $( '.menu-btn' ).onclick(function(){
// //      $('.responsive-menu').toggleClass('expand')
// //   })
// //});
