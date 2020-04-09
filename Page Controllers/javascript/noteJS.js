let saveFile = () => 
{
	let data = ""+document.getElementById("noteTA").value+"";
	
	// Convert the text to BLOB.
	const textToBLOB = new Blob([data], { type: 'text/plain' });
	const sFileName ="*";	   // The file to save the data.

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