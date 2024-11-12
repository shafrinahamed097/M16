<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoControllerr extends Controller
{
    function DemoAction(Request $request){
        return "Hello";
    }
}
