$(document).ready(function() {

// modal box
  $( "#closeBtn" ).click(function() {
    $("#overlayDiv").fadeOut(1000);
  });

  $( ".mp-btn" ).click(function() {
    $("#overlayDiv").fadeIn(1000);
  });

// show/hide information
$(document).ready(function(){
    $(".show-and-hide").click(function(){
        $(".show").toggle();
    });
});





});
