
function validateEmail(email) {
	var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	console.log(re.test(String(email).toLowerCase()));
	return re.test(String(email).toLowerCase());
}

function validatePLZ(plz){
	var re = /^(\d{5})$/;
	return re.test(String(plz));
}

function save(){

	if (validateEmail(document.getElementById('mail').value)!= true){
		alert("E-Mail Adresse ist falsch");
		$('#mail').css('border-color', 'red');
		return;
	}

	if (validatePLZ(document.getElementById('plz').value)!= true){
		alert("PLZ ist flasch");
		$('#plz').css('border-color', 'red');
		return;
	}

	var data = $("#form1").serializeArray();
	console.log(data);
	localStorage.setItem(document.getElementById('name').value, JSON.stringify(data));
	window.location.href='Index.html';
}


function edit(id){
	window.location.href='edit_dialog.html?id='+id;
}

function del(id){
	//console.log($("#"+id).text());
	localStorage.removeItem($("#"+id).text());
	location.reload();
}
//inhalte für index.html aus localStorage laden
function read(){
	for (var i = 0; i < localStorage.length; i++){
		var data = JSON.parse(localStorage.getItem(localStorage.key(i)));
		$('#table').append($('<tr>')
							.append($("<td id ='"+i+"'>").append(data[0].value))
							.append($('<td>').append(data[1].value))
							.append($('<td>').append(data[3].value))
							.append($('<td>').append(data[2].value))
							.append($('<td>').append(data[4].value))
							.append($('<td>').append("<button id='changebutton' type='button' onclick='edit("+i+")' title='Edit'></button>&nbsp").append("<button id='deletebutton' type='button' onclick='del("+i+")' title='Delete'></button>"))
							);
		// .append($('<button id='deletebutton' type='button' onclick=delete()>DEL</button>')));
		//console.log(localStorage.getItem(localStorage.key(i)));
		//<button id="changebutton" type="button" onclick="alert('Hello world!')">
	}
}

//edit dialog befüllen
function getData(){
	var query = window.location.search.substring(4);
	var data = JSON.parse(localStorage.getItem(localStorage.key(query)));
	document.getElementById('name').value = data[0].value;
	document.getElementById('name').style.backgroundColor = "lightgray";
	document.getElementById('mail').value = data[1].value;
	document.getElementById('plz').value = data[2].value;
	$('#ort').val(data[3].value);
	document.getElementById('s+h').value = data[4].value;
}