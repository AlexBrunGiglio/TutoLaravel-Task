<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tasks = Task::get()->all();
        return view('task', compact('tasks'));
    }


    public function create()
    {
        return view('create');
    }

    public function store()
    {
            $attributes = request()->validate([
                'name'=>'required',
                'description'=>'required',
            ]);
            $tasks = Task::create($attributes);
            return redirect()->route('tasks');
    }


    public function show(Task $task)
    {
        //
    }

    public function edit($id)
    {
        $tasks = Task::findOrFail($id);
        return view ('edit', compact('tasks'));
    }

    public function update($id)
    {
        $attributes = request()->validate([
            'name'=>'required',
            'description'=>'required',
        ]);
        $tasks = Task::findOrFail($id);
        $tasks->update($attributes);
        return redirect()->route('tasks');
    }


    public function destroy($id)
    {
        //
        $task = Task::findOrFail($id);
        $task->delete();
        return redirect()->route('tasks');
    }
}
