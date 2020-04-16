function showPASS(id,pass) 
{
	var con = confirm("Procced?");
		
	if(con == true)
	{
		if(id != "" && pass !="")
		{
			alert("User ID: "+id+"\nPassword: "+pass+"");
			return true;
		}
		
		else
		{
			alert("PRESS \"INSERT\" AGAIN TO GET PASSWORD.");
			return true;
		}
			
	}
	
	else
	{
		alert("Canceled..");
		return false;
	}
}

function clear() 
{
	alert("ok");
	var rowCount = document.getElementById('tab').rows.length;
	var i=0;
	
	for(i = 0; i<rowCount; i++)
	{
		document.getElementById('tab').deleteRow(0);
	}
}