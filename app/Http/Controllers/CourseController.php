<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\Course;
use DB;

class CourseController extends Controller
{
    
    public function create_course(){
        $departments = Department::all(); //select * from departments

        return view('admin.pages.courses.create-courses', compact('departments'));
    }
    public function view_course(){
        //Eloquent
        // $courses = Course::join('departments', 'courses.department_id', 'departments.id')
        //                     ->select('courses.*', 'departments.name as dept_name')
        //                     ->get();
        //Query Builder
        $courses = DB::table('courses')->join('departments', 'courses.department_id', 'departments.id')
                            ->select('courses.*', 'departments.name as dept_name')
                            ->get();
        // dd($courses);
        return view('admin.pages.courses.view-courses',compact('courses'));
    }
    public function store(Request $req){
        $obj = new Course();
        
        $obj->name  = $req->name;
        $obj->short_name  = $req->shortName;
        $obj->course_code  = $req->course_code;
        $obj->credit  = $req->credit;
        $obj->type  = $req->type;
        $obj->department_id  = $req->department;
        if($obj->save()){
            echo '<script>alert("Successfully Inserted")</script>';
            return redirect('/admin/view-course');
        }
    }
    public function edit($id){
        $course = Course::find($id);
        $departments = Department::all();
        // dd($course);
        return view('admin.pages.courses.course-edit', compact('course','departments'));
    }
    public function update(Request $req, $id){
        $obj = Course::find($id);
        
        $obj->name  = $req->name;
        $obj->short_name  = $req->shortName;
        $obj->course_code  = $req->course_code;
        $obj->credit  = $req->credit;
        $obj->type  = $req->type;
        $obj->department_id  = $req->department;
        if($obj->save()){
            echo '<script>alert("Successfully Updated")</script>';
            return redirect('/admin/view-course');
        }
    }
    public function delete($id){
        if(Course::find($id)->delete()){
            return redirect('/admin/view-course');
        }
    }
}
