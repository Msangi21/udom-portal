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
}
