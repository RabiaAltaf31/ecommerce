<!doctype html>
<html class="no-js" lang="">
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Dashboard Page</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="{{asset('assets/admin/css/normalize.css')}}">
      <link rel="stylesheet" href="{{asset('assets/admin/css/bootstrap.min.css')}}">
      <link rel="stylesheet" href="{{asset('assets/admin/css/font-awesome.min.css')}}">
      <link rel="stylesheet" href="{{asset('assets/admin/css/themify-icons.css')}}">
      <link rel="stylesheet" href="{{asset('assets/admin/css/pe-icon-7-filled.css')}}">
      <link rel="stylesheet" href="{{asset('assets/admin/css/flag-icon.min.css')}}">
      <link rel="stylesheet" href="{{asset('assets/admin/css/cs-skin-elastic.css')}}">
      <link rel="stylesheet" href="{{asset('assets/admin/css/style.css')}}">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
      <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
   </head>
   <body>
               
           
      <aside id="left-panel" class="left-panel">
         <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
               <ul class="nav navbar-nav">
                  <li class="menu-title">Menu</li>
                  <li class="menu-item-has-children dropdown">
                     <a href="/admin/add-categories" >Add Category</a>
                  </li>
                  <li class="menu-item-has-children dropdown">
                     <a href="/admin/add-subcategories" > Add Sub Category</a>
                  </li>
				  <li class="menu-item-has-children dropdown">
                     <a href="/admin/add-products" > Add Products</a>
                  </li>
               </ul>
            </div>
         </nav>
      </aside>
      <div id="right-panel" class="right-panel">
         <header id="header" class="header">
            <div class="top-left">
               <div class="navbar-header">
                  <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
               </div>
            </div>
            <div class="top-right">
               <div class="header-menu">
                  <div class="user-area dropdown float-right">
                     <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Welcome Admin</a>
                     <div class="user-menu dropdown-menu">
                        <a class="nav-link" href="/admin/logout"><i class="fa fa-power-off"></i>Logout</a>
                     </div>
                  </div>
               </div>
            </div>
         </header>
         <div class="content pb-0">
            <div class="orders">
               <div class="row">
                  <div class="col-xl-12">
                     <div class="card">
                     <div class="content pb-0">