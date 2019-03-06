$(document).ready(function() {
	//Show Warning
	$('.form').submit(function() {
		var namaDepan 		= $('#nama_depan').val().length;
		var namaBelakang 	= $('#nama_belakang').val().length;
		if (namaDepan == 0) {				
			$(".pesan").css('display','block');
			return false;
		}
	});

		var password 	= $('#password').val();
		var konfirm 	= $('#konfirmasi_password').val();


	  if ($('#password').val() == $('#konfirmasi_password').val()) {
	    $('#message').html('Matching').css('color', 'green');
	  } else 
	    $('#message').html('Not Matching').css('color', 'red');


	//Hide Warning
	$("#nama_depan").click(function(){
		$(".warning1").hide();
	});
	$("#nama_belakang").click(function(){
		$(".warning2").hide();
	});
	$("#nama_lengkap").click(function(){
		$(".warning3").hide();
	});
	$("#username").click(function(){
		$(".warning4").hide();
	});
	$(".jenis").click(function(){
		$(".keterangan").hide();
	});
	$("#email").click(function(){
		$(".warning5").hide();
	});
	$("#password").click(function(){
		$(".warning6").hide();
	});
	$("#konfirmasi_password").click(function(){
		$(".warning7, .warning8").hide();
	});
	$("#web").click(function(){
		$(".warning9").hide();
	});
	//lagi tekan hide alert jenis kelamin


	//input
	$("#nama_lengkap").click(function(){
		$("#nama_lengkap").val($('#nama_depan').val() + " " + $('#nama_belakang').val());
	});
	$("#username").click(function(){
		$("#username").val($('#nama_depan').val() + "_" + $('#nama_belakang').val());
	});


});