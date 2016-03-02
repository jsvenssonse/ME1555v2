<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CourseController extends Controller
{
    public function showCat($name){
        $courses = DB::table('courses')->where('cat',$name)->get();
        return json_encode($courses);
    }


    public function showCourses(){
        $courses = DB::table('courses')->get();
        foreach ($courses as $course) {
            //Fetch's firstname and lastname;
            $user = DB::table('users')->where('id',$course->user_id)->first();
            $course->firstname = $user->firstname;
            $course->lastname = $user->lastname;
            //Fetch tag names;
            $tags = DB::table('course_tag')->where('course_id',$course->id)->get(['course_id', 'tag_id']);
            if(!empty($tags)){
                foreach ($tags as $tag) {
                    $names[] = DB::table('tags')->where('id',$tag->tag_id)->first(['name'])->name;
                }
                $course->tags = $names;
                $names = null;
            }
        }
        return json_encode($courses);
    }

    public function showCourse($id){
        $course = DB::table('courses')->where('id', $id)->first();
        $tags = DB::table('course_tag')->where('course_id',$course->id)->get(['course_id', 'tag_id']);
        if(!empty($tags)){
            foreach ($tags as $tag) {
                $names[] = DB::table('tags')->where('id',$tag->tag_id)->first(['name'])->name;
            }
            $course->tags = $names;
            $names = null;
        }
        $steps =  DB::table('steps')->where('parent_type','course')->where('parent_id',$id)->get();
        if(!empty($steps)){
            foreach ($steps as $step) {
                $childsteps = DB::table('steps')->where('parent_type','step')->where('parent_id',$step->id)->get();
                if(!empty($childsteps)){
                    $step->childsteps = $childsteps;
                }
            }
            $course->steps = $steps;
        }
        return json_encode($course);
    }
}
