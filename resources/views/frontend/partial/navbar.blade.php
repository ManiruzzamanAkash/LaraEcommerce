<div class="container-fluid"> 
	<div class="row bg-light navbar-expand-md"> 
		<div class="col-lg-2 d-none d-md-block"> </div>
		<div class="col-md-9 col-lg-7 d-none d-md-block">
			<nav class="navbar navbar-expand-lg navbar-light ">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link" href="{{ route('index') }}">Home <span class="sr-only">(current)</span></a>
					</li>
						
					<li class="nav-item">
						<a class="nav-link" href="#"></a>
					</li>
						
					<li class="nav-item">
						<a class="nav-link" href="{{ route('contact') }}">Contact Us</a>
					</li>
						
					<li class="nav-item">
						<a class="nav-link" href="{{ route('about') }}">About Us</a>
					</li>
				</ul>
			</nav>
		</div>
		
		<div class="col-md-3 col-lg-3 d-none d-md-block"> 
			<ul class="navbar-nav"> 
				<li class="nav-item"> 
					<a href="#" class="nav-link"><i class="fa fa-headphones"> </i>01917497927</a>
				</li>
			</ul>
		</div>
	</div>
</div>
			<!-- Top Menu Bar End -->
			<!-- Search Menu Bar Start -->
<div class="container-fluid sticky-top" > 
	<div class="row bg-light">
	
		<div class="col-lg-1 d-none d-md-block"> 
			
		</div>
		
		<div class="col-md-2 col-sm-8 col-xs-12 col-lg-2 " style="margin-left:0px;">
			<a href="#"class="d-md-none" >
				<img style="margin-right:30px" src="image/toggle.png">
			</a>

			<a href="#" >
				<img style="" src="{{asset('images/logo/'.'boighorlogo2.PNG')}}">
			</a>	
		
		</div>
        
		<div class="col-md-5 col-lg-6  d-none d-md-block "style=" margin-left:25px;"> 
            <form action="{!! route('search')!!}" method="get">
			<div class="input-group mb-2">

  <input type="text" class="form-control" name="search" aria-label="Text input with dropdown button">
  
  <button class="btn "style="background-color:#2471A3; color:white;" type="submit">Search</button>
    
</div>
                </form>
	</div>
            
	
	
	
	<div class="col-md-4 col-lg-2 col-sm-3 col-xs-2  navbar-nav ml-auto">
     
		@if(Auth::check())
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->first_name }} <span class="caret"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </li>
        @else
        <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
        </li>
        <li class="nav-item">
            @if (Route::has('register'))
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            @endif
        </li>
        @endif
    
    </div>
</div>

	
</div>
			<!-- Search Menu Bar End -->
