$(document).ready(function(){
	$(".mulai").click(function(){
		$(".mulai").slideUp("slow", function(){
			alert("Apakah anda sudah siap?");
			$("#car-move").animate({
				left 		: '90%',
				}, 100000, "linear");
		});
		$(".tombol").fadeIn();
		
	});

	$("#henti").click(function(){
		$("#car-move").stop();
	});

	$("#lagi").click(function(){
		$("#car-move").stop();
		$("#car-move").animate({
			left 		: '90%',
			}, 1000, "linear");
	});

	$("#mundur").click(function(){
		$("#car-move").stop();
		$("#car-move").animate({
			left 		: '0%',
			}, 1000, "linear");
	});

	$("#hilang").click(function(){
		$("#car").hide();
	});
	$("#muncul").click(function(){
		$("#car").show();
	});

});