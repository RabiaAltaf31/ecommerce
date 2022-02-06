<x-header ></x-header>

<body id="body">

@include('layout')
<section class="page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="content">
					<h1 class="page-name">Review</h1>
					<ol class="breadcrumb">
						<li><a href="/index">Home</a></li>
						<li class="active">review</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
</section>
<div class="container">
         <div class="row">
            <div class="col-md-8">
               <div class="block billing-details">
                  <h4 class="widget-title">You are Writing a review for</h4>
                  <form class="checkout-form" method="post" action="/add_review">
                  @csrf
                  <input type="hidden" name="product_id" value="{{$product_id}}">
						
                     <div class="form-group">
                        <label for="review">Review</label>
                        <input type="text" class="form-control" id="review" name="review" placeholder="">
                     </div>
                     <button  class="btn btn-main mt-20">Submit Review</button>
                  </form>
               </div>
            </div>   
        </div>     
    </div>     

<x-footer ></x-footer>