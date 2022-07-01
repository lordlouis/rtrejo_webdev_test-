<?php

    /*
     *  Server script to update records from incomming POSTs methods
     *
    */

    // Check if the Request is an HTTP POST method.
    // If POST, collect the data from the POST variable

    if($_POST)
    {
        include('db_connect.php');

        // collect the data from the HTTP POST

        $product_id            =   $_POST['product_id'];
        $user_name          =   $_POST['user_name'];
        $user_occupation         =   $_POST['user_occupation'];
        $user_users   =   $_POST['user_users'];
        $user_passw   =   $_POST['user_passw'];

        // set/initialize the mySQL insert query

        echo $product_id."<br/>";
        echo $user_name."<br/>";
        echo $user_occupation."<br/>";
        echo $user_users."<br/>";
        echo $user_passw."<br/>";

        $query_update = 
        "UPDATE `usuarios`
        SET
            name            =   '$user_name',
            occupation      =   '$user_occupation',
            users     =   '$user_users',
            passw     =   '$user_passw'
        
        WHERE
            id=$product_id
        ";

        // execute and verify query

        if( mysqli_query($db_connect, $query_update) )
        {
            // the query was successful.
            header("location: ../index.php");

        }
        else
        {
            // the failed.
            echo 'Database query failed...';
        }

        // close database connection

        mysqli_close($db_connect);
    }

/* END of script */

?>