<?php

    // include script for the database connection
    include('server/cruds_create.php');

?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.css">

        <title>Agregar usuarios</title>
    </head>
    <body>
            
        <div class="container">
            
            <h1>Agregar Usuario</h1>

            <br/>
                
            <a href="index.php" class="btn btn-default btn-sm">Ver usuarios</a>

            <br/>
            <br/>

            <form class="form-horizontal" role="form" method="post" action="server/cruds_create.php">
                <div class="form-group">
                    <label for="usuarios_name" class="col-sm-2 control-label">Nombre de la persona</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="usuarios_name" name="usuarios_name" placeholder="Nombre completo" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="usuarios_occupation" class="col-sm-2 control-label">Puesto</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="usuarios_occupation" name="usuarios_occupation" placeholder="Puesto de trabajo" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="usuarios_users" class="col-sm-2 control-label">Usuario</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="usuarios_users" name="usuarios_users" placeholder="Usuario" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="usuarios_passw" class="col-sm-2 control-label">Contraseña</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="usuarios_passw" name="usuarios_passw" placeholder="*********" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-success">Agregar usuario</button>
                        <a href="index.php" class="btn btn-danger">Cancelar</a>
                        <button type="reset" class="btn btn-default">Limpiar</button>
                    </div>
                </div>
            </form>

        </div>
        
    </body>
</html>