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