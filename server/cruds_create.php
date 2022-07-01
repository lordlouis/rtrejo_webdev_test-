<?php
	if($_POST)
	{

		include('db_connect.php');

		// collect the data from the HTTP POST

		$post_name			=	$_POST['usuarios_name'];
		$post_occupation	=	$_POST['usuarios_occupation'];
		$post_users	=	$_POST['usuarios_users'];
		$post_passw	=	$_POST['usuarios_passw'];

		// set/initialize the mySQL insert query

		$query_insert = 
		"INSERT INTO `usuarios`
		(
			name,
			occupation,
			users,
			passw
		)
		VALUES
		(
			'".$post_name."',
			'".$post_occupation."',
			'".$post_users."',
			'".$post_passw."'
		)
		";

		// execute and verify query

		if( mysqli_query($db_connect, $query_insert) )
		{
			// the query was successful.
			header("location: ../index.php");

		}
		else
		{
			// the query failed.
			echo 'Failed to update item...';
		}

		// close database connection now

		mysqli_close($db_connect);
	}

/* END of script */

?>