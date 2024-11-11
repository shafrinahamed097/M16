<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Log;

use Illuminate\Http\Request;


class DemoController extends Controller
{
    function DemoAction(Request $request):int{
        $num1=$request->num1;
        $num2=$request->num2;
        $sum=$num1+$num2;
        
        Log::alert($sum);
        return $sum;
    }
}
