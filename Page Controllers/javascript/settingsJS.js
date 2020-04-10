function showOldPass() 
{
	var passTF = document.getElementById("oldpassTF");
	if (passTF.type === "password") 
	{
		passTF.type = "text";
	} 
	
	else 
	{
		passTF.type = "password";
	}
}

function showNewPass() 
{
	var passTF = document.getElementById("newpassTF");
	if (passTF.type === "password") 
	{
		passTF.type = "text";
	} 
	
	else 
	{
		passTF.type = "password";
	}
}

function showConfirmPass() 
{
	var passTF = document.getElementById("confirmpassTF");
	if (passTF.type === "password") 
	{
		passTF.type = "text";
	} 
	
	else 
	{
		passTF.type = "password";
	}
}