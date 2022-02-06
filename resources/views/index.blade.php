<x-header ></x-header>

<body id="body">

@include('layout')

<div class="hero-slider">
  <div class="slider-item th-fullpage hero-area" style="background-image: url({{asset('assets/images/slider/slider-1.jpg')}});">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 text-center">
          <p data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".1">PRODUCTS</p>
          <h1 data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".5">The beauty of nature <br> is hidden in details.</h1>
          <a data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".8" class="btn" href="/shop">Shop Now</a>
        </div>
      </div>
    </div>
  </div>
  <div class="slider-item th-fullpage hero-area" style="background-image: url({{asset('assets/images/slider/slider-3.jpg')}});">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 text-left">
          <p data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".1">PRODUCTS</p>
          <h1 data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".5">The beauty of nature <br> is hidden in details.</h1>
          <a data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".8" class="btn" href="/shop">Shop Now</a>
        </div>
      </div>
    </div>
  </div>
  <div class="slider-item th-fullpage hero-area" style="background-image: url({{asset('assets/images/slider/slider-2.jpg')}});">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 text-right">
          <p data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".1">PRODUCTS</p>
          <h1 data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".5">The beauty of nature <br> is hidden in details.</h1>
          <a data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".8" class="btn" href="/shop">Shop Now</a>
        </div>
      </div>
    </div>
  </div>
</div>


<!--==========================================
=            All Category Section            =
===========================================-->

<section class=" section">
	<!-- Container Start -->
	<div class="container">
		<div class="row">
			<div class="col-12">
			  @if(count($categorydata)>0)
				<!-- Section title -->
				<div class="section-title">
					<h2>All Categories</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis, provident!</p>
				</div>
				<div class="row">
				@foreach($categorydata as $todo)
					<!-- Category list -->
					<div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
						<div class="category-block">
							<div class="header">
								<i class="fa fa-shopping-basket icon-bg-1"></i> 
								
								<h4>{{$todo->categoryname}}</h4>
								
							</div>
							
							<ul class="category-list" >
							@foreach($todo->subcategory as $subtodo)
								<li><a href="/shop/{{$subtodo->id}}">{{$subtodo->subcategoryname}}</a></li>
							@endforeach
							</ul>
							
						</div>
					</div> <!-- /Category List -->
					@endforeach
				</div>
			  @endif	
			</div>
		</div>
	</div>
	<!-- Container End -->
</section>

<section class="products section bg-gray">
	<div class="container">
		<div class="row">
			<div class="title text-center">
				<h2>All Products</h2>
			</div>
		</div>
		<div class="row">
		@foreach($productdata as $producttodo)
			<div class="col-md-4">
				<div class="product-item">
					<div class="product-thumb">
						
						<img class="img-responsive" src="{{asset('uploadfile/'. $producttodo->image )}}" alt="product-img" />
						<div class="preview-meta">
							<ul>
								<li>
									<span  data-toggle="modal" data-target="#{{$producttodo->id}}">
										<i class="tf-ion-ios-search-strong"></i>
									</span>
								</li>
								<li>
			                        <a href="#!" ><i class="tf-ion-ios-heart"></i></a>
								</li>
								<li>
									<a href="/login"><i class="tf-ion-android-cart"></i></a>
								</li>
							</ul>
                      	</div>
					</div>
					<div class="product-content">
						<h4><a href="/product-single/{{$producttodo->id}}">{{$producttodo->productname}}</a></h4>
						<p class="price">${{$producttodo->price}}</p>
					</div>
				</div>
			</div>
		 	
		
		<!-- Modal -->
		<div class="modal product-modal fade" id="{{$producttodo->id}}">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<i class="tf-ion-close"></i>
			</button>
		  	<div class="modal-dialog " role="document">
		    	<div class="modal-content">
			      	<div class="modal-body">
			        	<div class="row">
			        		<div class="col-md-8 col-sm-6 col-xs-12">
			        			<div class="modal-image">
				        			<img class="img-responsive" src="{{asset('uploadfile/'. $producttodo->image )}}" alt="product-img" />
			        			</div>
			        		</div>
			        		<div class="col-md-4 col-sm-6 col-xs-12">
			        			<div class="product-short-details">
			        				<h2 class="product-title">{{$producttodo->productname}}</h2>
			        				<p class="product-price">${{$producttodo->price}}</p>
			        				<p class="product-short-description">
										{{$producttodo->discription}}
			        				</p>
									<form action="/add_to_cart" method="post">
										<input type="hidden" name="product_id" value="{{$producttodo->id}}">
										@csrf
										<button  class="btn btn-main mt-20">Add To Cart</button>

									</form>
			        				<a href="/product-single/{{$producttodo->id}}" class="btn btn-transparent">View Product Details</a>
			        			</div>
			        		</div>
			        	</div>
			        </div>
		    	</div>
		  	</div>
		</div><!-- /.modal -->
		@endforeach
		</div>
	</div>
</section>
<br>

<x-footer ></x-footer>