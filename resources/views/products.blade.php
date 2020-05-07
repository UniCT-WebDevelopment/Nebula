<!--game list page !-->

@extends('layout')
 
@section('title', 'Products')
 
@section('content')


<link rel="stylesheet" href="assets/css/gamelisttyle.css" >


<div class="container">
  <div class="row position-relative justify-content-center" style="top:120px">
    <div class="col-12 col-md-6 col-lg-4 ">
    <form action="{{route("search")}}" method="GET" class="search-form">
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
                <a href="#homeSubmenu1" data-toggle="collapse" aria-expanded="false" class="dnav-link  dropdown-toggle dropdown-toggle2"  style="color:black;text-decoration: none; ">
                  <i class="fas fa-search-dollar"></i>
                    Genres
                </a>
                <ul class="collapse list-unstyled" id="homeSubmenu1">
                 
                  <li>
                    <a href="{{route('products',['price' => 5])}}">Under 5€
                    </a>
                  </li>
                  <li>
                    <a href="{{route('products',['price' => 10])}}">Under 10€
                    </a>
                  </li>
                  <li>
                    <a href="{{route('products',['price' => 15])}}">Under 15€
                    </a>
                  </li>
                  </ul>
                </li>
                <li class="" >
                  <a href="#homeSubmenu2" data-toggle="collapse" aria-expanded="false" class="dnav-link  dropdown-toggle dropdown-toggle2"  style="color:black;text-decoration: none; ">
                    <i class="fas fa-gamepad"></i>
                      Genres
                  </a>
                  <ul class="collapse list-unstyled" id="homeSubmenu2">
                    @foreach ($categories as $single_category)
                    <li>
                      <a href="{{route('products',['category' => $single_category->slug])}}">{{$single_category->name}}
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
                        <a href="{{route('products',['platform' => $single_platform->slug])}}">{{$single_platform->name}}
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
          <div class="products-header">
            <div>
              <strong>Price:</strong>
            <a href="{{route('products',['category' => request()->category,'sort' => 'low_to_high'])}}">Low to High</a> |
              <a href="{{route('products',['category' => request()->category,'sort' => 'high_to_low'])}}">High to Low</a>
            </div>
          </div>
            <nav class="navbar " >
                <div class="container-fluid">
                    <button type="button" id="sidebarCollapse" class="btn btn-info" style="background-color:transparent;border-color:rgba(213,33,94,1)">
                        <i class="fas fa-arrows-alt-h"></i>
                        <span>Filter</span>
                    </button>
                </div>
            </nav>
           
            @if (session()->has('success_message'))
            <div class="alert alert-success">
                {{ session()->get('success_message') }}
            </div>
        @endif

        @if(count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

            <div class="container products">
            <div class="col-12 colGame justify-content-center " ">             
              <div class="row" >
                @forelse($products as $product)
                <div class="col-6  col-lg-4 p-1 cardGame " >
                  <div class="card card-homepage rounded-0 p-0" ><!--card opened-->
                  <a href="{{route('products.show',$product->id)}}">

                  <img class="card-img-top m-0 rounded-0 " src="{{productImage($product->image)}}" >
                  </a>
                    <div class="card-body">
                      <p class="card-title "><b>{{$product->name}}</b></p>
                      <p class="card-text card-platform text-secondary p-0 align-self-start position-absolute " > Platform</p>
                      <p class="card-text card-price p-0 align-self-end position-absolute"  ><b>
                        {{$product->price}}
                      </b></p>
                     
                     @guest
                      <form action="{{route('cart.store')}}" method="POST">
                        {{csrf_field()}}
                      <input type="hidden" name="id" value="{{$product->id}}">
                      <input type="hidden" name="name" value="{{$product->name}}">
                      <input type="hidden" name="price" value="{{$product->price}}">
                        <button type="submit" class="cart-button card-button align-self-end position-absolute"><i class="fas fa-cart-plus fw-icon"></i></button>
                      </form> 
                      @else
                      <form action="{{route('cart.store')}}" method="POST">
                        {{csrf_field()}}
                      <input type="hidden" name="id" value="{{$product->id}}">
                      <input type="hidden" name="name" value="{{$product->name}}">
                      <input type="hidden" name="price" value="{{$product->price}}">
                        <button type="submit" class="cart-button card-button align-self-end position-absolute"><i class="fas fa-cart-plus fw-icon"></i></button>
                      </form> 
                      
                      @foreach ($products_buy as $item)
                      @if($item->id === $product->id)
                      <form action="{{route('home.download',$item->id)}}" method="GET">
                        {{csrf_field()}}
                      <input type="hidden" name="id" value="{{$item->id}}">
                      <input type="hidden" name="name" value="{{$item->id}}">
                      <input type="hidden" name="price" value="{{$item->id}}">
                        <button type="submit" class="cart-button card-button align-self-end position-absolute"><i class="fas fa-download"></i></button>
                      </form>
                      @endif
                      @endforeach 
                        
                      @endguest
                    
                     <!-- <a class="cart-button card-button align-self-end position-absolute" href="{{ url('add-to-cart/'.$product->id) }}" ><i class="fas fa-cart-plus fw-icon"></i></a>!-->
                    </div>
                  </div> <!--card closed -->
                </div>
                @empty
                <div class="col-6  col-lg-4 p-1 cardGame text-secondary" > Nessun Elemento Corrispondente alla Ricerca Trovato</div>
                @endforelse
                
              </div>
            </div>
            <div class="spacer"></div>
            <ul class="pagination">{{$products->appends(request()->input())->links()}}  </ul>
            </div>
                
    </div>
  </div>  

  @endsection