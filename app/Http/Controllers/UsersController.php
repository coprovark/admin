<?php
namespace App\Http\Controllers;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function list_users()
    {
      $find = '';
      $users = DB::table('users')->select('*')->get();
      return view('page.list_user',[
        'data_list' => $users,
        'find'      => $find
      ]);
    }

    public function list_users_find(Request $req){
      $find = $req->find;
      $users = DB::table('users')
                  ->select('*')
                  ->where('id','=',$find)
                  ->get();
      return view('page.list_user',[
        'data_list' => $users,
        'find'      => $find
      ]);
    }



    public function delete_users($id){
      DB::table('users')->where('id', '=', $id)->delete();
      return redirect('list_users');
    }

    public function form_register_save(Request $req){
      
      $status = DB::table('users')->insert(
        //<input type="text" name="USERNAME" class="form-control">
        //<select name="STATUS" class="form-control">
        [
          'id'      => $req->ID,
          'username'=> $req->USERNAME,
          'password'=> $req->PASSWORD,
          'status'  => $req->STATUS
        ]
      );
      if($status){
         return redirect('list_users');
      }else{
         return "เกิดข้อผิดพลาด";
      }
     
    }

}