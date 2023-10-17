<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;

class CreateDepartmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function create_department(){
        return view('admin.pages.departments.create-departments');
    }

    public function view_department(){
        $departments = Department::all();
        // dd($departments);
        return view('admin.pages.departments.view-departments',compact('departments'));
    }

    public function index()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $req)
    {
        // dd($req); //to see if the data are collected or not
        $obj = new Department; //new object creation
        $obj->name = $req->name;
        $obj->short_name = $req->shortName;
        $obj->established_at = $req->estAt;

        $departments = Department::all();
        if($obj->save()){
            echo '<script>alert("Successfully Inserted")</script>';
            return redirect('/admin/view-department');
        }
    }


    /**
     * Edit the departments
     */

    public function edit($id){
        $department = Department::find($id);
        return view('admin.pages.departments.edit', compact('department'));
    }

    /**
     * Display the specified resource.
     */
    // public function show(string $id)
    // {
    //     // $departments = Department::all;
    //     // dd($departments);
    // }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $req, $id)
    {
        $obj = Department::find($id); //existing object edit
        $obj->name = $req->name;
        $obj->short_name = $req->shortName;
        $obj->established_at = $req->estAt;

        if($obj->save()){
            return redirect('/admin/view-department');
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id){
        if(Department::find($id)->delete()){
            return redirect('/admin/view-department');
        }
    }
}
