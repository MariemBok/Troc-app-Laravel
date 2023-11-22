<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{

    public function __construct(){
        $this->middleware("auth")->except('bar');
    }

    function foo(){
        return view("foo");
    }

    function bar(){
        return view("bar");
    }
}
