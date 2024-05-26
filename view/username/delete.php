<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteModalLabel">¿Desea eliminar el registro?</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Una vez eliminado no se podrá recuperar el registro
        <form action="delete.php" method="post" autocomplete="off">
          <div class="mb-3 row" id="id-field" style="display: none;">
            <label for="modal-id" class="col-sm-2 col-form-label">ID</label>
            <div class="col-sm-10">
              <input type="text" name="id" readonly class="form-control-plaintext" id="delete-id" value="">
            </div>
          </div>
          <div class="modal-footer d-flex">
            <button type="submit" class="btn btn-danger me-auto"> <i class="bi bi-trash"></i> Eliminar</button>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"> <i class="bi bi-x-square"></i> Cancelar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    var deleteModal = document.getElementById('deleteModal');

    deleteModal.addEventListener('show.bs.modal', function(event) {
      var button = event.relatedTarget;
      var id = button.getAttribute('data-id');
      document.getElementById('delete-id').value = id;
    });
  });
</script>
