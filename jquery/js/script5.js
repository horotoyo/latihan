$(document).ready(function(){
	$("#judul").click(function(){
		$("p.posting").slideUp();
	});
	$("#judul2").dblclick(function(){
		$("p.posting2").slideUp();
	});
	
	$("#tombol1").mouseenter(function(){
		$(".menu1").slideDown();
	});
	$("#tombol1").mouseleave(function(){
		$(".menu1").slideUp();
	});

	$("#tombol2").click(function(){
		$(".menu2").slideDown();
	});

	$("#tombol2").dblclick(function(){
		$(".menu2").slideUp();
	});

	$("#tombol3").on({
		mouseenter: function(){
			$(".header").css("background-color", "lightgray")
		},
		mouseleave: function(){
			$(".header").css("background-color", "lightgreen")
		},
		click: function(){
			$(".header").css("background-color", "yellow");
		}
	});
});