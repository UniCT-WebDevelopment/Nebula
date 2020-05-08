<?php

namespace App\Http\Controllers;

use Brick\Math\BigInteger;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Category;
use App\DownloadProduct;
use App\OrderProduct;
use App\Platform;
use App\Product;
use App\Order;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    { 
        
        $user_id = Auth::id();
        $platforms = Platform::all();
        $categories = Category::all();
        $products_buy = DB::table('order_product')->join('products','order_product.product_id','=' ,'products.id')
        ->where('order_product.user_id','=',$user_id)->get();
       
        if(request()->category){
            
            $products = Product::with('categories')->whereHas('categories',function($query){
                $query->where('slug',request()->category);
            })->whereHas('orders',function($query){
                $query->where('orders.user_id',Auth::id());
            })->get();
            
            
           
            $platforms = Platform::all();
        }
        else if(request()->platform){
            $products = Product::with('platforms')->whereHas('platforms',function($query){
                $query->where('name',request()->platform);
            })->get();
             $categories = Category::all();
            $platforms = Platform::all();
        }
        else{
            $products = DB::table('order_product')->join('products','order_product.product_id','=' ,'products.id')
                    ->where('order_product.user_id','=',$user_id)->get();

        $categories = Category::all();
        $platforms = Platform::all();
        }

        return view('account')->with([
            'products' => $products,
            'categories'=>$categories,
            'platforms'=>$platforms,
            ]);
    }

    public function download($id)
    {
       $product = DB::table('products')->join('download_product','products.id','download_product.product_id')
        ->join('downloads','downloads.id','download_product.download_id')
        ->where('active',1)->where('products.id','=',$id)->select('name')->get();

        $link = DB::table('products')->join('download_product','products.id','download_product.product_id')
        ->join('downloads','downloads.id','download_product.download_id')
        ->where('active',1)->where('products.id','=',$id)->select('link')->get();

        $version = DB::table('products')->join('download_product','products.id','download_product.product_id')
        ->join('downloads','downloads.id','download_product.download_id')
        ->where('active',1)->where('products.id','=',$id)->select('version')->get();
        $product = Product::find($id);
        $productDownload = $product->download()->get();
        $product_images = $product->images()->get();
        $categories = $product->categories()->get();

        $products_buy = DB::table('order_product')->join('products','order_product.product_id','=' ,'products.id')
        ->where('order_product.user_id','=',Auth::id())->get();
        if($productDownload->count() > 0){
      $path = json_decode($link[0]->link,true);
        $version = json_decode($version[0]->version,true);
        
      
       return response()->download(public_path(). "\storage\\" .$path[0]['download_link'],$path[0]['original_name'] . '_v' .$version);
        }
       else
       return view('layout.contents.gameunavailable',['product'=> $product,'product_images' => $product_images,'categories' => $categories,'products_buy' => $products_buy,'productDownload'=>$productDownload]);
    }

    public function search(Request $request){
        $request->validate([
            'query' => 'required|min:3',
        ]);

        $query = $request->input('query');

        $platforms = Platform::all();
        $categories = Category::all();

        /*$products = DB::table('order_product')->join('products','order_product.product_id','=' ,'products.id')
        ->where('order_product.user_id','=',Auth::id(),'and','products.name','like',$query)->get();//->take(15)->paginate(6);
      */
      $products = Product::where('name','like',"%$query%")->whereHas('orders',function($query){
        $query->where('orders.user_id',Auth::id());
    })->paginate(5);
           
        return view("home-search-results")->with([
            'products'=>$products,
        'categories'=>$categories,
        'platforms'=>$platforms,]);
    }
}
