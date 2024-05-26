<!-- Modal HTML -->
<div class="modal fade" id="detailsModal" tabindex="-1" aria-labelledby="detailsModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered poetsen-one-regular">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title poetsen-one-regular" id="detailsModalLabel">Detalles del registro</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <table class="table">
          <tbody>
            <tr>
              <th scope="row">Codigo</th>
              <td id="record-id"></td>
            </tr>
            <tr>
              <th scope="row">Nombre</th>
              <td id="record-nombre"></td>
            </tr>
            <tr>
              <th scope="row">Dirección</th>
              <td id="record-direccion"></td>
            </tr>
            <tr>
              <th scope="row">Teléfono</th>
              <td id="record-telefono"></td>
            </tr>
            <tr>
              <th scope="row">Correo Electrónico</th>
              <td id="record-email"></td>
            </tr>
            <tr>
              <th scope="row">Estado Actual</th>
              <td id="record-estado"></td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="bi bi-x-square"></i> Cerrar</button>
      </div>
    </div>
  </div>
</div>
<script>
document.addEventListener('DOMContentLoaded', function() {
    var detailsModal = document.getElementById('detailsModal');

    detailsModal.addEventListener('show.bs.modal', function(event) {
        var button = event.relatedTarget;
        var recordId = button.getAttribute('data-id');

        fetch('get_record_details.php?id=' + recordId)
            .then(response => response.json())
            .then(data => {
                document.getElementById('record-id').textContent = data.id;
                document.getElementById('record-nombre').textContent = data.nombre;
                document.getElementById('record-direccion').textContent = data.direccion;
                document.getElementById('record-telefono').textContent = data.telefono;
                document.getElementById('record-email').textContent = data.email;
                var estadoElement = document.getElementById('record-estado');
                    if (data.estado == 1) {
                        estadoElement.innerHTML = '<i class="bi bi-check2-circle text-success"> Activo </i>';
                    } else {
                        estadoElement.innerHTML = '<i class="bi bi-x-circle text-danger"> Desactivado </i>';
                    }
            })
            .catch(error => {
                console.error('Error al obtener los detalles del registro:', error);
            });
    });
});
</script>
