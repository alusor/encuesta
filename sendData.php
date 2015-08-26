<?php 
	require_once('conection.php');
	con();
	$p1 = strval($_POST['p1']);
	$p2 =strval($_POST['p2']);
	$p3 = strval($_POST['p3']);
	
	$query = "INSERT INTO respuestas(mensajes,minutos,plan) VALUES('$p1','$p2','$p3')";
	$resultado = mysql_query($query) or die(mysql_error());
	echo "Gracias por participar."; 
	?>