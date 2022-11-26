<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('addnewtask');
    }

    public function manageTasks()
    {
        $data = Task::all();
        return view('tasks',['task'=>$data]);
    }

    public function addTask(Request $req)
    { 
        $req->validate([
            'title' => 'required||max:15',
            'description' => 'required||max:100||min:15'
        ]);
        $db = new Task();
        $db->title = $req->title;
        $db->status = "pending";
        $db->description = $req->description;
        $db->save();
        return redirect('managetasks')->with('Insert_Message','Task Added Successfully');
    }

    public function editTask($id)
    {
        $task = Task::find($id);
        return view('edit',['task'=>$task]);
    }

    public function updateTask(Request $req)
    { 
        $req->validate([
            'title' => 'required||max:15',
            'description' => 'required||max:100||min:15'
        ]);
        $db = Task::find($req->id);
        $db->title = $req->title;
        $db->status = $req->status;
        $db->description = $req->description;
        $db->save();
        return redirect('managetasks')->with('Update_Message','Task Updated Successfully');
    }

    public function deleteTask($id)
    { 
        $task = Task::find($id)->delete();
        return redirect('managetasks')->with('Delete_Message','Task Deleted Successfully');
    }
}
