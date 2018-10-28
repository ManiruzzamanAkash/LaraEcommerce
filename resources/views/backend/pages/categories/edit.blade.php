@extends('backend.layouts.master')
@section('content')
<div class="main-panel">
        <div class="content-wrapper">
            <div class="card">
                <div class="card-header">
                    Edit Category
                </div>
                <div class="card-body">
                                  <form action="{{ route('admin.category.update',$category->id) }}" method="post" enctype="multipart/form-data">
                              @csrf
  
                          @include('backend.partial.messages')
    <div class="form-group">
    <label>Name</label>
    <input type="text" name="name" class="form-control" id="exampleInputEmail1" value="{{$category->name}}">
  </div>

 
  <div class="form-group">
    <label>Descripation</label>
    <textarea name="descripation" rows="8" cols="80" class="form-control">{{$category->descripation}}</textarea>
  </div>
    <div class="form-group">
    <label>Parent Category(Optional)</label>
    <select class="form-control" name="parent_id">
        <option value="">Please select primary category</option>
        @foreach($main_categories as $cat)
        <option value="{{$cat->id}}" {{ $cat->id == $category->parent_id ? 'selected' : ''}}>{{$cat->name}}</option>
        @endforeach
        </select>
  </div>
    <div class="form-group">
    <label>Categories Old Image</label><br>
        <img src="{!!asset('images/categories/'.$category->image)!!}"><br>
        <label>Categories New Image(Optional)</label>
    <input type="file" name="image" class="form-control" id="image" >
  </div>
  
  <button type="submit" class="btn btn-success">Update Category</button>
</form>
                    
                </div>
            </div>
     
          
      </div>
</div>
      <!-- main-panel ends -->

@endsection
