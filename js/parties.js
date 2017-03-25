$(document).ready(function() {
  var $images = ['finance', 'taxes', 'infrastructure', 'jobs', 'families', 'foreign', 'health', 'marijuana', 'energy'];

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
        $('#bg-image').css('backgroundImage', "url('img/" + $images[$(this).data("value")] + ".jpg')");
        $(".show").toggle();
    });
  });





});
