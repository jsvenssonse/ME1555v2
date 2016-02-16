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
}
