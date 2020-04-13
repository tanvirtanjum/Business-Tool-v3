function showPASS(idpass) 
{
	if(idpass.length > 0)
	{
		alert(idpass);
	}
	
	else
	{
		alert("Something Went Wrong.");
	}
		
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