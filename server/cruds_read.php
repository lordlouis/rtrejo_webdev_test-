<?php


	/*
	*	Script to read items from the database
	*
	*/

	// include the script for database connection
	include('server/db_connect.php');

	// function to display the items from the database table
	
	function displayItems()
	{
		// set mySQL SELECT query

		global $db_connect;	// create instance of the database connection

		$query_select = "SELECT * FROM `usuarios`";

		// execute query

		$result = mysqli_query($db_connect, $query_select);

		// extract data from query result and display them in an HTML Table

		echo "<table class='table table-hover'>";	// start the table

			echo"
				<tr class='active'>
					<td><h4>#</h4></td>
					<td><h4>Nombre de la persona</h4></td>
					<td><h4>Puesto</h4></td>
					<td><h4>Usuarios</h4></td>
					<td><h4>Contraseña</h4></td>
					<td><h4>Acción</h4></td>
				</tr>
			";
			$i = 1;
			while( $row = mysqli_fetch_array($result) )
			{
				echo "
					<tr>
						<td>$i</td>
						<td>".$row['name']."</td>
						<td>".$row['occupation']."</td>
						<td>".$row['users']."</td>
						<td>".$row['passw']."</td>
						<td>
							<a href='update.php?id=".$row['id']."'>Editar</a> | <a href='server/cruds_delete.php?id=".$row['id']."'>Eliminar</a>
						</td>

					</tr>
				";
			$i++;
			}

		echo "</table>";	//end the table
	}

/* END of script */
?>