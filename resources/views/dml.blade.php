<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Fontawesome cdn -->
    <link href="https://use.fontawesome.com/releases/v5.0.7/css/all.css" rel="stylesheet">

    <!-- custom style -->
    <link rel="stylesheet" href="{{asset('css/dmlStyle.css')}}" />

    <title>G4+2 SEDC Project</title>
  </head>
  <body>
<div id="top"></div>
    <!-- navigation -->
    <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link active" href="alpha">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="dynamic-map">Dynamic Tour</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">About us</a>
            </li>

            </ul>
        <!-- end of nav -->

    <div class="container-fluid"> <!-- container start -->
        <button onclick="topFunction()" id="myBtn" class="btn btn-primary" title="Go to top"><i class="fas fa-angle-up fa-2x"></i></button>
        <div class="row extra-padding"><!-- row nav start -->

        </div><!-- row nav end -->

        <div class="row"> <!-- Main row start -->
            
            <div class="col-xs-12 col-sm-12" id="mainCol"> <!-- main col start this is the MainCol  that you append the mapRow to. -->

            </div> <!-- main col end -->

        </div> <!--main row end end -->
        
  </div> <!-- container end -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    <!-- google maps api -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAQR0wQoH-VRKpplCisYo2LcWWXw8PjEFY&callback=initMap" async defer></script>

    <!-- custom scripts here below -->
    <script src="{{asset('js/dml.js')}}"></script>
    <script src="{{asset('js/toTopDml.js')}}"></script>


</body>
</html>


    
