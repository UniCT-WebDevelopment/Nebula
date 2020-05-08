<?php

namespace App\Http\Controllers;

use App\Category;
use App\Platform;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Facades\DB;
class ProductsController extends Controller
{
    public function index()
    {
       $user_id = Auth::id();
       // $categories = Category::all();
        $platforms = Platform::all();
        $categories = Category::all();
        $products_buy = DB::table('order_product')->join('products','order_product.product_id','=' ,'products.id')
        ->where('order_product.user_id','=',$user_id)->take(15)->paginate(6);
       

        if(request()->category){
            $products = Product::with('categories')->whereHas('categories',function($query){
                $query->where('slug',request()->category);
            })->take(15)->paginate(12);
            
            
        }
        else if(request()->platform){
            $products = Product::with('platforms')->whereHas('platforms',function($query){
                $query->where('name',request()->platform);
            })->take(15)->paginate(12);
            

        }

        else if(request()->price){
            $products = Product::where('price','<',request()->price)->take(15)->paginate(12);
        }
        else{
            
        $products = Product::orderBy('name')->take(15)->paginate(12);
        
        }

        if(request()->sort == 'low_to_high'){
            $products = Product::orderBy('price')->take(15)->paginate(12);
        }
        else if(request()->sort == 'high_to_low'){
            $products = Product::orderBy('price','desc')->take(15)->paginate(12);
        }
      
       return view('products')->with([
           'products' => $products,
           'categories'=>$categories,
           'platforms'=>$platforms,
           'products_buy' => $products_buy,
           
           ]);
    }

    public function cart()
    {
        return view('cart');
    }
    public function download($id)
    {
        $product = Product::where('id',$id)->firstOrFail();
        return Storage::download('user.jpg');
    }

    public function show($id)
    {
        $product = Product::where('id',$id)->firstOrFail();
        $prod = Product::find($id);
        $downloadAvailable = $prod->download()->get();
       
        $categories = $product->categories()->get();
        $product_images = $product->images()->get();
       
        $user = Auth::id();
        
        $products_buy = DB::table('order_product')->join('products','order_product.product_id','=' ,'products.id')
        ->where('order_product.user_id','=',$user)->get();
        if($downloadAvailable->count() > 0)
        return view('layout.contents.gamecontent',['product'=> $product,'product_images' => $product_images,'categories' => $categories,'products_buy' => $products_buy,'downloadAvailable'=>$downloadAvailable]);
        else
        return view('layout.contents.gameunavailable',['product'=> $product,'product_images' => $product_images,'categories' => $categories,'products_buy' => $products_buy,'downloadAvailable'=>$downloadAvailable]);
        
    }

    public function search(Request $request){
        $request->validate([
            'query' => 'required|min:3',
        ]);

        $query = $request->input('query');

        $platforms = Platform::all();
        $categories = Category::all();

        $product = Product::where('name','like',"%$query%")->paginate(5);
       
        return view("search-results")->with(['product'=> 
        
        $product,'categories'=>$categories,
        'platforms'=>$platforms,]);
    }
    
}
