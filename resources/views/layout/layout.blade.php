<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="shortcut icon" href="/imgs/logo.png" type="image/x-icon">
    <link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
    <style>
       body {
            background-color: #1d2224;
            color: #f1f1f1;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            margin: 0; /* Remove default margin to make it full-screen */
            overflow: hidden; /* Hide body overflow to prevent unwanted scrollbars */
        }

        /* Grid container */
        .three-columns-grid {
            display: grid;
            grid-template-columns: auto 1fr auto; /* Fixed left and right columns, scrollable middle column */
            height: 100vh; /* Make the grid container full-screen */
        }

        /* General column padding */
        .three-columns-grid > * {
            padding: 1rem;
        }

        /* Left column */
        .left-column {
            position: fixed;
            top: 0;
            left: 0;
            bottom: 0;
            width: 20%; /* Adjust the width as needed */
            overflow-y: auto; /* Allow the left column to scroll */
            border-right: 1px solid #f1f1f1;
        }

        /* Middle column */
        .middle-column {
            overflow-y: scroll; /* Allow the middle column to scroll */
            margin-left: 260px;
            width: 760px;
        }

        /* Right column */
        .right-column {
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            width: 20%; /* Adjust the width as needed */
            overflow-y: auto; /* Allow the right column to scroll */
 
        }
        /* Scrollbar */
/* Width and height of the scrollbar */
::-webkit-scrollbar {
    width: 8px; /* Adjust the width as needed */
    height: 8px; /* Adjust the height as needed */
}

/* Thumb (the draggable part of the scrollbar) */
::-webkit-scrollbar-thumb {
    background-color: #888; /* Color of the thumb */
    border-radius: 4px; /* Rounded corners for the thumb */
}

/* Track (the non-draggable part of the scrollbar) */
::-webkit-scrollbar-track {
    background-color: #f1f1f1; /* Color of the track */
}

    </style>

</head>
<body>
<header class="header" style="background-color: rgba(255, 255, 255, 0.1); backdrop-filter: blur(10px); z-index:1;">
  <div class="text-center pt-3 pb-2">
        <img src="/imgs/logo.png" alt="" width="30px">
  </div>
<!-- Navbar -->
    </header>
    <div class="three-columns-grid">
        <div class="left-column">
            <!-- Add content to the left column here -->
            <div class="mt-5 text-white">
                <a href="{{url('user/home')}}" class="nav-link text-white"><i class="fa-solid fa-house fa-lg"></i><span class="ms-3">Home</span></a>
                <a href="{{url('user/search')}}" class="nav-link text-white"><i class="fa-solid fa-search fa-lg"></i><span class="ms-3">Search</span></a>
                <a href="{{url('user/notification')}}" class="nav-link text-white"><i class="fa-solid fa-bell fa-lg"></i><span class="ms-3">Notification</span></a>
                <a href="{{url('user/messages')}}" class="nav-link text-white"><i class="fa-solid fa-envelope fa-lg"></i><span class="ms-3">Messages</span></a>
                <a href="{{ url('user/mycars/' . $id) }}" class="nav-link text-white"><i class="fa-solid fa-car fa-lg"></i><span class="ms-3"> My cars</span</a>
                <a href="{{url('user/rentedcars')}}" class="nav-link text-white"><i class="fa-solid fa-car fa-lg"></i><span class="ms-3">Rented Cars</span> </a>
                <a href="{{url('user/profile/'.$id)}}" class="nav-link text-white"><i class="fa-solid fa-user fa-lg"></i><span class="ms-3">Profile</span> </a>
                <a href="{{url('user/logout')}}" class="nav-link text-white mb-3"><i class="fa-solid fa-right-from-bracket fa-lg"></i><span class="ms-3"> Logout</span></a>
                <div style="display: flex; align-items: center; width: 10px;" class="ms-3">
    <div class="mb-2 mt-2" style="display: flex; align-items: center;">
      <div style="width: 40px; height: 40px; border-radius: 50%; overflow: hidden;">
        <img src="/imgs/car.jpg" alt="" style="width: 100%; height: 100%; object-fit: cover;">
      </div>
      <span style="margin-left: 10px;"><small class="text-secondary">{{$username}}</small></span>
    </div>
  </div>
        </div>
        </div>
        <div class="middle-column">
            <!-- Add content to the middle column here -->
            @yield('content')
            <!-- Add more content to make it scrollable -->
        </div>
        <div class="right-column">
            <!-- Add content to the right column here -->
            <input type="search" placeholder="search for dealers" name="" id=""  class="form-control text-white my-5" style="border-radius: 50px; outline:none; background-color: #1d2224">

            <h6 class=" ms-4">TOP DEALERS 🤝🏿💹🚘</h6>
            @php
                      $topdealers = DB::table('mycars')
                         ->select('owner', DB::raw('count(owner) as count'))
                          ->groupBy('owner')
                         ->orderByDesc('count')
                         ->limit(5)
                         ->get();
             @endphp

    @foreach ($topdealers as $topdealer)
        @php
            $owner = \App\Models\Loginmodel::find($topdealer->owner);
        @endphp
        <small class="ms-4"><b>@ {{$owner -> username}} ({{$topdealer ->count}} cars)</b></small><br>
    @endforeach
            
        </div>
    </div>
</body>
</html>