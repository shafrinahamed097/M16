<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoControllerr extends Controller
{
   
    

    function __construct()
    {
       $this->middleware('demo');
    }

    function DemoAction(Request $request):array{
        return $request->header();
    }
}
