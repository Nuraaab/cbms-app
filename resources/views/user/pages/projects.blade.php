<html>

<head>
    <script src="https://kit.fontawesome.com/151a760348.js" crossorigin="anonymous"></script>
    <title>Constructon project bidding management system</title>
    <link rel="stylesheet" href="user/css/style.css">
</head>

<body>
    <div class="banner" style="height: 70vh;">
       @include('user.components.header')
       <div class="content" >
        <h1> Welcome to our construction project bidding management system </h1><br><br>
        <h3>Explore available projects</h3><br>
    </div>
    </div>
    <main>

        <div class="meet">
            <h2> Our projects </h2>
        </div>
        @if (count($projects) > 0)
    @foreach ($projects as $project)
    <div class="singlecontractor">
        <div class="profilepic">
            <img src="images/{{$project->thumbnail}}">
        </div>
        <div class="caption">
            <p>Project Title : {{$project->title}}</p>
            <p>Description: {{$project->description}}</p>
            <p>Owner Name: {{$project->projectOwner->name}}</p>
            <p>location: {{$project->location}}</p>
            <p>Start Date: {{$project->start_date}}</p>
            <p>End Date: {{$project->end_date}}</p>
            <p>Start Date: {{$project->start_date}}</p>
            <p>Specification: {{$project->specifications}}</p>
        </div>
    </div>
    @endforeach
    @else
    <p>No Projects found.</p>
  @endif 
       
    </main>
    </div>
    @include('user.components.footer')
</body>

</html>