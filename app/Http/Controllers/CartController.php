<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Product;
class CartController extends Controller
{
    public function index(){
        return view('cart');
    }
    
    public function store(Request $request){
        
        $duplicates = Cart::search(function($cartItem,$rowId) use ($request) {
            return $cartItem->id === $request->id;
        });
        
        if($duplicates->isNotEmpty()){
            
            return redirect()->route('cart.index')->with('success_message','Oggetto Già presente nel carrello');
        }
        Cart::add($request->id,$request->name,1,$request->price)->associate('App\Product');
        //if( !$search ){
                
        //}
        

        return redirect()->route('cart.index')->with('success_message','Oggetto inserito correttamente nel carrello');
    }

    public function destroy($id){
        Cart::remove($id);
        return back()->with('success_message','Item was removed');
    }

    public function switchToSaveForLater($id){
       $item = Cart::get($id);
       Cart::remove($id);

       $duplicates = Cart::instance('saveForLater')->search(function($cartItem,$rowId) use ($id) {
        return $rowId === $id;
    });
    
    if($duplicates->isNotEmpty()){
        
        return redirect()->route('cart.index')->with('success_message','Oggetto Già presente nella Lista');
    }
       Cart::instance('saveForLater')->add($item->id,$item->name, 1, $item->price)->associate('App\Product');
       return redirect()->route('cart.index')->with('success_message','Oggetto Salvato nella lista dei desideri');
    }
}
