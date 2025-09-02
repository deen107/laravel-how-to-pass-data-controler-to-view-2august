<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    //in php there are three things
    //1. properties
    //2.constructors
    //3. methods
    public function index()
    {
        $data = ['name' => 'John Doe', 'age' => 20];
        return view('student.index', $data);
    }
}
