<x-header ></x-header>
<body id="body">

<section class="signin-page account">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="block text-center">
        
          @if(session()->get('txt2'))
            <h6 class="rounded alert alert-danger"  style="font-weight:bold;color:red;text-align:center;">{{session()->get('txt2')}}</h6>
          @endif
          <h2 class="text-center">Create Your Account</h2>
          <form class="text-left clearfix" method="post" action="user_submit">
          @csrf
            <div class="form-group">
              <input type="text" class="form-control" name="name"  placeholder="Username" required>
            </div>
            <div class="form-group">
              <input type="email" class="form-control" name="email"  placeholder="Email" required>
            </div>
            <div class="form-group">
              <input type="password" class="form-control"  name="password" placeholder="Password" required>
            </div>
            <div class="text-center">
              <button type="submit" class="btn btn-main text-center">Register User</button>
            </div>
          </form>
          <p class="mt-20">Already hava an account ?<a href="/login"> Login</a></p>
          <p><a href="#"> Forgot your password?</a></p>
        </div>
      </div>
    </div>
  </div>
</section>

    <!-- 
    Essential Scripts
    =====================================-->
    
    <!-- Main jQuery -->
    <script src="{{asset('assets/plugins/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap 3.1 -->
    <script src="{{asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- Bootstrap Touchpin -->
    <script src="{{asset('assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js')}}"></script>
    <!-- Instagram Feed Js -->
    <script src="{{asset('assets/plugins/instafeed/instafeed.min.js')}}"></script>
    <!-- Video Lightbox Plugin -->
    <script src="{{asset('assets/plugins/ekko-lightbox/dist/ekko-lightbox.min.js')}}"></script>
    <!-- Count Down Js -->
    <script src="{{asset('assets/plugins/syo-timer/build/jquery.syotimer.min.js')}}"></script>

    <!-- slick Carousel -->
    <script src="{{asset('assets/plugins/slick/slick.min.js')}}"></script>
    <script src="{{asset('assets/plugins/slick/slick-animation.min.js')}}"></script>

    <!-- Google Mapl -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
    <script type="text/javascript" src="{{asset('assets/plugins/google-map/gmap.js')}}"></script>

    <!-- Main Js File -->
    <script src="{{asset('assets/js/script.js')}}"></script>
    


  </body>
  </html>