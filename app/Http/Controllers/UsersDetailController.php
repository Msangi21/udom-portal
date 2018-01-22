<?php

namespace App\Http\Controllers;

use App\User_detail;
use DB;
use Illuminate\Http\Request;

class UsersDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $detail = DB::table('colleges')->get();
        // return view('dashboard.seller.pages.address',compact('detail'));
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
     * @param  \App\User_detail  $user_detail
     * @return \Illuminate\Http\Response
     */
    public function show(User_detail $user_detail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User_detail  $user_detail
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //$userDetail = User_detail::findOrFail($id)->get();

     $userDetail =DB::table('user_details')->where('user_id',$id)->first();
     $detail =DB::table('colleges')->get();
         //dd($userDetail);
     return view('dashboard.seller.pages.address',compact('userDetail','detail'));
 }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User_detail  $user_detail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User_detail $user_detail,$id)
    {
       // $user_detail = User_detail::findOrFail($id);

        $mobile1 = $request->mobile1;
        $mobile2 = $request->mobile2;
        $collage_id= $request->collage;
        $block_no = $request->block;
        $room = $request->room;
        $user_id = $id;
        $status = true;

        $sql = "update user_details set user_id = '$user_id',college_id='$collage_id',mobile1='$mobile1',mobile2='$mobile2',block_no='$block_no',room='$room' where user_id = $user_id";

        $status = "update users set status ='$status' where id='$user_id'";
        $insert = "insert into user_details (user_id,college_id,mobile1,mobile2,block_no,room) values ('$user_id','$collage_id','$mobile1','$mobile2','$block_no','$room')";

        $select = "select * From user_details where user_id = '$user_id'";
        $countRow = DB::select($select);
        if(count($countRow) > 0){
            $result = DB::update($sql);
            if($result and DB::update($status)){
                return redirect()->back()->with('message','Edit Successful');
            }else{
                return redirect()->back()->with('error','Edit Fail');
            }
        }else{
            if(DB::insert($insert) ){
                return redirect()->back()->with('message','Status Complete');
            }else{
                return redirect()->back()->with('error','Something Wrong');
            }
        }

        

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User_detail  $user_detail
     * @return \Illuminate\Http\Response
     */
    public function destroy(User_detail $user_detail)
    {
        //
    }
}
