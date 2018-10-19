
function save(){
	var data = $("#form1").serializeArray();
	console.log(data);
	localStorage.setItem(document.getElementById('name').value, JSON.stringify(data));
	window.location.href='Index.html';
}


function edit(){
	alert('Hello world!');
}

function del(){
	alert("DELETE");
}

function read(){
	for (var i = 0; i < localStorage.length; i++){

		var data = JSON.parse(localStorage.getItem(localStorage.key(i)));
		
		$('#table').append($('<tr>')
							.append($('<td>').append(data[0].value))
							.append($('<td>').append(data[1].value))
							.append($('<td>').append(data[2].value))
							.append($('<td>').append(data[3].value))
							.append($('<td>').append(data[4].value))
							.append($('<td>').append("<button id='changebutton' type='button' onclick='edit()'>Hi</button>&nbsp").append("<button id='deletebutton' type='button' onclick='del()'>del</button>"))
							);
		// .append($('<button id='deletebutton' type='button' onclick=delete()>DEL</button>')));
		//console.log(localStorage.getItem(localStorage.key(i)));
		//<button id="changebutton" type="button" onclick="alert('Hello world!')">
	}
}

