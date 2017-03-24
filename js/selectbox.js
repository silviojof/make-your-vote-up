//Drop Down Menu

$(document).ready(function() {
				enableSelectBoxes();

        var $images = ['finance', 'taxes', 'infrastructure', 'jobs', 'families', 'foreign', 'health', 'marijuana', 'energy'];
				var $text = ['public finance', 'taxation and economy', 'infrastructure', 'jobs', 'families', 'foreign policy', 'health', 'marijuana legalisation', 'energy'];

        $('input.price_values').change(function(){
          let x = $(this).val();
          $('.comp-topic').css('backgroundImage', "url('img/" + $images[x] + ".jpg')");
					$('.comp-topic').find('h2').text($text[x]);
        });

				$('.comp-img').each(function(i){
					let topic = $(this).data('topic');
					$(this).css('backgroundImage', 'url(img/' + topic + '.jpg)');
					if(topic === "finance") {
						$(this).find('.overlay').css('opacity', '1');
					}
				});

				getAjax('finance');
				$('[data-topic="finance"]').find('div').addClass('overlay');

				// $('.comp-img').hover(function(){
				// 	$(this).find('div').toggleClass('overlay');
				// }, function(){
				// 	$(this).find('div').toggleClass('overlay');
				// });

				$('.comp-img').click(function(){
					$('.comp-img').find('div').removeClass('overlay')
					$(this).find('div').addClass('overlay');
					let topic = $(this).data('topic');
					getAjax(topic);
				});




});



function getAjax(topicName) {
		let url = "data.php?topic=" + topicName;
		$.ajax({
	  url: url,
	  type: 'post',
	  success: function(data) {
			$('#parties-topic').html(data);
		}
	}); // end ajax call
}


function enableSelectBoxes(){
	$('div.selectBox').each(function(){
		$(this).children('span.selected').html($(this).children('ul.selectOptions').children('li.selectOption:first').html());
		$('input.price_values').attr('value',$(this).children('ul.selectOptions').children('li.selectOption:first').attr('data-value'));

		$(this).children('span.selected,span.selectArrow').click(function(){
			if($(this).parent().children('ul.selectOptions').css('display') == 'none'){
				$(this).parent().children('ul.selectOptions').css('display','block');
			}
			else
			{
				$(this).parent().children('ul.selectOptions').css('display','none');
			}
		});

		$(this).find('li.selectOption').click(function(){
			$(this).parent().css('display','none');
      $('input.price_values').attr('value',$(this).attr('data-value')).trigger('change');
			$(this).parent().siblings('span.selected').html($(this).html());
		});
	});
}//-->

function backgroundTopic() {
  var x = $('.price_values').val();
  console.log(x);
}
