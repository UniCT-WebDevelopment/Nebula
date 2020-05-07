<?php

namespace App\Http\Controllers;

use App\Http\Requests\CheckoutRequest;
use Illuminate\Http\Request;

use Exception;
use Gloudemans\Shoppingcart\Facades\Cart;
use Cartalyst\Stripe\Laravel\Facades\Stripe as Stripe;
use Illuminate\Support\Facades\Auth;
use App\Order;
use App\OrderProduct;
use App\Mail\OrderPlaced;

use Illuminate\Support\Facades\Mail;
class CheckoutController extends Controller
{
     

    public function index(){
        return view('checkout');
    }

    public function store(CheckoutRequest $request){
        
            $contents = Cart::content()->map(function ($item){
                return $item->id . ', ' . $item->name;
                 
            })->values()->toJson();
            
          
            $charge = Stripe::charges()->create([
                'amount' => Cart::subtotal() ,
                'currency' => 'EUR',
                'source' => $request->stripeToken,
                'description' => 'Order',
                'receipt_email' => $request->email,
                'metadata' => [
                'contents' => $contents,
                ],  
            ]);

            //insert order table
           $order = $this->addToOrdersTables($request);

            Mail::to($request->email)->send(new OrderPlaced($order));
            Cart::instance('default')->destroy();
            return redirect()->route('confirmation.index')->with('success_message','Grazie! Per il tuo ordine');
        
        
              
        
    }

    protected function addToOrdersTables($request){
        $id = auth()->user() ? auth()->user()->id : null;
        $order = Order::create([
            'user_id' => auth()->user() ? auth()->user()->id : null,
            'billing_email' => $request->email,
            'billing_name' => $request->name,
            'billing_address' => $request->address,
            'billing_city' => $request->city,
            'billing_name_on_card' => $request->name_on_card,
            'billing_total' => Cart::subtotal(),
            //'error' => $error,

        ]);
        
        foreach(Cart::content() as $item ){
            OrderProduct::create([
                'order_id' => $order->id,
                'user_id' => $id,
                'product_id' => $item->model->id,
            ]);
        }
     //   dd($id);
     return $order;
    }
}
