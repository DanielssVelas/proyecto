<?php
require_once "../../controller/usernameController.php";
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $id = $_GET["reportId"];
    $estado = $_GET["estado"];
    $controller = new usernameController();
    $resultado = $controller->CambiarEstado($estado, $id);
    if ($resultado) {
        header("Location: head.php");
        exit();
    } else {
        echo "Hubo un error al cambiar el estado del reporte.";
    }
} else {
    echo "Error: Método de solicitud no válido.";
}
?>
