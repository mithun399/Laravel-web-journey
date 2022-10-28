<?php

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Http;


// class userController extends Controller
// {
//     public function index($id=null)
//     {
//         return "Hello, Mithun id is ".$id;
//     }
//     function user(){
//         $arr=array(
//             'name'=>'Mithun',
//             'id'=>'399',

//         );
//         return view('welcome',compact('arr'));
//     }
//     function showData(){
//       return  Http::get('https://jsonplaceholder.typicode.com/posts')->json();
//     }
//     function singleData($id){
//         return  Http::get('https://jsonplaceholder.typicode.com/posts/'.$id)->json();
//       }
//       function add(){
//         return  Http::post('https://jsonplaceholder.typicode.com/posts/',[
//             "userId"=>4,
//             "title"=>"new add",
//             "body"=>"Hello new comer"
//         ])->json();
//       }
//       function edit($id){
//         return  Http::put('https://jsonplaceholder.typicode.com/posts/'.$id,[
//             "userId"=>4,
//             "title"=>"new add updated",
//             "body"=>"Hello new comer updated"
//         ])->json();
//       }
//       function delete($id){
//         $dl= Http::delete('https://jsonplaceholder.typicode.com/posts/'.$id)->json();
//         return $dl;
//       }
//       function getSession(Request $req){
//         if($req->session()->has('key')){
//           return $req->session()->get('key');
//         } else{
//           return "Session has no value";
//         }
//       }
//       function storeSession(Request $req){
//         $req->session()->put('key','Web Journey');
//         return "Session stored successfully";
        
//       }
//       function destroySession(Request $req){
//         $req->session()->forget('key');
//         return "Session destroy successfully";
//       }
// }
