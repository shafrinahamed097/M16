<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display the home page with a message.
     *
     * @param Request $request The HTTP request instance.
     * @return \Illuminate\Contracts\View\View The view for the home page with message data.
     */

    function page(Request $request){

        
      
        return view('Home');
    }
}
