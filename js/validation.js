function validateRegisterForm() {
	var mail = document.forms["RegisterForm"]["Correo"].value;
	var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	var phone = document.forms["RegisterForm"]["Telefono"].value;
	var password = document.forms["RegisterForm"]["password"].value;
	var confirmpassword = document.forms["RegisterForm"]["confirmpassword"].value;
	if(mail.match(mailformat)) {
		if(phone.length != 10) {
			alert("Phone number should be 10 digits");
			return false;
		}
		if(password.length > 25 || password.length < 5){
			alert("Password length should be between 5 to 25 characters");
			return false;
		}
		if(password != confirmpassword){
			alert("Passwords should match");
			return false;
		}
		else {
			return true;
		}
	}
	else {
		alert("You have entered an invalid email address!");
		return false;
	}
}

function footerContact() {
	var mail = document.forms["footerForm"]["email-us"].value;
	var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	if(mail.match(mailformat)) {
		return true;
	}
	else {
		alert("You have entered an invalid email address!");
		return false;
	}
}

function topFunction() {
	var mybutton = document.getElementById("foot_button");
	document.documentElement.scrollTop = 0;
}

function contactUs() {
	var mail = document.forms["contactUs"]["email"].value;
	var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	if(mail.match(mailformat)) {
		return true;
	}
	else {
		alert("You have entered an invalid email address!");
		return false;
	}
}

function addEvent() {
	var phone = document.forms["addEventForm"]["eventtel"].value;
	if(phone.length != 10) {
		alert("Phone number should be 10 digits");
		return false;
	}
	else {
		return true;
	}
}

function delEvent() {
	alert("hello");
	var answer = confirm("Do you really want to delete this event??");
	if (answer == true) {
		return true;
	}
	else {
		return false;
	}
}

function onlogin() {
	var mail = document.forms["onlogin"]["username"].value;
	var mailformat = /^\w+([\.-]?\w+)@\w+([\.-]?\w+)(\.\w{2,3})+$/;
	if(mail.match(mailformat)) {
		return true;
	}
	else {
		alert("Username should be email address");
		return false;
	}

}