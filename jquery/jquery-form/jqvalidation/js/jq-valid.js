$.validator.setDefaults({
		submitHandler: function() {
			alert("Sudah terkirim!");
		}
	});

	$().ready(function() {
		// validate the comment form when it is submitted
		$("#commentForm").validate();

		// validate signup form on keyup and submit
		$("#signupForm").validate({
			rules: {
				firstname: "required",
				lastname: "required",
				fullname: {
					required: true,
					minlength: 3
				},
				username: {
					required: true,
					minlength: 2
				},
				password: {
					required: true,
					minlength: 5
				},
				confirm_password: {
					required: true,
					minlength: 5,
					equalTo: "#password"
				},
				email: {
					required: true,
					email: true
				},
				topic: {
					required: "#newsletter:checked",
					minlength: 2
				},
				agree: "required"
			},
			messages: {
				firstname: "<em style='color:red'; font-weight='normal'>Anda harus mengisi nama depan!</em>",
				lastname: "<em style='color:red'; font-weight='normal'>Anda harus mengisi nama belakang!</em>",
				username: {
					required: "<em style='color:red'; font-weight='normal'>Anda harus mengisi username!</em>",
					minlength: "<em style='color:red'; font-weight='normal'>Username anda harus berisi 2 karakter</em>"
				},
				password: {
					required: "<em style='color:red'; font-weight='normal'>Anda harus mengisi password!</em>",
					minlength: "<em style='color:red'; font-weight='normal'>Password minimal 5 karakter!</em>"
				},
				confirm_password: {
					required: "<em style='color:red'; font-weight='normal'>Ulangi password anda</em>",
					minlength: "<em style='color:red'; font-weight='normal'>Password minimal 5 karakter!</em>",
					equalTo: "<em style='color:red'; font-weight='normal'>Masukan seperti password diatas</em>"
				},
				email: "<em style='color:red'; font-weight='normal'>Masukan email yang valid</em>",
				agree: "<em style='color:red'; font-weight='normal'>Isi chekbox persetujuan</em>",
				topic: "<em style='color:red'; font-weight='normal'>Anda harus memilih 2 opsi</em>"
				},
				fruit: "<em style='color:red'; font-weight='normal'>Anda harus memilih 2 opsi</em>"
		});

		// propose username by combining first- and lastname
		$("#fullname").focus(function() {
			var firstname = $("#firstname").val();
			var lastname = $("#lastname").val();
			if (firstname && lastname && !this.value) {
				this.value = firstname + " " + lastname;
			}
		});

		// propose username by combining first- and lastname
		$("#username").focus(function() {
			var firstname = $("#firstname").val();
			var lastname = $("#lastname").val();
			if (firstname && lastname && !this.value) {
				this.value = firstname + "_" + lastname;
			}
		});

		//code to hide topic selection, disable for demo
		var newsletter = $("#newsletter");

		// newsletter topics are optional, hide at first
		var inital = newsletter.is(":checked");
		var topics = $("#newsletter_topics")[inital ? "removeClass" : "addClass"]("gray");
		var topicInputs = topics.find("input").attr("disabled", !inital);

		// show when newsletter is checked
		newsletter.click(function() {
			topics[this.checked ? "removeClass" : "addClass"]("gray");
			topicInputs.attr("disabled", !this.checked);
		});
	});