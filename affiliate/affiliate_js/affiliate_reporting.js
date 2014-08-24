function emailreporting()
{
	if (window.XMLHttpRequest) // code for IE7+, Firefox, Chrome, Opera, Safari
    {
        var xmlhttp = new XMLHttpRequest();
    }
    else // code for IE6, IE5
    {
         var xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
	
	var display = document.getElementById('right_reporting');
	display.innerHTML = "Email Report: <br/>";
	
	xmlhttp.onreadystatechange = function()
    {
    	
		
		if(xmlhttp.readyState == 1)
		{
			console.log("Status 1: Server connection established...");
		}
        else if(xmlhttp.readyState == 2)
        {
            console.log("Status 2: Request recieved...");
        }
        else if(xmlhttp.readyState == 3)
        {
            console.log("Status 3: Processing Request...");
		}
        else if(xmlhttp.readyState == 4)
        {
        	console.log("Status 4: Processing Request...");
        	
			if(xmlhttp.status == 200)
			{
				console.log("Status 200: Processing Request...");
				console.log("Note: Error Reporting Set to 0")
				var text = xmlhttp.responseText;
				display.innerHTML += text;
			}
            else
            {
            	console.log("Error!");
				alert("Something is wrong !");
			}
		}
	}
	xmlhttp.open("GET", "affiliate_page_functionality/affiliate_emailreporting.php", true);
	xmlhttp.send();
}
