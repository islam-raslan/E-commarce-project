<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\product;
use App\Models\cart;
use App\Models\comment;
use App\Models\customer;




class detailscontroller extends Controller
{
    function show($id)
    {
        $data = product::all();
        $comment = DB::query("select co.id, co.comment, co.created_at, cu.name From comments as co inner join customers as cu on co.product_id={$id}");
        return view('details',['product'=>$data,'comment'=>[]]);
       
    }



    function detail($id)
    {

        $data = product::find($id);
         $comment = DB::select("select co.id, co.comment, co.created_at, cu.name From comments as co inner join customers as cu on co.customer_id=cu.id where co.product_id={$id}");
        return view('details',['product'=>$data,'comment'=>$comment]);
      
       
    }

    function addToCartOrComment(Request $req, $id)
    {
        if($req->get('type') == 1){
            $data = $req->all();
            $quantity = $data['quantity'];
            $total_price = $data['total_price'];  
            $addToCart = new cart;
        
            
            if($req->session()->has('user')){
                
                $addToCart->customer_id=$req->session()->get('user')->id;
                $addToCart->product_id=$id;
                $addToCart->quantity=$quantity;
                $addToCart->total_price=$total_price;
                $addToCart->save();
                return back();

            }
            else{
            return redirect("/customer_login");   

            }
        }
         else if($req->get('type') == 2){
            $data = $req->input();
            $comment = $data['comment'];  
            $addComment = new comment;
        
            
            if($req->session()->has('user')){
                
                $addComment->customer_id=$req->session()->get('user')->id;
                $addComment->product_id=$id;
                $addComment->comment=$comment;
                $addComment->save();
                return back();
        
            }
            else{
             return redirect("/customer_login");   
        
            }
         }
        
    }

    
}
