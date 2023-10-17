<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.includes.head')
</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="{{ asset('assets/admin/dist/img/AdminLTELogo.png') }}" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
 @include('admin.includes.navbar')


  <!-- Main Sidebar Container -->
@include('admin.includes.sidebar')

  <!-- Content Wrapper. Contains page content -->
    @yield('content')    
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
@include('admin.includes.footer')
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
@include('admin.includes.scripts')

<!-- scrpits for modals -->
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"> -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<!-- scripts for modals end -->

</body>
</html>


<!-- for copying and linking, the followings will be used: -->

<!-- {{ asset('assets/admin/') }} -->
<!-- {{ url('') }} -->
