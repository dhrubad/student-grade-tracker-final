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
            <h1 class="m-0">Admin Dashboard -- Edit Courses</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Courses</li>
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
                <h3 class="card-title">Edit Courses</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ url('/admin/course-update/'.$course->id) }}" method="post">
                @csrf 
                <div class="card-body">
                  <div class="form-group">
                      <label for="">Course Name/Title</label>
                      <input type="text" class="form-control" name="name" value="{{$course->name}}" id="" placeholder="Course Name">
                    </div>

                  <div class="form-group">
                    <label for="">Course Short Name</label>
                    <input type="text" class="form-control" name="shortName" value="{{$course->short_name}}" id="" placeholder="Course Title">
                  </div>  

                  <div class="form-group">
                    <label for="">Course Code</label>
                    <input type="text" class="form-control" name="course_code" value="{{$course->course_code}}" id="" placeholder="Course Code">
                  </div>

                  <div class="form-group">
                    <label for="">Credit</label>
                    <select name="credit" id="" class="form-control">
                      <option value="">Select Credit</option>
                      <option value="1" {{ $course->credit == 1 ? 'selected' : '' }}>1</option>
                      <option value="1.5" {{ $course->credit == 1.5 ? 'selected' : '' }}>1.5</option>
                      <option value="2" {{ $course->credit == 2 ? 'selected' : '' }}>2</option>
                      <option value="3" {{ $course->credit == 3 ? 'selected' : '' }}>3</option>
                      <option value="4" {{ $course->credit == 4 ? 'selected' : '' }}>4</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="">Course Type</label>
                    <select name="type" id="" class="form-control">
                      <option value="">Select Course Type</option>
                      <option value="Theory" {{ $course->type == "Theory" ? 'selected' : '' }}>Theory</option>
                      <option value="Lab" {{ $course->type == "Lab" ? 'selected' : '' }}>Lab</option>
                      <option value="Project" {{ $course->type == "Project" ? 'selected' : '' }}>Project/Thesis</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="">Department</label>
                    <select name="department" id="" class="form-control">
                      <option value="">Select Department</option>
                      @foreach($departments as $d)
                      <option {{ ($d->id == $course->department_id) ? 'selected' : '' }} value="{{ $d->id }}">{{ $d->name }}</option>
                      @endforeach
                    </select>
                  </div>
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
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