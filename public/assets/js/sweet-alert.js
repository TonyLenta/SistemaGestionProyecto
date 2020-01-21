$(function(e) {
	// Message
	$(document).on("click", "#but1", function(e) {
		var message = $("#message").val();
		if (message == "") {
			message = "Your message";
		}
		swal(message);
	});
	// With message and title
	$(document).on("click", "#but2", function(e) {
		var message = $("#message").val();
		var title = $("#title").val();
		if (message == "") {
			message = "Your message";
		}
		if (title == "") {
			title = "Your message";
		}
		swal(title, message);
	});
	// Show image
	$(document).on("click", "#but3", function(e) {
		var message = $("#message").val();
		var title = $("#title").val();
		if (message == "") {
			message = "Your message";
		}
		if (title == "") {
			title = "Your message";
		}
		swal({
			title: title,
			text: message,
			imageUrl: '../assets/images/brand/logo-3.png'
		});
	});
	// Timer
	$(document).on("click", "#but4", function(e) {
		var message = $("#message").val();
		var title = $("#title").val();
		if (message == "") {
			message = "Your message";
		}
		if (title == "") {
			title = "Your message";
		}
		message += "(close after 2 seconds)";
		swal({
			title: title,
			text: message,
			timer: 2000,
			showConfirmButton: false
		});
	});
	//
	$(document).on("click", "#click", function(e) {
		var type = $("#type").val();
		swal({
			title: "Title",
			text: "Your message",
			type: type
		});
	});
	// Prompt
	$(document).on("click", "#prompt", function(e) {
		swal({
			title: "Add",
			text: "Enter your message",
			type: "input",
			showCancelButton: true,
			closeOnConfirm: false,
			inputPlaceholder: "Your message"
		}, function(inputValue) {
			if (inputValue != "") {
				swal("Input", "You have entered : " + inputValue);
			}
		});
	});
	// Confirm
	$(document).on("click", "#confirm", function(e) {
		swal({
			title: "Alert",
			text: "Are you really want to exit",
			type: "warning",
			showCancelButton: true,
			confirmButtonText: 'Exit',
			cancelButtonText: 'Stay on the page'
		});
	});
	$(document).on("click", "#click", function(e) {
		swal('Congratulations!', 'Your message has been succesfully sent', 'success');
	});
	$(document).on("click", "#click1", function(e) {
		swal({
			title: "Alert",
			text: "Waring alert",
			type: "warning",
			showCancelButton: true,
			confirmButtonText: 'Exit',
			cancelButtonText: 'Stay on the page'
		});
	});
	$(document).on("click", "#click2", function(e) {
		swal({
			title: "Alert",
			text: "Danger alert",
			type: "error",
			showCancelButton: true,
			confirmButtonText: 'Exit',
			cancelButtonText: 'Stay on the page'
		});
	});



	$(document).on("click", "#deleteuser", function(e) {
		var user = $(this).data("id"); 
		var token = $(this).data("token");

		swal({
			title: "Eliminar Usuario",
			text: "¿Estas seguro de eliminar este Usuario?",
			type: "error",
			showCancelButton: true,
			confirmButtonText: 'Yes',
			cancelButtonText: 'No'},
			function(isConfirm){
				if (isConfirm) 
			{   	
				$.ajax({
					url: "users/"+user,
					type: "POST",
					data: {
						"id": user,
						_method: 'DELETE',
						"_token": token,	
						},
					success: function (data) {				
						swal("Account Removed!", "Your user is removed permanently!", "success",setInterval('location.reload()', 500));
						}	         
				}); 		
				} 
				else {     
					swal("You are not redirected!", "success");   
					} });
	});

	$(document).on("click", "#deleterole", function(e) {
		var role = $(this).data("id"); 
		var token = $(this).data("token");

		swal({
			title: "Eliminar Role",
			text: "¿Estas seguro de eliminar este role?",
			type: "error",
			showCancelButton: true,
			confirmButtonText: 'Yes',
			cancelButtonText: 'No'},
			function(isConfirm){
				if (isConfirm) 
			{   	
				$.ajax({
					url: "roles/"+role,
					type: "POST",
					data: {
						"id": role,
						_method: 'DELETE',
						"_token": token,	
						},
					success: function (data) {				
						swal("Account Removed!", "Your role is removed permanently!", "success",setInterval('location.reload()', 500));
						}	         
				}); 		
				} 
				else {     
					swal("You are not redirected!", "success");   
					} });
	});


	$(document).on("click", "#deletepermission", function(e) {
		var permission = $(this).data("id"); 
		var token = $(this).data("token");

		swal({
			title: "Eliminar Permiso",
			text: "¿Estas seguro de eliminar este permiso?",
			type: "error",
			showCancelButton: true,
			confirmButtonText: 'Yes',
			cancelButtonText: 'No'},
			function(isConfirm){
				if (isConfirm) 
			{   	
				$.ajax({
					url: "permissions/"+permission,
					type: "POST",
					data: {
						"id": permission,
						_method: 'DELETE',
						"_token": token,	
						},
					success: function (data) {				
						swal("Account Removed!", "Your permission is removed permanently!", "success",setInterval('location.reload()', 500));
						}	         
				}); 		
				} 
				else {     
					swal("You are not redirected!", "success");   
					} });
	});


	$(document).on("click", "#deleteuniversity", function(e) {
		var university = $(this).data("id"); 
		var token = $(this).data("token");

		swal({
			title: "Eliminar Universidad",
			text: "¿Estas seguro de eliminar esta Universidad de la lista?",
			type: "error",
			showCancelButton: true,
			confirmButtonText: 'Yes',
			cancelButtonText: 'No'},
			function(isConfirm){
				if (isConfirm) 
			{   	
				$.ajax({
					url: "universities/"+university,
					type: "POST",
					data: {
						"id": university,
						_method: 'DELETE',
						"_token": token,	
						},
					success: function (data) {				
						swal("Account Removed!", "Your university is removed permanently!", "success",setInterval('location.reload()', 500));
						}	         
				}); 		
				} 
				else {     
					swal("You are not redirected!", "success");   
					} });
	});


	$(document).on("click", "#deletefaculty", function(e) {
		var faculty = $(this).data("id"); 
		var token = $(this).data("token");

		swal({
			title: "Eliminar Facultad/Escuela",
			text: "¿Estas seguro de eliminar esta Facultad de la lista?",
			type: "error",
			showCancelButton: true,
			confirmButtonText: 'Yes',
			cancelButtonText: 'No'},
			function(isConfirm){
				if (isConfirm) 
			{   	
				$.ajax({
					url: "faculties/"+faculty,
					type: "POST",
					data: {
						"id": faculty,
						_method: 'DELETE',
						"_token": token,	
						},
					success: function (data) {				
						swal("Account Removed!", "Your faculty is removed permanently!", "success",setInterval('location.reload()', 500));
						}	         
				}); 		
				} 
				else {     
					swal("You are not redirected!", "success");   
					} });
	});


	$(document).on("click", "#deleteprofessions", function(e) {
		var profession = $(this).data("id"); 
		var token = $(this).data("token");

		swal({
			title: "Eliminar Facultad/Escuela",
			text: "¿Estas seguro de eliminar esta profesion/titulo de la lista?",
			type: "error",
			showCancelButton: true,
			confirmButtonText: 'Yes',
			cancelButtonText: 'No'},
			function(isConfirm){
				if (isConfirm) 
			{   	
				$.ajax({
					url: "professions/"+profession,
					type: "POST",
					data: {
						"id": profession,
						_method: 'DELETE',
						"_token": token,	
						},
					success: function (data) {				
						swal("Account Removed!", "Your profession is removed permanently!", "success",setInterval('location.reload()', 500));
						}	         
				}); 		
				} 
				else {     
					swal("You are not redirected!", "success");   
					} });
	});

});