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
            <h1 class="m-0">Admin Dashboard --- View Departments</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">View Departments</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        
      <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Short Name</th>
                      <th>Established At</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($departments as $department)
                    <tr>
                      <td>{{ $department->name }}</td>
                      <td>{{ $department->short_name }}</td>
                      <td>{{ $department->established_at }}</td>
                      <td>
                        <!-- for edit -->
                        <a href="{{ url('admin/edit/'.$department->id) }}" class="btn btn-primary">Edit</a>
                        <!-- for delete -->
                        <a href="{{ url('admin/delete/'.$department->id) }}" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#myModal{{ $department->id }}">Delete</a>
                        <!-- The Modal -->
                            <div class="modal" id="myModal{{ $department->id }}">
                              <div class="modal-dialog">
                                <div class="modal-content">

                                  <!-- Modal Header -->
                                  <div class="modal-header">
                                    <h4 class="modal-title">Delete Confirmation</h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                  </div>

                                  <!-- Modal body -->
                                  <div class="modal-body">
                                    Are you sure you want to delete <b>{{$department->name}}</b>?
                                  </div>

                                  <!-- Modal footer -->
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-success" data-bs-dismiss="modal">Return</button>
                                    <a href="{{ url('admin/delete/'.$department->id) }}" class="btn btn-danger" >Delete</a>
                                  </div>

                                </div>
                              </div>
                            </div>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>




      </div>
      <!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection