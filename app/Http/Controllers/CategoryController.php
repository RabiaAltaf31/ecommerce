<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Subcategory;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class CategoryController extends Controller
{

    
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
        // file uploading and save into database start
        // $request->validate([
        //     'filee' => 'required|image'
        // ]);
        
        // $file =$request->filee;
        // $filename=$file->getClientOriginalName();
        // $file->move('uploadfile',$filename);
        // return redirect('/demo');
        // $res->cvfile=$filename; //add file name
 
         //end
    }

    public function show(Category $category)
    {
        //
        // return view('index')->with('categorydata',Category::all());
        return view('index')->with(['productdata'=>Product::all(),'categorydata'=>Category::all()]);

    }
    public function showshop(Category $category)
    {
        //
        return view('shop')->with(['productdata'=>Product::all(),'categorydata'=>Category::all()]);
        // return view('shop')->with(['subcategorydata'=>Subcategory::all(),'categorydata'=>Category::all()]);

    }
    public function subcategoryproduct(Request $request,$id)
    {
        
        $data=Subcategory::find($id)->product;

        // print_r($data);
        return view('/shop')->with(['productdata'=>$data,'categorydata'=>Category::all()]);
    }

    public function singleproduct(Request $request,$id)
    {
        // $data = DB::select("select * from products where id ='$id'");
        $data=Product::find($id);
        // print_r($data);

        // hfjd
            $reviews=Review::with(['customer','product'])->where('product_id',$id)->get();
            // print($reviews);

        // hfhf
        // return view('/product-single',['productdata'=>$data]);
        return view('/product-single')->with(['productdata'=>$data,'reviews'=>$reviews]);
        // return view('/product-single')->with('productdata',$data);
    }

    public function edit(Category $category)
    {
        //
    }

    public function update(Request $request, Category $category)
    {
        //
    }

    public function destroy(Category $category)
    {
        //
    }
    

}
