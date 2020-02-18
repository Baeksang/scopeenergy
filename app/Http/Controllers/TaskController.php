<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TaskController extends Controller
{
    // 

    public function index(){
        return view('tasks.index');
    }

    public function create(){
        return view('tasks.create');
    }

    public function store(Request $request){

        Task::create([
            'projectid'         => $request->input('projectid'),
            'projectname'       => $request->input('projectname'),
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
    }
}
