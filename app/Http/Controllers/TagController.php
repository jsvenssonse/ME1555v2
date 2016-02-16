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

    public function showTag($id){
        $tags = DB::select('SELECT * FROM tags WHERE id = :id', ['id' => $id]);
        return json_encode($tags);
    }
}
