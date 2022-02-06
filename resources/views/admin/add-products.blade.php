@include('admin/header')
<div class="animated fadeIn">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header"><strong>Product</strong><small> Form</small></div>
						@if(session()->get('msg'))
   <div class="alert alert-success">
   {{session()->get('msg')}}
   </div>
                
                @endif
</div> 
                        <form method="post" enctype="multipart/form-data" action="/add_products">
                        @csrf
							<div class="card-body card-block">
							
								
								<div class="form-group">
									<label for="categories" class=" form-control-label">Sub Categories</label>
									<select class="form-control" required name="sub_categories_id" id="sub_categories_id">
										<option>Select Sub Category</option>
                                        @foreach($subcategorydata as $todo)
										<option value="{{$todo->id}}">{{$todo->subcategoryname}}</option>
										@endforeach
									</select>
								</div>
								
								<div class="form-group">
									<label for="categories" class=" form-control-label">Product Name</label>
									<input type="text" name="name" placeholder="Enter product name" class="form-control" required value="">
								</div>
								
								<div class="form-group">
									<label for="categories" class=" form-control-label">Price</label>
									<input type="text" name="price" placeholder="Enter product price" class="form-control" required value="">
								</div>
								
							
								<div class="form-group">
									<label for="categories" class=" form-control-label">Image</label>
									<input type="file" name="image" class="form-control" required>
								</div>
									
								<div class="form-group">
									<label for="categories" class=" form-control-label">Description</label>
									<textarea name="description" placeholder="Enter product description" class="form-control" required></textarea>
								</div>
								
							   <button id="payment-button" name="submit" type="submit" class="btn btn-lg btn-info btn-block">
							   <span id="payment-button-amount">Submit</span>
							   </button>
							   
							</div>
						</form>
                     </div>
                  </div>
               </div>
            </div>

    @include('admin/footer')            