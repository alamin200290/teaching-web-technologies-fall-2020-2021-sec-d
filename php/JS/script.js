"use strict"


//alert('test');
//console.log('testing...');

//document.write('this is JS example');

//document.getElementById('head').innerHTML = 'this is js example';
//obj.innerHTML = "test";


let student = ['alamin', '123', 'CS'];

function f1(){
	let data= document.getElementById('name').value;
	if(data == ''){
		document.getElementById('head').innerHTML = 'invalid data';		
	}else{
		document.getElementById('head').innerHTML = data;
	}

}