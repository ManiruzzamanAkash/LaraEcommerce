@extends('frontend.layouts.master')
@section('title')
{{$product->title}}|BoiGhor
@endsection
@section('content')

   <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
      @php 
        $i=1;
      @endphp
      @foreach($product->images as $image)
      <div class="carousel-item active {{$i==1 ? 'active':''}}">
      <img class="d-block w-10" src="{!! asset('images/products/'.$image->image) !!}" alt="First slide">
    </div>
      @php 
        $i--;
      @endphp
      @endforeach
    
    
  </div>
</div>

<div class="col-md-8">
    <div class="widget">
        <h3>{{$product->title}}</h3>
        <h3>{{$product->author}}</h3>
        <h3>{{$product->price}} Taka</h3>
    </div>
</div>
        
    
@endsection


