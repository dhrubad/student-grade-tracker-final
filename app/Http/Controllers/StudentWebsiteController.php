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
    // public function random_page(){
    //     return view('student.pages.random');
    // }


    public function available_courses(){
        return view('student.pages.courses.available-courses');
    }

    public function course_recommendation(){
        return view('student.pages.courses.course-recommendation');
    }

    public function show_courses(){
        return view('student.pages.courses.course-show');
    }

    public function view_enrollment(){
        return view('student.pages.enrollment.enrollmentstatus');
    }

    public function new_enrollment(){
        return view('student.pages.enrollment.new-enrollment');
    }

    public function view_reports(){
        return view('student.pages.reports.view-reports');
    }

    public function print_enrollment(){
        return view('student.pages.reports.enrollment-form');
    }

    public function print_results(){
        return view('student.pages.reports.results');
    }
}
