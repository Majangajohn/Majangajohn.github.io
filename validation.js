function validation(){
	//getting user inpurs
	var fname=document.getElementById('fname');
	var lname=document.getElementById('lname');
	var uname=document.getElementById('uname');
	var email=document.getElementById('email');
	var idnumber=document.getElementById('idnum');
	var pnumber=document.getElementById('pnumber');
	var password=document.getElementById('password');
	var cpassword=document.getElementById('cpassword');
	var address=document.getElementById('address');


	//getting user inputs errors
	var fnameerror = document.getElementById('fnameerror');
	var lnameerror = document.getElementById('lnameerror');
	var unameerror = document.getElementById('unameerror');
	var emailerror = document.getElementById('emailerror');
	var idnumerror = document.getElementById('idnumerror');
	var pnumbererror = document.getElementById('pnumbererror');
	var passworderror = document.getElementById('passworderror');
	var cpassworderror = document.getElementById('cpassworderror');
	var addresserror = document.getElementById('addresserror');


	//validating firstname
	if(fname.value==''){
	fnameerror.innerHTML="*Please provide firstname*";
	fname.style.border="1px solid red";
	fnameerror.style.color="red";
	fname.focus();
	return false;
	}
	//validating lasttname
	if(lname.value==''){
	lnameerror.innerHTML="*Please provide lastname*";
	lname.style.border="1px solid red";
	lnameerror.style.color="red";
	lname.focus();
	return false;
	}


	//validating username
	if(uname.value==''){
	unameerror.innerHTML="*Please provide username*";
	uname.style.border="1px solid red";
	unameerror.style.color="red";
	uname.focus();
	return false;
	}
	//validating email
	if(email.value==''){
	emailerror.innerHTML="*Please provide email*";
	email.style.border="1px solid red";
	emailerror.style.color="red";
	email.focus();
	return false;
	}
	//validating idnum
	if(idnum.value==''){
	idnumerror.innerHTML="*Please provide your id number*";
	idnum.style.border="1px solid red";
	idnumerror.style.color="red";
	idnum.focus();
	return false;
	}
	//validating idnum
	if((idnum.value.length)!=8){
	idnumerror.innerHTML="*id number must be 8 in length*";
	idnum.style.border="1px solid red";
	idnumerror.style.color="red";
	idnum.focus();
	return false;
	}


	//validating phone number
	if(pnumber.value==''){
	pnumbererror.innerHTML="*Please provide phone number*";
	pnumber.style.border="1px solid red";
	pnumbererror.style.color="red";
	pnumber.focus();

	return false;
	}
	//validating phone number
	if((pnumber.value.length)!=10){
	pnumbererror.innerHTML="*phone number must be 10 in length*";
	pnumber.style.border="1px solid red";
	pnumbererror.style.color="red";
	pnumber.focus();

	return false;
	}

	//validating password
	if(password.value==''){
	passworderror.innerHTML="*Please provide password*";
	password.style.border="1px solid red";
	passworderror.style.color="red";
	password.focus();

	return false;
	}

	
	//validating password length
	if((password.value.length)<8){
	passworderror.innerHTML="*Password must be a minimum of 8 characters*";
	password.style.border="1px solid red";
	passworderror.style.color="red";
	password.focus();

	return false;
	}
		//validating  confirm password
	if(cpassword.value==''){
	cpassworderror.innerHTML="*Please input confirm password*";
	cpassword.style.border="1px solid red";
	cpassworderror.style.color="red";
	cpassword.focus();

	return false;
	}

	//validating password and confirm password match
	if((password.value)!=(cpassword.value)){
	passworderror.innerHTML="*Please did not match*";
	password.style.border="1px solid red";
	passworderror.style.color="red";
	password.focus();
	return false;
	}


	//validating address
	if(address.value==''){
	addresserror.innerHTML="*Please provide password*";
	address.style.border="1px solid red";
	addresserror.style.color="red";
	address.focus();

	return false;
	}


return true;
}