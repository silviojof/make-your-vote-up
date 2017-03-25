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

				$voteStatus = {
					finance: [false, 4],
					taxes: [false, 4],
					infrastructure: [false, 4],
					jobs: [false, 4],
					family: [false, 4],
					foreign: [false, 4],
					health: [false, 4],
					marijuana: [false, 4],
					energy: [false, 4]
				}
				sessionStorage.setItem('voteStatus', JSON.stringify($voteStatus));
				$voteStatusParsed = JSON.parse(sessionStorage.voteStatus);

				$('#parties-topic').delegate('.vote-btn', 'click', function(){
					if($(this).find('i').hasClass('fa-times')) {

							console.log('this was not selected');
							let topic = $(this).data('topic');
							let choosen = $voteStatusParsed[topic][1];
							sessionStorage[choosen] = sessionStorage[choosen] - 1;

							$('#comp-vote-' + choosen).text(sessionStorage[choosen]);
							let $voteFor = $(this).data('vote');
							if (sessionStorage[$voteFor]) {
		            sessionStorage[$voteFor] = Number(sessionStorage[$voteFor]) + 1;
		        	} else {
		            sessionStorage[$voteFor] = 1;
		        	}

							$voteStatusParsed[topic][1] = $voteFor;

							$('#comp-vote-' + $voteFor).text(sessionStorage[$voteFor]);
							$('.vote-btn').find('i').removeClass('fa-thumbs-o-up').addClass('fa-times');
							$(this).find('i').removeClass('fa-times').addClass('fa-check');

					} else if($(this).find('i').hasClass('fa-check')) {

							let topic = $(this).data('topic');
							let $voteFor = $(this).data('vote');
							sessionStorage[$voteFor] = sessionStorage[$voteFor] - 1;
							$voteStatusParsed[topic][1] = undefined;
							$('#comp-vote-' + $voteFor).text(sessionStorage[$voteFor]);
							$('.vote-btn').find('i').removeClass().addClass('fa fa-thumbs-o-up');


							console.log('this was already selected');


					} else {
						var $voteFor = $(this).data('vote');
						if (sessionStorage[$voteFor]) {
	            sessionStorage[$voteFor] = Number(sessionStorage[$voteFor]) + 1;
	        	} else {
	            sessionStorage[$voteFor] = 1;
	        	}
						$('#comp-vote-' + $voteFor).text(sessionStorage[$voteFor]);
						let $topic = $(this).data('topic');
						$voteStatusParsed[$topic][0] = true;
						$voteStatusParsed[$topic][1] = $voteFor;
						$('.vote-btn').find('i').removeClass('fa-thumbs-o-up').addClass('fa-times');
						$(this).find('i').removeClass('fa-times').addClass('fa-check');
					}
				});

				// Clear sessionStorage on reload
				$(window).on('beforeunload', function(){
					sessionStorage.clear();
				});


});



function getAjax(topicName) {
		let url = "data.php?topic=" + topicName;
		$.ajax({
	  url: url,
	  type: 'post',
	  success: function(data) {
			$('#parties-topic').html(data);
			$('#parties-topic').attr('data-main-topic', topicName);

			if($voteStatusParsed[topicName][0] === false) {
				$('.vote-btn').find('i').addClass('fa-thumbs-o-up');
			} else {
				$('.vote-btn').each(function(i){
					let vote = $(this).data('vote');
					if($voteStatusParsed[topicName][1] === vote) {
						$(this).find('i').addClass('fa-check');
					} else {
						$(this).find('i').addClass('fa-times');
					}
				});
			}

			var $parties = ['green', 'conservative', 'democratic', 'liberal'];
			$.each( $parties, function(index, val){
				$('#comp-vote-' + val).text(sessionStorage[val]);
			});

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
