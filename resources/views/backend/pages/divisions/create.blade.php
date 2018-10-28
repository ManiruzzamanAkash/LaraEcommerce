@extends('backend.layouts.master')
@section('content')
<div class="main-panel">
        <div class="content-wrapper">
            <div class="card">
                <div class="card-header">
                    Add Category
                </div>
                <div class="card-body">
                         <form action="{{ route('admin.divisions.store') }}" method="post" enctype="multipart/form-data">
                              @csrf
  
                          @include('backend.partial.messages')
    <div class="form-group">
    <label>Name</label>
    <input type="text" name="name" class="form-control" id="exampleInputEmail1"  placeholder="Enter Name">
  </div>

 
  <div class="form-group">
    <label>Priority</label>
    <input type="text" name="priority" class="form-control" id="exampleInputEmail1"  placeholder="Enter priority">
  </div>
    
    
  
  <button type="submit" class="btn btn-primary">Add Division</button>
</form>
                    
                </div>
            </div>
     
          
      </div>
</div>
      <!-- main-panel ends -->

@endsection
