//Create a boolean variable to check for a valid Internet Explorer instance.
var xmlhttp = false;
var mTimer;

function createRequestObject()
{	
	//Check if we are using IE.
	try {
		//If the Javascript version is greater than 5.
		xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
	} catch (e) {
		//If not, then use the older active x object.
		try {
			//If we are using MS.
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		} catch (E) {
			//Else we must be using a non-IE browser.
			xmlhttp = false;
		}
	}
	
	//If we are using a non-IE browser, create a javascript instance of the object.
	if (!xmlhttp && typeof XMLHttpRequest != 'undefined') {
		xmlhttp = new XMLHttpRequest();
	}
	
	/*
	var xmlhttp;
	
	//If, the activexobject is available, we must be using IE.
	if (window.ActiveXObject){
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	} else {
		//Else, we can use the native Javascript handler.
		xmlhttp = new XMLHttpRequest();
	}
	*/	
}

createRequestObject();

function sendMessage() {

	var user_div = document.getElementById("user");
	var message_div = document.getElementById("usermsg");
	
	xmlhttp.open("POST", 'broadcast.php', true);
	xmlhttp.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

	var param = 'message=' + message_div.value;
	param += '&name='+ user_div.innerHTML;
	
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
				message_div.value = '';
		}
	}
	
	xmlhttp.send(param);

}

function getChatText() {
	
	//alert('hello');
	var chat_div = document.getElementById("chatbox");
	
	xmlhttp.open("GET", 'getmessages.php', true);

	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
				chat_div.innerHTML = xmlhttp.responseText;
		}
	}
	
	xmlhttp.send(null);

}


mTimer = setInterval('getChatText();',2000); //Refresh our page every 2 SEC



