<?php

namespace App\Http\Controllers;

use App\Products;
use Illuminate\Http\Request;
use DB;
use Auth;
use Carbon\Carbon;
use Storage;
class SummaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::User()->id;
        $details = DB::table('products')
        ->select('products.id','products.main_id','products.sub_category_id','products.user_id','products.product_name','products.price','products.image_path','products.description','products.created_at')
        ->join('main_products','main_products.id','=','products.main_id')
        ->join('product_categories','product_categories.id','=','products.sub_category_id')
        ->join('users','users.id','=','products.user_id')
        ->where('products.user_id',Auth()->User()->id)
        ->latest()
        ->paginate(2);

        return view('dashboard.seller.home',compact('details'));
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
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function show(Products $products,$id)
    {
        $user_id = Auth::User()->id;
        $products = Products::findOrFail($id);

        $images = DB::table('images')->where('user_id',$user_id)
        ->where('products_id',$id)
        ->get();

        //return $images;

        return view('dashboard.seller.pages.show',compact('products','images'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function edit(Products $products,$id)
    {

        $product = Products::where('id',$id)->first();
        $category = DB::table('main_products')
                    ->select('id','name')->get();


        $result = DB::table('products')
                  ->join('main_products','products.main_id','=','main_products.id')
                  ->join('product_categories','products.sub_category_id','=','product_categories.id')
                  ->select('main_products.name as main','product_categories.category_name as category')
                  ->where('products.id',$id)
                  ->first();

       // return $result->main;
        return view('/dashboard.seller.pages.edit_product',compact('product','category','result'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Products $products)
    {
        $id = $request->id;
        $user_id = $request->user_id;
        $main_id = $request->product_category;
        $sub_category_id = $request->product_sub_category;
        $product_name = $request->product_name;
        $price = $request->price;
        $description = $request->description;

        
        $stmt = DB::table('products')
                ->where([
                    [
                        'id','=',$id
                    ],
                    [
                        'user_id','=',$user_id
                    ]
                    
                ])
                ->update(
                    [
                        'main_id','=',$main_id
                    ],
                    [
                        'sub_category_id','=',$sub_category_id
                    ],
                    [
                        'product_name'=>$product_name
                    ],
                    [
                        'price'=>$price
                    ],
                    [
                        'description'=>$description
                    ]
                   
               );

        if($stmt){
            return redirect()->back()->with('message','Edit Successful');
        }else{
            return redirect()->back()->with('error','Edit Failed');
            
        }

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy(Products $products,$id)
    {
        
        $products = Products::findOrFail($id);
        $main_image = $products->image_path;
        Storage::disk('public')->delete($main_image);

        $sql = DB::select('select * from images where products_id = ?', [$id]);
        
        foreach ($sql as $item) {
            Storage::disk('public')->delete($item->image_path);
            
        }

        
        $products->delete();


        
        return redirect()->back()->with('message','Product has been deleted');
    }
}
