@extends('frontend.layouts.master')
@section('content')

<div class="col-md-8">
    <div class="widget">
        <h3>Searched Products For - <span class="badge badge-primary">{{$search}}</span></h3>
        @include('frontend.pages.product.partials.all_products')
    </div>
</div>

   
        
    
@endsection


