<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
       
        return view('dashboard.admin.index');
    }

    public function addToken(Request $request){
        $token = $request->token_no;
        $amount = $request->level;

        //dd($amount);

        $select = "select * from payments_token where token = '$token'";
        $sql = DB::select($select);
       if(count($sql) > 0){
        return redirect()->back()->with("error","Token Exist");
       }else{
        $insert = DB::table('payments_token')
                ->insert(
                    [
                    'token'=>$token,
                    'amount'=>$amount,
                    'status'=>0
                    ]
                );

        if($insert){ 
            return redirect()->back()->with("message","Token Successful Addded");
        }else{
            return redirect()->back()->with("error","Token Failed to be Addded");
            
        }
    }

    }

    public function allToken(){
        $select = DB::table('payments_token')
                ->select('id','token','amount','status')
                ->latest('id')
                ->get();
        return view('dashboard.admin.alltoken',compact('select'));
    }

    public function edit($id){
        $token = DB::table('payments_token')
                ->select('id','token','amount','status')
                ->where('id','=',$id)
                ->first();
        return view('dashboard.admin.edittoken',compact('token'));
    }

    public function update(Request $request, $id){
        $token = $request->token;
        $amount = $request->level;

        $update = DB::table('payments_token')
                    ->where('id','=',$id)
                    ->update([
                        'token'=>$token,
                        'amount'=>$amount
                    ]);

        if($update){
            return redirect('/all-token');
        }
    }

    public function allUsers(){
        $users = DB::table('users')
                ->join('user_payments','users.id','=','user_payments.user_id')
                ->select('users.first_name','users.last_name','users.email'
                ,'users.status','user_payments.account_level as level')
                ->get();

        return view('dashboard.admin.allusers',compact('users'));
    }
}
