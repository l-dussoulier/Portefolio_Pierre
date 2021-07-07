<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index() {
        $test = "coucou bg!";
        return view('index',compact('test'));
    }

    public function submit(Request $request){
        unset($request["_token"]);
       $p = $request->get("test");
        dd($request->all());
    }

}
