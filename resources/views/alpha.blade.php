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
    <link rel="stylesheet" href="{{asset('css/alphaStyle.css')}}" />

    <!-- jQuery uncompressed cdn -->
    <script
        src="https://code.jquery.com/jquery-3.3.1.js"
        integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
        crossorigin="anonymous">
    </script>

    <!-- custom scripts here below -->
    <script src="{{asset('js/landingJs.js')}}"></script>


    <title>Tourist App Demo</title>
  </head>
  <body>
    <div id="top"></div>
                <!-- navigation -->
                <ul class="nav justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="dynamic-map">Dynamic Tour</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About us</a>
                    </li>

                    </ul>
                <!-- end of nav -->

    <div class="jumbotron jumbotron-fluid" id="landing"> <!-- Jumbotron start / main container for full height page landing -->
        <div class="container-fluid"> <!-- container start -->
        <button onclick="topFunction()" id="myBtn" class="btn btn-primary" title="Go to top"><i class="fas fa-angle-up fa-2x"></i></button>


            <div class="row"> <!-- row 1 start -->

                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"> <!-- carousel indicator div start -->
                    <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                
                    <div class="carousel-inner"> <!-- div inner start -->
                        <div class="carousel-item active"> <!-- item div 1 start -->
                            <img src="{{asset('img/bitola_one.jpg')}}" class="d-block img-fluid" alt="Test">
                            <div class="carousel-caption d-none d-md-block"> <!-- caption div 1 start -->
                                <h5 class="destinationTitle">Destination One</h5>
                                        <button type="button" class="btn btn-primary" id="show_map_0">Directions </button>
                                        <button type="button" class="btn btn-primary-dark" id="load_history_content_0">History</button>
                                        <button type="button" class="btn btn-primary-darker" id="load_photos_0">More Photos</button>
                            </div> <!-- caption div 1 end -->
                        </div> <!-- item div 1 end -->
    
                        <div class="carousel-item"> <!-- item div 2 start -->
                                <img src="{{asset('img/bitola_two.jpg')}}" class="d-block img-fluid img-default" alt="Test">
                                <div class="carousel-caption d-none d-md-block"> <!-- caption div 2 start -->
                                    <h5 class="destinationTitle">Destination Two</h5>
                                    <button  type="button" class="btn btn-primary" id="show_map_1">Directions </button>
                                    <button  type="button" class="btn btn-primary-dark" id="load_history_content_1">History</button>
                                    <button  type="button" class="btn btn-primary-darker" id="load_photos_1">More photos</button>
                                </div> <!-- caption div 2 end -->
                            </div> <!-- item div 2 end -->
    
                            <div class="carousel-item"> <!-- item 3 div start -->
                                <img src="{{asset('img/bitola_three.jpg')}}" class="d-block img-fluid img-default" alt="Test">
                                <div class="carousel-caption d-none d-md-block"> <!-- caption div 3 start -->
                                    <h5 class="destinationTitle">Destination Three</h5>
                                    <button  type="button" class="btn btn-primary" id="show_map_2">Directions </button>
                                    <button  type="button" class="btn btn-primary-dark" id="load_history_content_2">History</button>
                                    <button  type="button" class="btn btn-primary-darker" id="load_photos_2">More photos</button>
                                </div> <!-- caption div 3 end -->
                            </div> <!-- item 3 div end -->
                        </div> <!-- div inner end -->
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                </div> <!-- carousel indicator div end -->

            </div> <!-- row 1 end -->
            
      </div> <!-- container end -->

    
     


    </div> <!-- jumbotron end // all content should be inside the jumbotron -->

 <!-- this is the content below that changes based on user input -->

 <div class="container-fluid"> <!-- container start -->
            <div class="row"> <!-- row start -->
                <div class="col-xs-12 col-sm-12"> <!-- col start -->
                    
                    <!-- history div -->
                    <div id="historyDiv">
                        <div class="row"> <!-- main row start -->
                            <div class="col-xs-12 col-sm-12 extra-padding-25"> <!-- main col start -->
                                <h3 class="text-center">History</h3>
                                <hr/>

                                <div class="row extra-padding-25"> <!-- sub row start -->
                                    
                                    <!-- col 1 -->
                                    <div class="col-xs-12 col-sm-6 col-lg-4 mx-auto">
                                        <h3 class="text-center">About</h3>
                                        <br/>
                                        <p id="aboutP"></p>
                                    </div>

                                    <!--right col -->
                                    <div class="col-xs-12 col-sm-6 col-lg-4 mx-auto">
                                        <div class="row">
                                                                            <!-- col 2 -->
                                    <div class="col-xs-12 col-sm-12">
                                        <h3 class="text-center">Legacy</h3>
                                        <br/>
                                        <p id="legacyP"></p>
                                    </div>

                                    <!-- col 3 -->
                                    <div class="col-xs-12 col-sm-12">
                                        <h3 class="text-center">Present day</h3>
                                        <br/>
                                        <p id="presentP"></p>
                                    </div>  
                                        </div>
                                    </div>

                                    <!-- col 4 -->
                                    <div class="col-xs-12 col-sm-12 my-5">
                                        <h3 class="text-center">Trivia section - Did you know?</h3>
                                        <br/>
                                        <p id="triviaP"></p>
                                    </div>

                                </div> <!-- sub row end -->

                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 text-center">
                                        <a href="#" class="btn btn-primary" id="backToTop">Go back to landing page</a>
                                    </div>
                                </div>

                            </div> <!-- main col end -->
                        </div> <!-- main row end -->
                    </div>
                    <!-- end of history div -->

                    <!-- more photos div -->
                    <div id="morePhotos">
                        <div class="row"><!-- main row start -->
                            <div class="col-xs-12 col-sm-12 extra-padding-25"> <!-- main col start -->
                                <h3 class="text-center">More photos</h3>
                                <hr/>
                            </div><!-- main col end -->
                        
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 text-center">
                                <figure class="figure">
                                <figcaption class="figure-caption">A caption for the image bellow.</figcaption>
                                
                                <img id="xtra_image_0" class="figure-img img-fluid rounded img-fixed" alt="A generic square placeholder image with rounded corners in a figure.">
                                </figure>
                            </div>
                            <div class="col-xs-12 col-sm-6 text-center">
                            <figure class="figure">
                            <figcaption class="figure-caption">A caption for the image bellow.</figcaption>
                            
                                <img id="xtra_image_1" class="figure-img img-fluid rounded img-fixed" alt="A generic square placeholder image with rounded corners in a figure.">
                                </figure>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-12 col-sm-6 text-center">
                                <figure class="figure">
                                <figcaption class="figure-caption">A caption for the image bellow.</figcaption>
                                
                                <img id="xtra_image_2" class="figure-img img-fluid rounded img-fixed" alt="A generic square placeholder image with rounded corners in a figure.">
                                </figure>
                            </div>
                            <div class="col-xs-12 col-sm-6 text-center">
                            <figure class="figure">
                            <figcaption class="figure-caption">A caption for the image bellow.</figcaption>
                            
                                <img id="xtra_image_3" class="figure-img img-fluid rounded img-fixed" alt="A generic square placeholder image with rounded corners in a figure.">
                                </figure>
                            </div>
                        </div>
                                        
                            
                        </div><!-- main row end -->
                    </div>
                    <!-- more phots div end -->

                    <!-- map div -->
                    <div id="map">

                    </div>
                    <!-- end of map div -->


                </div> <!-- col end -->
            </div><!-- row end -->
        </div><!-- container end-->
   
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="{{asset('js/toTop.js')}}"></script>
    <!-- google maps api -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAQR0wQoH-VRKpplCisYo2LcWWXw8PjEFY&callback=initMap" async defer></script>

    


</body>
</html>