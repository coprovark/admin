<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
        $user = "admin";
        $pass = "1234";
        $status = 0;
        $txt_name = $res->input('username'); 
        $txt_pass = $res->input('password'); 
        if($txt_name = "admin"){
            if($txt_pass = "1234"){
                $status = 1;
            }
        }
        if($status == 1){
            $data['status'] = "true";
        }
        return view('page.form_login',$data);
    }


 
}//end class  


