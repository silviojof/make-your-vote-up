//Drop Down Menu

$(document).ready(function() {
				enableSelectBoxes();

        var $images = ['finance', 'taxes', 'infrastructure', 'jobs', 'families', 'foreign', 'health', 'marijuana', 'energy'];

        $('input.price_values').change(function(){
          var x = $(this).val();
          console.log(x);
          $('.comp-topic').css('backgroundImage', "url('img/" + $images[x] + ".jpg')");
        });

});

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
