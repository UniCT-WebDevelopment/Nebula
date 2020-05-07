
  
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" 
aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        
<span class="navbar-toggler-icon "></span>
<span style="font-size:x-small;color:white"> MENU </span>
</button>

    
<a class="navbar-brand "href="{{url('/')}}">
  <img class="logo img-fluid nav-item" src="{{'http://www.nebula.com:8012/storage/images/logo.png'}}">
</a>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown nav-element">
        <a href="{{ route('products') }}" class="nav-link " role="button"  
                aria-haspopup="true" aria-expanded="false" ariahref="#">
                STORE
        </a>
      </li>
      <li class="nav-item dropdown nav-element">
        <a class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" 
          aria-haspopup="true" aria-expanded="false" ariahref="#">COMMUNITY</a>
        <div class="dropdown-menu " aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="https://www.facebok.com">Facebook</a>
            <a class="dropdown-item" href="https://www.twitch.com">Twitch</a>
            <a class="dropdown-item" href="https://www.twitter.com">Twitter</a>
        </div>
      </li>
        @guest
        <li class="nav-item dropdown nav-element">
          <a class="nav-link dropdown-toggle " role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" ariahref="#" style="color: rgb(6, 180, 180);">SIGN IN</a>
          <div class="dropdown-menu " aria-labelledby="navbarDropdown">
            <a class="dropdown-item " href={{ route('login') }} style="color:rgb(255,0,67);"> <i class="fas fa-user"></i> SIGN IN</a>
            <a class="dropdown-item " href={{ route('register') }} style="color: rgb(240, 217, 12);"> <i class="fas fa-pen"></i> CREATE ACCOUNT</a>
          </div>
        </li> 
        @endguest
      </ul>
      <form action="{{route("search")}}" method="GET" class="form-inline my-2 my-lg-0 src-bar">
        
        <i class="fa fa-search position-absolute" style="padding:10px;"></i>
        <input type="text" name="query" id="query" class="search-box" placeholder="Search"/>
      </form>
      <ul class="navbar-nav ml-auto">
        <!-- Authentication Links -->
        @guest
        <a class="nav-link clk-src" href="#"><i class="fas fa-search" ></i></a>
          
        <div class="container" style="background-color:transparent !important; ">
            <div class="row" style="background-color:transparent !important; ">
                <div class="col-lg-12 col-sm-12 col-12 main-section" style="background-color:transparent !important; ">
                    <div class="dropdown">
                        <a class="nav-link icon-nav" data-toggle="dropdown" onclick="location.href = '{{url('/cart')}}';" >
                        <i class="fas fa-shopping-cart" aria-hidden="true"></i>
                        @if(Cart::instance('default')->count() > 0)
                        <span class="cart-count">{{Cart::instance('default')->count()}}
                        </span>
                        @endif
                        </a>  
                    </div>
                </div>
            </div>
        </div>

        @else

                <span class="nav-cont2" >
                    <a class="nav-link icon-nav" href="#"><i class="fa fa-shopping-cart" onclick="location.href = '{{url('/cart')}}';"></i>
                      @if(Cart::instance('default')->count() > 0)
                        <span class="cart-count">{{Cart::instance('default')->count()}}
                        @endif
                    </a>
                    <a class="nav-link clk-src" href="#"><i class="fas fa-search" ></i></a>
                   
                </span>
                <div >  
                  
                <div class="dropdown">
                
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" >
                   {{ Auth::user()->name }}
                </a>
                
                  
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                 <a class="dropdown-item" href="{{ url('/profile') }}"> <img src="/storage/{{ Auth::user()->avatar }}" style="width:32px; height:32px; 
                          position:relative;  left:-7px; border-radius:50%"/> Profile</a>
                  <a class="dropdown-item" href="{{ url('/home') }}"><i class="fa fa-gamepad" aria-hidden="true"></i> Library</a>
                  

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt"></i>
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
              </div>
          </div>
        @endguest
      </ul>
     
</div>
