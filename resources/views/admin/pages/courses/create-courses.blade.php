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
            <h1 class="m-0">Admin Dashboard --> Create Courses</h1>
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
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="dept_name">Course Title</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Course Title">
                  </div>
                  <div class="form-group">
                    <label for="dept_name">Course Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Course Name">
                  </div>
                  <div class="form-group">
                    <label for="dept_name">Course Code</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Course Code">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Established At</label>
                    <input type="date" class="form-control" id="exampleInputPassword1" placeholder="">
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