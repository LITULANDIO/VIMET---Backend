<form method="POST" v-on:submit.prevent="updateTask(fillTask.id)">
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Tarea</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="name"  placeholder="Nombre" v-model="fillTask.name">
        </div>
        <div class="form-group">
            <label for="descripcion">Descripción</label>
            <textarea type="text" class="form-control" id="descripcion" name="description"  placeholder="Descripción" v-model="fillTask.description"></textarea>
        </div>
        <div class="form-group">
            <label for="fecha">Fecha</label>
            <input type="date" class="form-control" name="due_date" id="fecha" v-model="fillTask.due_date"/>
        </div>
      </div>
      <div class="modal-footer">
        <input type="submit" class="btn btn-dark" value="Guardar">
      </div>
    </div>
  </div>
</div>
</form>

