<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function add($id)
    {
        //
        if(session()->has('license'))
        {
            // $customer_id=session()->get('license');
            // return view('review')->with(['cusmtomer_id'=>$customer_id,'product_id'=>$id]);
            return view('review')->with(['product_id'=>$id]);

            
        }
        else
        {
            return redirect('/login');
        }
    }

    public function AddReview(Request $req)
    {
        //
        
            $review = new Review;
            $review->customer_id=$req->session()->get('license');
            $review->product_id=$req->product_id;
            $review->reviewproduct=$req->input('review');
            $review->save();
            return redirect('/');
            
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

   
    public function show(Review $review)
    {
        //
    }

    
    public function edit(Review $review)
    {
        //
    }

    
    public function update(Request $request, Review $review)
    {
        //
    }

    
    public function destroy(Review $review)
    {
        //
    }
}
