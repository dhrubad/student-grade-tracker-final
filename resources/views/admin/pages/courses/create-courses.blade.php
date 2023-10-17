@extends('admin.layouts.default')

<!-- This Section Contains page content and transfer it to content in default layout-->
@section('content')     
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Admin Dashboard -- Create Courses</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Create Courses</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
                    <!-- general form elements -->
                    <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Create Courses</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ url('/admin/course-store') }}" method="post">
                @csrf
                <div class="card-body">

                  <div class="form-group">
                      <label for="">Course Name/Title</label>
                      <input type="text" class="form-control" name="name" id="" placeholder="Course Name">
                    </div>

                  <div class="form-group">
                    <label for="">Course Short Name</label>
                    <input type="text" class="form-control" name="shortName" id="" placeholder="Course Title">
                  </div>  

                  <div class="form-group">
                    <label for="">Course Code</label>
                    <input type="text" class="form-control" name="course_code" id="" placeholder="Course Code">
                  </div>

                  <div class="form-group">
                    <label for="">Credit</label>
                    <select name="credit" id="" class="form-control">
                      <option value="">Select Credit</option>
                      <option value="1">1</option>
                      <option value="1.5">1.5</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="">Course Type</label>
                    <select name="type" id="" class="form-control">
                      <option value="">Select Course Type</option>
                      <option value="Theory">Theory</option>
                      <option value="Lab">Lab</option>
                      <option value="Project">Project/Thesis</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="">Semester</label>
                    <select name="semester" id="" class="form-control">
                      <option value="">Select Semester</option>
                      <option value="1">1st</option>
                      <option value="2">2nd</option>
                      <option value="3">3rd</option>
                      <option value="4">4th</option>
                      <option value="5">5th</option>
                      <option value="6">6th</option>
                      <option value="7">7th</option>
                      <option value="8">8th</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="">Department</label>
                    <select name="department" id="" class="form-control">
                      <option value="">Select Department</option>
                      @foreach($departments as $d)
                      <option value="{{ $d->id }}">{{ $d->name }}</option>
                      @endforeach
                    </select>
                  </div>
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

      </div>
      <!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection