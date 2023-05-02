function validate(pForm) {

	var isValid = "";
	var errusername = document.getElementById("errorusername");
	errusername.innerHTML="";

	if (pForm.username.value === "") {
		errusername.innerHTML = "Please fill up the Username";
		isValid = "Not Valid";
	}

	if (isValid === "") {
		return true;
	}
	else {
		return false;
	}
}

