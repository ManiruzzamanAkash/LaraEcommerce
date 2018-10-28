@extends('backend.layouts.master')
@section('content')
<div class="main-panel">
        <div class="content-wrapper">
            <div class="card">
                <div class="card-header">
                    Add Product
                </div>
                <div class="card-body">
                         <form action="{{ route('admin.product.store') }}" method="post" enctype="multipart/form-data">
                             @csrf
  
                          @include('backend.partial.messages')   <div class="form-group">
    <label>Title</label>
    <input type="text" name="title" class="form-control" id="exampleInputEmail1"  placeholder="Enter Title">
  </div>
<div class="form-group">
    <label>Author</label>
    <input type="text" name="author" class="form-control" id="exampleInputEmail1"  placeholder="Enter Author">
  </div>
    <div class="form-group">
    <label>Price</label>
    <input type="number" name="price" class="form-control" id="exampleInputEmail1"  placeholder="Enter Price">
  </div>
    <div class="form-group">
    <label>Rent Charge</label>
    <input type="number" name="rent" class="form-control" id="exampleInputEmail1"  placeholder="Enter Rent Charge">
  </div>
 <div class="form-group">
    <label>Publisher</label>
    <input type="text" name="publisher" class="form-control" id="exampleInputEmail1"  placeholder="Enter Publisher">
  </div>
    <div class="form-group">
    <label>Category</label>
    <input type="text" name="category" class="form-control" id="exampleInputEmail1"  placeholder="Enter Category">
  </div>
  <div class="form-group">
    <label>Descripation</label>
    <textarea name="descripation" rows="8" cols="80" class="form-control"></textarea>
  </div>
    <div class="form-group">
    <label>Product Image</label>
    <input type="file" name="product_image" class="form-control" id="exampleInputEmail1" >
  </div>
  
  <button type="submit" class="btn btn-primary">Add product</button>
</form>
                    
                </div>
            </div>
     
          
      </div>
</div>
      <!-- main-panel ends -->

@endsection
