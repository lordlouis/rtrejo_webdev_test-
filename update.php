<?php

    // include script for the database connection
    include('server/cruds_update.php');
    include('server/db_connect.php');

    // get if of item to update

    if($_GET)
    {
        $id = $_GET['id'];
        $user_name = getUserName($id);
        $user_occupation = getUserOccupation($id);
        $user_users = getUserUsers($id);
        $user_passw = getUserPassw($id);
    }

    function getUserName($itemId)
    {
        global $db_connect;
        // set SELECT query
        $query_select =
        "SELECT name
        FROM `usuarios`
        WHERE
        (
            id=".$itemId."
        )
        ";
        // execute SELECt query
        $result = mysqli_query($db_connect, $query_select);
        $row = mysqli_fetch_array($result);

        return $row['name'];
    }

    function getUserOccupation($itemId)
    {
        global $db_connect;
        // set SELECT query
        $query_select =
        "SELECT occupation
        FROM `usuarios`
        WHERE
        (
            id=".$itemId."
        )
        ";
        // execute SELECt query
        $result = mysqli_query($db_connect, $query_select);
        $row = mysqli_fetch_array($result);

        return $row['occupation'];
    }

    function getUserUsers($itemId)
    {
        global $db_connect;
        // set SELECT query
        $query_select =
        "SELECT users
        FROM `usuarios`
        WHERE
        (
            id=".$itemId."
        )
        ";
        // execute SELECt query
        $result = mysqli_query($db_connect, $query_select);
        $row = mysqli_fetch_array($result);

        return $row['users'];
    }

    function getUserPassw($itemId)
    {
        global $db_connect;
        // set SELECT query
        $query_select =
        "SELECT passw
        FROM `usuarios`
        WHERE
        (
            id=".$itemId."
        )
        ";
        // execute SELECt query
        $result = mysqli_query($db_connect, $query_select);
        $row = mysqli_fetch_array($result);

        return $row['passw'];
    }

?>


<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- link external CSS stylesheet (Bootstrap 3 from www.getbootstrap.com) -->
        <link rel="stylesheet" href="css/bootstrap.css">

        <title>Actualizar usuario</title>
    </head>
    <body>
            
        <div class="container">
            
            <h1>Actualizar usuario</h1>

            <br/>
                
            <a href="index.php" class="btn btn-default btn-sm">Ver usuarios</a>

            <br/>
            <br/>

            <form class="form-horizontal" role="form" method="post" action="server/cruds_update.php">
                <div class="form-group">
                    <label for="product_id" class="col-sm-2 control-label">Product ID</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control"
                            id="product_id"
                            name="product_id"
                            value="<?php echo $id; ?>"
                            readonly
                        >
                    </div>
                </div>
                <div class="form-group">
                    <label for="user_name" class="col-sm-2 control-label">Nombre de la persona</label>
                    <div class="col-sm-10">
                        <input
                            type="text"
                            class="form-control"
                            id="user_name"
                            name="user_name"
                            placeholder="Nombre completo"
                            value="<?php echo $user_name; ?>"
                        >
                    </div>
                </div>
                <div class="form-group">
                    <label for="user_occupation" class="col-sm-2 control-label">Puesto</label>
                    <div class="col-sm-10">
                        <input
                            type="text"
                            class="form-control"
                            id="user_occupation"
                            name="user_occupation"
                            placeholder="Puesto de trabajo"
                            value="<?php echo $user_occupation; ?>"
                        >
                    </div>
                </div>
                <div class="form-group">
                    <label for="user_users" class="col-sm-2 control-label">Usuario</label>
                    <div class="col-sm-10">
                        <input
                            type="text"
                            class="form-control"
                            id="user_users"
                            name="user_users"
                            placeholder="Usuario"
                            value="<?php echo $user_users; ?>"
                        >
                    </div>
                </div>
                <div class="form-group">
                    <label for="user_passw" class="col-sm-2 control-label">Contraseña</label>
                    <div class="col-sm-10">
                        <input
                            type="text"
                            class="form-control"
                            id="user_passw"
                            name="user_passw"
                            placeholder="********"
                            value="<?php echo $user_passw; ?>"
                        >
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-success">Actualizar usuario</button>
                        <a href="index.php" class="btn btn-danger">Cancelar</a>
                        <button type="reset" class="btn btn-default">Limpiar</button>
                    </div>
                </div>
            </form>

        </div>
        
    </body>
</html>