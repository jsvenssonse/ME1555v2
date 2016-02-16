<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller{

    public function showUsers(){
        $users = DB::select('SELECT * FROM users');
        return json_encode($users);
    }

    public function showUser($id){
        $users = DB::select('SELECT * FROM users WHERE id = :id', ['id' => $id]);
        return json_encode($users);
    }

    public function showUserPost($user_id){
        $posts = DB::select('SELECT * FROM posts WHERE USER_ID = :user_id', array('user_id' => $user_id));
        return json_encode($posts);
    }

    public function editUser(Request $request) {
        $data['firstname'] = $request->firstname;
        $data['lastname'] = $request->lastname;
        $data['email'] = $request->email;
        DB::table('users')->where('id', $request->id)->update($data);
    }
}
