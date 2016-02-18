<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller{

    public function showUsers(){
        $users = DB::table('users')->get();
        return json_encode($users);
    }

    public function showUser($id){
        $users = DB::table('users')->where('id',$id)->first();
        return json_encode($users);
    }

    public function showUserPost($user_id){
        $posts = DB::table('posts')->where('user_id',$user_id)->get();
        return json_encode($posts);
    }

    public function editUser(Request $request) {
        $data['firstname'] = $request->firstname;
        $data['lastname'] = $request->lastname;
        $data['email'] = $request->email;
        DB::table('users')->where('id', $request->id)->update($data);
    }
}
