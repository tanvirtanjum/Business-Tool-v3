function showPASS(id,pass) 
{
	var con = confirm("Procced?");
		
	if(con == true)
	{
		alert("User ID: "+id+"\nPassword: "+pass+"");	
	}
	
	else
	{}
}

function clear() 
{
	var rowCount = document.getElementById('tab').rows.length;
	var i=0;
	for(i = 0; i<rowCount; i++)
	{
		document.getElementById('tab').deleteRow(0);
	}
}