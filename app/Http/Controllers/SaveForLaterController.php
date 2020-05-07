<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;


class SaveForLaterController extends Controller
{
    public function destroy($id){
        Cart::instance('SaveForLater')->remove($id);
    }

    public function switchToCart($id){
        $item = Cart::get($id);
        Cart::remove($id);
 
        $duplicates = Cart::instance('default')->search(function($cartItem,$rowId) use ($id) {
         return $rowId === $id;
     });
     
   //  if($duplicates->isNotEmpty()){
         
         return redirect()->route('cart.index')->with('success_message','Oggetto Già presente nel carrello');
 //    }
        Cart::instance('default')->add($item->id,$item->name, 1, $item->price)->associate('App\Product');
        return redirect()->route('cart.index')->with('success_message','Oggetto inserito nel carrello');
}
}
