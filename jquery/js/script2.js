$(document).ready(function(){
	$("#sembunyi_semua").click(function(){
		$("*");
	});
	$("#sembunyi_ini").click(function(){
		$(this).hide();
	});
	$("button.penting").click(function(){
		$("p.penting").hide();
	});
	$("button#pertama").click(function(){
		$("p:first").hide();
	});
	$("span.baris1").click(function(){
		$("tr:first").hide();
	});
	$("a#baris1semua").click(function(){
		$("tr:first-child").hide();
	});
	$("strong").click(function(){
		$("tr:even").css("background-color", "yellow");
		$("tr:odd").css("background-color", "aqua");
	});
	$("[alt='link1']").click(function(){
		$("[href]").css("color", "red");
	});
	$("[alt='link2']").click(function(){
		$("a[target='_blank']").css("color", "red");
	});
	$("[alt='link3']").click(function(){
		$("a[target!='_blank']").css("border", "1px solid #000");
	});
	$("[alt='sembunyi_tombol']").click(function(){
		$(":button").slideUp("40000000000");
	});
});