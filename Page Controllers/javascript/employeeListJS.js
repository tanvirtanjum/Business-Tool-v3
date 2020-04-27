function validateINSERT(id,pass)
{
	var ret = true;
	
	var eid = document.getElementById('eidTF').value;
	id=eid;
	pass=document.getElementById('pass').value;
	var ename = document.getElementById('enameTF').value;
	var design = document.getElementById('design').value;
	var sal = document.getElementById('salTF').value;
	var mob = document.getElementById('mobTF').value;
	var mail = document.getElementById('mailTF').value;
	
	
	
	if(eid.trim().length < 1)
	{
		document.getElementById('eidTFErr').innerHTML="&#10033;"
		ret = false;
	}
	
	if(ename.trim().length < 1)
	{
		document.getElementById('enameTFErr').innerHTML="&#10033;"
		ret = false;
	}
	
	if(design.trim().length < 1 || design == "4")
	{
		document.getElementById('designErr').innerHTML="&#10033;"
		ret = false;
	}
	
	if(sal < 1)
	{
		document.getElementById('salTFErr').innerHTML="&#10033;"
		ret = false;
	}
	if(mob < 1)
	{
		document.getElementById('mobTFErr').innerHTML="&#10033;"
		ret = false;
	}
	var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	if(mail.trim().length < 1 || !mail.match(mailformat))
	{
		document.getElementById('mailTFErr').innerHTML="&#10033;"
		ret = false;
	}
	
	if(ret == true)
	{
		
		var con = confirm("Procced?");
		
		if(con == true)
		{
			if(id != "" && pass !="")
			{
				alert("User ID: "+id+"\nPassword: "+pass+"");
				return ret;
			}
			
			else
			{
				alert("PRESS \"INSERT\" AGAIN TO GET PASSWORD.");
				return ret;
			}
				
		}
			
		else
		{
			alert("Canceled..");
			return false;
		}		
	}
	
	else
	{
		return ret;
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