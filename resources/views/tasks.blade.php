@extends('app')

@section('content')

<div id="tasks" class="container">
    <div class="box-task">
        <h1>VIMEO - TASKS</h1>
        <button class="btn deep-orange margin-btn">Nueva Tarea</button>
    </div>
        <div class="card new-tarea">
            <h5>Añade una tarea</h5>
            <pre>
                    @{{ $data }}
            </pre>

                <form>
                    <div class="row">
                        <div class="input-field col s12">
                        <input id="nombre" type="text" class="validate">
                        <label for="nombre">Nombre</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                        <textarea id="descripcion" class="materialize-textarea"></textarea>
                        <label for="descripcion">Descripción</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="date" class="datepicker">
                            <label for="date">Fecha</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                        <input id="completado" type="number" class="validate">
                        <label for="completado">Fecha</label>
                        </div>
                    </div>
                    <button class="btn deep-orange margin-btn" type="submit">GUARDAR</button>
                </form>
            </div>


    <div class="card sticky-action" v-for="task in tasks">
        <div class="center-task">
            <div class="col s6">
                <h6>@{{ task.name }}</h6>
            </div>
            <div class="col s6 center-update">
            <i class="material-icons margin-icon" title="completed" v-if="task.completed ==0">close</i>
            <i class="material-icons margin-icon" title="completed" v-if="task.completed == 1">check</i>
            </div>
        </div>
        <div class="card-action">
            <p>@{{ task.description }}</p>
            <div class="row">
                <div class="col s6">
                    <small>@{{ task.due_date }}</small>
                </div>
                <div class="col s6 center-update">
                    <i class="material-icons margin-icon" title="editar">create</i>
                    <i class="material-icons" title="eliminar">delete</i>
                </div>
            </div>
        </div>
  </div>


             
</div>

            
@endsection