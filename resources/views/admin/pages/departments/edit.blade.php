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
            <h1 class="m-0">Admin Dashboard --- Edit Departments</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Departments</li>
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
                <h3 class="card-title">Edit Departments</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ url('/admin/update/'.$department->id) }}" method="post">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="">Department Name</label>
                    <input type="text" class="form-control" name="name" value="{{ $department->name }}" id="" placeholder="Department Name">
                  </div>
                  <div class="form-group">
                    <label for="">Short Name</label>
                    <input type="text" class="form-control" name="shortName" value="{{ $department->short_name }}" id="" placeholder="Short Name">
                  </div>
                  <div class="form-group">
                    <label for="">Established At</label>
                    <input type="date" class="form-control" name="estAt" value="{{ $department->established_at }}" id="" placeholder="">
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