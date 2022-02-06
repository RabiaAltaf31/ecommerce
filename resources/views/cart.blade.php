
<x-header ></x-header>
<body id="body">
@include('layout')
<section class="page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="content">
					<h1 class="page-name">Cart</h1>
					<ol class="breadcrumb">
						<li><a href="/index">Home</a></li>
						<li class="active">cart</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
</section>


<div class="page-wrapper">
  <div class="cart shopping">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="block">
          @if(count($products)>0)
            <div class="product-list">
              
              <form method="post">
                <table class="table">
                  <thead>
                    <tr>
                      <th class="">Item Name</th>
                      <th class="">Item Price</th>
                      <th class="">Actions</th>
                      
                    </tr>
                  </thead>
                  @foreach($products as $items)
                  <tbody>
                    <tr class="">
                      <td class="">
                        <div class="product-info">
                          <img width="80" src="{{asset('uploadfile/'. $items->image )}}" alt="" />
                          <a href="#!">{{$items->productname}}</a>
                        </div>
                      </td>
                      <td class="">${{$items->price}}</td>
                      <td class="">
                        <a class="product-remove" href="#!">Remove</a>
                        
                      </td>
                      
                    </tr>
                    
                  </tbody>
                  @endforeach
                </table>
                <a href="/checkout" class="btn btn-main pull-right">Checkout</a>
              </form>
            </div>

            @else
            <h1 class="text-center">No Items Found in CartList</h1>
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<x-footer ></x-footer>