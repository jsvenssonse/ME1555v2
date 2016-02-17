<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PostController extends Controller{

    public function showPosts(){
        $posts = DB::table('posts')->get();
        $tagnames = array();
        foreach ($posts as $post) {
            $tags = DB::table('post_tag')->where('post_id',$post->id)->get(['post_id', 'tag_id']);
            foreach ($tags as $tag) {
                $names = DB::table('tags')->where('id',$tag->tag_id)->get(['name']);
                foreach ($names as $name) {
                    $tagnames[] = $name->name;
                }
            }
            if(isset($tagnames)){
                $post->tags = $tagnames;
                $tagnames = null;
            }
        }
        return json_encode($posts);
    }

    public function showPost($id){
        $post = DB::table('posts')->where('id', $id)->first();
        if($post !== null){
            $tags = DB::table('post_tag')->where('post_id',$id)->get(['post_id', 'tag_id']);
            foreach ($tags as $tag) {
                $names = DB::table('tags')->where('id',$tag->tag_id)->get(['name']);
                foreach ($names as $name) {
                    $tagnames[] = $name->name;
                }
            }
            if(isset($tagnames)){
                $post->tags = $tagnames;
                $tagnames = null;
            }
            return json_encode($post);
        } else {
            return json_encode("post missing");
        }
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
        DB::table('posts')->insert($data);
    }

    public function deletePost(Request $request){
        DB::table('posts')->where('id', $request->id)->where('user_id', $request->user_id)->delete();
    }
}
