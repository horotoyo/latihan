$(document).ready(function(){
	$(".animasi1").click(function(){
		$(".isi1").animate({left: '500px'});
	});

	$(".animasi2").click(function(){
		$(".isi2").animate({
			left 		: '200px',
			top			: '100px',
			fontSize	: '2cm',
			padding		: '40px'
		}, 5000, "linear");
	});

	$(".animasi3").click(function(){
		$(".isi3").animate({
			left 		: '+=20px',
			top			: '-=100px',
		});
	});

	$(".animasi4").click(function(){
		$(".isi4").animate({
			left 		: 'toggle',
			top			: 'toggle',
		}, "fast", "swing");
	});

	$(".animasi5").click(function(){
		$(".isi5, .isi4").animate({
			left 		: '100px',
			top			: '60px',
			borderWidth	: '10px',
			fontSize	: '2cm'
		});

		$(".isi5, .isi2").animate({
			left 		: '400',
			top			: '500px',
			borderWidth	: '1px',
			fontSize	: '10px'
		});

		$(".isi5, .isi3").animate({
			left 		: '10px',
			top			: '500px',
			borderWidth	: '10px',
			fontSize	: '3cm'
		});

		$(".isi5, .isi1").animate({
			left 		: '10px',
			top			: '60px',
			borderWidth	: '10px',
			fontSize	: '2cm'
		});
	});
});