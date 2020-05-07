<span class="info-text position-relative" type="text"><i class="fa fa-star"></i>&nbsp;Novità</span>
<hr class="separator">

<div class="main-carousel">
 
  @foreach($news_sect as $item)
<div class="carousel-cell"> 

<!--<img class="carousel-image" src="/*" /> !-->
<img class="carousel-image" src="{{productImage($item->image)}}" >


<a href="{{route('products.show',$item->product_id)}}">
<div class="carousel-caption">
  <div class="container">
    <div class ="row d-flex justify-content-center">
   <h5 class="item-name"><b >{{$item->name}}</b></h5>
  </div>
   <div class="row d-flex justify-content-center " >
   @foreach ($news_platform as $plat)
  
       @if($plat->product_id === $item->product_id)
          @if($plat->platform_id === 1)
          <p class="col-xs-6 carousel-platform" style="color:aqua;"><i class="fab fa-windows"></i></p>
          @elseif($plat->platform_id === 2)
          <p class="col-xs-6 carousel-platform"  style="color:aqua;"><i class="fab fa-linux"></i></p>
          @elseif($plat->platform_id === 3)
          <p class="col-xs-6 carousel-platform"  style="color:aqua;"><i class="fab fa-apple"></i></p>
         @endif
       @endif
   @endforeach
  </div>
   </div>
  </div>
</a>
@guest
  <form action="{{route('cart.store')}}" method="POST">
    {{csrf_field()}}
    <input type="hidden" name="id" value="{{$item->product_id}}">
    <input type="hidden" name="name" value="{{$item->name}}">
    <input type="hidden" name="price" value="{{$item->price}}">
    <button type="submit" class="cart-button carousel-cart  p-2 ">&nbsp;<i class="fas fa-cart-plus">&nbsp;&nbsp;&nbsp;</i> Add to Cart</button>
  </form>
  @else
  <form action="{{route('cart.store')}}" method="POST">
    {{csrf_field()}}
    <input type="hidden" name="id" value="{{$item->product_id}}">
    <input type="hidden" name="name" value="{{$item->name}}">
    <input type="hidden" name="price" value="{{$item->price}}">
    <button type="submit" class="cart-button carousel-cart  p-2"><i class="fas fa-cart-plus"></i> Add to Cart </button>
  </form>
  
@foreach ($products_buy as $buynews)
  @if($item->product_id === $buynews->product_id)
  <form action="{{route('home.download',$item->id)}}" method="GET">
    {{csrf_field()}}
    <input type="hidden" name="id" value="{{$item->product_id}}">
    <input type="hidden" name="name" value="{{$item->name}}">
    <input type="hidden" name="price" value="{{$item->price}}">
    <button type="submit" class="cart-button carousel-cart p-2">&nbsp;<i class="fas fa-download">&nbsp;&nbsp;&nbsp;</i> Download  </button>
  </form>
  

   @endif
  @endforeach 
@endguest
</div>
    @endforeach
</div>


<span class="info-text" type="text" ><i class="fas fa-highlighter"></i>&nbsp; Highlights</span>
<hr class="separator">


<div class="container  "><!--container opened-->

  <div class="row  justify-content-center">
  @foreach($high_sect as $item)
   
    <div class="col-6 col-md-3 p-1">
      <a href="{{route('products.show',$item->id)}}">
      <div class="card card-homepage rounded-0 p-0" ><!--card opened-->
      
        <img class="card-img-top m-0 rounded-0 " src="{{productImage($item->image)}}" >
      
      <div class="card-body" >
        
        <p class="card-title "><b>{{$item->name}}</b></p>
        
        <p class="card-text card-price p-0 align-self-end position-absolute"  ><b>
        €  {{$item->price}}
        </b></p>
        @guest
  <form action="{{route('cart.store')}}" method="POST">
    {{csrf_field()}}
    <input type="hidden" name="id" value="{{$item->product_id}}">
    <input type="hidden" name="name" value="{{$item->name}}">
    <input type="hidden" name="price" value="{{$item->price}}">
    <button type="submit" class="cart-button card-button align-self-end position-absolute"><i class="fas fa-cart-plus fw-icon"></i></button>
  </form>
  @else
  <form action="{{route('cart.store')}}" method="POST">
    {{csrf_field()}}
    <input type="hidden" name="id" value="{{$item->product_id}}">
    <input type="hidden" name="name" value="{{$item->name}}">
    <input type="hidden" name="price" value="{{$item->price}}">
    <button type="submit" class="cart-button card-button align-self-end position-absolute"><i class="fas fa-cart-plus fw-icon"></i></button>
  </form>
@foreach ($products_buy as $buynews)
  @if($item->product_id === $buynews->product_id)
  <form action="{{route('home.download',$item->id)}}" method="GET">
    {{csrf_field()}}
    <input type="hidden" name="id" value="{{$item->product_id}}">
    <input type="hidden" name="name" value="{{$item->name}}">
    <input type="hidden" name="price" value="{{$item->price}}">
    <button type="submit" class="cart-button card-button align-self-end position-absolute"><i class="fas fa-download"></i></button>
  </form>
   @endif
  @endforeach 
@endguest
      </div>
    </div> <!--card closed -->
  </a>
  </div> <!--col closed -->

  @endforeach
  

  </div> <!--row closed-->
</div><!--container closed-->

<span class="info-text" type="text" ><i class="fas fa-percent"></i>&nbsp; Featured Sales</span>
<hr class="separator">
<div id="carindone" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner "><!--carousel inner opened-->
      <div class="carousel-item active "> <!--carousel-item opened-->
          
       <div class="container ">
        
          <div class="row " ><!--big row opened-->
           @foreach ($featured1 as $item)
              @if($loop->first)
            <div class="col-12 col-md-7 p-1">
              <a href="{{route('products.show',$item->product_id)}}">
              <div class="card card-homepage rounded-0 p-0" ><!--card opened-->
                <img class="card-img-top m-0 rounded-0 " src="{{productImage($item->image)}}" >
            
                <div class="card-body" >
                  <p class="card-title "><b>{{$item->name}}</b></p>
                  <!--<p class="card-text card-platform text-secondary p-0 align-self-start position-absolute " > </p>!-->
                  <p class="card-text card-price p-0 align-self-end position-absolute"  ><b>
                    €  {{$item->price}}
                  </b></p>
                  @guest
                 <form action="{{route('cart.store')}}" method="POST">
                   {{csrf_field()}}
                   <input type="hidden" name="id" value="{{$item->product_id}}">
                   <input type="hidden" name="name" value="{{$item->name}}">
                   <input type="hidden" name="price" value="{{$item->price}}">
                   <button type="submit" class="cart-button card-button align-self-end position-absolute"><i class="fas fa-cart-plus fw-icon"></i></button>
                 </form>
                 @else
                 <form action="{{route('cart.store')}}" method="POST">
                   {{csrf_field()}}
                   <input type="hidden" name="id" value="{{$item->product_id}}">
                   <input type="hidden" name="name" value="{{$item->name}}">
                   <input type="hidden" name="price" value="{{$item->price}}">
                   <button type="submit" class="cart-button card-button align-self-end position-absolute"><i class="fas fa-cart-plus fw-icon"></i></button>
                 </form>
               @foreach ($products_buy as $buynews)
                 @if($item->product_id === $buynews->product_id)
                 <form action="{{route('home.download',$item->id)}}" method="GET">
                   {{csrf_field()}}
                   <input type="hidden" name="id" value="{{$item->product_id}}">
                   <input type="hidden" name="name" value="{{$item->name}}">
                   <input type="hidden" name="price" value="{{$item->price}}">
                   <button type="submit" class="cart-button card-button align-self-end position-absolute"><i class="fas fa-cart-plus fw-icon"></i></button>
                 </form>
                  @endif
                 @endforeach 
               @endguest
                </div>
              </div> <!--card closed -->
            </a>
            </div> <!--col closed -->
            @endif
            @endforeach
            <div class="col">
              <div class="row">
              @foreach ($featured1 as $item)
              @if(!$loop->first)
              <div class="col-6 col-md-6 p-1">
                <a href="{{route('products.show',$item->id)}}">
                <div class="card card-homepage rounded-0 p-0" ><!--card opened-->
                  <img class="card-img-top m-0 rounded-0 " src="{{productImage($item->image)}}" >
              
                  <div class="card-body" style="text-decoration: none !important; color:white;">
                    <p class="card-title "><b>{{$item->name}}</b></p>
                  <!--  <p class="card-text card-platform text-secondary p-0 align-self-start position-absolute " ></p>!-->
                    <p class="card-text card-price p-0 align-self-end position-absolute"  ><b>
                      €  {{$item->price}}
                    </b></p>
                   
                    @guest
                 <form action="{{route('cart.store')}}" method="POST">
                   {{csrf_field()}}
                   <input type="hidden" name="id" value="{{$item->product_id}}">
                   <input type="hidden" name="name" value="{{$item->name}}">
                   <input type="hidden" name="price" value="{{$item->price}}">
                   <button type="submit" class="cart-button card-button align-self-end position-absolute"><i class="fas fa-cart-plus fw-icon"></i></button>
                 </form>
                 @else
                 <form action="{{route('cart.store')}}" method="POST">
                   {{csrf_field()}}
                   <input type="hidden" name="id" value="{{$item->product_id}}">
                   <input type="hidden" name="name" value="{{$item->name}}">
                   <input type="hidden" name="price" value="{{$item->price}}">
                   <button type="submit" class="cart-button card-button align-self-end position-absolute"><i class="fas fa-cart-plus fw-icon"></i></button>
                 </form>
               @foreach ($products_buy as $buynews)
                 @if($item->product_id === $buynews->product_id)
                 <form action="{{route('home.download',$item->id)}}" method="GET">
                   {{csrf_field()}}
                   <input type="hidden" name="id" value="{{$item->product_id}}">
                   <input type="hidden" name="name" value="{{$item->name}}">
                   <input type="hidden" name="price" value="{{$item->price}}">
                   <button type="submit" class="cart-button card-button align-self-end position-absolute"><i class="fas fa-cart-plus fw-icon"></i></button>
                 </form>
                  @endif
                 @endforeach 
               @endguest
                  </div>
                </div> <!--card closed -->
              </a>
              </div>
              @endif
              @endforeach
              
              
              </div>
            </div>
          </div><!--big row closed -->
         
       </div><!--container fluid closed-->
      </div> <!--carousel-item closed-->
      
      <div class="carousel-item"> <!--carousel-item opened-->
          
        <div class="container">
        
          <div class="row " ><!--big row opened-->
            @foreach ($featured2 as $item)
               @if($loop->first)
             <div class="col-12 col-md-7 p-1">
               <a href="{{route('products.show',$item->id)}}">
               <div class="card card-homepage rounded-0 p-0" ><!--card opened-->
                <img class="card-img-top m-0 rounded-0 " src="{{productImage($item->image)}}" >
             
                 <div class="card-body" >
                   <p class="card-title "><b>{{$item->name}}</b></p>
                   <!--<p class="card-text card-platform text-secondary p-0 align-self-start position-absolute " > </p>!-->
                   <p class="card-text card-price p-0 align-self-end position-absolute"  ><b>
                    € {{$item->price}}
                   </b></p>
                   @guest
                 <form action="{{route('cart.store')}}" method="POST">
                   {{csrf_field()}}
                   <input type="hidden" name="id" value="{{$item->product_id}}">
                   <input type="hidden" name="name" value="{{$item->name}}">
                   <input type="hidden" name="price" value="{{$item->price}}">
                   <button type="submit" class="cart-button card-button align-self-end position-absolute"><i class="fas fa-cart-plus fw-icon"></i></button>
                 </form>
                 @else
                 <form action="{{route('cart.store')}}" method="POST">
                   {{csrf_field()}}
                   <input type="hidden" name="id" value="{{$item->product_id}}">
                   <input type="hidden" name="name" value="{{$item->name}}">
                   <input type="hidden" name="price" value="{{$item->price}}">
                   <button type="submit" class="cart-button card-button align-self-end position-absolute"><i class="fas fa-cart-plus fw-icon"></i></button>
                 </form>
               @foreach ($products_buy as $buynews)
                 @if($item->product_id === $buynews->product_id)
                 <form action="{{route('home.download',$item->id)}}" method="GET">
                   {{csrf_field()}}
                   <input type="hidden" name="id" value="{{$item->product_id}}">
                   <input type="hidden" name="name" value="{{$item->name}}">
                   <input type="hidden" name="price" value="{{$item->price}}">
                   <button type="submit" class="cart-button card-button align-self-end position-absolute"><i class="fas fa-cart-plus fw-icon"></i></button>
                 </form>
                  @endif
                 @endforeach 
               @endguest
                 </div>
               </div> <!--card closed -->
             </a>
             </div> <!--col closed -->
             @endif
            @endforeach
             
             <div class="col">
               <div class="row">
                @foreach ($featured2 as $item)
                @if(!$loop->first)
               <div class="col-6 col-md-6 p-1">
                 <a href="{{route('products.show',$item->id)}}">
                 <div class="card card-homepage rounded-0 p-0" ><!--card opened-->
                  <img class="card-img-top m-0 rounded-0 " src="{{productImage($item->image)}}" >
               
                   <div class="card-body" style="text-decoration: none !important; color:white;">
                     <p class="card-title "><b>{{$item->name}}</b></p>
                    
                     <p class="card-text card-price p-0 align-self-end position-absolute"  ><b>
                      € {{$item->price}}
                     </b></p>
                    
                     @guest
                 <form action="{{route('cart.store')}}" method="POST">
                   {{csrf_field()}}
                   <input type="hidden" name="id" value="{{$item->product_id}}">
                   <input type="hidden" name="name" value="{{$item->name}}">
                   <input type="hidden" name="price" value="{{$item->price}}">
                   <button type="submit" class="cart-button card-button align-self-end position-absolute"><i class="fas fa-cart-plus fw-icon"></i></button>
                 </form>
                 @else
                 <form action="{{route('cart.store')}}" method="POST">
                   {{csrf_field()}}
                   <input type="hidden" name="id" value="{{$item->product_id}}">
                   <input type="hidden" name="name" value="{{$item->name}}">
                   <input type="hidden" name="price" value="{{$item->price}}">
                   <button type="submit" class="cart-button card-button align-self-end position-absolute"><i class="fas fa-cart-plus fw-icon"></i></button>
                 </form>
               @foreach ($products_buy as $buynews)
                 @if($item->product_id === $buynews->product_id)
                 <form action="{{route('home.download',$item->id)}}" method="GET">
                   {{csrf_field()}}
                   <input type="hidden" name="id" value="{{$item->product_id}}">
                   <input type="hidden" name="name" value="{{$item->name}}">
                   <input type="hidden" name="price" value="{{$item->price}}">
                   <button type="submit" class="cart-button card-button align-self-end position-absolute"><i class="fas fa-download"></i></button>
                 </form>
                  @endif
                 @endforeach 
               @endguest
                  </div>
                 </div> <!--card closed -->
               </a>
               </div>
               @endif
               @endforeach
               
              
              </div>
            </div>
          </div><!--big row closed -->
         
       </div><!--container fluid closed-->
      </div> <!--carousel-item closed-->
       
  </div> <!--carousel-inner closed-->

  <ol class="carousel-indicators" id="car-ind">
    <li data-target="#carindone" data-slide-to="0" class="active">  </li>
    <li data-target="#carindone" data-slide-to="1"></li>
  </ol>
</div>

<div class="container">
<div class="row" >
  <div class="col-12 col-md-6" >
  <div class="info-text position-relative p-1" type="text"><i class="fas fa-compass"></i>
    &nbsp; Discover Games
    
    <div class = "row " >
      @foreach($discover as $item)
  
      <div class="row no-gutters" >
          <hr class="separator mb-2" style="width:100%;background-color: rgb(145, 135, 140);" >
          <div class="card card-horizontal">
           
            <div class="row">
             
              <div class="col-4 " >
                <a href="{{route('products.show',$item->id)}}">
                  <img class="card-img m-1 p-2 rounded-0" src="{{productImage($item->image)}}" >  
                 
              </div>
              <div class="col-8 " >
                <div class="card-body ">
                 <p class="card-title position-absolute">{{$item->name}}</p>
                <!-- <p class="card-text card-platform p-0 text-secondary  position-absolute " > <small class="text-secondary"></small></p>!-->
                 <p class="card-text card-price position-absolute"  ><b>€ {{$item->price}}</b></p>
                 <a class="cart-button card-button position-absolute" href="#" ><i class="fas fa-cart-plus fw-icon"></i></a>
                 @guest
                 <form action="{{route('cart.store')}}" method="POST">
                   {{csrf_field()}}
                   <input type="hidden" name="id" value="{{$item->product_id}}">
                   <input type="hidden" name="name" value="{{$item->name}}">
                   <input type="hidden" name="price" value="{{$item->price}}">
                   <button type="submit" class="cart-button card-button align-self-end position-absolute"><i class="fas fa-cart-plus fw-icon"></i></button>
                 </form>
                 @else
                 <form action="{{route('cart.store')}}" method="POST">
                   {{csrf_field()}}
                   <input type="hidden" name="id" value="{{$item->product_id}}">
                   <input type="hidden" name="name" value="{{$item->name}}">
                   <input type="hidden" name="price" value="{{$item->price}}">
                   <button type="submit" class="cart-button card-button align-self-end position-absolute"><i class="fas fa-cart-plus fw-icon">&nbsp;</i></button>
                 </form>
               @foreach ($products_buy as $buynews)
                 @if($item->product_id === $buynews->product_id)
                 <form action="{{route('home.download',$item->id)}}" method="GET">
                   {{csrf_field()}}
                   <input type="hidden" name="id" value="{{$item->product_id}}">
                   <input type="hidden" name="name" value="{{$item->name}}">
                   <input type="hidden" name="price" value="{{$item->price}}">
                   <button type="submit" class="cart-button card-button align-self-end position-absolute"><i class="fas fa-download"></i></button>
                 </form>
                  @endif
                 @endforeach 
               @endguest
                </div>
              </div>
            </a>
            </div>
          
          </div>
      </div>
      @endforeach
      
  </div> <!--closing internal row!-->
 </div>  <!--closing info-text-->

</div>  <!--closing col !-->

<div class="col-12 col-md-6">
  <div class="info-text position-relative p-1" type="text" ><i class="fas fa-bullhorn"></i>
    &nbsp; Midweek Deals
  </div> <!--closing info text 2-->
  <div class="row no-gutters" >
    
    <hr class="separator mb-2" style="width:100%;background-color: rgb(145, 135, 140);" >
    @foreach($midweek as $item)
    <div class="col-6 col-md-6 p-1">
      <a href="{{route('products.show',$item->id)}}">
      <div class="card card-homepage latest-deals rounded-0 p-0" ><!--card opened-->
        <img class="card-img-top m-0 rounded-0 " src="{{productImage($item->image)}}" >
    
        <div class="card-body"  >
          <p class="card-title "><b>{{$item->name}}</b></p>
         <!-- <p class="card-text card-platform text-secondary p-0 align-self-start position-absolute " > </p>!-->
          <p class="card-text card-price p-0 align-self-end position-absolute"  ><b>
            €  {{$item->price}}
          </b></p>
          @guest
          <form action="{{route('cart.store')}}" method="POST">
            {{csrf_field()}}
            <input type="hidden" name="id" value="{{$item->product_id}}">
            <input type="hidden" name="name" value="{{$item->name}}">
            <input type="hidden" name="price" value="{{$item->price}}">
            <button type="submit" class="cart-button card-button align-self-end position-absolute"><i class="fas fa-cart-plus fw-icon"></i></button>
          </form>
          @else
          <form action="{{route('cart.store')}}" method="POST">
            {{csrf_field()}}
            <input type="hidden" name="id" value="{{$item->product_id}}">
            <input type="hidden" name="name" value="{{$item->name}}">
            <input type="hidden" name="price" value="{{$item->price}}">
            <button type="submit" class="cart-button card-button align-self-end position-absolute"><i class="fas fa-cart-plus fw-icon">&nbsp;</i></button>
          </form>
        @foreach ($products_buy as $buynews)
          @if($item->product_id === $buynews->product_id)
          <form action="{{route('home.download',$item->id)}}" method="GET">
            {{csrf_field()}}
            <input type="hidden" name="id" value="{{$item->product_id}}">
            <input type="hidden" name="name" value="{{$item->name}}">
            <input type="hidden" name="price" value="{{$item->price}}">
            <button type="submit" class="cart-button card-button align-self-end position-absolute"><i class="fas fa-download"></i></button>
          </form>
           @endif
          @endforeach 
        @endguest
        </div>
      </div> <!--card closed -->
    </div>
    @endforeach
    
    </div>
    </div>
    
      </div>
      </div>
</div>

