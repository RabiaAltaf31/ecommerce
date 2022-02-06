<x-header ></x-header>
<body id="body">
@include('layout')
<section class="page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="content">
					<h1 class="page-name">Shop</h1>
					<ol class="breadcrumb">
						<li><a href="/index">Home</a></li>
						<li class="active">shop</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="products section">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				
				<div class="widget product-category">
					<h4 class="widget-title">All Categories</h4>
					<div class="panel-group commonAccordion" id="accordion" role="tablist" aria-multiselectable="true">
						@foreach($categorydata as $todo)
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingTwo">
							<h4 class="panel-title">
								<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#{{$todo->id}}" aria-expanded="false" aria-controls="collapseTwo">
								{{$todo->categoryname}}
								</a>
							</h4>
							</div>
							<div id="{{$todo->id}}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
								<div class="panel-body">
								
									<ul>
									@foreach($todo->subcategory as $subtodo)
										<li><a href="/shop/{{$subtodo->id}}">{{$subtodo->subcategoryname}}</a></li>
									@endforeach				
									</ul>
								
								</div>
							</div>
						</div>
						@endforeach   
					</div>
					
				</div>
			</div>
			<div class="col-md-9">
				<div class="row">
				@if(count($productdata)>0)
					@foreach($productdata as $producttodo)
					
						<div class="col-md-4">
							<div class="product-item">
								<div class="product-thumb">
									
									<img class="img-responsive" src="{{asset('uploadfile/'. $producttodo->image )}}" alt="product-img" />
									<div class="preview-meta">
										<ul>
											<!-- <li>
												<span  data-toggle="modal" data-target="#">
													<i class="tf-ion-ios-search-strong"></i>
												</span>
											</li> -->
											<li >
											
											<a href="/product-single/{{$producttodo->id}}" ><i class="tf-ion-ios-search-strong"></i></a>
											</li>
											<li>
												<a href="#!" ><i class="tf-ion-ios-heart"></i></a>
											</li>
											<li>
												<a href="/register"><i class="tf-ion-android-cart"></i></a>
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
							<!-- e -->
					
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
			        				<a href="/login" class="btn btn-main">Add To Cart</a>
			        				<a href="/product-single/{{$producttodo->id}}" class="btn btn-transparent">View Product Details</a>
			        			</div>
			        		</div>
			        	</div>
			        </div>
		    	</div>
		  	</div>
		</div><!-- /.modal -->
		@endforeach
		
		@else
		<h1 class="text-center">No Products Found</h1>
		@endif
				</div>				
			</div>
		
		</div>
	</div>
</section>




<x-footer ></x-footer>