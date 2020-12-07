"use strict"

function ajax(){
	let data= document.getElementById('name').value;

	var xhttp = new XMLHttpRequest();
	xhttp.open('GET', 'abc.php?name='+data, true);

	xhttp.onreadystatechange = function(){
		if (this.readyState == 4 && this.status == 200) {
	    	document.getElementById('head').innerHTML = this.responseText;
	    }
	}
	
	xhttp.send();
}