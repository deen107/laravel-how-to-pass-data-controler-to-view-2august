<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CityController extends Controller

{
    public $data = ['name'=>'agraw','weather'=>'sunny'];
    //
    public function agra()

    {
// this is one way to pass data to view
        // associative array
        //  $data = ["name"=>"agra","weather"=>"sunny"]; //1
        // return view('city.agra',$data);
// compact function way

    //    $name = 'agraq';
    //     $weather = 'sunny';
        //compact(var_name1, var_name2, ...)
        // Converts variable names into an associative array automatically.
        // return view('city.agra',compact('name','weather'));
        // return view('city.agra',compact('data')); //1
// with() method way
// with('var', $value) (can chain)
        // $data = ['name'=>'agra','weather'=>'sunny'];
        return view('city.agra')->with($this->data);


    }
}
