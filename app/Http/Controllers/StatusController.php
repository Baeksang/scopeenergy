<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StatusController extends Controller
{
    //
    public function index(){
        
        
        $books = [
            'Harry Potter',
            'Laravel'
        ];

        

        return view('status', [
            'books' => $books
        ]);

       
    }
}
