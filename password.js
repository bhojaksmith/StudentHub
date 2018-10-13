function CheckPassword(inputtext) { 
var passw=  /^[A-Za-z]\w{7,14}$/;

if(inputtext.value.match(passw)){ 
	return true;
//	document.getElementById("submit").disabled = false;
}
else{ 
//	document.getElementById("submit").disabled = true;
	alert('Please Enter Strong Password  !')
	return false;
}
}