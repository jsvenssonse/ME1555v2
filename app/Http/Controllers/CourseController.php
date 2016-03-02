<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CourseController extends Controller
{
    public function showCourses(){
        $courses = DB::table('courses')->get();
        foreach ($courses as $course) {
            $steps = DB::table('steps')->where('parent_type','course')->where('parent_id',$course->id)->get();
            $course->steps = $steps;
        }
        var_dump($courses);
        return json_encode($courses);
    }

    public function showCourse($id){
        $course = DB::table('courses')->where('id', $id)->first();
        $steps =  DB::table('steps')->where('parent_type','course')->where('parent_id',$id)->get();
        $course->steps = $steps;

        return json_encode($course);
    }
}
