<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AdminWebsiteController extends Controller
{
    public function home(){
        $users = DB::select('select * from users where role="student" ');
        return view('admin.pages.admin-home',['users'=>$users]);
    }
    public function create_course(){
        return view('admin.pages.courses.create-courses');
    }
    public function view_course(){
        return view('admin.pages.courses.view-courses');
    }
    public function create_department(){
        return view('admin.pages.departments.create-departments');
    }
    public function view_department(){
        return view('admin.pages.departments.view-departments');
    }
    public function enrollment_requests(){
        return view('admin.pages.requestmenu.enrollmentreq');
    }
    public function new_registrations(){
        return view('admin.pages.requestmenu.newrequests');
    }
   
}
