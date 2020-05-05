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
	var key2 = document.getElementById('srchProdNameTF').value;
	
	xhttp.onreadystatechange=function()
	{
		if(xhttp.readyState == 4 && xhttp.status == 200)
		{
			document.getElementById('tab').innerHTML = xhttp.responseText;
		}
	}
	xhttp.open("GET","../DB Handler/advancedProductSearchOnSaleDB.php?key1="+key1+"&key2="+key2,true);
	//xhttp.open("GET","../DB Handler/employeeDB.php?key="+key,true);
	xhttp.send();
}

let saveFile = () => 
{
	var btn = document.getElementById("printInvoiceBTN").value;
	if(btn == "Print Invoice")
	{
		var id = document.getElementById("purchaseID").value;
		var pid = document.getElementById("productID").value;
		var quant = document.getElementById("Quant").value;
		var price = document.getElementById("price").value;
		var cname = document.getElementById("cname").value;
		var mob = document.getElementById("mob").value;
		var emp = document.getElementById("emp").value;
		var date = document.getElementById("date").value;
		
		var payable= quant*price;
	
		let data = "Invoice ID. "+id+"\nProduct ID. "+pid+"\nBuying Quantity: "+quant+ "\nPrice Per Unit: "+price+"    (BDT)\nBuyer Name: "+cname.toUpperCase() +"\tContact: "+mob+"\n\nAmmount To Pay: "+payable+"\t(PAID__,UNPAID__)"+"    (BDT)\n\nSaller ID. "+emp+"\nSelling Date: "+date+"\n\n\n\n--------------------------\n\tSignature";
		
		var con = confirm("Procced?");
			
		if(con == true)
		{
			const textToBLOB = new Blob([data], { type: 'text/plain' });
			var sFileName = "*";
			var name = "Invoice_"+id+"";
			
			if(name != "")
			{
				var sFileName =name;
			}
			
			else
			{
				var sFileName ="*";
			}

			let newLink = document.createElement("a");
			newLink.download = sFileName;

			if (window.webkitURL != null) 
			{
				newLink.href = window.webkitURL.createObjectURL(textToBLOB);
			}
			
			else 
			{
				newLink.href = window.URL.createObjectURL(textToBLOB);
				newLink.style.display = "none";
				document.body.appendChild(newLink);
			}

			newLink.click();
			return true;
		}
		
		else
		{	
			alert("Process Canceled.");
			return false;
		}
	}
	
	else
	{
		alert("Sell Product First.");
		return false;
	}
}