<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CBMS | Dashboard</title>
  <!-- Favicon -->
  <link rel="shortcut icon" href="admin/img/svg/logo.svg" type="image/x-icon">
  <!-- Custom styles -->
  <link rel="stylesheet" href="admin/css/style.min.css">
</head>

<body>
<div class="layer"></div>
<!-- ! Body -->

<div class="page-flex">
    <!-- ! Sidebar -->
    @include('admin.partials.sidebar')
    <div class="main-wrapper">
    <!-- ! Main nav -->
    @include('admin.partials.navbar')


    @include('admin.components.footer')
</div>
</div>
    <!-- Chart library -->
<script src="admin/plugins/chart.min.js"></script>
<!-- Icons library -->
<script src="admin/plugins/feather.min.js"></script>
<!-- Custom scripts -->
<script src="admin/js/script.js"></script>
</body>

</html>