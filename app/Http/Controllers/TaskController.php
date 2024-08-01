<?php

namespace App\Http\Controllers;
use App\Models\task;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(){
        return view('tasks.index',[
            'tasks' => Task::get()
        ]);
    }

    public function create(){
        return view('tasks.create');
    }

    public function store(Request $request){

        //validate data
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        //store data
        $task = new Task;
        $task->title = $request->title;
        $task->description = $request->description;

        $task->save();

        return back()->withSuccess('Task Created Successfully');

    }

    public function edit($id){
        $task = Task::where('id',$id)->first();
        return view('tasks.edit',[
            'task' => $task
        ]);
    }

    public function update(Request $request, $id){
         //validate data
         $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $task = Task::where('id',$id)->first();

        //update data
        $task->title = $request->title;
        $task->description = $request->description;

        $task->save();

        return back()->withSuccess('Task Updated Successfully');

    }

    public function destroy($id){
        $task = Task::where('id',$id)->first();
        $task->delete();

        return back()->withSuccess('Task Deleted Successfully');
    }
}

