<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class User extends Controller
{
    //
    function index()
    {
        return['name'=>'vijay mane'];
    }
    function show(){
        echo "hello controller";
    }
}
