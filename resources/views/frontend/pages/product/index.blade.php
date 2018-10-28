@extends('frontend.layouts.master')
@section('content')

    @foreach($products as $product)
        <div class="card">
            @php $i=1;@endphp
            
            @foreach($product->images as $image)
                @if($i>0)
                <img src="{{asset('images/products/'.'$image->image')}}">
                @endif
            @php $i--;@endphp
            @endforeach
            
            
            </div>
        
    @endforeach
        
    
@endsection


