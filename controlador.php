<?php
    if(!empty($_POST["btningresar"])){
        if (empty($_POST["usuario"]) and empty($_POST["pass"])) {
            echo '<div class="alert alert-danger">Los campos estan vacios</div>';
        } else {
            $usuar=$_POST["usuario"];
            $clave=$_POST["pass"];
            $sql=$db_connect->query(" select * from usuarios where users='$usuar' and passw='$clave' ");
            if ($datos=$sql->fetch_object()){
                    header("location:index.php");
            } else {
                echo '<div class="alert alert-danger"> ACCESO DENEGADO</div>';
        }    
    }
}



?>