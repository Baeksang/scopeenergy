<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TaskController extends Controller
{
    // Indexing DB Task 

    public function index(){

        //$tasks = Task::all();
        //$tasks = Task::latest()->get();
        $tasks = Task::latest()->paginate(1);
        //$tasks = Task::orderBy('created_at','desc')->paginate(1);

        return view('tasks.index',[
            'tasks' => $tasks
        ]);
    }

   
    public function create(){
        return view('tasks.create');
    }

    public function store(Request $request){
        
        // field 값이 null 인지 아닌지 확인한다. 
        request()->validate([

            'projectname'       => 'required',
            'projectid'         => 'required',
            'customername'      => 'required',
            'customercontact'   => 'required',
            'customerphone'     => 'required',
            'address1'          => 'required',
            'address2'          => 'required',
            'address3'          => 'required',
            'kepcoid'           => 'required',
            'businessmodel'     => 'required'
            
        ]);

        $task = Task::create([
            // $request->input() = request()
            'projectname'       => $request->input('projectname'),
            'projectid'         => $request->input('projectid'),
            'customername'      => $request->input('customername'),
            'customercontact'   => $request->input('customercontact'),
            'customerphone'     => $request->input('customerphone'),
            'address1'          => $request->input('address1'),
            'address2'          => $request->input('address2'),
            'address3'          => $request->input('address3'),
            'kepcoid'           => $request->input('kepcoid'),
            'businessmodel'     => $request->input('businessmodel'),
            'building'          => $request->input('building')

        ]);

        return redirect('/tasks');
        //return redirect('/tasks/'.$task->id);
    }

    public function show(Task $task){

        return view('tasks.show',[
            'task' => $task
        ]);
    }

    public function edit(Task $task){

        return view('tasks.edit',[
            'task' => $task
        ]);
    }

    public function update(Task $task){
       
        $task->update([
            'projectid'         => request('projectid'),
            'projectname'       => request('projectname'),
            'customername'      => request('customername'),
            'customercontact'   => request('customercontact'),
            'customerphone'     => request('customerphone'),
            'address1'          => request('address1'),
            'address2'          => request('address2'),
            'address3'          => request('address3'),
            'kepcoid'           => request('kepcoid'),
            'businessmodel'     => request('businessmodel'),
            'building'          => request('building')
        ]);

        return redirect('/tasks/'.$task->id);
    }

    public function destroy(Task $task){

        $task->delete();

        return redirect('/tasks');
    }
}