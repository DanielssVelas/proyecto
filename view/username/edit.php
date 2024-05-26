<div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="updateModalLabel">Modificar Registro</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="update.php" method="post" autocomplete="off">
          <div class="mb-3 row" id="id-field" style="display: none;">
            <label for="staticEmail" class="col-sm-2 col-form-label">Id</label>
            <div class="col-sm-10">
                <input type="text" name="id" readonly class="form-control-plaintext" id="modal-id" value="">
            </div>
        </div>

          <div class="mb-3 row">
              <label for="inputPassword" class="col-sm-2 col-form-label">Nombre</label>
              <div class="col-sm-10">
                  <input type="text" name="nombre" class="form-control" id="modal-nombre" value="">
              </div>
          </div>
          <div class="mb-3 row">
              <label for="inputPassword" class="col-sm-2 col-form-label">Direccion</label>
              <div class="col-sm-10">
                  <input type="text" name="direccion" class="form-control" id="modal-direccion" value="">
              </div>
          </div>
          <div class="mb-3 row">
              <label for="inputPassword" class="col-sm-2 col-form-label">Telefono</label>
              <div class="col-sm-10">
                  <input type="text" name="telefono" class="form-control" id="modal-telefono" value="">
              </div>
          </div>
          <div class="mb-3 row">
              <label for="inputPassword" class="col-sm-2 col-form-label">Email</label>
              <div class="col-sm-10">
                  <input type="email" name="email" class="form-control" id="modal-email" value="">
              </div>
          </div>
            <div class="modal-footer d-flex">
                <button type="submit" class="btn btn-success me-auto"><i class="bi bi-arrow-clockwise"></i> Actualizar</button>
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="bi bi-x-square"></i> Cancelar</button>
            </div>
      </form>
      </div>
    </div>
  </div>
</div>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        var updateModal = document.getElementById('updateModal');

        updateModal.addEventListener('shown.bs.modal', function(event) {
            var button = event.relatedTarget;
            var id = button.getAttribute('data-id');
            var nombre = button.getAttribute('data-nombre');
            var direccion = button.getAttribute('data-direccion');
            var telefono = button.getAttribute('data-telefono');
            var email = button.getAttribute('data-email');

            // Rellena los campos de la ventana modal con los datos recuperados
            document.getElementById('modal-id').value = id;
            document.getElementById('modal-nombre').value = nombre;
            document.getElementById('modal-direccion').value = direccion;
            document.getElementById('modal-telefono').value = telefono;
            document.getElementById('modal-email').value = email;
        });
    });
</script>

