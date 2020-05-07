@extends('games')

@section('content');
<style>
.hidden{
    width:560px;
    height:320px !important;
    
    margin-top:70px;
    margin-left:50px;
   
    border:4px solid  #ff0046 ;
   
}
.hidden2{
    width:120px;
    height:120px;
   top:360px !important;
}


</style>
<div class="carousel-nav" 
data-flickity='{ "asNavFor": ".carousel", "contain": true,"fullscreen":true, 
"pageDots": false}' >

@if($product->images != "[]")
@foreach (json_decode($product->images,true) as $single_image)
<div class="carousel-cell " alt=product>
    <img src="{{  productImage($single_image) }}"  /> 
</div>
@endforeach
@else
<div class="carousel-cell " alt=product>
<img src="{{ asset('images/undefined.png') }}"  /> 
</div>
@endif

</div>
  
  <div class="carousel-nav" 
  data-flickity='{ "asNavFor": ".carousel", "contain": true,"fullscreen":true, 
  "pageDots": false}' >
  @if($product->images != "[]")
  @foreach (json_decode($product->images,true) as $single_image)
  <div class="carousel-cell " alt=product>
      <img src="{{  productImage($single_image) }}"  /> 
  </div>
  @endforeach
  @else
  <div class="carousel-cell " alt=product>
  <img src="{{ asset('images/undefined.png') }}"  /> 
  </div>
  @endif
  
  </div>
  
  
  
  <div class="card-text card-title">{{$product->name}}</div>
  <div class="buy-item">
      <div class= "card card-game-page" > 
          <div class= "card-body" >
            <div class="card-text"><h3>Coming Soon!</h3></div>
          </div> 
      </div> 
  </div>
  
  <div class="position-static" style="margin-top:20px; !important">
  
      <div class="container" id="accordion">
        <div class="row">
          <div class="col-md-6">
          <div class="card card-collapse">
            <div class="card-header button-collapse" id="headingOne">
              <h5 class="mb-0">
                <button class="btn btn-link " data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Descrizione
                </button>
              </h5>
            </div>
        
            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
              <div class="card-body">
                {{$product->description}}
              </div>
            </div>
          </div>
          </div>
          <div class="col-md-6">
          <div class="card card-collapse">
            <div class="card-header button-collapse" id="headingTwo">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                 Genere
                </button>
              </h5>
            </div>
          
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
              @foreach ($categories as $item)
              <div class="card-body">
                {{$item->name}}
              </div>
              @endforeach
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card card-collapse">
            <div class="card-header button-collapse" id="headingThree" >
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Requisiti
                </button>
              </h5>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
              <div class="card-body">
                {!!$product->requisites!!}
              </div>
            </div>
          </div>
        </div>
      </div>
        
      </div>
  
  </div>
  
  @endsection