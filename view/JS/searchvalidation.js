function validate(pForm) {

	let isValid = "";
	let erruname = document.getElementById("erroruname");
	erruname.innerHTML = "";

	if (pForm.username.value === "") {
		erruname.innerHTML = "Please fill up the Username";
		isValid = "Not Valid";
	}
	
	if (isValid === "") {
		
		return true;
	}
	else {
		return false;
	}
}