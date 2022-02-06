<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function AddCategory(Request $request)
    {
        //
        $res=new Category;
        $res->categoryname=$request->input('categories');
        
        $res->save();
        // $request->session()->flash('msg','Category added Sucessfully');
        return redirect('/admin/add-categories');
       

    }
    public function AddSubCategory(Request $request)
    {
        //
        $res=new Subcategory;
        $res->subcategoryname=$request->input('sub_categories');
        $res->category_id=$request->input('categories_id');
        
        $res->save();
        $request->session()->flash('msg','SubCategory added Sucessfully');
        return redirect('/admin/add-subcategories');

    }
    public function index()
    {
        //
        return view('admin/add-subcategories')->with('categorydata',Category::all());

    }
    function Login(Request $r)
    {      
            $user_name=$r->name;
            $password=$r->password;
            
            $data = Admin::where('username',$user_name)->where('password',$password)->get();
            // print_r($data);
            if(count($data)>0)
            {   
                $name = DB::table("admins")->where('username',$user_name)->first();
                $r->session()->put('user_name',$name->username);
            
                return view('admin/add-categories');
                

                
            }
            else{
                return redirect('/admin/login')->with('txt1','UserID or Password is Wrong!');
            }      
    }

    public function showdata()
    {
        //
        return view('admin/add-products')->with('subcategorydata',Subcategory::all());

    }

    public function AddProduct(Request $request)
    {
        //
        $res=new Product;
        $res->productname=$request->input('name');
        $res->price=$request->input('price');

        // file uploading and save into database start
        $request->validate([
            'image' => 'required|image'
        ]);
        
        $file =$request->image;
        $filename=$file->getClientOriginalName();
        $file->move('uploadfile',$filename);
        $res->image=$filename;
        
        $res->discription=$request->input('description');
        $res->subcategory_id=$request->input('sub_categories_id');
        
        
        $res->save();
        $request->session()->flash('msg','Product added Sucessfully');
        return redirect('/admin/add-products');

    }
    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
        //
    }

   
    public function show(Admin $admin)
    {
        //
    }

   
    public function edit(Admin $admin)
    {
        //
    }

    
    public function update(Request $request, Admin $admin)
    {
        //
    }

    
    public function destroy(Admin $admin)
    {
        //
    }
}
