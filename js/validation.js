// function checkform() 
// {
// 	var name = document.appointment.name.value;
// 	var phone = document.appointment.phone.value;
// 	if(name == '')
// 	{
// 		alert("Please Enter Your Name");
// 		document.appointment.name.focus();
// 	}
// 	else if(phone == '' && phone.length!=10)
// 	{
// 		//problem
// 		alert("Please Enter Your Phone no.");
// 		document.appointment.phone.focus();
// 	}
// 	// add radio button
// 	else
// 	{
// 		document.getElementById("close1").click();	
// 	}
	
// }

// function login()
// {
// 	var no = document.loginform.no.value;
// 	var pass = document.loginform.password.value;
// 	if(no == '') 
// 	{
// 		alert("please enter patient no./Email");
// 		document.loginform.no.focus();
// 	}
// 	else if(pass == '') 
// 	{
// 		alert("please enter password");
// 		document.loginform.pass.focus();
// 	}
// 	else
// 	{
// 		document.getElementById("close2").click();	
// 	}	
// }

// function signup()
// {
// 	var no1 = document.signupform.no.value;
// 	var pass1 = document.signupform.pass1.value;
// 	var pass2 = document.signupform.pass2.value;
// 	if(no1 == '') 
// 	{
// 		alert("please enter patient no./Email");
// 		document.signupform.no1.focus();
// 	}
// 	else if(pass1 == '') 
// 	{
// 		alert("please enter password");
// 		document.signupform.pass1.focus();
// 	}
// 	else if(pass2 == '')
// 	{
// 		alert("please re-enter password");
// 		document.signupform.pass2.focus();
// 	}
// 	else if(pass1.length()<6 || pass1.length()<6)
// 	{
// 		alert("your password length must be atleast 6");
// 	}

// 	else if(pass1 != pass2)
// 	{
// 		alert("both the passwords are not equal");
// 		document.signupform.pass2.focus();
// 	}
// 	else
// 	{
// 		document.getElementById("close3").click();	
// 	}	
// }

function phonevalidate(pnum)
{
	alert("yes called");
	if(pnum.length() != 10)
	{
		alert("please enter valid phone number");
	} 
}