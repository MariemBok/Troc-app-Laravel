<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    function hello($name = null){
        return view('hello', ['name'=>$name]);
    }
}
