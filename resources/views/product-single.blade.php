
<x-header ></x-header>
<body id="body">
	
<!-- Start Top Header Bar -->
@include('layout')

<section class="single-product">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<ol class="breadcrumb">
					<li><a href="/index">Home</a></li>
					<li><a href="/shop">Shop</a></li>
					<li class="active">Single Product</li>
				</ol>
			</div>
			<div class="col-md-6">
				
			</div>
		</div>
		<div class="row mt-20">
			<div class="col-md-5">
				<div class="single-product-slider">
					<div id='carousel-custom' class='carousel slide' data-ride='carousel'>
						<div class='carousel-outer'>
							<!-- me art lab slider -->
							<div class='carousel-inner '>
								<div class='item active'>
									<img src="{{asset('uploadfile/'. $productdata->image )}}" alt='' data-zoom-image="images/shop/single-products/product-1.jpg" />
								</div>
								<div class='item'>
									<img src="{{asset('uploadfile/'. $productdata->image )}}" alt='' data-zoom-image="images/shop/single-products/product-2.jpg" />
								</div>
								
							</div>
							
							<!-- sag sol -->
							<a class='left carousel-control' href='#carousel-custom' data-slide='prev'>
								<i class="tf-ion-ios-arrow-left"></i>
							</a>
							<a class='right carousel-control' href='#carousel-custom' data-slide='next'>
								<i class="tf-ion-ios-arrow-right"></i>
							</a>
						</div>
						
						<!-- thumb -->
						<ol class='carousel-indicators mCustomScrollbar meartlab'>
							<li data-target='#carousel-custom' data-slide-to='0' class='active'>
								<img src="{{asset('uploadfile/'. $productdata->image )}}" alt='' />
							</li>
							<li data-target='#carousel-custom' data-slide-to='1'>
								<img src="{{asset('uploadfile/'. $productdata->image )}}" alt='' />
							</li>
							
						</ol>
					</div>
				</div>
			</div>
			<div class="col-md-7">
				
				<div class="single-product-details">
					<h2>{{$productdata->productname}}</h2>
					
					<p class="product-price">${{$productdata->price}}</p>
					
					
					<p class="product-description mt-20">
					{{$productdata->discription}}
						</p>
						
					<div class="color-swatches">
						<span>color:</span>
						<ul>
							<li>
								<a href="#!" class="swatch-violet"></a>
							</li>
							<li>
								<a href="#!" class="swatch-black"></a>
							</li>
							<li>
								<a href="#!" class="swatch-cream"></a>
							</li>
						</ul>
					</div>
					<div class="product-size">
						<span>Size:</span>
						<select class="form-control">
							<option>S</option>
							<option>M</option>
							<option>L</option>
							<option>XL</option>
						</select>
					</div>
					<div class="product-quantity">
						<span>Quantity:</span>
						<div class="product-quantity-slider">
							<input id="product-quantity" type="text" value="0" name="product-quantity">
						</div>
						
						
					</div>
					<form action="/add_to_cart" method="post">
						<input type="hidden" name="product_id" value="{{$productdata->id}}">
						@csrf
						<button  class="btn btn-main mt-20">Add To Cart</button>

					</form>
					<a href="/add-review/{{$productdata->id}}" class="btn btn-main mt-10">Add Reveiws</a>
					
					<!-- <a href="/register" class="btn btn-main mt-20">Add To Cart</a> -->
				</div>
				
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<div class="tabCommon mt-20">
					<ul class="nav nav-tabs">
						<li class="active"><a data-toggle="tab" href="#details" aria-expanded="true">Details</a></li>
						<li class=""><a data-toggle="tab" href="#reviews" aria-expanded="false">Reviews ({{ count($reviews) }})</a></li>
					</ul>
					<div class="tab-content patternbg">
						<div id="details" class="tab-pane fade active in">
							<h4>Product Description</h4>
							<p>{{$productdata->discription}} </p>

							</div>
						<div id="reviews" class="tab-pane fade">
							
							<div class="post-comments">
						    	<ul class="media-list comments-list m-bot-50 clearlist">
								@if(count($reviews)>0)
								@foreach($reviews as $review)
								    <!-- Comment Item start-->
									
								    <li class="media">

								        <a class="pull-left" href="#!">
								            <img class="media-object comment-avatar" src="{{asset('assets/images/blog/avater-2.jpg')}}" alt="" width="50" height="50" />
								        </a>

								        <div class="media-body">
								            <div class="comment-info">
								                <h4 class="comment-author">
								                    <a>{{$review['customer']['name']}}</a>
								                	
								                </h4>
												<time datetime="2013-04-06T13:53">{{ $review['created_at']->format('d M Y  ,  h:m a') }}</time>
								                
								                <!-- <a class="comment-button" href="#!"><i class="tf-ion-chatbubbles"></i>Reply</a> -->
								            </div>

								            <p> {{$review['reviewproduct']}}
								            </p>
								        </div>

								    </li>
								
								    <!-- End Comment Item -->
									@endforeach
									

									@else
									<h1 class="text-center">No Reviews Found</h1>
									@endif




							</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<x-footer ></x-footer>