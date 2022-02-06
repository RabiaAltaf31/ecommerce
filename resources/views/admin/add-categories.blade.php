@include('admin/header')
<div class="animated fadeIn">
               
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header"><strong>Categories</strong><small> Form</small></div>
                        <div>
   @if(session()->get('msg'))
   <div class="alert alert-success">
   {{session()->get('msg')}}
   </div>
                
                @endif
</div> 
                           <form method="post" action="/add_categories">
                           @csrf
                              <div class="card-body card-block">
                                 <div class="form-group">
                                    <label for="categories" class=" form-control-label">Categories</label>
                                    <input type="text" name="categories" placeholder="Enter categories name" class="form-control" required value="">
                                 </div>
                                 <button id="payment-button" name="submit" type="submit" class="btn btn-lg btn-info btn-block">
                                 <span id="payment-button-amount">Submit</span>
                                 </button>
                                 <div class="field_error"></div>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
</div>  


@include('admin/footer')


        