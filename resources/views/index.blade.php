<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- custom style -->
    <link rel="stylesheet" href="{{asset('css/mainStyle.css')}}" />

    <title>Hello, world!</title>
  </head>
  <body>
   
    <!-- main container start -->
    <div class="container-fluid">
        <div class="row"> <!-- navigation bar-->
        <div class="col-xs-12 col-sm-12">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
  <ol class="breadcrumb">
  <li class="breadcrumb-item active">Home</li>
  <li class="breadcrumb-item"><a href="#">Library</a></li>
  <li class="breadcrumb-item "><a href = "#">About Us</li>
</ol>

  </div>
</nav>
        </div>

        </div><!-- end of navigation -->

        <!-- main row start -->
        <div class="row">
            <div class="col-xs-12 col-sm-12">
              <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="{{asset('img/bitola_one.jpg')}}" class="d-block w-100 img-fixed" alt="Test">
            <div class="carousel-caption d-none d-md-block">
                <h5>Navigation bar</h5>
                        <button onclick="loadMap()"  type="button" class="btn btn-primary" id="show_map">Directions </button>
                        <button onclick="loadHistory()" type="button" class="btn btn-success">History</button>
                        <button onclick="loadPhotos()" type="button" class="btn btn-danger">More Photos</button>
            </div>
            </div>

            <div class="carousel-item">
                    <img src="{{asset('img/bitola_two.jpg')}}" class="d-block w-100 img-fixed" alt="Test">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Navigation bar</h5>
                        <button onclick="loadMap()"  type="button" class="btn btn-primary" id="show_map">Directions </button>
                        <button onclick="loadHistory()" type="button" class="btn btn-success" id="load_history_content">History</button>
                        <button onclick="loadPhotos()" type="button" class="btn btn-danger">More photos</button>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="{{asset('img/bitola_three.jpg')}}" class="d-block w-100 img-fixed" alt="Test">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Navigation bar</h5>
                        <button onclick="loadMap()"  type="button" class="btn btn-primary" id="show_map">Directions </button>
                        <button onclick="loadHistory()"  type="button" class="btn btn-success">History</button>
                        <button onclick="loadPhotos()" type="button" class="btn btn-danger">More photos</button>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            </div>
            </div>


            <!-- this div here maincontent needs to be filled dynamically with JS functions to 
            display requested information from the user from the 3 buttons on the images -->
            <div class="row">
              <div class="col-xs-12 col-sm-12" id="maincontent">

              </div>
              <br>
            <hr class="style2">
            </div>
            
            <div id="morePhotos">
            <hr class="style2">
            <h2>More photos</h2>
           
            <a href="https://placeholder.com"><img src="http://via.placeholder.com/350x150"></a><br>
            <hr class="style2">
            <a href="https://placeholder.com"><img src="http://via.placeholder.com/140x100"></a>
            
            <a href="https://placeholder.com"><img src="http://via.placeholder.com/200x100"></a>
            <hr class="style2">
            </div>
            <!-- this div with id=map is the google maps api, remove/add as needed
            with js -->
            <br>
            <hr class="style2">
            <div id="map"></div>
           
          

        </div>
    </div>


    
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAQR0wQoH-VRKpplCisYo2LcWWXw8PjEFY&callback=initMap"
    async defer></script>

    <script>
     
      function initMap() {
        // Create a map object and specify the DOM element for display.
        var myLatlng = {lat: 41.0297, lng: 21.3292};
        var map = new google.maps.Map(document.getElementById('map'), {
          center: myLatlng,
          zoom: 13
        });
        var marker = new google.maps.Marker({
          position: myLatlng,
          map: map,
          title: 'Click to zoom'
        });

        map.addListener('center_changed', function() {
          // 3 seconds after the center of the map has changed, pan back to the
          // marker.
          window.setTimeout(function() {
            map.panTo(marker.getPosition());
          }, 3000);
        });

        marker.addListener('click', function() {
          map.setZoom(8);
          map.setCenter(marker.getPosition());
        });

      }
      function loadMap(){
        var showMap = document.getElementById("map");
         if (showMap.style.display === "none") {
          showMap.style.display = "block";
        } else {
          showMap.style.display = "none";
        }
      }
      function loadHistory(){
        var showHistory = document.getElementById("historyDiv");
        if (showHistory.style.display === "none") {
          showHistory.style.display = "block";
        } else {
          showHistory.style.display = "none";
        }
      }
      
      function loadPhotos(){
        var showPhotos = document.getElementById("morePhotos");
        if (showPhotos.style.display === "none") {
          showPhotos.style.display = "block";
        } else {
          showPhotos.style.display = "none";
        }
      }
    </script>


</body>
</html>