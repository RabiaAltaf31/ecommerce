<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class CustomerController extends Controller
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
        $res=new Customer;
        $res->name=$request->input('name');  //name
        $res->email=$request->input('email');  //email
        $res->password=$request->input('password');   //password

        $data = Customer::where('email',$request->input('email'))->get();
        if(count($data)>0)
        {
            return redirect('/register')->with('txt2','Email already Exist!');
        }

        $inserted=$res->save();
        $request->session()->flash('msg','Data submitted');
        if($inserted)
            {
                return redirect('/login'); //->with('msg2','Acount have been created succssfulyy!,Please Login!');
            }        
    }

    function Login(Request $r)
    {      
            $user_email=$r->email;
            $password=$r->password;
            
            $data = Customer::where('email',$user_email)->where('password',$password)->get();
            // print_r($data);
            if(count($data)>0)
            {   
                $name = DB::table("customers")->where('email',$user_email)->first();
                $r->session()->put('license',$name->id);
                $r->session()->put('user_name',$name->name);
            
                return redirect('/index');
                

                
            }
            else{
                return redirect('/login')->with('txt1','UserID or Password is Wrong!');
            }      
    }

    public function show(Customer $customer)
    {
        //
    }

    public function edit(Customer $customer)
    {
        //
    }

    public function update(Request $request, Customer $customer)
    {
        //
    }

    public function destroy(Customer $customer)
    {
        //
    }
}
