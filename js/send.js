function sendData(p1,p2,p3){
	var p = {
		"p1" : p1,
		"p2" : p2,
		"p3" : p3,
	};
	$.ajax({
		data:p,
		url: 'conection.php',
		type: 'post',
		success: function(){
			$("#res").html("Gracias por participar.");	
		} 
	});
}