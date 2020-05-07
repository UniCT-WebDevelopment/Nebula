@extends('layouts.app')

@section('content')
<div class="container" style="margin-top:100px">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <div class="row d-flex justify-content-center">
   
        <div class="card card-homepage col-10">
        <div class="card-body">
            <div class="col-10 ">
                <img src="/storage/{{ Auth::user()->avatar }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
                <h2>Profilo di {{ $user->name }}</h2>
                <form enctype="multipart/form-data" action="/profile" method="POST">
                    <label>Modifica Foto Profilo</label>
                    <input type="file" name="avatar"><br><br>
                    <div class="row">
                    <label class="m-1">Modifica Username: </label>
                    <input type="text" class="m-1" name="name" style="background:rgb(255,255,255,0.1);color:white;border:none;">
                    </div>
                    <div class="row">
                    <label class="m-1">Modifica Email: </label>
                    <input type="text" class="m-1" name="email" style="background:rgb(255,255,255,0.1);color:white;border:none;">
                    </div>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}"><br>
                    <input type="submit"  class="pull-right btn btn-sm btn-primary m-1">
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection