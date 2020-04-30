function m2()
{
	var rowCount = document.getElementById('empTable').tBodies[0].rows.length;
	var i=0;
	
	for(i = 0; i<rowCount; i++)
	{
		document.getElementById('empTable').tBodies[0].deleteRow(0);
	}
}

function srch()
{
	var xhttp = new XMLHttpRequest();
	
	var key1 = document.getElementById('srchEmpByNameTF').value;
	var key2 = document.getElementById('srchEmpByDesignTF').value;
	
	xhttp.onreadystatechange=function()
	{
		if(xhttp.readyState == 4 && xhttp.status == 200)
		{
			document.getElementById('tab').innerHTML = xhttp.responseText;
		}
	}
	xhttp.open("GET","../DB Handler/advancedEmployeeSearchDB.php?key1="+key1+"&key2="+key2,true);
	//xhttp.open("GET","../DB Handler/employeeDB.php?key="+key,true);
	xhttp.send();
}
		
