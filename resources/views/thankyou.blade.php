@extends('layouts.app')

@section('title', 'Thank You')

@section('content')
   <div class="thank-you-section" style="margin-top:100px;">
       <h1>Grazie Mille</h1> <br>
       <p>Ti abbiamo inviato un email per confermare</p> <br>
       <div class="spacer"></div> <br>
       <div>
           <a href="{{ url('/') }}" class="button">Home Page</a>
       </div>
   </div>




@endsection