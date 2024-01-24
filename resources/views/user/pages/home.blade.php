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
            @if (Auth::user()->usertype === "contractor")
            <h1> Welcome, {{Auth::user()->name}}</h1><br><br>
            <button type="button" id="available-constractor" class="option-btn"><span class="insidebutton"></span>AVAILABLE CONTRACTORS</button>
            <button type="button" id="project-bids" class="option-btn"><span class="insidebutton"></span>PROJECT BIDS</button>
            <button type="button" id="available-supplier" class="option-btn"><span class="insidebutton"></span>MATERIAL SUPPLIERS</button>
            @elseif(Auth::user()->usertype === "projectOwner")
            <h1> Welcome, {{Auth::user()->name}}</h1><br><br>
            <button type="button" id="available-constractor" class="option-btn"><span class="insidebutton"></span>AVAILABLE CONTRACTORS</button>
            <button type="button" id="project-bids" class="option-btn"><span class="insidebutton"></span>PROJECT BIDS</button>
            <button type="button" id="available-supplier" class="option-btn"><span class="insidebutton"></span>MATERIAL SUPPLIERS</button>
            <a href="/bid"> <button type="button" class="option-btn"><span class="insidebutton"></span>SUBMIT PROJECT BIDS</button></a>
            @elseif(Auth::user()->usertype === "supplier")
            <h1> Welcome, {{Auth::user()->name}}</h1><br><br>
            <button type="button" id="available-constractor" class="option-btn"><span class="insidebutton"></span>AVAILABLE CONTRACTORS</button>
            <button type="button" id="project-bids" class="option-btn"><span class="insidebutton"></span>PROJECT BIDS</button>
            <button type="button" id="available-supplier" class="option-btn"><span class="insidebutton"></span>MATERIAL SUPPLIERS</button>
            @endif

            @else
            <h1> Welcome to our construction project bidding management system </h1><br><br>
            
            <button type="button" id="available-constractor" class="option-btn"><span class="insidebutton"></span>AVAILABLE CONTRACTORS</button>
            <button type="button" id="project-bids" class="option-btn"><span class="insidebutton"></span>PROJECT BIDS</button>
            <button type="button" id="available-supplier" class="option-btn"><span class="insidebutton"></span>MATERIAL SUPPLIERS</button>
            @endif
            
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
    
        var contractorDiv = document.getElementById('contractor');
        var bidDiv = document.getElementById('bid');
        var supplierDiv = document.getElementById('supplier');

        var contractorTitle = document.getElementById('contractor-title')
        var bidTitle = document.getElementById('bid-title')
        var supplierTitle = document.getElementById('supplier-title')
    
        contractorButton.addEventListener('click', function() {
            contractorDiv.style.display = 'block';
            bidDiv.style.display = 'none';
            supplierDiv.style.display = 'none';
        });
    
        bidButton.addEventListener('click', function() {
            contractorDiv.style.display = 'none';
            bidDiv.style.display = 'block';
            supplierDiv.style.display = 'none';
        });
    
        supplierButton.addEventListener('click', function() {
            contractorDiv.style.display = 'none';
            bidDiv.style.display = 'none';
            supplierDiv.style.display = 'block';
        });
    </script>
</body>


</html>