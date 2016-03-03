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

    public function showUserCourses($user_id){

    }

    public function showUser($id){
        $users = DB::table('users')->where('id',$id)->first();
        return json_encode($users);
    }

    public function showUserPosts($user_id){
        $posts = DB::table('posts')->where('user_id',$user_id)->get();
        foreach ($posts as $post) {
            //Fetch tag names;
            $tags = DB::table('post_tag')->where('post_id',$post->id)->get(['post_id', 'tag_id']);
            if(!empty($tags)){
                foreach ($tags as $tag) {
                    $names[] = DB::table('tags')->where('id',$tag->tag_id)->first(['name'])->name;
                }
                $post->tags = $names;
                $names = null;
            }
        }
        return json_encode($posts);
    }

    public function editUser(Request $request) {
        $data['firstname'] = $request->firstname;
        $data['lastname'] = $request->lastname;
        $data['email'] = $request->email;
        DB::table('users')->where('id', $request->id)->update($data);
    }
}
