<!DOCTYPE html>
<html>
<head>
   @include('layouts.head')
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
    <!-- Navbar -->
    @include('layouts.navbar')
    <!-- /.navbar -->
    <!-- Main Sidebar Container -->
    @include('layouts.sidebar')
    <!-- Content Wrapper. Contains page content -->
    @include('layouts.main-content')
    <!-- /.content-wrapper -->
    <!-- Footer -->
    @include('layouts.footer')
    <!-- /.Footer -->
</div>
<!-- ./wrapper -->
<!-- jQuery -->
@include('layouts.js-lib')
</body>
</html>
