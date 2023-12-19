<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <style>
       .nav-pills .nav-link {
            margin-right: 15px; 
        }
        h1{
            margin-left: 20px;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            font-weight: bold;
        }
        .nav-pills .nav-item .nav-link.active,
        .nav-pills .nav-item .nav-link{
            color: black;
        }
        .nav-pills .nav-item .nav-link.active,
        .nav-pills .nav-item .nav-link:hover {
            background-color: gray;
            color: white;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-light" style="background-color: #d9d9da;">
        <h1> Guidance System </h1>

        <ul class="nav justify-content-end float-right nav-pills">
                <li class="nav-item">
                    <a class="nav-link {{Route::is('home') ? 'active' : ''}}" href="{{ url('/')}}" >Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{Route::is('students') ? 'active' : ''}}" href="{{ url('/students') }}" >List of Students</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{Route::is('counselors') ? 'active' : ''}}" href="{{ url('/counselors') }}" >List of Counselors</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{Route::is('appointments') ? 'active' : ''}}" href="{{ url('/appointments') }}" >List of Appointments</a>
                </li>
        </ul>
    </nav>

    <div class="container mt-5">
        @yield('content')
    </div>
    
</body>
</html>