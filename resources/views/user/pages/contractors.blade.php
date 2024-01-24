<html>

<head>
    <script src="https://kit.fontawesome.com/151a760348.js" crossorigin="anonymous"></script>
    <title>Constructon project bidding management system</title>
    <link rel="stylesheet" href="user/css/style.css">
</head>

<body>
    <div class="banner">
        @include('user.components.header')
        <div class="content">
            @if (Auth::check())
                @if (Auth::user()->usertype === 'contractor')
                <h1>Welcome, Contractor {{Auth::user()->name}}</h1>
                @else
                <h2>Wellcome</h2>
                @endif
                @else
                <h2>Wellcome</h2>
                <a href="/signup"><button type="button" class="option-btn"><span class="insidebutton"></span>Get Started</button></a>
            @endif
            {{-- <h1>Are you contractor </h1><br><br>
            <h2>Register here...</h2>
            <button type="button" class="option-btn"><span class="insidebutton"></span>Register</button> --}}
        </div>
    </div>
    </div>
        
    </div>
    @if (Auth::check())
        @if (Auth::user()->usertype !== "constractor")
        <main>
            <div class="meet"><h2>Meet Our contractors </h2></div>
            @if (count($contractors) > 0)
            @foreach ($contractors as $contractor)
            <div class="singlecontractor">
                <div class="profilepic">
                    <img src="images/{{$contractor->profile}}">
                </div>
                <div class="caption">
                    <p>Name: {{$contractor->name}}</p>
                    <p>Address: {{$contractor->address}}</p>
                    <p>Email: {{$contractor->email}}</p>
                    <p>Phone Number: {{$contractor->phone_number}}</p>
                    <p>Qualification: {{$contractor->qualifications}}</p>
                    <p>Experiance: {{$contractor->experience}}</p>
                </div>
            </div>
            @endforeach
            @else
            <p>No contractors found.</p>
          @endif
        </main>
        @else
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

        @endif

        @else
        <main>
            <div class="meet"><h2>Meet Our contractors </h2></div>
            @if (count($contractors) > 0)
            @foreach ($contractors as $contractor)
            <div class="singlecontractor">
                <div class="profilepic">
                    <img src="images/{{$contractor->profile}}">
                </div>
                <div class="caption">
                    <p>Name: {{$contractor->name}}</p>
                    <p>Address: {{$contractor->address}}</p>
                    <p>Email: {{$contractor->email}}</p>
                    <p>Phone Number: {{$contractor->phone_number}}</p>
                    <p>Qualification: {{$contractor->qualifications}}</p>
                    <p>Experiance: {{$contractor->experience}}</p>
                </div>
            </div>
            @endforeach
            @else
            <p>No contractors found.</p>
          @endif
        </main>
    @endif
    

    </div>
@include('user.components.footer')
</body>

</html>