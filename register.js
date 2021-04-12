window.onload = function() {
	var registerForm = document.getElementById("register");
	var password1 = document.getElementById("password");
	var password2 = document.getElementById("password2");

	registerForm.addEventListener("submit", function(event){
		if(password1.value != password2.value) {
			alert("Passwords don't match!");
			event.preventDefault();
		}
	});
}