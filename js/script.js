/* Author: David Jakobik */

$(document).ready(function(){
	if ($.browser.webkit) {
		$('header h1').css({
			'background-color': '#006666',
			'color': 'transparent',
			'-webkit-background-clip': 'text',
			'background-clip': 'text'
		});
	}

	$('input[name=calculate]').click(function(e){
		e.preventDefault();
		var x = $('#width').val(),
		y = $('#height').val(),
		d = $('#diagonal').val();
		retina(x,y,d);
	});
	
	$('select').change(function(e){
		var x = $(this).val().split("x")[0],
		y = $(this).val().split("x")[1],
		d = $(this).val().split("x")[2];
		$('#width').animate({'text-indent': '-100%'},120,function(){
			$('#height').animate({'text-indent': '-100%'},120,function(){
				$('#diagonal').animate({'text-indent': '-100%'},120,function(){
					$('#width').val(x).animate({'text-indent': '5%'},120,function(){
						$('#height').val(y).animate({'text-indent': '5%'},120,function(){
							$('#diagonal').val(d).animate({'text-indent': '5%'},120);
						});
					});
				});
			});
		});
		retina(x,y,d);
		$(this).parent().siblings().find('option:first-child').attr('selected','selected');
	});
});

function retina(x,y,d){
	var ppi = ((Math.sqrt((x * x) + (y * y))) / d).toFixed(2),
	dist = (3438 / ppi).toFixed(0),
	aspect = Ratio(x,y);

	$('#screen div').animate({
		left: 0 - x / 8,
		right: 0 - x / 8,
		bottom: 0 - y / 4
	});

	$('figure b').fadeOut();
	$('figure small').fadeOut(function(){
		$('#ppi b').html(ppi);
		$('#dist b').html(dist);
		$('#dist small').html("inches<br>("+(dist*2.54).toFixed(0)+"cm)")
		if (aspect.reduce().cleanFormat().toString() == "8:5") {
			$('#aspect b').html("16:10");
		} else if ((aspect.reduce().cleanFormat().toString() == "240:427") || (aspect.reduce().cleanFormat().toString() == "75:128")) {
			$('#aspect b').html("9:16");
		} else if (aspect.reduce().cleanFormat().toString() == "384:683") {
			$('#aspect b').html("16:9");
		} else if (aspect.reduce().cleanFormat().toString() == "683:384") {
			$('#aspect b').html("16:9");
		} else {
			$('#aspect b').html(aspect.reduce().cleanFormat().toString());
		}
		$('figure b').fadeIn();
		$('figure small').fadeIn();
	});

};

