//Drop Down Menu

$(document).ready(function() {


		enableSelectBoxes();

		//Use ajax function to load content for first time and change overlay for default topic
		getAjax('finance');
		getAjaxMp('ab');
		$('[data-topic="finance"]').find('div').addClass('overlay');

    var $images = ['finance', 'taxes', 'infrastructure', 'jobs', 'family', 'foreign', 'health', 'marijuana', 'energy'];
		var $text = ['public finance', 'taxation and economy', 'infrastructure', 'jobs', 'families', 'foreign policy', 'health', 'marijuana legalisation', 'energy'];
		var $provincesName = ['Alberta', 'British Columbia', 'Manitoba', 'New Brunswick', 'Newfoundland and Labrador', 'Nova Scotia', 'Ontario', 'Prince Edward Island', 'Quebec', 'Saskatchewan', 'Northwest Territories', 'Yukon', 'Nunavut'];
		var $provincesImg = ['ab', 'bc', 'mb', 'nb', 'nl', 'ns', 'on', 'pe', 'qc', 'sk', 'nt', 'yt', 'nu'];

		//Change the background image on changes in selectbox (mobile) and content in topics (ajax)
    $('#comp-selectbox').change(function(){
      let x = $(this).val();
      $('.comp-topic').css('backgroundImage', "url('img/" + $images[x] + ".jpg')");
			$('.comp-topic').find('h2').text($text[x]);
			let topic = $images[x];
			getAjax(topic);
    });

		$('#whos-selectbox').change(function(){
      let val = $(this).val();
      $('.whos-topic').css('backgroundImage', "url('img/" + $provincesImg[val] + ".jpg')");
			$('.whos-topic').find('h2').text($provincesName[val - 1]);
			let $province = $provincesImg[val -1];
			getAjaxMp($province);
    });

		//Set background images for topics on desktop version
		$('.comp-img').each(function(i){
			let topic = $(this).data('topic');
			$(this).css('backgroundImage', 'url(img/' + topic + '.jpg)');
			if(topic === "finance") {
				$(this).find('.overlay').css('opacity', '1');
			}
		});

		// Check if voteStatus is alreadu on localStorage, if not create it.
		if(localStorage.voteStatus) {
			$voteStatusParsed = JSON.parse(localStorage.voteStatus);
		} else {
			$voteStatus = {
				finance: [false, undefined],
				taxes: [false, undefined],
				infrastructure: [false, undefined],
				jobs: [false, undefined],
				family: [false, undefined],
				foreign: [false, undefined],
				health: [false, undefined],
				marijuana: [false, undefined],
				energy: [false, undefined]
			}
			localStorage.voteStatus = JSON.stringify($voteStatus);
			$voteStatusParsed = JSON.parse(localStorage.voteStatus);
		}

		// Change overlay on topic on click and change displayed topic
		$('.comp-img').click(function(){
			$('.comp-img').find('div').removeClass('overlay')
			$(this).find('div').addClass('overlay');
			let topic = $(this).data('topic');
			getAjax(topic);
		});

		// Upon clicking in the vote (Delgate had to be used)
		$('#parties-topic').delegate('.vote-btn', 'click', function(){
			// If topic has already being voted (and the one clicked was not the choosen)
			if($(this).find('i').hasClass('fa-times')) {
				//Change the vote and update status in other field
					let topic = $(this).data('topic');
					let choosen = $voteStatusParsed[topic][1];
					localStorage[choosen] = localStorage[choosen] - 1;
					$('#comp-vote-' + choosen).text(localStorage[choosen]);
					let $voteFor = $(this).data('vote');
					if (localStorage[$voteFor]) {
            localStorage[$voteFor] = Number(localStorage[$voteFor]) + 1;
        	} else {
            localStorage[$voteFor] = 1;
        	}
					$voteStatusParsed[topic][1] = $voteFor;
					$('#comp-vote-' + $voteFor).text(localStorage[$voteFor]);
					$('.vote-btn').find('i').removeClass('fa-thumbs-o-up').addClass('fa-times');
					$(this).find('i').removeClass('fa-times').addClass('fa-check');
			// If topic has already being voted (and the one clicked was the choosen)
			} else if($(this).find('i').hasClass('fa-check')) {
				//Cancel the vote and open other parties to vote
					let topic = $(this).data('topic');
					let $voteFor = $(this).data('vote');
					localStorage[$voteFor] = localStorage[$voteFor] - 1;
					$voteStatusParsed[topic][1] = undefined;
					$('#comp-vote-' + $voteFor).text(localStorage[$voteFor]);
					$('.vote-btn').find('i').removeClass().addClass('fa fa-thumbs-o-up');
			// If none has been voted:
			} else {
				var $voteFor = $(this).data('vote');
				if (localStorage[$voteFor]) {
          localStorage[$voteFor] = Number(localStorage[$voteFor]) + 1;
      	} else {
          localStorage[$voteFor] = 1;
      	}
				$('#comp-vote-' + $voteFor).text(localStorage[$voteFor]);
				let $topic = $(this).data('topic');
				$voteStatusParsed[$topic][0] = true;
				$voteStatusParsed[$topic][1] = $voteFor;
				$('.vote-btn').find('i').removeClass('fa-thumbs-o-up').addClass('fa-times');
				$(this).find('i').removeClass('fa-times').addClass('fa-check');
			}
		});

		// before reloading, update localStorage Object with current data
		$(window).on('beforeunload', function(){
			localStorage.voteStatus = JSON.stringify($voteStatusParsed);
		});


		// Move to top:
		$('#parties-topic').delegate('.to-top', 'click',function(){
			$('html, body').animate({scrollTop: 0}, 'slow');
			return false;
		});

		// Maps

		//var $provincesImg = ['ab', 'bc', 'mb', 'nb', 'nl', 'ns', 'on', 'pe', 'qc', 'sk', 'nt', 'yt', 'nu'];
		$.each($provincesImg, function(i, val){
			let $id = '#' + val.toUpperCase();

			$($id).hover(function(){
				$(this).css({'fill': 'rgb(68, 68, 68)', 'cursor': 'pointer'});
			},
			function(){
				$(this).css('fill', '#f2f2f2');
			});
			$($id).click(function(){
				$('.whos-topic').css('backgroundImage', "url('img/" + val + ".jpg')");
				$('.whos-topic').find('h2').text($provincesName[i]);
				getAjaxMp(val);


			});
		});

		//get buttons to filter Maps

		$('#whos-mps-filter').delegate('li', 'click',function(){
			let $party = $(this).data('party-filter');
			$('#whos-mps-filter li').removeClass('filter-active');
			$(this).addClass('filter-active');
			$('#whos-mps li').css('display', 'inline-block');
			$('#whos-mps li').each(function(item){
				let $partyLi = $(this).data('party-name');
				if($partyLi == $party || $party == "all") {
					$(this).css('display', 'inline-block');
				} else {
					$(this).css('display', 'none');
				}
			});
			return false;
		});


		//Modal Subscribe
		$('#modal-close').click(function(){
			$('.email-modal').css('display', 'none');
			console.log('clicked');
		});

		$('#subscribe-open').click(function(){
			console.log('subs clicked');
			$('.email-modal').css('display', 'flex');
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
			//If topic hasnt been vote yet, create Thumbs Up icon for all
			if($voteStatusParsed[topicName][0] === false) {
				$('.vote-btn').find('i').addClass('fa-thumbs-o-up');
			} else {
				// Else, check the vote status on localSTorage and define each icon accoridng
				$('.vote-btn').each(function(i){
					let vote = $(this).data('vote');
					if($voteStatusParsed[topicName][1] === vote) {
						$(this).find('i').addClass('fa-check');
					} else {
						$(this).find('i').addClass('fa-times');
					}
				});
			}
			//Grab the number of votes on localStorage and display it
			var $parties = ['green', 'conservative', 'democratic', 'liberal'];
			$.each( $parties, function(index, val){
				$('#comp-vote-' + val).text(localStorage[val]);
			});

		}
	}); // end ajax call
}

/* Whos my MP AJAX */

function getAjaxMp(province) {
		let url = "whos-data.php?province=" + province;
		$.ajax({
	  url: url,
	  type: 'post',
	  success: function(data) {
			$('#whos-mps').html(data);
			$('#whos-mps').attr('data-province', province);
			var $parties = ['all'];
			$('#whos-mps li').each(function(val, i){
				let name = $(this).data('party-name');

				if($parties.indexOf(name) < 0) {
					$parties.push(name);
				}
			});
			$('#whos-mps-filter').html('<li data-party-filter="all" class="filter-active">All</li>');
			$.each($parties, function(index, val){
				var item = "";
				switch(val) {
					case "liberal":
						item = "<li data-party-filter='liberal'>Liberal</li>";
						break;
					case "conservative":
						item = "<li data-party-filter='conservative'>Conservative</li>";
						break;
					case "new-democratic":
						item = "<li data-party-filter='new-democratic'>New Democratic</li>";
						break;
					case "green":
						item = "<li data-party-filter='green'>Green</li>";
				}
				$('#whos-mps-filter').append(item);
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
