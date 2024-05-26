<?php
session_start();
    require_once "../../model/usernameModel.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $model = new usernameModel();
    $user = $model->getUserByEmail($email);

    if ($user && password_verify($password, $user['contrasenia'])) {
        $_SESSION['user_id'] = $user['id'];
        header("Location: head.php");
        exit();
    } else {
        header("Location: login.html");
        $mensaje = "Correo electrónico o contraseña incorrectos.";
        echo "<script type='text/javascript'>alert('$mensaje');</script>";
    }
} else {
    echo "Método de solicitud no válido.";
}
?>
