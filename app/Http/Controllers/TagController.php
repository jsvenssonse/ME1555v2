<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class TagController extends Controller {

    public function showTags() {
        $tags = DB::select('SELECT * FROM tags');
        return json_encode($tags);
    }

    public function showTag($name) {
        $tag = DB::table('tags')->where('name',$name)->first();
        $course_id = DB::table('course_tag')->where('tag_id',$tag->id);
        if(!empty($course_id)){
            foreach ($course_id as $key) {
                $courses[] = DB::select('SELECT * FROM posts WHERE id = :post_id', ['post_id' =>  $key->post_id]);
            }
            return json_encode($courses);
        } else {
            return json_encode(false);
        }
    }

    public function createTag(Request $request) {
        $data['name'] = $request->name;
        DB::table('tags')->insertGetId(['name' => $data['name'] ]);

    }

}
