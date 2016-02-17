<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PostController extends Controller{

    public function showPosts(){
        $posts = DB::select('SELECT * FROM posts');
        return json_encode($posts);
    }

    public function showPost($id){
        $posts = DB::select('SELECT * FROM posts WHERE id = :id', ['id' => $id]);
        return json_encode($posts);
    }
    
    public function editPost(Request $request) {
        $data['title'] = $request->title;
        $data['content'] = $request->content;
        DB::table('posts')->where('id', $request->id)->update($data);
    }
    
    public function createPost(Request $request) {
        $data['title'] = $request->title;
        $data['content'] = $request->content;
        $data['user_id'] = $request->user_id;
        DB::table('posts')->insertGetId(['title' => $data['title'], 'content' => $data['content'], 'user_id' => $data['user_id']]);
    }
}
