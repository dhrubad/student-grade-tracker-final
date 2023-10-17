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
            <h1 class="m-0">Admin Dashboard --- View Courses</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">View Courses</li>
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
                      <th>Course Title</th>
                      <th>Course Short Name</th>
                      <th>Course Code</th>
                      <th>Credit</th>
                      <th>Type</th>
                      <th>Department</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($courses as $c)
                    <tr>
                      <td>{{ $c->name }}</td>
                      <td>{{ $c->short_name }}</td>
                      <td>{{ $c->course_code }}</td>
                      <td>{{ $c->credit }}</td>
                      <td>{{ $c->type }}</td>
                      <td>{{ $c->dept_name }}</td>
                      <td>
                        <!-- for edit -->
                        <a href="{{ url('admin/course-edit/'.$c->id) }}" class="btn btn-primary">Edit</a>
                        <!-- for delete -->
                        <a href="{{ url('admin/course-delete/'.$c->id) }}" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#myModal{{ $c->id }}">Delete</a>
                        <!-- The Modal -->
                            <div class="modal" id="myModal{{ $c->id }}">
                              <div class="modal-dialog">
                                <div class="modal-content">

                                  <!-- Modal Header -->
                                  <div class="modal-header">
                                    <h4 class="modal-title">Delete Confirmation</h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                  </div>

                                  <!-- Modal body -->
                                  <div class="modal-body">
                                    Are you sure you want to delete <b>{{$c->name}}</b>?
                                  </div>

                                  <!-- Modal footer -->
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-success" data-bs-dismiss="modal">Return</button>
                                    <a href="{{ url('admin/course-delete/'.$c->id) }}" class="btn btn-danger" >Delete</a>
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