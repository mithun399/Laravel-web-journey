<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sessionController extends Controller
{
    function getSession(Request $request){
        if($request->session()->has('key')){
            return $request->session()->get('key');
        }else{
            return "Session has no value";
        }
    }

    function storeSession(Request $request){
        $request->session()->put('key','Laravel Session');
        return "Session store Successfully";

    }

    function destroySession(Request $request){
        $request->session()->forget('key');
        return "session destroyed";
    }
}
