<?php

namespace App\Http\Controllers;

use App\Highlight;
use Illuminate\Http\Request;
use App\Product;
use App\Types;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     //   $news_sect = DB::table('products')->join('product_types','products.id','=' ,'product_types.product_id')->where('product_types.types_id',1)->get();
       // $high_sect = DB::table('highlights')->join('product_types','products.id','=' ,'product_types.product_id')->where('product_types.types_id',2)->get();
       // $discover = DB::table('products')->join('product_types','products.id','=' ,'product_types.product_id')->where('product_types.types_id',4)->get();
       // $featured = DB::table('products')->join('product_types','products.id','=' ,'product_types.product_id')->where('product_types.types_id',3)->get();
       // $midweek = DB::table('products')->join('product_types','products.id','=' ,'product_types.product_id')->where('product_types.types_id',5)->get();
       // return view('index',['news_sect' => $news_sect,'high_sect' => $high_sect,'discover' => $discover,'featured' => $featured,'midweek' => $midweek]);
       /* $news_sect = DB::table('anews')->join('products','anews.product_id','=' ,'products.id')->get();
        $high_sect = DB::table('highlights')->join('products','highlights.product_id','=' ,'products.id')->get();//->where('product_types.types_id',2)->get();
        $discover = DB::table('discovers')->join('products','discovers.product_id','=' ,'products.id')->get();//->where('product_types.types_id',2)->get();
        $featured1 = DB::table('featured_sales1s')->join('products','featured_sales1s.product_id','=' ,'products.id')->get();//->where('product_types.types_id',2)->get();
        $featured2 = DB::table('featured_sales2s')->join('products','featured_sales2s.product_id','=' ,'products.id')->get();//->where('product_types.types_id',2)->get();
        $midweek = DB::table('midweeks')->join('products','midweeks.product_id','=' ,'products.id')->get();//->where('product_types.types_id',2)->get();
        $platform = DB::table('platform_product')->get();*/
        // $high_sect = $products->highlights()->get();
        $user = Auth::id();
        $products = Product::all();
        //$platform = DB::table('platform_product')->get();
      //  $productsSections = $products->sections()->get();
      $news_platform = DB::table('platform_product')->join('products','platform_product.product_id','=' ,'products.id')
      ->join('product_section','product_section.product_id','=' ,'products.id')
      ->where('product_section.section_id','=',1)->get();

        $products_buy = DB::table('order_product')->join('products','order_product.product_id','=' ,'products.id')
        ->where('order_product.user_id','=',$user)->get();
        
        $news_sect = DB::table('product_section')->join('products','product_section.product_id','=' ,'products.id')
        ->where('product_section.section_id','=',1)->get();
        $high_sect = DB::table('product_section')->join('products','product_section.product_id','=' ,'products.id')
        ->where('product_section.section_id','=',2)->get();
        $featured1 = DB::table('product_section')->join('products','product_section.product_id','=' ,'products.id')
        ->where('product_section.section_id','=',3)->get();
        $featured2 = DB::table('product_section')->join('products','product_section.product_id','=' ,'products.id')
        ->where('product_section.section_id','=',4)->get();
        $discover = DB::table('product_section')->join('products','product_section.product_id','=' ,'products.id')
        ->where('product_section.section_id','=',5)->get();
        $midweek = DB::table('product_section')->join('products','product_section.product_id','=' ,'products.id')
        ->where('product_section.section_id','=',6)->get();
       
        return view('index',['news_sect' => $news_sect,'high_sect' => $high_sect,'discover' => $discover,
        'featured1' => $featured1,'featured2' => $featured2,'midweek' => $midweek,'news_platform' => $news_platform,'user' => $user,'products_buy' => $products_buy]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
