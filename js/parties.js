$(document).ready(function() {
  var $images = ['finance', 'taxes', 'infrastructure', 'jobs', 'family', 'foreign', 'health', 'marijuana', 'energy'];

// modal box
  $( "#closeBtn" ).click(function() {
    $("#overlayDiv").fadeOut(1000);
  });


  $( ".mp-btn" ).click(function() {
    $("#overlayDiv").fadeIn(1000);
    let dataMp = $(this).data("mp");
    let dataParty = $(this).data("mp-party");
    mpAjax(dataMp,dataParty);

  });
  function mpAjax(province,party){
    let url= "mp-data.php?province=" + province + "&party=" + party;
    $.ajax({
      url: url,
      method: "post",
      success: function(data){
        $("#mp-info").html(data);
      }

    });

  }
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

  $('#party-selectbox').change(function(){
    let val = $(this).val();
    $('#bg-image').css('backgroundImage', "url('img/" + $images[val] + ".jpg')");
    let topic = $images[val];

    $('.show ul').each(function(){
      if($(this).data('proposal') == topic) {
        $(this).show();
      } else {
        $(this).hide();
      }
    });
  });




});
