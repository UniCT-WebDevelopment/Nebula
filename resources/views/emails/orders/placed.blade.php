@component('mail::message')
    

        Grazie  {{$order->billing_name}} per aver acquistato su nebula.com
        Ordine ID : {{$order->id}} <br>
        Email Ordine : {{$order->billing_email}} <br>
    

        @foreach ($order->products as $product)
       
            Nome: {{$product->name}}    
            Prezzo: {{$product->price}}
        @endforeach

        Totale: {{$order->billing_total}}

@endcomponent