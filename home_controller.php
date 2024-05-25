<?php
if (isset($_POST["btnEntrar"])) {
    if (empty($_POST["inputUsuario"]) || empty($_POST["inputClave"])) {
        echo '<div class="alert alert-danger">Ingrese todos los campos</div>';
    } else {
        $usuario = $_POST["inputUsuario"];
        $clave = $_POST["inputClave"];
        $select = "SELECT * FROM usuarios";
        $where = " WHERE usuario = '$usuario'";
        $and = "AND clave = '$clave'";

        $query = $select . $where . $and;

        $sql = $con->query($query);
        if ($datos = $sql->fetch_object()) {
            header("location: home.php");
        } else {
            echo '<div class="alert alert-danger">Usuario o clave incorrectos</div>';
        }
    }
}