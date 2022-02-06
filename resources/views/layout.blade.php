<!-- Start Top Header Bar -->
<section class="top-header">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-xs-12 col-sm-4">
				<div class="contact-number">
					<i class="tf-ion-ios-telephone"></i>
					<span>1234- 56789-1234567</span>
				</div>
			</div>
			<div class="col-md-4 col-xs-12 col-sm-4">
				
			</div>
			<div class="col-md-4 col-xs-12 col-sm-4">
				<!-- Cart -->
				<ul class="top-menu text-right list-inline">
				<li class="dropdown ">
						<a href="/cartlist"><i
								class="tf-ion-android-cart"></i>Cart</a>
					</li>
					<!-- Search -->
					<li class="dropdown search dropdown-slide">
						<a href="#!" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"><i
								class="tf-ion-ios-search-strong"></i> Search</a>
						<ul class="dropdown-menu search-dropdown">
							<li>
								<form action="post"><input type="search" class="form-control" placeholder="Search..."></form>
							</li>
						</ul>
					</li><!-- / Search -->
					

					@if(session()->get('license'))
                    <li class="dropdown ">
						<a href="/logout">Logout</a>
					</li>
                    @else
                    <li class="dropdown ">
						<a href="/login">Login</a>
					</li>
					<li class="dropdown ">
						<a href="/register">Register</a>
					</li>
                    @endif

					

				</ul><!-- / .nav .navbar-nav .navbar-right -->
			</div>
		</div>
	</div>
</section><!-- End Top Header Bar -->


<!-- Main Menu Section -->
<section class="menu">
	<nav class="navbar navigation">
		<div class="container">
			<div class="navbar-header">
				<h2 class="menu-title">Main Menu</h2>
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
					aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>

			</div><!-- / .navbar-header -->

			<!-- Navbar Links -->
			<div id="navbar" class="navbar-collapse collapse text-center">
				<ul class="nav navbar-nav">

					<!-- Home -->
					<li class="dropdown ">
						<a href="/index">Home</a>
					</li><!-- / Home -->
					<li class="dropdown ">
						<a href="#">About Us</a>
					</li>
					<li class="dropdown ">
						<a href="/shop">Shop</a>
					</li>
					<li class="dropdown ">
						<a href="/cartlist">Cart</a>
					</li>
					<li class="dropdown ">
						<a href="/checkout">Checkout</a>
					</li>
					<li class="dropdown ">
						<a href="#">Contact Us</a>
					</li>
	
				</ul><!-- / .nav .navbar-nav -->

			</div>
			<!--/.navbar-collapse -->
		</div><!-- / .container -->
	</nav>
</section>