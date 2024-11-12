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

        
        $num1=$request->num1;
        $num2=$request->num2;
        $sum=$num1+$num2;
        $data=['result'=>$sum];
        return view('Home',$data);
    }
}
