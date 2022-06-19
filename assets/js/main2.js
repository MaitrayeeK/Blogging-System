
function addblog() {
	$.ajax({
		type: 'POST',
		url: 'http://localhost/TechBlog/Dashboard/Addblog',
		data: {heading: $("#subject").val(), category: $("#category").val(), desc: $("#description").val(), userid: $("#username").val()},
		success: function(response) {
			console.log(response);
			if(response) {
				window.location.href = "http://localhost/TechBlog/profile"
			} else {
				alert("Blog is not added");
			}
		},
		error: function() {
			console.log("error");
		}
	});
}

// name: $("#idname").val(), phone: $("#idphone").val(), email: $("#idemail").val(), password: $("#idpassword").val(), twitter: $("#idtwitter").val(), facebook: $("#idfacebook").val(), linkedin: $("#idlinkedin").val(), instagram: $("#idinstagram").val()