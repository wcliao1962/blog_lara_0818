<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class HelloController extends Controller
{
     public function index($name='Everybody')
    {
        $data=['name'=> $name];
        return view('hello.index', $data);
    }
    //
}
