<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PostController extends Controller{

    public function showPosts(){
        $posts = DB::table('posts')->get();
        foreach ($posts as $post) {
            //Fetch's firstname and lastname;
            $user = DB::table('users')->where('id',$post->user_id)->first();
            $post->firstname = $user->firstname;
            $post->lastname = $user->lastname;
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

    public function showPost($id){
        $post = DB::table('posts')->where('id', $id)->first();
        if($post !== null){
            $tags = DB::table('post_tag')->where('post_id',$post->id)->get(['post_id', 'tag_id']);
            if(!empty($tags)){
                foreach ($tags as $tag) {
                    $names[] = DB::table('tags')->where('id',$tag->tag_id)->first(['name'])->name;
                }
                $post->tags = $names;
                $names = null;
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
        $tags = explode(', ', $request->tags);
        $linktable['post_id'] = DB::table('posts')->insertGetId($data);
        foreach ($tags as $tag) {
            $tagid = DB::table('tags')->where('name',$tag)->first(['id']);
            if($tagid === null){
                $newtag['name'] = $tag;
                $linktable['tag_id'] = DB::table('tags')->insertGetId($newtag);
                DB::table('post_tag')->insert($linktable);
            } else {
                $linktable['tag_id'] = $tagid->id;
                DB::table('post_tag')->insert($linktable);
            }
        }
    }

    public function deletePost(Request $request){
        DB::table('posts')->where('id', $request->id)->where('user_id', $request->user_id)->delete();
    }
}
