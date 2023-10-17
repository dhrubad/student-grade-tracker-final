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
            <h1 class="m-0">Admin Dashboard --- Create Departments</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Create Departments</li>
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
                <h3 class="card-title">Create Departments</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ url('/admin/store') }}" method="post">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="">Department Name</label>
                    <input type="text" class="form-control" name="name" id="" placeholder="Department Name">
                  </div>
                  <div class="form-group">
                    <label for="">Short Name</label>
                    <input type="text" class="form-control" name="shortName" id="" placeholder="Short Name">
                  </div>
                  <div class="form-group">
                    <label for="">Established At</label>
                    <input type="date" class="form-control" name="estAt" id="" placeholder="">
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