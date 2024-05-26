<?php
    require_once "../head/head.php";
    require_once "../../controller/usernameController.php";
    $obj = new usernameController();
    $rows = $obj->index();
    
?>
<table class="table table-sm">
    <div class="text-end">
        <button 
            type="button" 
            class="btn btn-primary"
            data-bs-toggle="modal" 
            data-bs-target="#addUserModal"
        >
        <i class="bi bi-pencil"></i> Agregar nuevo usuario
        </button>
    </div>
    <thead>
        <tr>
            <th scope="col">Acciones</th>
            <th scope="col">Nombre</th>
            <th scope="col">Direccion</th>
            <th scope="col">Telefono</th>
            <th scope="col">Correo Electrónico</th>
        </tr>
    </thead>
    <tbody>
        <?php if($rows): ?>
            <?php foreach($rows as $row): ?>
                <tr>
                    <th>
                        <button 
                            type="button" 
                            class="btn btn-outline-secondary text-info"
                            data-bs-toggle="modal" 
                            data-bs-target="#detailsModal"
                            data-id="<?= $row[0]?>"
                        >
                        <i class="bi bi-eye text-warning"></i> Mostrar
                        </button>
                        <button 
                            type="button" 
                            class="btn btn-outline-info" 
                            data-bs-toggle="modal" 
                            data-bs-target="#updateModal"
                            data-id="<?= $row[0]?>"
                            data-nombre="<?= htmlspecialchars($row[1]) ?>"
                            data-direccion="<?= htmlspecialchars($row[2]) ?>"
                            data-telefono="<?= htmlspecialchars($row[3]) ?>"
                            data-email="<?= htmlspecialchars($row[4]) ?>"
                        >
                        <i class="bi bi-pencil-square text-warning"></i> Editar
                        </button>
                        <button
                            type="button"
                            class="btn btn-outline-danger"
                            data-bs-toggle="modal"
                            data-bs-target="#deleteModal"
                            data-id="<?= $row[0]?>"
                            >
                            <i class="bi bi-trash"></i> Eliminar
                        </button>
                        <?php if($row['estado'] == 1): ?>
                            <button 
                                type="button" 
                                class="btn btn-danger" 
                                onclick="toggleReport(<?= $row[0] ?>, 0)"
                            ><i class="bi bi-x-circle"></i> Desactivar
                            </button>
                        <?php else: ?>
                            <button 
                                type="button" 
                                class="btn btn-success" 
                                onclick="toggleReport(<?= $row[0] ?>, 1)"
                            ><i class="bi bi-check2-circle"></i> Activar</button>
                        <?php endif; ?>
                    </th>
                    <th><?= $row[1] ?></th>
                    <th><?= $row[2] ?></th>
                    <th><?= $row[3] ?></th> 
                    <th><?= $row[4] ?></th>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="3" class="text-center">No hay registros actualmente</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>
<script>
    function toggleReport(reportId, estado) {
        const action = estado == 1 ? 'Activar' : 'Desactivar';
        const sessionMessage = estado == 1 ? 'para que pueda iniciar sesión' : 'para que no pueda iniciar sesión';
        const message = `Esta seguro de ${action} este usuario, ${sessionMessage}`;
        
        if (confirm(message)) {
            var url = "../head/estado.php?reportId=" + reportId + "&estado=" + estado;
            window.location.href = url;
        }
    }
</script>



<?php
    require "show.php";
    require "edit.php";
    require "create.php";
    require "delete.php";
    require_once "../head/footer.php";
?>