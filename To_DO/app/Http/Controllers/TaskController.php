<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\task;

class TaskController extends Controller
{
    //
    public function index(){
        $tasks = task::all();
        return view('tasks.index', ['tasks' => $tasks]);
    }

    public function create(){
        return view('tasks.create');
    }

    public function list(Request $request){
            $request->validate([
            'task' => 'required'
        ]);
        
        $newTask = task::create([
            'tasks' => $request->input('task')
        ]);

        return redirect(route('tasks.index'));
    }
    
}
