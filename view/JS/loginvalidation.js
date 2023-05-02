function validate(pForm) {

	let isValid = "";
	let erruname = document.getElementById("errorusername");
	let errpass = document.getElementById("errorpassword");
	errpass.innerHTML="";
	erruname.innerHTML="";

	if (pForm.username.value === "") {
		erruname.innerHTML = "Please fill up the Username";
		isValid = "Not Valid";
	}
	
	if (pForm.password.value === "") {
		errpass.innerHTML = "Please fill up the password";
		isValid = "Not Valid";
	}

	if (isValid === "") {
		return true;
	}
	else {
		return false;
	}
}

