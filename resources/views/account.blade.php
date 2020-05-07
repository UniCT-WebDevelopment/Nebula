@extends('layouts.home')
@include('layout.partials.head')
@section('content')

<link rel="stylesheet" href="assets/css/gamelisttyle.css">

<div class="container">
  <div class="row position-relative justify-content-center" style="top:120px">
    <div class="col-12 col-md-6 col-lg-4 ">
    <form action="{{route("home.search")}}" method="GET" class="search-form">
      <i class="fa fa-search search-icon" style="color:white;"></i>
      <input type="text" name="query" id="query" class="search-box" placeholder="Search"
      style="color:white;background-color:rgb(191,183,199,0.1);border:1px solid rgb(191,183,199,0.1);">
      </i>
    </form>
    </div>
  </div>
</div>

   <div class="position-relative" style="top:120px;">
    <hr class="info-text separator position-relative" style="background-color: rgb(145, 135, 140);">
    
   <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar" class="col-4">
            
          <div class="row">
            <ul class="list-unstyled components">
           
                
                <li class="" >
                    <a href="#homeSubmenu2" data-toggle="collapse" aria-expanded="false" class="nav-link 
                         dropdown-toggle dropdown-toggle2" style="color:black;text-decoration: none; ">               
                      <i class="fas fa-gamepad"></i>
                        Features
                    </a>
                    <ul class="collapse list-unstyled" id="homeSubmenu2">
                      @foreach ($categories as $single_category)
                      <li>
                        <a href="{{route('home',['category' => $single_category->slug])}}">
                          {{$single_category->name}}
                       
                      </a>
                      </li>
                      @endforeach
                      
                    </ul>
                  </li>

                <li class="">
                    <a href="#homeSubmenu3" data-toggle="collapse" aria-expanded="false" class="dnav-link  dropdown-toggle dropdown-toggle2"  style="color:black;text-decoration: none; ">
                      <i class="fas fa-robot"></i>
                        System
                    </a>
                    <ul class="collapse list-unstyled" id="homeSubmenu3">
                      @foreach ($platforms as $single_platform)
                      <li>
                        <a href="{{route('home',['platform' => $single_platform->slug])}}">{{$single_platform->name}}
                        <!--<div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" value="{{$single_platform->id}}">
                        <label class="custom-control-label" for="{{$single_platform->id}}"></label>
                        </div>!-->
                        </a>
                      </li>
                      @endforeach
                      
                  </ul>
                </li>
               
            </ul>
        </nav>
        
        <!-- Page Content  -->
        <div id="content">
        
            <nav class="navbar " >
                <div class="container-fluid">
                    <button type="button" id="sidebarCollapse" class="btn btn-info" style="background-color:transparent;border-color:rgba(213,33,94,1)">
                        <i class="fas fa-arrows-alt-h"></i>
                        <span>Filter</span>
                    </button>
                </div>
            </nav>
           
            <div class="container products">
            <div class="col-12 colGame justify-content-center " ">             
              <div class="row" >
                @forelse($products as $product)
                <div class="col-6  col-lg-4 p-1 cardGame " >
                  <div class="card card-homepage rounded-0 p-0" ><!--card opened-->
                  <a href="{{route('products.show',$product->id)}}">
                    <img class="card-img m-0 rounded-0" src="{{productImage($product->image)}}" >
                  
                  </a>
                    <div class="card-body">
                      <p class="card-title "><b>{{$product->name}}</b></p>
                      <p class="card-text card-platform text-secondary p-0 align-self-end position-absolute " > </p>
                      
                      <form action="{{route('home.download',$product->id)}}" method="GET">
                        {{csrf_field()}}
                      <input type="hidden" name="id" value="{{$product->id}}">
                        <button type="submit" class="cart-button card-button align-self-end position-absolute"><i class="fas fa-download"></i></button>
                      </form>
                     <!-- <a class="cart-button card-button align-self-end position-absolute" href="{{ url('add-to-cart/'.$product->id) }}" ><i class="fas fa-cart-plus fw-icon"></i></a>!-->
                    </div>
                  </div> <!--card closed -->
                </div>
                
                @empty
                
                <div class="col-6  col-lg-4 p-1 cardGame text-secondary" > Nessun Elemento in Libreria</div>
                @endforelse
                
              </div>
              <div class="col shelf">
                <div></div>
            </div>
              </div>
              
          </div>
  </div>  

  <style>

.shelf {
	position: relative;
	
	border-bottom: 13px solid #24252a;
	text-align: center;
	padding: 0 27px;
  margin: 1px auto;
  background: transparent;
}

.shelf:after {
	position: absolute;
	bottom: -13px;
	left: 34px;
	height: 10px;
	background: transparent;
	content: "";
	-webkit-transform: perspective( 150 ) rotateX( -25deg );
	   -moz-transform: perspective( 150 ) rotateX( -25deg );
	    -ms-transform: perspective( 150 ) rotateX( -25deg );
	        transform: perspective( 150 ) rotateX( -25deg );
	right: 34px;
	box-shadow: 0 0 17px 5px rgba(0, 0, 0, 0.7);
	z-index: -1;
}
.shelf > div {
		border-bottom: 23px solid #303138;
		position: relative;
		z-index: 1;
	}
	
	.shelf > div:before {
	  content: '';
	  width: 0px;
	  height: 0px;
	  border-style: solid;
	  border-width: 0 0 23px 27px;
	  border-color: transparent transparent #303138 transparent;
	  position: absolute;
	  bottom: -23px;
	  left: -27px;
	  z-index: 2;
	  -webkit-transform:rotate(360deg);
	  -moz-transform:rotate(360deg);
	  transform:rotate(360deg);
	}
	
	.shelf > div:after {
	  content: '';
	  width: 0px;
	  height: 0px;
	  border-style: solid;
	  border-width: 23px 0 0 27px;
	  border-color: transparent transparent transparent #303138;
	  position: absolute;
	  bottom: -23px;
	  right: -27px;
	  z-index: 2;
	}
	
		.shelf > div > * {
			position: relative;
			z-index: 2;
			top: 18px;
		}

  </style>
@endsection
