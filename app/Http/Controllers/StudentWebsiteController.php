<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class StudentWebsiteController extends Controller
{
    public function home(){
        return view('student.pages.student-home');
    }
    // public function arif(){
    //     $users = DB::select('select * from users');
    //     return view('student.pages.arif',['users'=>$users]);
    // }
    public function random_page(){
        return view('student.pages.random');
    }
    public function available_courses(){
        return view('student.pages.courses.available-courses');
    }
    public function course_recommendation(){
        return view('student.pages.courses.course-recommendation');
    }
    public function show_courses(){
        return view('student.pages.courses.course-show');
    }
}
