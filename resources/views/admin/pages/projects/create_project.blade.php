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
        <h1 class="sign-up__title">Add Project</h1>
        <form class="sign-up-form form" action="{{route('project.store')}}" method="POST">
          @csrf
          <label class="form-label-wrapper">
            <p class="form-label">Project Title</p>
            <input class="form-input" name="title" type="text" placeholder="Enter project title" required>
          </label>
          <label class="form-label-wrapper">
            <p class="form-label">Project Description</p>
            <input class="form-input" name="description" type="text" placeholder="Enter Project description" required>
          </label>
          <label class="form-label-wrapper">
            <p class="form-label">Location</p>
            <input class="form-input" name="location" type="text" placeholder="Enter location" required>
          </label>
          <label class="form-label-wrapper">
            <p class="form-label">Start Date</p>
            <input class="form-input" name="start_date" type="date" placeholder="Enter start date" required>
          </label>
          <label class="form-label-wrapper">
            <p class="form-label">End Date</p>
            <input class="form-input"  name="end_date" type="date" placeholder="Enter end date" required>
          </label>
          <label class="form-label-wrapper">
            <p class="form-label">Specification</p>
            <input class="form-input" name="specification" type="text" placeholder="Enter project specification" required>
          </label>
          <label class="form-label-wrapper">
            <p class="form-label">Select Project Owner</p>
            <select class="form-input" style="padding: 0.5rem;" name="owner"  placeholder="Select project owner" required>
             @foreach ($owners as $owner)
             <option value="{{$owner->id}}">{{$owner->name}}/{{$owner->email}}</option>
             @endforeach
            </select>
          </label>
          <button type="submit" class="form-btn primary-default-btn transparent-btn">Add Project</button>
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