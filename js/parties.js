$(document).ready(function() {
  var $images = ['finance', 'taxes', 'infrastructure', 'jobs', 'family', 'foreign', 'health', 'marijuana', 'energy'];

// modal box
  $( "#closeBtn" ).click(function() {
    $("#overlayDiv").fadeOut(1000);
  });

  $( ".mp-btn" ).click(function() {
    $("#overlayDiv").fadeIn(1000);
  });

// show/hide information

  (function(){
    $('#bg-image').css('backgroundImage', "url('img/finance.jpg')");
    $('.show ul').each(function(){
      if($(this).data('proposal') == 'finance') {
        $(this).show();
      } else {
        $(this).hide();
      }
    });
  })();

  $(".show-and-hide").click(function(){
      $('#bg-image').css('backgroundImage', "url('img/" + $images[$(this).data("value")] + ".jpg')");
      let topic = $images[$(this).data('value')];

      $('.show ul').each(function(){
        if($(this).data('proposal') == topic) {
          $(this).show();
        } else {
          $(this).hide();
        }
      });

  });








});
