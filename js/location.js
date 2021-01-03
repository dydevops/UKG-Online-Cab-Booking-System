var httpGF = getHTTPObject();
function handleHttpResponseGF() {	
	if (httpGF.readyState == 4) {
		if(httpGF.status==200) {
		var results=httpGF.responseText; 
		//alert(results);
		document.getElementById("divDropOff").innerHTML=results;
		}
	}
}

function showDropOff(city) { 
	var url = "location.php?city="+city; // The server-side script	
	//alert(url);
	httpGF.open("GET", url, true);
	httpGF.onreadystatechange = handleHttpResponseGF;
	httpGF.send(null);
	return true;
}

function getHTTPObject() {
  var xmlhttp;
 
  if(window.XMLHttpRequest){
	xmlhttp = new XMLHttpRequest();
  }
  else if (window.ActiveXObject){
	xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	if (!xmlhttp){
		xmlhttp=new ActiveXObject("Msxml2.XMLHTTP");
	}
	
  }
  return xmlhttp;  
}