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
        $reg = $request->reg;
        $mobile1 = $request->mobile1;
        $mobile2 = $request->mobile2;
        $collage_id= $request->collage;
        $block_no = $request->block;
        $room = $request->room;
        $user_id = $id;
        $status = true;

        $sql = "update user_details set user_id = '$user_id',college_id='$collage_id',reg='$reg',mobile1='$mobile1',mobile2='$mobile2',block_no='$block_no',room='$room' where user_id = $user_id";

        $status = "update users set status ='$status' where id='$user_id'";
        $insert = "insert into user_details (user_id,college_id,reg,mobile1,mobile2,block_no,room) values ('$user_id','$collage_id','$reg','$mobile1','$mobile2','$block_no','$room')";

        $select = "select * From user_details where user_id = '$user_id'";
        $check_reg = "select * from user_details where reg = '$reg'";
        $countRow = DB::select($select);
        $count_reg = count(DB::select($check_reg));
        
        if(count($countRow) > 0){
            $result = DB::update($sql);
            if($result){
                DB::update($status);
                return redirect()->back()->with('message','Edit Successful');
            }else{
                return redirect()->back()->with('error','Edit Fail');
            }
        }else{
            if(DB::insert($insert) && $count_reg < 1){
                DB::update($status);
                return redirect()->back()->with('message','Status Complete');
            }else{
                return redirect()->back()->with('error','Something Wrong or User already Exist');
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
