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
            <h1> Welcome to BPMS</h1><br><br>
            {{-- <h3>make your bidding process easy</h3><br>
           <a href="/bid"> <button type="button" class="option-btn"><span class="insidebutton"></span>SUBMIT PROJECT BIDS</button></a>
            <h3>what are you looking for...</h3>
        
            <button type="button" class="option-btn"><span class="insidebutton"></span>PROJECT BIDS</button>
            <button type="button" class="option-btn"><span class="insidebutton"></span>AVAILABLE CONTRACTORS</button>
            <button type="button" class="option-btn"><span class="insidebutton"></span>MATERIAL SUPPLIERS</button> --}}
        </div>
    </div>
    </div>
   
    <main>
        
        <div class="meet"><h2>Available Bids</h2></div>
        
        
        @foreach ($bids as $bid)
        <div class="bidcontainer">
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
        
    </main>

       @include('user.components.footer')
</body>

</html>