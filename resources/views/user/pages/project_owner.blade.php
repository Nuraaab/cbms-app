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
            
            <h1> Welcome to our construction project bidding management system </h1><br><br>
           <button type="button" id="available-constractor" class="option-btn"><span class="insidebutton"></span>AVAILABLE CONTRACTORS</button>
            <button type="button" id="available-project" class="option-btn"><span class="insidebutton"></span>PROJECTS</button>
            <button type="button" id="project-bids" class="option-btn"><span class="insidebutton"></span>PROJECT BIDS</button>
            <button type="button" id="available-supplier" class="option-btn"><span class="insidebutton"></span>MATERIAL SUPPLIERS</button>

          
        </div>
    </div>
    </div>
   
    <main id="contractor" style="display: flex; flex-direction: column; display: block">
        <div class="meet" id="contractor-title"><h2>Meet Our contractors</h2></div>
        <div style="display: flex; flex-wrap: wrap;">
            @if (count($contractors) > 0)
            @foreach ($contractors as $contractor)
            <div class="singlecontractor" style="width: 300px; margin-right: 10px;">
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
        </div>
    </main>

   @if (Auth::check())
       @if (Auth::user()->usertype === 'projectOwner')
       <main id="bid" style="display: flex; flex-direction: column; display: none">
        <div class="meet" id="bid-title"><h2>Available Bids</h2></div> 
        <div style="display: flex; flex-wrap: wrap;">
         @if (count($bidsById) > 0)
        @foreach ($bidsById as $bid)
        <div class="singlecontractor"  style="width: 300px; margin-right: 10px;">
            <div class="profilepic">
                <img src="images/{{$bid->project->thumbnail}}" alt="category">
            </div>
            <div class="caption">
            <p>Project Name: {{$bid->project->title}}</p>
            <p>Price: {{$bid->price}}</p>
            <p>Start Date: {{$bid->project->start_date}}</p>
            <p>End Date: {{$bid->project->end_date}}</p>
        </div>
        </div>
      @endforeach
      @else
        <p>No bids found.</p>
      @endif
        </div>
    </main>
       @else
       <main id="bid" style="display: flex; flex-direction: column; display: none">
        <div class="meet" id="bid-title"><h2>Available Bids</h2></div> 
        <div style="display: flex; flex-wrap: wrap;">
         @if (count($bids) > 0)
        @foreach ($bids as $bid)
        <div class="singlecontractor"  style="width: 300px; margin-right: 10px;">
            <div class="profilepic">
                <img src="images/{{$bid->project->thumbnail}}" alt="category">
            </div>
            <div class="caption">
            <p>Project Name: {{$bid->project->title}}</p>
            <p>Price: {{$bid->price}}</p>
            <p>Start Date: {{$bid->project->start_date}}</p>
            <p>End Date: {{$bid->project->end_date}}</p>
        </div>
        </div>
      @endforeach
      @else
        <p>No bids found.</p>
      @endif
        </div>
    </main>
       @endif

       @else
       <main id="bid" style="display: flex; flex-direction: column; display: none">
        <div class="meet" id="bid-title"><h2>Available Bids</h2></div> 
        <div style="display: flex; flex-wrap: wrap;">
         @if (count($bids) > 0)
        @foreach ($bids as $bid)
        <div class="singlecontractor"  style="width: 300px; margin-right: 10px;">
            <div class="profilepic">
                <img src="images/{{$bid->project->thumbnail}}" alt="category">
            </div>
            <div class="caption">
            <p>Project Name: {{$bid->project->title}}</p>
            <p>Price: {{$bid->price}}</p>
            <p>Start Date: {{$bid->project->start_date}}</p>
            <p>End Date: {{$bid->project->end_date}}</p>
        </div>
        </div>
      @endforeach
      @else
        <p>No bids found.</p>
      @endif
        </div>
    </main>
   @endif

  
    @if (Auth::check())
        @if (Auth::user()->usertype === "projectOwner")
        <main id="project" style="display: flex; flex-direction: column; display: none">
            <div class="meet" ><h2>Projects</h2></div>
            <div style="display: flex; flex-wrap: wrap;">
                @if (count($projectsById) > 0)
                @foreach ($projectsById as $project)
                <div class="singlecontractor" style="width: 300px; margin-right: 10px;">
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
                <p>No projects found.</p>
              @endif
                </div>
            </main>
        @else
        <main id="project" style="display: flex; flex-direction: column; display: none">
            <div class="meet" ><h2>Projects</h2></div>
            <div style="display: flex; flex-wrap: wrap;">
                @if (count($projects) > 0)
                @foreach ($projects as $project)
                <div class="singlecontractor" style="width: 300px; margin-right: 10px;">
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
                <p>No projects found.</p>
              @endif
                </div>
            </main>
        @endif

        @else
        <main id="project" style="display: flex; flex-direction: column; display: none">
            <div class="meet" ><h2>Projects</h2></div>
            <div style="display: flex; flex-wrap: wrap;">
                @if (count($projects) > 0)
                @foreach ($projects as $project)
                <div class="singlecontractor" style="width: 300px; margin-right: 10px;">
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
                <p>No projects found.</p>
              @endif
                </div>
            </main>
    @endif
    <main id="supplier" style="display: flex; flex-direction: column; display: none">
        <div class="meet" ><h2>Suppliers</h2></div>
        <div style="display: flex; flex-wrap: wrap;">
            @if (count($suppliers) > 0)
            @foreach ($suppliers as $supplier)
            <div class="singlecontractor" style="width: 300px; margin-right: 10px;">
                <div class="profilepic">
                    <img src="images/{{$supplier->profile}}">
                </div>
                <div class="caption">
                <p>Name: {{$supplier->name}}</p>
                <p>Address: {{$supplier->address}}</p>
            </div>
            </div>
            @endforeach
            @else
            <p>No suppliers found.</p>
          @endif
            </div>
        </main>

       @include('user.components.footer')

       <script>
        var contractorButton = document.getElementById('available-constractor');
        var bidButton = document.getElementById('project-bids');
        var supplierButton = document.getElementById('available-supplier');
        var projectButton = document.getElementById('available-project');
    
        var contractorDiv = document.getElementById('contractor');
        var bidDiv = document.getElementById('bid');
        var supplierDiv = document.getElementById('supplier');
        var projectDiv = document.getElementById('project');
    
        contractorButton.addEventListener('click', function() {
            contractorDiv.style.display = 'block';
            bidDiv.style.display = 'none';
            supplierDiv.style.display = 'none';
            projectDiv.style.display = 'none';
        });
    
        bidButton.addEventListener('click', function() {
            contractorDiv.style.display = 'none';
            bidDiv.style.display = 'block';
            supplierDiv.style.display = 'none';
            projectDiv.style.display = 'none';
        });
    
        supplierButton.addEventListener('click', function() {
            contractorDiv.style.display = 'none';
            bidDiv.style.display = 'none';
            supplierDiv.style.display = 'block';
            projectDiv.style.display = 'none';
        });

        projectButton.addEventListener('click', function() {
            contractorDiv.style.display = 'none';
            bidDiv.style.display = 'none';
            supplierDiv.style.display = 'none';
            projectDiv.style.display = 'block';
        });
    </script>
</body>


</html>