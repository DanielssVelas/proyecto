<?php
require_once "../../controller/usernameController.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $obj = new usernameController();
    $obj->delete($id);
} else {
    echo "Método de solicitud no válido.";
}
?>
