<form method="POST" v-on:submit.prevent="createTask">
<div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nueva Tarea</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="name"  placeholder="Nombre" v-model="taskName">
        </div>
        <div class="form-group">
            <label for="descripcion">Descripción</label>
            <textarea type="text" class="form-control" id="descripcion" name="description"  placeholder="Descripción" v-model="taskDescription"></textarea>
        </div>
        <div class="form-group">
            <label for="fecha">Fecha</label>
            <input type="date" class="form-control" name="due_date" id="fecha" v-model="taskDate"/>
        </div>
      </div>
      <div class="modal-footer">
        <input type="submit" class="btn btn-dark" value="Guardar">
      </div>
    </div>
  </div>
</div>
</form>

