<div class="modal fade" id="addUserModal" tabindex="-1" aria-labelledby="addUserModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="updateModalLabel">Agregar Nuevo Usuario</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="store.php" method="post" autocomplete="off">
          <div class="mb-3 row">
              <label for="inputPassword" class="col-sm-2 col-form-label">Nombre</label>
              <div class="col-sm-10">
                  <input type="text" name="nombre" class="form-control" value="">
              </div>
          </div>
          <div class="mb-3 row">
              <label for="inputPassword" class="col-sm-2 col-form-label">Direccion</label>
              <div class="col-sm-10">
                  <input type="text" name="direccion" class="form-control" value="">
              </div>
          </div>
          <div class="mb-3 row">
              <label for="inputPassword" class="col-sm-2 col-form-label">Telefono</label>
              <div class="col-sm-10">
                  <input type="text" name="telefono" class="form-control" value="">
              </div>
          </div>
          <div class="mb-3 row">
              <label for="inputPassword" class="col-sm-2 col-form-label">Email</label>
              <div class="col-sm-10">
                  <input type="email" name="email" class="form-control" value="">
              </div>
          </div>
          <div class="mb-3 row">
              <label for="inputPassword" class="col-sm-2 col-form-label">Contraseña</label>
              <div class="col-sm-10">
                  <input type="password" name="password" class="form-control" value="">
              </div>
          </div>
          <div class="modal-footer d-flex">
              <button type="submit" class="btn btn-success me-auto"><i class="bi bi-floppy"></i> Guardar</button>
              <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="bi bi-x-square"></i> Cancelar</button>
          </div>
      </form>
      </div>
    </div>
  </div>
</div>