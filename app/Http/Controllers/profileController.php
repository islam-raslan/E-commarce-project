<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\customer;


class profileController extends Controller
{


    function show(Request $request)
    {

        $data = customer::find($request->id);
    
     return view('profile',["customer"=>$data ]);
      
       
    }

/////////////////////////////
   
    function newupdate(Request $req , $id)
    {
         $data = $req->input();

         $name = $data['name'];
         $email = $data['email'];
         $password = $data['password'];
        

         DB::select("update customers set email='{$email}', password='{$password}', name='{$name}' where id={$id}"); 
        return redirect()->back();
    }


    
}
