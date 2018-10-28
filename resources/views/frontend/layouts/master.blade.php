<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        
        <title>@yield('title','Laravel boighor')</title>
        
        
      @include('frontend.partial.styles')
    </head>
    <body>
        
       
	
        @include('frontend.partial.navbar')
        
        <hr />
        @yield('content')
@include('frontend.partial.footer')
    
        
     @include('frontend.partial.script')
<script src="{{asset('js/jquery.min.js')}}"></script>
  <script src="{{asset('js/popper.min.js')}}"></script>
  <script src="{{asset('js/bootstrap.min.js')}}"></script>
        </body>
</html>