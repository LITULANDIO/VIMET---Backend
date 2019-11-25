<?php

namespace App\Http\Controllers;

use\App\Task;
use Illuminate\Http\Request;
use Carbon\Carbon;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // Listado de tareas por orden descendiente
    public function index()
    {
        $tasks = Task::orderBy('id', 'DESC')->get();

        return $tasks;
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //Guardado de datos al crear una nueva tarea
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required'
            ]);

        $tasks = new Task(array(
            'name' => $request->get('name'),
            'description' => $request->get('description'),
            'due_date' => $request->get('due_date'),
            'completed' => '0'
        ));
            $tasks->save();
            return;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //Actualización de datos desde el botón editar
    public function update(Request $request, $id)
    {
        Task::find($id)->update($request->all());
        return;
    }
    //Actualización del estado completed
    public function updateStatus($id)
    {
        Task::find($id)->update(['completed' => '1']);
        return;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //Eliminación de tarea
    public function destroy($id)
    {
        $tasks = Task::findOrFail($id);
        $tasks->delete();
    }
}
