function sendConfirmation(emailID)
{
	var xmlhttp;
	if (window.XMLHttpRequest)
	  {// code for IE7+, Firefox, Chrome, Opera, Safari
	  xmlhttp=new XMLHttpRequest();
	  }
	else
	  {// code for IE6, IE5
	  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	xmlhttp.onreadystatechange=function()
	  {
	  if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
			
		document.getElementById("emailInfo").innerHTML="sadhhsabdahsbahsb";
		}
	}
	var parameters = "emailID=" + email;
	xmlhttp.open("POST",encodeURI("confirmationEmail.php?" + parameters) ,true);
	xmlhttp.send();
}