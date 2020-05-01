function validate()
{
	var ret = true;
	
	var pid = document.getElementById('prodidTF').value;
	var quant = document.getElementById('quantTF').value;
	var price = document.getElementById('priceTF').value;
	var cusname = document.getElementById('cusnameTF').value;
	var cuscon = document.getElementById('cusmobTF').value;
	
	
	
	if(pid.trim().length < 1)
	{
		document.getElementById('prodidTFerr').innerHTML="&#10033;"
		ret = false;
	}
	
	if(quant < 1)
	{
		document.getElementById('quantTFerr').innerHTML="&#10033;"
		ret = false;
	}
	
	if(price < 1)
	{
		document.getElementById('priceTFerr').innerHTML="&#10033;"
		ret = false;
	}
	
	if(cusname.trim().length < 1)
	{
		document.getElementById('cusnameTFerr').innerHTML="&#10033;"
		ret = false;
	}
	if(cuscon < 1)
	{
		document.getElementById('cusmobTFerr').innerHTML="&#10033;"
		ret = false;
	}
	
	return ret;
}

function srch()
{
	var xhttp = new XMLHttpRequest();
	
	var key1 = document.getElementById('srchProdTypeTF').value;
	
	xhttp.onreadystatechange=function()
	{
		if(xhttp.readyState == 4 && xhttp.status == 200)
		{
			document.getElementById('tab').innerHTML = xhttp.responseText;
		}
	}
	xhttp.open("GET","../DB Handler/advancedProductSearchOnSaleDB.php?key1="+key1,true);
	//xhttp.open("GET","../DB Handler/employeeDB.php?key="+key,true);
	xhttp.send();
}