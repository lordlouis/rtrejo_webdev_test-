<?php

	// include script for the database connection

	// $usuario = $_POST['usuario'];
	// $password = $_POST['pass'];

	// if ($usuario == "admin" && $password == "12345"){
		include('server/cruds_read.php');
	// }
	// else{
	// 	echo "No eres el usuario"
	// }
	



?>

<!doctype html>
<html>
	<head>
	    <meta charset="utf-8">
	    <meta name="description" content="">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- link external CSS stylesheet (Bootstrap 3 from www.getbootstrap.com) -->
	    <link rel="stylesheet" href="css/bootstrap.css">

	    <title>Usuarios</title>

	</head>
	<body>

		<div class="container">
			
			<h1>Lista de Usuarios</h1>
			<br/>
			<header>
				<ul class="nav nav-tabs">
					<li class="active"><a href="index.php">Usuarios</a></li>
				</ul>
			</header>

			<br/>
				
				<a href="create.php" class="btn btn-default btn-sm">Agregar </a>
				<br/>
				<br/>

				<!-- list product items here -->

				<?php
					displayItems();
				?>
			
		</div>
		
	</body>
</html>