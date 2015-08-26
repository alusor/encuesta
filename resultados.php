<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Resultados</title>
	<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
	<link rel="stylesheet" href="css/style.css">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	  <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
</head>
<body>
	<header class="navbar-fixed">
		<nav>Resultados</nav>
	</header>
	<main class="container">
		<div class="row">
			<div class="col s12">
				<table class="hoverable">
			<thead>
				<tr>
					<th>Mensajes</th>
					<th>Minutos</th>
					<th>Plan</th>
				</tr>
			</thead>
			<tbody>
				<?php
					require_once('conection.php');
					con();
					$query = "SELECT * FROM respuestas";
					$resultado = mysql_query($query) or die(mysql_error());
					while($cont = mysql_fetch_array($resultado)){
						?>
						<tr><?php
						echo "<td>".$cont[0]."</td>"."<td>".$cont[1]."</td>"."<td>".$cont[2]."</td>";
						?></tr><?php
						}
				?>
				
			</tbody>
		</table>
			</div>
		</div>
		
	</main>
	
</body>
</html>