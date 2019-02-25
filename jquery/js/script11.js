$(document).ready(function(){
	$(".mulai").click(function(){
		$(".pertama").fadeOut("slow", function(){
			alert("Apakah anda sudah siap?");
		});
		$(".kedua").fadeIn();
	});

	$("#tidur").click(function(){
		$(".kedua").fadeOut();
		$(".bay").fadeIn();
	});

	$("#kuy").click(function(){
		$(".kedua").fadeOut();
		$("#k1, #k2, #k3, #k4").fadeIn();
		$(".a1, .a2, .a3, .a4").fadeIn();
	});


	//Animate script
	$("#k1").click(function(){
		$(".a1").animate({
			left 		: '800px',
		}, 1000, "linear");
		$(".a2").animate({
			top 		: '400px',
		}, 1000, "linear");
		$(".a3").animate({
			top 		: '100px',
		}, 1000, "linear");
		$(".a4").animate({
			right 		: '500px',
		}, 1000, "linear");
	});
	$("#k2").click(function(){
		$(".a1").animate({
			left 		: '400px',
		}, 1000, "linear");
		$(".a2").animate({
			top 		: '100px',
		}, 1000, "linear");
		$(".a3").animate({
			top 		: '20px',
		}, 1000, "linear");
		$(".a4").animate({
			right 		: '800px',
		}, 1000, "linear");
	});
	$("#k3").click(function(){
		$(".a1").animate({
			left 		: '100px',
		}, 1000, "linear");
		$(".a2").animate({
			top 		: '400px',
		}, 1000, "linear");
		$(".a3").animate({
			top 		: '300px',
		}, 1000, "linear");
		$(".a4").animate({
			right 		: '100px',
		}, 1000, "linear");
	});
	$("#k4").click(function(){
		$(".a1").animate({
			left 		: '600px',
		}, 1000, "linear");
		$(".a2").animate({
			top 		: '100px',
		}, 1000, "linear");
		$(".a3").animate({
			top 		: '200px',
		}, 1000, "linear");
		$(".a4").animate({
			right 		: '30px',
		}, 1000, "linear");
	});
});