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
        $tag = DB::select('SELECT id FROM tags WHERE name = :name', ['name' => $name])[0];
        $post_ids = DB::select('SELECT post_id FROM post_tag WHERE tag_id = :tag_id', [':tag_id' => $tag->id]);
        if(!empty($post_ids)){
            foreach ($post_ids as $key) {
                $posts[] = DB::select('SELECT * FROM posts WHERE id = :post_id', ['post_id' =>  $key->post_id]);
            }
            return json_encode($posts);
        } else {
            return json_encode(false);
        }
    }
}
