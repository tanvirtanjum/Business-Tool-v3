let saveFile = () => 
{
	let data = ""+document.getElementById("noteTA").value+"";
	
	if(data != "")
	{
		// Convert the text to BLOB.
		const textToBLOB = new Blob([data], { type: 'text/plain' });
		var sFileName ="*";	   // The file to save the data.
		var name = document.getElementById("noteIDTF").value
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

		if (window.webkitURL != null) {
			newLink.href = window.webkitURL.createObjectURL(textToBLOB);
		}
		else {
			newLink.href = window.URL.createObjectURL(textToBLOB);
			newLink.style.display = "none";
			document.body.appendChild(newLink);
		}

		newLink.click();
	}
	
	else
	{
		alert("Empty Text can not be saved.");
	}
}