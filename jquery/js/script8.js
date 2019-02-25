$(document).ready(function(){
	$("#toggle").click(function(){
		$(".d2").slideToggle("slow");
	});
	$("#sembunyi").click(function(){
		$(".d3").slideUp();
	});
	$("#tampil").click(function(){
		$(".d3").slideDown();
	});

	$("#ndelik").click(function(){
		$("#g1").hide();
		$("#g2").hide("slow");
		$("#g3").hide("fast");
	});
	$("#metu").click(function(){
		$("#g1").show();
		$("#g2").show("slow");
		$("#g3").show("fast");
	});
	$("#campur").click(function(){
		$("#g1").toggle();
		$("#g2").toggle("slow");
		$("#g3").toggle("fast");
	});

	$("#fatu").click(function(){
		$("#g4").fadeOut();
	});
	$("#fati").click(function(){
		$("#g4").fadeIn();
	});
	$("#fatui").click(function(){
		$("#g4").fadeToggle();
	});

});