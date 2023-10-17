<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    
    public function create_course(){
        return view('admin.pages.courses.create-courses');
    }
    public function view_course(){
        return view('admin.pages.courses.view-courses');
    }
}
