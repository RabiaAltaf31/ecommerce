<!doctype html>
<html class="no-js" lang="">
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Login Page</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="{{asset('assets/admin/css/normalize.css')}}">
      <link rel="stylesheet" href="{{asset('assets/admin/css/bootstrap.min.css')}}">
      <link rel="stylesheet" href="{{asset('assets/admin/css/font-awesome.min.css')}}">
      <link rel="stylesheet" href="{{asset('assets/admin/css/themify-icons.css')}}">
      <link rel="stylesheet" href="{{asset('assets/admin/css/pe-icon-7-filled.css')}}">
      <link rel="stylesheet" href="{{asset('assets/admin/css/flag-icon.min.css')}}">
      <link rel="stylesheet" href="{{asset('assets/admin/css/cs-skin-elastic.css')}}">
      <link rel="stylesheet" href="{{asset('assets/admin/css/style.css')}}">
      <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
   </head>
   <body class="bg-dark">
      <div class="sufee-login d-flex align-content-center flex-wrap">
         <div class="container">
            <div class="login-content">
                    @if(session()->get('txt1'))
                <h6  class="rounded alert alert-danger" style="font-weight:bold;color:red;text-align:center;">{{session()->get('txt1')}}</h6>
                @endif
               <div class="login-form mt-150">
                  <form method="post" action="/admin_login">
                      @csrf
                     <div class="form-group">
                        <label>User Name</label>
                        <input type="text" name="name" required class="form-control" placeholder="Enter username">
                     </div>
                     <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" required class="form-control" placeholder="Enter Password">
                     </div>
                     <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Sign in</button>
					</form>
               </div>
            </div>
         </div>
      </div>
      <script src="{{asset('assets/admin/js/vendor/jquery-2.1.4.min.js')}}" type="text/javascript"></script>
      <script src="{{asset('assets/admin/js/popper.min.js')}}" type="text/javascript"></script>
      <script src="{{asset('assets/admin/js/plugins.js')}}" type="text/javascript"></script>
      <script src="{{asset('assets/admin/js/main.js')}}" type="text/javascript"></script>
   </body>
</html>