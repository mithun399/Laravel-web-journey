<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class dataController extends Controller
{
    function showData(){
        $user=User::paginate(10);
        $deleteuser=User::onlyTrashed()->paginate(10);

        return view('home',compact('user','deleteuser'));
        
    }
    function deleteData($id){
        $user=User::find($id)->delete();
        return redirect()->back();
    }
    function restoreData($id){
        $user=User::withTrashed()->find($id)->restore();
        return redirect()->back();
    }
    function pdeleteData($id){
        $user=User::withTrashed()->find($id)->forceDelete();
        return redirect()->back();
    }
}
