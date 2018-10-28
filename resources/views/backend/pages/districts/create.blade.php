@extends('backend.layouts.master')
@section('content')
<div class="main-panel">
        <div class="content-wrapper">
            <div class="card">
                <div class="card-header">
                    Add District
                </div>
                <div class="card-body">
                         <form action="{{ route('admin.districts.store') }}" method="post" enctype="multipart/form-data">
                              @csrf
  
                          @include('backend.partial.messages')
    <div class="form-group">
    <label>Name</label>
    <input type="text" name="name" class="form-control" id="exampleInputEmail1"  placeholder="Enter Name">
  </div>

 
  <div class="form-group">
    <label>Select for a division for this district</label>
      <select class="form-control" name="division_id">
          <option value="">Please select a division for the district</option>
          @foreach($divisions as $division)
          <option value="{{$division->id}}">{{$division->name}}</option>
          @endforeach
      </select>
    
  </div>
    
    
  
  <button type="submit" class="btn btn-primary">Add District</button>
</form>
                    
                </div>
            </div>
     
          
      </div>
</div>
      <!-- main-panel ends -->

@endsection
