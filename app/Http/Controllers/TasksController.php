<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use Illuminate\Http\Response;

class TasksController extends Controller
{

    public function index()
    {
        //
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
    $task=new Task;
    $task->body= $request->input('body');
    $task->save();

    return redirect("/");
    }
  public function ShowTasks(){
      $tasks = Task::all();

      return view('welcome', compact('tasks'));
  }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $task=Task::find($id);
        return view('edit')->with('task',$task);
    }


    public function update(Request $request, $id)
    {
        $task=Task::find($id);
        $task->item=$request->input('body');
        $task->save();
        return redirect('/')->with('success','Updated succesfully');
    }


    public function destroy($id)
    {
        //delete task
        $task=Task::find($id);
        $task->delete();
        return redirect('/dashboard')->with('success','Task deleted successfully');
    }
}
