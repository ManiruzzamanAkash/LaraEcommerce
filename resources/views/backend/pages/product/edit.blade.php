@extends('backend.layouts.master')
@section('content')
<div class="main-panel">
        <div class="content-wrapper">
            <div class="card">
                <div class="card-header">
                    Edit Product
                </div>
                <div class="card-body">
                         <form action="{{ route('admin.product.update',$product->id) }}" method="post" enctype="multipart/form-data">
                             {{ csrf_field() }}
  
                          @include('backend.partial.messages') 
    <div class="form-group">
    <label>Title</label>
    <input type="text" name="title" class="form-control" id="exampleInputEmail1" value="{{ $product->title }}">
  </div>
<div class="form-group">
    <label>Author</label>
    <input type="text" name="author" class="form-control" id="exampleInputEmail1"  value="{{$product->author}}">
  </div>
    <div class="form-group">
    <label>Price</label>
    <input type="number" name="price" class="form-control" id="exampleInputEmail1"  value="{{$product->price}}">
  </div>
    <div class="form-group">
    <label>Rent Charge</label>
    <input type="number" name="rent" class="form-control" id="exampleInputEmail1"  value="{{$product->rent_charge}}">
  </div>
 <div class="form-group">
    <label>Publisher</label>
    <input type="text" name="publisher" class="form-control" id="exampleInputEmail1"  value="{{$product->publisher}}">
  </div>
    <div class="form-group">
    <label>Category</label>
    <input type="text" name="category" class="form-control" id="exampleInputEmail1" value="{{$product->category}}">
  </div>
  <div class="form-group">
    <label>Descripation</label>
    <textarea name="descripation" rows="8" cols="80" class="form-control">{{ $product->descrripation }}</textarea>
  </div>
    <div class="form-group">
    <label>Product Image</label>
    <input type="file" name="product_image" class="form-control" id="exampleInputEmail1" >
  </div>
  
  <button type="submit" class="btn btn-primary">Update product</button>
</form>
                    
                </div>
            </div>
     
          
      </div>
</div>
      <!-- main-panel ends -->

@endsection
