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
            
            <div class="col-xs-12 col-sm-12" id="mainCol"> <!-- main col start -->

                <div class="row  extra-padding" id="mapRow1"><!-- Map row Start // this is the div we need to append a map to. 
                    So through JS we have to append elements to mapRow1, mapRow2,etc  -->
                    
                    
                    <div class="col-xs-12 col-sm-6"> <!-- this is a col that takes 50% of screen, so with js you can create
                                                        a div element,give the class="col-xs-12 col-sm-6", append to mapRow. 
                                                        This col doesnt have an ID here because it needs to be generated dynamically
                                                        through JS,this is only for demonstration purposes. -->

                        <div id="map"></div> <!-- this is the map which you dynamically need to generate through js. Dont forget
                                                  to make the id Generic so maps dont overlap with eachother.-->
                    
                    </div> <!-- end of col 1 -->

                    <div class="col-xs-12 col-sm-6"> <!-- same stuff as col, the classes is only for size of the col. -->

                        <div class="row"><!-- we have to have a sub row now since we need 2 elements inside this col -->
                            
                            <div class="col-xs-12 col-sm-12"> <!-- this is gonna be the header image section and more info // change height in dmlStyle.css file, .img-default 
                                                                is used to set the height and padding for this image. -->
                            
                                <img src="http://www.exploringmacedonia.com/content/Bitola%20-%20centre.JPG" class="img img-fluid img-default" alt="bitola"/>
                                <h3 class="text-center">More info</h3>
                                <hr/>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                                    when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                                    It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
                                    It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, 
                                    and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            </div> <!-- end of header image section -->


                        </div> <!-- end of sub row -->

                    </div> <!-- end of Col 2 -->
                   


                </div> <!-- map row end-->
                <hr/>

                <div class="text-center extra-padding-25">
                    <button type="button" class="btn btn-outline-primary"><i class="fas fa-arrow-circle-down fa-3x"></i></button>
                </div>

                <div class="row extra-padding" id="mapRow1"><!-- Map row Start // this is the div we need to append a map to. 
                    So through JS we have to append elements to mapRow1, mapRow2,etc  -->
                    
                    <div class="col-xs-12 col-sm-6"> <!-- same stuff as col, the classes is only for size of the col. -->

                        <div class="row"><!-- we have to have a sub row now since we need 2 elements inside this col -->
                            
                            <div class="col-xs-12 col-sm-12"> <!-- this is gonna be the header image section and more info // change height in dmlStyle.css file, .img-default 
                                                                is used to set the height and padding for this image. -->
                            
                                <img src="http://www.exploringmacedonia.com/content/Bitola%20-%20centre.JPG" class="img img-fluid img-default" alt="bitola"/>
                                <h3 class="text-center">More info</h3>
                                <hr/>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                                    when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                                    It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
                                    It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, 
                                    and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            </div> <!-- end of header image section -->


                        </div> <!-- end of sub row -->

                    </div> <!-- end of Col 2 -->
                    
                    <div class="col-xs-12 col-sm-6"> <!-- this is a col that takes 50% of screen, so with js you can create
                                                        a div element,give the class="col-xs-12 col-sm-6", append to mapRow. 
                                                        This col doesnt have an ID here because it needs to be generated dynamically
                                                        through JS,this is only for demonstration purposes. -->

                        <div id="map2"></div> <!-- this is the map which you dynamically need to generate through js. Dont forget
                                                  to make the id Generic so maps dont overlap with eachother.-->
                    
                    </div> <!-- end of col 1 -->


                   


                </div> <!-- map row end-->
                <hr/>

                <div class="text-center extra-padding-25">
                    <button type="button" class="btn btn-outline-primary"><i class="fas fa-arrow-circle-down fa-3x"></i></button>
                </div>

            </div> <!-- main col end -->

        </div> <!--main row end end -->
        
  </div> <!-- container end -->




   
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    <!-- google maps api -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAQR0wQoH-VRKpplCisYo2LcWWXw8PjEFY&callback=initMap" async defer></script>

    <!-- custom scripts here below -->
    <script src="{{asset('js/dynamicMaps.js')}}"></script>
    <script src="{{asset('js/toTop.js')}}"></script>


</body>
</html>


    
