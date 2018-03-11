<?php

namespace App\Http\Controllers;
use Storage;
use Auth;
use DB;
use Carbon\carbon;
//use Illuminate\Support\Carbon;
use App\Jobs\ImagesUpload;
use App\Products;
use Illuminate\Http\Request;

class ProductiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $product = new Products;
        $id = Auth::User()->id;
        $now = Carbon::now();

        //return $prod_id;

        $request->validate([
            'main_image' => 'required',
            'main_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:30000',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:30000',
        ]);

        //check the number of file uploaded

        $num = DB::table('users')
                        ->select('total_ads')
                        ->where('id','=',$id)
                        ->first();

        

        //main image and product details save in database

        $main_image = $request->main_image;
        $imageName = $request->main_image->store('main_image','public');
        $product->main_id = $request->product_category;
        $product->sub_category_id = $request->product_sub_category;
        $product->user_id = $id;
        $product->product_name = $request->product_name;
        $product->price = $request->price;
        $product->image_path = $imageName;
        $product->description = $request->description;
        

        if($product->save()){
            $total_ads = $num->total_ads + 1;
            DB::table('users')
                    ->where('id','=',$id)
                    ->update(['total_ads'=>$total_ads]);
                    
        } 

           //Multiple more images save in file and database

        $product_id = Products::where('user_id',$id)->latest()->first();
        $prod_id = $product_id->id;

        if($request->hasFile('images')){
            foreach ($request->images as $image) {
             $imageName = $image->getClientOriginalName();

             
             $image_path = $image->store('sub_image', 'public');
             DB::table('images')->insert([
                ['user_id' => $id,'products_id'=>$prod_id,'image_path' => $image_path,'created_at' => $now,'updated_at' => $now],
            ]);

             
         }
         
     }
     
     return redirect()->back()->with('message','Your Product successful uploaded');
 }

    /**
     * Display the specified resource.
     *
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function show(Products $products)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function edit(Products $products)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy(Products $products)
    {
        //
    }
}
