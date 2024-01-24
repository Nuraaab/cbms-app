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
    <main class="page-center">
      <article class="sign-up" style="width: 90%">
        <h1 class="sign-up__title">Add Contractor</h1>
        <form class="sign-up-form form" action="{{route('contractor.store')}}" method="POST">
          @csrf
          <label class="form-label-wrapper">
            <p class="form-label">Name</p>
            <input class="form-input" name="name" type="text" placeholder="Enter your name" required>
          </label>
          <label class="form-label-wrapper">
            <p class="form-label">Email</p>
            <input class="form-input" name="email" type="email" placeholder="Enter your email" required>
          </label>
          <label class="form-label-wrapper">
            <p class="form-label">Phone Number</p>
            <input class="form-input" name="phone_number" type="number" placeholder="Enter your Phone Number" required>
          </label>
          <label class="form-label-wrapper">
            <p class="form-label">Address(city)</p>
            <input class="form-input" name="address" type="text" placeholder="Enter your address" required>
          </label>
          <label class="form-label-wrapper">
            <p class="form-label">Qualification</p>
            <input class="form-input"  name="qualification" type="text" placeholder="Enter your Qualification" required>
          </label>
          <label class="form-label-wrapper">
            <p class="form-label">Experience</p>
            <input class="form-input" name="experiance" type="text" placeholder="Enter your Experiance" required>
          </label>
          <label class="form-label-wrapper">
            <p class="form-label">Password</p>
            <input class="form-input" name="password" type="password" placeholder="Enter your password" required>
          </label>
          <label class="form-label-wrapper">
            <p class="form-label">Confirm Password</p>
            <input class="form-input" name="confirm_password" type="password" placeholder="Confirm your password" required>
          </label>
          <button class="form-btn primary-default-btn transparent-btn">Add Contractor</button>
        </form>
      </article>
    </main>

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