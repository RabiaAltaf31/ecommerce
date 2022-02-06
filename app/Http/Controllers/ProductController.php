<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ProductController extends Controller
{
    
    public function AddtoCart(Request $req)
    {
        //
        if($req->session()->has('license'))
        {
            $cart = new Cart;
            $cart->customer_id=$req->session()->get('license');
            $cart->product_id=$req->product_id;
            $cart->save();
            return redirect('/cartlist');
            
        }
        else
        {
            return redirect('/login');
        }
    }

    
    public function cartList(Request $req)
    {
        if($req->session()->has('license'))
        {
            $customer_id=$req->session()->get('license');
            $data= DB::table('carts')
            ->join('products','carts.product_id','products.id')
            ->select('products.*')
            ->where('carts.customer_id',$customer_id)
            ->get();
            return view('cart',['products'=>$data]);
        }
        else
        {
            return redirect('/login');
        }
        
    }
    
    public function checkout(Request $req)
    {
        if($req->session()->has('license'))
        {
            
            return view('/checkout');
        }
        else
        {
            return redirect('/login');
        }
        
    }

    
    public function index()
    {
        //
    }

    
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        //
    }

    
    public function show(Product $product)
    {
        //
    }

    
    public function edit(Product $product)
    {
        //
    }

    
    public function update(Request $request, Product $product)
    {
        //
    }


    public function destroy(Product $product)
    {
        //
    }
}
