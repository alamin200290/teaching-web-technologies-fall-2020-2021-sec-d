"use strict"

function ajax(){

	var json = {
		'name' : 'alamin',
		'age'  : 13,
		'dept' : 'CS'
	}

	var data = JSON.stringify(json);

	//let data= document.getElementById('name').value;

	var xhttp = new XMLHttpRequest();
	xhttp.open('POST', 'abc.php', true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

	xhttp.onreadystatechange = function(){
		
		if (this.readyState == 4 && this.status == 200) {
	    	//var  xyz = JSON.parse(this.responseText);
	    	//alert(xyz.deptdata);
	    	alert(this.responseText);
	    }
	}
	
	xhttp.send('mydata='+data);
}