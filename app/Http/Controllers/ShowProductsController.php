<?php

namespace App\Http\Controllers;

use App\Products;
use Illuminate\Http\Request;
use Auth;
use DB;
use Response;

class ShowProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $electronics = Products::where('main_id',1)->paginate(4);
        // $fashion = Products::where('main_id',2)->paginate(4);
        
        // return view('dashboard.customer.categories',compact('electronics','fashion'));
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
        $products = Products::findOrFail($id);

        $images = DB::table('images')
        ->where('products_id',$id)
        ->get();

        foreach ($images as $key => $image) {
            $user_id = $image->user_id;
            
        }

        $user_details = DB::table('user_details')
                        ->select('user_details.id','user_details.user_id','user_details.college_id','user_details.mobile1','user_details.mobile2','user_details.block_no','user_details.room')
                        ->join('users','users.id','=','user_details.user_id')
                        ->join('colleges','colleges.id','=','user_details.college_id')
                        ->where('user_details.id',$user_id)
                        ->first();
        

        $college = DB::table('colleges')
                            ->select('college_name')
                            ->where('id','=',$user_details->college_id)
                            ->first();

        $user = DB::table('users')
                            ->select('first_name','last_name','email')
                            ->where('id','=',$user_id)
                            ->first();

        return view('dashboard.customer.showAd',compact('products','images','user_details','college','user'));
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

    public function search(Request $request){
        $req = $request->search;

        $select = Products::where('product_name','LIKE',"%{$req}%")->latest()->paginate(40);
        $count = count($select);

        return view('dashboard.customer.searchedItem',compact('select','req','count'));
    }

    public function selectedlink(Request $request,$id){
        $req = $id;

        $select = Products::where('sub_category_id','=',$req)->latest()->paginate(40);
        $count = count($select);

        return view('dashboard.customer.link',compact('select','req','count'));
    }

    public function othercategories(Request $request,$id){
        $req = $id;

        $select = Products::where('main_id','=',$req)->latest()->paginate(40);
        $count = count($select);

        return view('dashboard.customer.link',compact('select','req','count'));
    }

    public function autoComplete(Request $request){
        $search = $request->term;
        $select = Products::where('product_name','LIKE',"%{$search}%")->get();
       
        $data = [];

        foreach ($select as $key => $value) {
            $data [] = ['value' => $value->product_name];
        }

        return response($data);
    }
}