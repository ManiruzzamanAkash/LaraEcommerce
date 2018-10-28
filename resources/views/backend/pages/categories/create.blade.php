@extends('backend.layouts.master')
@section('content')
<div class="main-panel">
        <div class="content-wrapper">
            <div class="card">
                <div class="card-header">
                    Add Category
                </div>
                <div class="card-body">
                         <form action="{{ route('admin.category.store') }}" method="post" enctype="multipart/form-data">
                              @csrf
  
                          @include('backend.partial.messages')
    <div class="form-group">
    <label>Name</label>
    <input type="text" name="name" class="form-control" id="exampleInputEmail1"  placeholder="Enter Name">
  </div>

 
  <div class="form-group">
    <label>Descripation</label>
    <textarea name="descripation" rows="8" cols="80" class="form-control"></textarea>
  </div>
    <div class="form-group">
    <label>Parent Category(Optional)</label>
    <select class="form-control" name="parent_id">
        <option value="">Please select parent category</option>
        @foreach($main_categories as $category)
        
        <option value="{{$category->id}}">{{$category->name}}</option>
        @endforeach
        </select>
  </div>
    <div class="form-group">
    <label>Categories Image</label>
    <input type="file" name="image" class="form-control" id="image" >
  </div>
  
  <button type="submit" class="btn btn-primary">Add Category</button>
</form>
                    
                </div>
            </div>
     
          
      </div>
</div>
      <!-- main-panel ends -->

@endsection
