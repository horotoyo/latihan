$(document).ready(function(){
	$("#judul").click(function(){
		$("p.posting").slideUp();
	});
	$("#judul2").dblclick(function(){
		$("p.posting2").slideUp();
	});
	$(".div4").mouseenter(function(){
		$("p.pesan4").slide();
	});
	$(".div4").mouseleave(function(){
		$("p.pesan4").slideDown();
	});
	$("#judul3").on({
		mouseenter: function(){
			$(this).css("background-color", "lightgray")
		},
		mouseleave: function(){
			$(this).css("background-color", "lightgreen")
		},
		click: function(){
			$(this).css("background-color", "yellow");
		}
	});
});