function validate(pForm) {
	let isValid = "";

	if (pForm.uname.value === "") {
		document.getElementById("erroruname").innerHTML = "Please fill up the Username.";
		isValid = "Not Valid";
	}
	
	if (pForm.oldpass.value === "") {
		document.getElementById("erroroldpass").innerHTML = "Please fill up the Old Password";
		isValid = "Not Valid";
	}
	if (pForm.newpass.value === "") {
		document.getElementById("errornewpass").innerHTML = "Please fill up the New Password";
		isValid = "Not Valid";
	}

	if (isValid === "") {
		return true;
	}
	else {
		return false;
	}
}