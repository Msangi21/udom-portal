<?php

namespace App\Http\Controllers;

use App\Products;
use DB;
use Carbon\Carbon;
use Auth;
use Illuminate\Http\Request;

class UserAccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = Auth::user()->id;
        
        $status = DB::table('user_payments')
                            ->join('users','user_payments.user_id','=','users.id')
                            ->select('user_payments.account_level as level','users.total_ads as total',
                            'user_payments.updated_at as time','users.first_name','users.last_name')
                            ->where('user_payments.user_id',$user_id)
                            ->first();

        $level = $status->level;
        $totalads = $status->total;
        $time_remain = $status->time;
        $name = $status->first_name." ".$status->last_name;


      $days = (new Carbon($time_remain))->diffInDays();

        //ad's remain
        if($level == 1){
            $ads_reamin = 2-$totalads;
            $days_remain = 30 - $days;
        }else if($level == 2){
            $ads_reamin = 15-$totalads;
            $days_remain = 60 - $days;
        }else if($level == 3){
            $ads_reamin = 50-$totalads;
            $days_remain = 120 - $days;
        }

        return view('dashboard.seller.pages.useraccount',compact('status','ads_reamin','days_remain','name','level'));
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
