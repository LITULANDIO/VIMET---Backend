@extends('app')

@section('content')

<div id="tasks" class="container">
    <div class="content-task text-center">
        <h1 class="text-center mb-4">VIMEO - TASKS</h1>
        <button type="button" class="btn btn-dark btn-new" data-toggle="modal" data-target="#createModal">
  Nueva Tarea
</button>
    </div>
        <div class="row mb-2" v-for="task in tasks">
            <div class="col-md-12">
              <div class="card shadow">
                <div class="card-body">
                    <div class="row">
                        <div class="col-xs-8 col-sm-7 col-md-8">
                            <h5>@{{ task.name }}</h5>
                            <p>@{{ task.description }}</p>
                            <small>@{{ task.due_date }}</small>
                        </div>
                    <div class="col-xs-4 col-sm-12 col-md-4 margin-btn">
                        <img class="img-check" src="img/check-no.svg" width="50px" title="Completar" v-if="task.completed == 0"/><br>
                        <img class="img-check" src="img/check-ok.svg" width="50px" title="Completar" v-if="task.completed == 1"/><br>
                        <button class="btn btn-info" title="Editar">Editar</button>
                        <button class="btn btn-danger" title="Eliminar">Eliminar</button>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    
  @include('create')
             
</div>

            
@endsection