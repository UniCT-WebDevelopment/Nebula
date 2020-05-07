@component('mail::message')
Grazie per esserti registrato su Nebula.com
    Le tue credenziali : <br>
    Nome : {{$user['name']}}<br>
    Email : {{$user['email']}}<br>
    
    A presto!
@endcomponent