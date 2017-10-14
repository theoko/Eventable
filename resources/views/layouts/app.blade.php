<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <title>{{ config('app.name', 'Laravel') }} - @yield('title')</title>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('css/nav.css') }}">
        
        <!-- Icons -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
              rel="stylesheet">
              
        <!-- Google Maps API-->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBilq2fbOo2RtuvZSD6P54cGpW-TKcW4mM&callback=initMap"
                async defer></script>
                
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
        <script src="{{ asset('js/nav.js') }}"></script>
    </head>
     <body>
        @yield('map', '')
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <div id="logo">
                <a href="{{ route('home') }}" class="text-light">{{ config('app.name', 'Laravel') }}</a>
            </div>
            <a href="#">Food</a>
            <a href="#">Drinks</a>
            <a href="#">Music</a>
            <a href="#">Kid Friendly</a>
        </div>

        <div id="main">
            <span style="font-size:30px;cursor:pointer" onclick="openNav()" id="opennav">&#9776;</span>
            @yield('content')
            
            <div class="top-right">
                <a href="{{ route('calendar.home') }}" class="btn btn-primary btn-lg">
                    <i class="material-icons" style="font-size: 30px">date_range</i>
                </a>
            </div>
            
            <div class="bottom-right">
                <a href="{{ route('add.event') }}" class="btn btn-primary btn-lg">
                    <i class="material-icons" style="font-size: 30px">plus_one</i>
                </a>
            </div>
        </div>
        
    </body>
</html>