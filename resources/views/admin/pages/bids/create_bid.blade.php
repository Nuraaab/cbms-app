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
        <h1 class="sign-up__title">Add Bids</h1>
        <form class="sign-up-form form" action="{{route('storebid')}}" method="POST">
          @csrf

          <label class="form-label-wrapper">
            <p class="form-label">Select Project Owner</p>
            <select class="form-input" style="padding: 0.5rem;" name="owner"  placeholder="Select project owner" required>
             @foreach ($owners as $owner)
             <option value="{{$owner->id}}">{{$owner->name}}/{{$owner->email}}</option>
             @endforeach
            </select>
          </label>

          <label class="form-label-wrapper">
            <p class="form-label">Select Project</p>
            <select class="form-input" style="padding: 0.5rem;" name="project"  placeholder="Select project owner" required>
             @foreach ($projects as $project)
             <option value="{{$project->id}}">{{$project->title}}/{{$project->description}}</option>
             @endforeach
            </select>
          </label>
          <label class="form-label-wrapper">
            <p class="form-label">Price</p>
            <input class="form-input" name="price" type="text" placeholder="Enter project title" required>
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