<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function show(Request $request)
    {
        $txt_name = $request->input('name'); 
        $txt_hidden = $request->input('hidden'); 
        $txt_radio = $request->input('radio'); 
        

        $array = [
            "NAME" => $txt_name ,
            "ID"   => $txt_hidden ,
            "GEN"  => $txt_radio
        ];

        return view('page.page1',$array);
 
    }
    public function show_password(Request $request){
        return view('page.page11',$request);
    }
    #show_select
    public function show_select(Request $res){
        return view('page.page12',$res);
    }// end function show_select

    public function form_login(Request $res){
        # ค่าที่รับมา
        $txt_name = $res->input('username'); 
        $txt_pass = $res->input('password'); 
        # เงื่อนไขการทำงาน
        $users = DB::select('select * from users where username = ? and password = ?',
            [$res['username'],$res['password']]
        );
        foreach ($users as $value) {
            if($txt_name == $value->username){
                if($txt_pass == $value->password){
                    $data['status'] = "true";
                }
            }           
        }
        # ส่งค่าไปแสดงผล
        return view('page.form_login',['users'=>$users]);
    }

    public function form_check_login(Request $res){
        $users = DB::select('select * from users where username = ? and password = ?',
         [$res['username'],$res['password']]
        );
        return view('page.form_check_login',['users'=>$users]);
    }





    #form_login2
    public function form_login2(Request $res){

        $users = DB::table('users')->where([
            ['username','=',$res['username']],
            ['password','=',$res['password']]
        ])->get();
        $name ='';
        foreach($users as $value){
            $name = $value->id;
        }
        $res['name'] = $name;

        return view('page.form_login',$res);
    }












 
}//end class  


