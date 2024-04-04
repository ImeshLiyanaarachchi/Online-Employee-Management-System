function validate()
	{
		var uname = document.getElementById("email").value;
		var pwd = document.getElementById("password").value;
		var confpassword = document.getElementById("confpassword").value;
		var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		if(uname =='')
		{
			alert("please enter user name.");
			
		}
		else if(pwd=='')
		{
        	alert("enter the password");
			
		}
		

		
		else if ((!/(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@#$%^&*!]).{8,}/.test(pwd)) &&(pwd.length < 6 || pwd.length > 6)) 
		{
        alert("Hint:Your password must be included at least one uppercase letter, one lowercase letter, one number, and one special character....Password must be at least 6 characters long...Remember and re-enter the password...!");
		}
		else if(pwd != confpassword){
			alert("Password and the confirm password does not match");
		}
		
		else if(uname.length < 6 || uname.length > 50) {
			alert("Username must be between 6 and 50 characters...!");
        
		}
		else
		{
			document.getElementsById("RegistrationForm").submit();
			return true;
		}
		
		return false;
	}
	
	