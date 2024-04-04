function login()
	{
		var uname = document.getElementById("uname").value;
		var pwd = document.getElementById("psw").value;
		var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		if(uname =='')
		{
			alert("please enter user name.");
			
		}
		else if(pwd=='')
		{
        	alert("enter the password");
			
		}
		else if (!isNaN(uname)) {
        alert("Username cannot be an integer value.");
		}
		

		
		else if ((!/(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@#$%^&*!]).{8,}/.test(pwd)) &&(pwd.length < 6 || pwd.length > 6)) 
		{
        alert("Hint:Your password must be included at least one uppercase letter, one lowercase letter, one number, and one special character....Password must be at least 6 characters long...Remember and re-enter the password...!");
		}
		
		
		else if(uname.length < 6 || uname.length > 20) {
			alert("Username must be between 6 and 20 characters...!");
        
    }
		else
		{
			alert('Thank You for Login. Welcome '+ uname +" !");
			
 
	
		}
		
		{
		document.getElementById("uname").value="";
		document.getElementById("psw").value="";
	}	
	}
	
	