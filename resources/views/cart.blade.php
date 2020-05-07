@extends('layout')
@section('title', 'Cart')
 
@section('content')

<link rel="stylesheet" href="{{url('assets/css/cart.css')}}">

<div class="cart-section container " style="margin-top:100px;display: flex !important; justify-content:center; !important;"" >
    <div>
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

        @if (Cart::count() > 0)

        <h2>{{ Cart::count() }} prodotti nel Carrello </h2>

        <div class="cart-table" >
           @foreach (Cart::content() as $item)
           <div class="card mb-3 card-horizontal" style="max-width: 540px; ">
            <a href="{{route('products.show',$item->id)}}">
            <div class="row no-gutters">
              <div class="col-md-4">
                <img class="card-img m-1 p-2 rounded-0" src="{{productImage($item->model->image)}}" >
                
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">&nbsp;{{$item->name}}</h5>
                  <div class="row">
                      
                    <p class="card-text col-6" style="display: flex !important; justify-content:flex-start; !important;">&nbsp;Prezzo:</p>
                    <p class="card-text col-6" style="display: flex !important; justify-content:flex-end; !important;">€ {{$item->price}}</p>
                </div>
                    <form style=" display: flex !important; justify-content:flex-end; !important;"  action="{{ route('cart.destroy', $item->rowId) }}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <button type="submit" class="cart-options">
                    Rimuovi
                </button>
                </form>
                </div>
              </div>
            </div>
          </div>
           
          <div class="row no-gutters" >
            <hr class="separator mb-2" style="width:100%;background-color: rgb(145, 135, 140);" >

        </div> 
        @endforeach
            <div class="cart-totals">
            
            <div class="cart-totals-right"> Totale: {{Cart::subtotal()}}</div>
            </div>
            <div class="spacer"></div>
                <a href="{{ route('products') }}" class="button card-game-btn cart-button  btn btn-primary" style="border:none;">Torna Indietro</a>
                @if(Auth::check())
                <a href="{{ route('checkout.index') }}" class="button card-game-btn cart-button btn btn-primary" style="border:none;margin:10px;">Checkout</a>
                @else
                <a href="{{ route('login') }}" class="button card-game-btn cart-button btn btn-primary" style="border:none;margin:10px;">Checkout</a>
                @endif
                <div class="spacer"></div>
            @else

                <h3>Il Carrello è Vuoto!</h3>
                <div class="spacer"></div>
                <a href="{{ route('products') }}" class="button card-game-btn cart-button btn btn-primary" style="border:none;">Torna Indietro</a>
                <div class="spacer"></div>

            @endif

        </div>
    </div> <!-- end cart-section -->
</div>
@endsection
