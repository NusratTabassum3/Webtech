function validate(pForm) {
	let isValid = "";

	let erradd = document.getElementById("erroraddress");
	let erreamil = document.getElementById("erroremail");
	let errph = document.getElementById("errorphone");
	let errqua = document.getElementById("errorqua");
	let errwork = document.getElementById("errorwork");

	erradd.innerHTML = "";
	erreamil.innerHTML = "";
	errph.innerHTML = "";
	errqua.innerHTML = "";
	errwork.innerHTML = "";


	
	if (pForm.address.value === "") {
		erradd.innerHTML = "Please fill up the Address to update";
		isValid = "Not Valid";
	}
	if (pForm.email.value === "") {
		erreamil.innerHTML = "Please fill up the Email to update";
		isValid = "Not Valid";
	}
	if (pForm.phone.value === "") {
		errph.innerHTML = "Please fill up the Phone No to update";
		isValid = "Not Valid";
	}
	if (pForm.qua.value === "") {
		errqua.innerHTML = "Please fill up the Qualification to update";
		isValid = "Not Valid";
	}

	if (pForm.work.value === "") {
		errwork.innerHTML = "Please fill up the Work Experience to update";
		isValid = "Not Valid";
	}
	
	if (isValid === "") {
		return true;
	}
	else {
		return false;
	}
}