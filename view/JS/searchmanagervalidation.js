

function check(pform){
	var isValid = "";
	var erruname = document.getElementById("erroruname");
	erruname.innerHTML = ""; 


	if (pform.username.value === "") {
		erruname.innerHTML="Please fillup Username";
		isValid="Not Valid";
	}

	if(isValid === ""){
		return true;
	}
	else{
		return false;
	}
 }