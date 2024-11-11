<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Log;

use Illuminate\Http\Request;


class DemoController extends Controller
{
    // function SessionPut(Request $request):bool{
    //     $email=$request->email;
    //     $request->session()->put('userEmail', $email);
        
       
    //     return true;
    // }

    // function SessionPull(Request $request):string{
        
       
        
       
    //     return  $request->session()->pull('userEmail','default');
    // }
    
    // function SessionGet(Request $request):string{
        
       
    //     return  $request->session()->get('userEmail','default');
    // }
    // function SessionForget(Request $request):bool{
        
       
    //     $request->session()->forget('userEmail');
       
    //     return true;
    // }

    // function SessionFlush(Request $request):bool{
        
       
    //     $request->session()->flush();
       
    //     return true;
    // }

    // function DemoAction1():string{
    //     return "Hello1"; 
    // }
    // function DemoAction2():string{
    //     return "Hello2"; 
    // }

    // /**
    //  * The DemoAction3 function returns a string value of "Hello3".
    //  */
    // function DemoAction3():string{
    //     return "Hello3"; 
    // }

    // function DemoAction4():string{
    //     return "Hello4"; 
    // }

    function DemoAction(Request $request):array{
        return $request->header();

    }
}
