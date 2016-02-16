<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class TagController extends Controller
{
    public function showTags(){
        $tags = DB::select('SELECT * FROM tags');
        return json_encode($tags);
    }

    public function showTag($name){
        $tag_id = DB::select('SELECT "id" FROM tags WHERE name = :name', ['name' => $name]);
        return $tag_id;
        $posts = DB::select('SELECT "post_id" FROM post_tag WHERE tag_id = :tag_id', [':tag_id' => $tag_id]);
        $post = DB::select('SELECT * FROM posts WHERE id = :id');
        return json_encode($tas);
    }
}
