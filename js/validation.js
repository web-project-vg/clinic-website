function checkform() 
{
	var name = document.appointment.name.value;
	var phone = document.appointment.phone.value;
	var email = document.appointment.email.value;
	if(name == '')
	{
		alert("Please Enter Your Name");
		document.appointment.name.focus();
	}
	else if(phone == '' && phone.length!=10)
	{
		//problem
		alert("Please Enter Your Phone no.");
		document.appointment.phone.focus();
	}
	else if(email != '')
	{		
		var len,lat,dot,i,d=0,c=0;
		len=email.length; 
		for(i=0;i<len;i++) 
		{
			if(email.charAt(i)=='@')
			{
				c++;
			}
			else if(email.charAt(i)=='.')
			{
				d++;
			}
		}		
		if(c==1 && d>=1)
		{
			lat=email.indexOf('@');
			dot=email.indexOf('.');
			if(lat==0)
			{
				alert("Please Enter valid Email address");
			}
			else if(dot-lat<2)
			{
				alert("Please Enter valid Email address");
			}
			else if(len-dot<2)
			{
				alert("Please Enter valid Email address");
			}
		}
		else
		{
			alert("Please Enter valid Email address	");
		}
	}
	// add radio button
	else
	{
		document.getElementById("close1").click();	
	}
	
}

function login()
{
	var no = document.loginform.no.value;
	var pass = document.loginform.password.value;
	if(no == '') 
	{
		alert("please enter patient no./Email");
		document.loginform.no.focus();
	}
	else if(pass == '') 
	{
		alert("please enter password");
		document.loginform.pass.focus();
	}
	else
	{
		document.getElementById("close2").click();	
	}
	
}