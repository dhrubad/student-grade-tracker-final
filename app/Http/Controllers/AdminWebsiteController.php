<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AdminWebsiteController extends Controller
{
    // db sql command to get student list
    public function home(){
        $users = DB::select('select * from users where role="student" ');
        return view('admin.pages.admin-home',['users'=>$users]);
    }

    
    
    public function enrollment_requests(){
        return view('admin.pages.requestmenu.enrollmentreq');
    }
    public function new_registrations(){
        return view('admin.pages.requestmenu.newrequests');
    }
   
}
