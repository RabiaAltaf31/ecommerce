<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ReviewController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('/index');
});



Route::get('/confirmation', function () {
    return view('confirmation');
});

Route::get('/index',[CategoryController::class,'show']);
Route::get('/shop',[CategoryController::class,'showshop']);
Route::get('/shop/{id}',[CategoryController::class,'subcategoryproduct']);
Route::get('/product-single/{id}',[CategoryController::class,'singleproduct']);


// 
Route::view('/register','/register');
Route::post('/user_submit',[CustomerController::class,'store']);
Route::post('/Login',[CustomerController::class,'Login']);

// user registration
Route::get('/register', function () {
    if(session()->has('license'))
    {
        return redirect('/index');
    }
    return view('register');
});
//logout user
Route::get('/logout', function () {
    if(session()->has('license'))
    {
        session()->pull('license');
        return redirect('/index');
        // session()->pull('user_name');
    }
    return view('login');
});

//if already login 
Route::get('/login', function () {
    if(session()->has('license'))
    {
        return redirect('/index');
    }
    return view('login');
});


Route::post('/add_to_cart',[ProductController::class,'AddtoCart']);

Route::get('/cartlist',[ProductController::class,'cartList']);  

Route::get('/checkout',[ProductController::class,'checkout']);

Route::get('/add-review/{id}',[ReviewController::class,'add']);

Route::post('/add_review',[ReviewController::class,'AddReview']);



//*********************************
//  Admin Part
//********************************
Route::post('/admin_login',[AdminController::class,'Login']);

Route::get('/admin/login', function () {
    if(session()->has('user_name'))
    {
        return view('admin/add-categories');
    }
    return view('admin/login');
});


//logout admin
Route::get('/admin/logout', function () {
    if(session()->has('user_name'))
    {
        session()->pull('user_name');
        // session()->pull('user_name');
    }
    return view('admin/login');
});

// add category
Route::get('/admin/add-categories', function () {
    return redirect('/admin/login');
});
Route::post('/add_categories',[AdminController::class,'AddCategory']);

//add subcategory
Route::get('/admin/add-subcategories',[AdminController::class,'index']);
Route::post('/add_subcategories',[AdminController::class,'AddSubCategory']);


//add product
Route::get('/admin/add-products',[AdminController::class,'showdata']);
Route::post('/add_products',[AdminController::class,'AddProduct']);


/*--------------->End of Admin Part<----------------*/