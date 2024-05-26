<?php
    require_once "../../controller/usernameController.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $obj = new usernameController();
    $obj->guardar($nombre, $direccion, $telefono, $email, $password);
} else {
    echo "Método de solicitud no válido.";
}
