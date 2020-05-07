
@extends('layout')

@section('title', 'Checkout')

@section('extra-css')
<style>
    .mt-32 {
        margin-top: 32px;
    }
</style>

<script src="https://js.stripe.com/v3/"></script>

@endsection

@section('content')

<div class="container">
    @if (session()->has('success_message'))
    <div class="spacer"></div>
    <div class="alert alert-success">
        {{ session()->get('success_message') }}
    </div>
@endif

@if(count($errors) > 0)
    <div class="spacer"></div>
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{!! $error !!}</li>
            @endforeach
        </ul>
    </div>
@endif
    <div class="py-5 text-center">
        <h1 class="checkout-heading stylish-heading">Checkout</h1>
    </div>

    <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <p class="text-muted">Il tuo carrello</p>
          <p class="badge badge-secondary badge-pill">{{Cart::instance()->count()}}</p>
        </h4>

        <ul class="list-group mb-3">
           
            @foreach (Cart::content() as $item)
            <li class="list-group-item d-flex justify-content-between lh-condensed" style="background-color:black;border:none;">
              <img class="checkout-table-img" src="{{productImage($item->model->image)}}" width="100" height="75">  
                <div>
              <h6 class="my-0">{{$item->model->name}}</h6>
              <small class="text-muted">{{$item->model->platform}}</small>
            </div>
            <span class="text-muted" >{{$item->model->price}}</span>
          </li>
          @endforeach
          <li class="list-group-item d-flex justify-content-between" style="background-color:#202;border:none;">
            <span>Totale</span>
            <strong>{{Cart::subtotal()}}</strong>
          </li>
        </ul>
      </div>

      <div class=" col-md-8 order-md-1 ">
        <form  action="{{route('checkout.store')}}" method="POST" id="payment-form">
            {{ csrf_field() }}
                <div class="form-group">
                    <label for="email">Indirizzo Email</label>
                    @if (auth()->user())
                        <input type="email" class="form-control" id="email" name="email" value="{{ auth()->user()->email }}" readonly>
                    @else
                        <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
                    @endif
                </div>
                <div class="form-group">
                    <label for="name">Nome</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
                </div>

                <div class="form-group">
                    <label for="address">Indirizzo</label>
                    <input type="text" class="form-control" id="address" name="address" value="{{ old('address') }}" required>
                </div>

                <div class="half-form">
                    <div class="form-group">
                        <label for="city">Città</label>
                        <input type="text" class="form-control" id="city" name="city" value="{{ old('city') }}" required>
                    </div>
                    <div class="form-group">
                        <label for="province">Provincia</label>
                        <input type="text" class="form-control" id="province" name="province" value="{{ old('province') }}" required>
                    </div>
                </div> <!-- end half-form -->

                <div class="half-form">
                    <div class="form-group">
                        <label for="postalcode">CAP</label>
                        <input type="text" class="form-control" id="postalcode" name="postalcode" value="{{ old('postalcode') }}" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Telefono</label>
                        <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone') }}" required>
                    </div>
                </div> <!-- end half-form -->
                <div class="spacer"></div>
            
            <h2>Pagamento</h2>
    
                    <div class="form-group">
                        <label for="name_on_card">Nome sulla carta</label>
                        <input type="text" class="form-control" id="name_on_card" name="name_on_card" value="">
                    </div>
                    
                    <div class="form-group">
                      
                       <!-- <div id="card-element"></div>-->
                      
                       <div class="row  " >
                         <div class="col-10 col-md-4 mt-2">
                          <label for="card-number">
                            Numero Carta:
                          </label>
                          <div id="card-number"></div>
                          <div id="card-errors" role="alert"></div>
                        </div>

                        <div class="col-8 col-md-2 mt-2">
                          <label for="card-expiry mt-1" >
                           Valida Fino:
                          </label>
                          <div id="card-expiry"></div>
                          <div id="card-errors" role="alert"></div>
                        </div>
                        
                        <div class="col-4 col-md-2 mt-2">
                          <label for="card-cvc">
                            CVC:
                          </label>
                          <div id="card-cvc"></div>
                          <div id="card-errors" role="alert"></div>
                      </div>
                        <!-- Used to display form errors -->
                        <div id="card-errors" role="alert"></div>
                    </div>
                  </div>
               
                    <div class="spacer"></div>
                    <div class="spacer"></div>
                    <button type="submit" id="complete-order" class="button-primary full-width">Complete Order</button>
            </form>
        </div>
    </div> <!-- end checkout-section -->
    </div>

@endsection

@section('extra-js')
<script>
    (function(){

    var stripe = Stripe('pk_test_a6gsC9u4KcdAhipy96E2yEDS001HvXEUIq');

// Create an instance of Elements.
var elements = stripe.elements();

// Custom styling can be passed to options when creating an Element.
// (Note that this demo uses a wider set of styles than the guide below.)
var style = {
  base: {
    color: '#32325d',
    fontFamily: '"Lucida Grande","Geneva","Arial",sans-serif',
    fontSmoothing: 'antialiased',
    fontSize: '16px',
    '::placeholder': {
      color: '#aab7c4'
    }
  },
  invalid: {
    color: '#fa755a',
    iconColor: '#fa755a'
  }
};

// Create an instance of the card Element.
/*
var card = elements.create('card', {
                style: style,
                hidePostalCode:true,
            });
card.mount('#card-element');*/
// Add an instance of the card Element into the `card-element` <div>.

var cardNumber = elements.create('cardNumber',{
  style:style,
});
cardNumber.mount('#card-number');

var cardExpiry = elements.create('cardExpiry',{
  style:style,
});
cardExpiry.mount('#card-expiry');

var cardCvc = elements.create('cardCvc',{
  style:style,
});
cardCvc.mount('#card-cvc');

// Handle real-time validation errors from the card Element.
/*
card.addEventListener('change', function(event) {
  var displayError = document.getElementById('card-errors');
  if (event.error) {
    displayError.textContent = event.error.message;
  } else {
    displayError.textContent = '';
  }
});*/

// Handle form submission.
var form = document.getElementById('payment-form');
form.addEventListener('submit', function(event) {
  event.preventDefault();

    document.getElementById('complete-order').disabled = true;
    var options = {
        name:document.getElementById('name_on_card').value,
        address_line1: document.getElementById('address').value,
        address_city: document.getElementById('city').value,
        address_state: document.getElementById('province').value,
        address_zip: document.getElementById('postalcode').value,
    }
  stripe.createToken(cardNumber,options).then(function(result) {
    if (result.error) {
      // Inform the user if there was an error.
      var errorElement = document.getElementById('card-errors');
      errorElement.textContent = result.error.message;

      document.getElementById('complete-order').disabled = false;
    } else {
      // Send the token to your server.
      stripeTokenHandler(result.token);
    }
  });
});

// Submit the form with the token ID.
function stripeTokenHandler(token) {
  // Insert the token ID into the form so it gets submitted to the server
  var form = document.getElementById('payment-form');
  var hiddenInput = document.createElement('input');
  hiddenInput.setAttribute('type', 'hidden');
  hiddenInput.setAttribute('name', 'stripeToken');
  hiddenInput.setAttribute('value', token.id);
  form.appendChild(hiddenInput);

  // Submit the form
  form.submit();
}
})();
</script>
@endsection