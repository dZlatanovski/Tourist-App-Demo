function initMap() {
    $(() => {
        $.ajax({
            type: "GET",
            url: "http://localhost/Tourist-App-Demo-master/public/api/destinations",
            dataType: "json",
            success: function (data) {
                onSuccess(data);
            },
            error: function () {
                console.log("Couldn't get data from API.");
            }
        });

        function onSuccess(data) {
            let unsortedMaps = [];
            for (let i = 0; i < data.length; i++) {
                let mapInfo = [{
                    lat: parseFloat(data[i].lat),
                    lng: parseFloat(data[i].lon)
                }, {
                    img: data[i].img_1.toString(),
                    info: data[i].legacy
                }]
                unsortedMaps.push(mapInfo);
            }
            // ---------------------GEOLOCATION---------------------------        
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function (position) {
                    let userPos = {
                        lat: position.coords.latitude,
                        lng: position.coords.longitude
                    };
                    //sorting the maps by distance compared to the user location
                    let sortedMaps = unsortedMaps.sort((a, b) => sortingCoordinatesFunction(a, b, userPos));
                    //--------------INITIAL MAP WITH USER LOCATION---------------
                    for (let i = 0; i < sortedMaps.length; i++) {
                        //LEFT-SIDE MAP RIGHT-SIDE INFO
                        let mapRow = $(`<div class="row extra-padding" id="mapRow-${i}" />`);

                        $('#mainCol').append(mapRow);
                        let destinationPos = sortedMaps[i][0];

                        if (i === 0) {
                            let colLeft = $(`<div class="col-xs-12 col-sm-6" />`);
                            let mapDiv = $(`<div id="map-${i}" />`);
                            mapDiv.css("height", "500px");

                            colLeft.append(mapDiv);
                            mapRow.append(colLeft);
                            let map = new google.maps.Map(document.getElementById(`map-${i}`), {
                                center: userPos,
                                zoom: 15
                            });
                            let infoWindow = new google.maps.InfoWindow;
                            infoWindow.setPosition(userPos);
                            infoWindow.setContent('Your location.');
                            infoWindow.open(map);

                            let directionsDisplay = new google.maps.DirectionsRenderer({
                                map: map
                            });

                            // Set destination, origin and travel mode.
                            let request = {
                                destination: destinationPos,
                                origin: userPos,
                                travelMode: 'WALKING'
                            };
                       
                            // Pass the directions request to the directions service.   
                            let directionsService = new google.maps.DirectionsService();
                            directionsService.route(request, function (response, status) {
                                if (status == 'OK') {
                                    // Display the route on the map.
                                    directionsDisplay.setDirections(response);
                                } else{
                                    console.log(`Didn't display directions for map number ${i}`)
                                }
                            });

                            let rightCol = $(`<div class="col-xs-12 col-sm-6" />`);
                            let subRow = $(`<div class="row" />`);
                            let col = $('<div class="col-xs-12 col-sm-12" />');
                            let imgSrc = sortedMaps[i][1].img;
                            let about = sortedMaps[i][1].info;
                            let imgDiv = $(`<img src=${imgSrc} class="img img-fluid img-default" />`);
                            let moreInfo = $("<h3 class='text-center'>More Info</h3>");
                            let aboutP = $(`<p>${about}</p>`);
                            col.append(imgDiv);
                            col.append(moreInfo);
                            col.append(aboutP);
                            subRow.append(col);
                            rightCol.append(subRow);
                            mapRow.append(rightCol);

                            let button = $('<button type="button" class="btn btn-outline-primary" />');
                            let icon = $('<i class="fas fa-arrow-circle-down fa-3x" />');
                            button.append(icon);
                            let div = $('<div class="text-center extra-padding-25" />');
                            div.append(button);
                            $("#mainCol").append(div);

                        } else if (i === 1) {
                            userPosition = sortedMaps[0][0];

                            let rightCol = $(`<div class="col-xs-12 col-sm-6" />`);
                            let subRow = $(`<div class="row" />`);
                            let col = $('<div class="col-xs-12 col-sm-12" />');
                            let imgSrc = sortedMaps[i][1].img;
                            let about = sortedMaps[i][1].info;
                            let imgDiv = $(`<img src=${imgSrc} class="img img-fluid img-default" />`);
                            let moreInfo = $("<h3 class='text-center'>More Info</h3>");
                            let aboutP = $(`<p>${about}</p>`);
                            col.append(imgDiv);
                            col.append(moreInfo);
                            col.append(aboutP);
                            subRow.append(col);
                            rightCol.append(subRow);
                            mapRow.append(rightCol);
                            //LEFT STARTS HERE
                            let colLeft = $(`<div class="col-xs-12 col-sm-6" />`);
                            let mapDiv = $(`<div id="map-${i}" />`);
                            mapDiv.css("height", "500px");

                            colLeft.append(mapDiv);
                            mapRow.append(colLeft);
                            let map = new google.maps.Map(document.getElementById(`map-${i}`), {
                                center: userPosition,
                                zoom: 15
                            });

                            let directionsDisplay = new google.maps.DirectionsRenderer({
                                map: map
                            });
                            
                            // Set destination, origin and travel mode.
                            let request = {
                                destination: destinationPos,
                                origin: userPosition,
                                travelMode: 'WALKING'
                            };

                            // Pass the directions request to the directions service.   
                            let directionsService = new google.maps.DirectionsService();
                            directionsService.route(request, function (response, status) {
                                if (status == 'OK') {
                                    // Display the route on the map.
                                    directionsDisplay.setDirections(response);
                                }
                            });
                            let button = $('<button type="button" class="btn btn-outline-primary" />');
                            let icon = $('<i class="fas fa-arrow-circle-down fa-3x" />');
                            button.append(icon);
                            let div = $('<div class="text-center extra-padding-25" />');
                            div.append(button);
                            $("#mainCol").append(div);
                        } else {
                            if (i % 2 === 0) {
                                userPosition = sortedMaps[i - 1][0];
                                let colLeft = $(`<div class="col-xs-12 col-sm-6" />`);
                                let mapDiv = $(`<div id="map-${i}" />`);
                                mapDiv.css("height", "500px");

                                colLeft.append(mapDiv);
                                mapRow.append(colLeft);
                                let map = new google.maps.Map(document.getElementById(`map-${i}`), {
                                    center: userPosition,
                                    zoom: 15
                                });

                                let directionsDisplay = new google.maps.DirectionsRenderer({
                                    map: map
                                });

                                // Set destination, origin and travel mode.
                                let request = {
                                    destination: destinationPos,
                                    origin: userPosition,
                                    travelMode: 'WALKING'
                                };
                                                           
                                // Pass the directions request to the directions service.   
                                let directionsService = new google.maps.DirectionsService();
                                directionsService.route(request, function (response, status) {
                                    if (status == 'OK') {
                                        // Display the route on the map.
                                        directionsDisplay.setDirections(response);
                                    }
                                });

                                let rightCol = $(`<div class="col-xs-12 col-sm-6" />`);
                                let subRow = $(`<div class="row" />`);
                                let col = $('<div class="col-xs-12 col-sm-12" />');
                                let imgSrc = sortedMaps[i][1].img;
                                let about = sortedMaps[i][1].info;
                                let imgDiv = $(`<img src=${imgSrc} class="img img-fluid img-default" />`);
                                let moreInfo = $("<h3 class='text-center'>More Info</h3>");
                                let aboutP = $(`<p>${about}</p>`);
                                col.append(imgDiv);
                                col.append(moreInfo);
                                col.append(aboutP);
                                subRow.append(col);
                                rightCol.append(subRow);
                                mapRow.append(rightCol);

                                let button = $('<button type="button" class="btn btn-outline-primary" />');
                                let icon = $('<i class="fas fa-arrow-circle-down fa-3x" />');
                                button.append(icon);
                                let div = $('<div class="text-center extra-padding-25" />');
                                div.append(button);
                                $("#mainCol").append(div);
                            } else {
                                userPosition = sortedMaps[i - 1][0];

                                let rightCol = $(`<div class="col-xs-12 col-sm-6" />`);
                                let subRow = $(`<div class="row" />`);
                                let col = $('<div class="col-xs-12 col-sm-12" />');
                                let imgSrc = sortedMaps[i][1].img;
                                let about = sortedMaps[i][1].info;
                                let imgDiv = $(`<img src=${imgSrc} class="img img-fluid img-default" />`);
                                let moreInfo = $("<h3 class='text-center'>More Info</h3>");
                                let aboutP = $(`<p>${about}</p>`);
                                col.append(imgDiv);
                                col.append(moreInfo);
                                col.append(aboutP);
                                subRow.append(col);
                                rightCol.append(subRow);
                                mapRow.append(rightCol);
                                //LEFT STARTS HERE
                                let colLeft = $(`<div class="col-xs-12 col-sm-6" />`);
                                let mapDiv = $(`<div id="map-${i}" />`);
                                mapDiv.css("height", "500px");

                                colLeft.append(mapDiv);
                                mapRow.append(colLeft);
                                let map = new google.maps.Map(document.getElementById(`map-${i}`), {
                                    center: userPosition,
                                    zoom: 15
                                });

                                let directionsDisplay = new google.maps.DirectionsRenderer({
                                    map: map
                                });

                                // Set destination, origin and travel mode.
                                let request = {
                                    destination: destinationPos,
                                    origin: userPosition,
                                    travelMode: 'DRIVING'
                                };

                                // Pass the directions request to the directions service.   
                                let directionsService = new google.maps.DirectionsService();
                                directionsService.route(request, function (response, status) {
                                    if (status == 'OK') {
                                        // Display the route on the map.
                                        directionsDisplay.setDirections(response);
                                    }
                                });

                                let button = $('<button type="button" class="btn btn-outline-primary" />');
                                let icon = $('<i class="fas fa-arrow-circle-down fa-3x" />');
                                button.append(icon);
                                let div = $('<div class="text-center extra-padding-25" />');
                                div.append(button);
                                $("#mainCol").append(div);
                            }
                        }
                    }
                }, function () {
                    alert("This is a demo app, and has no functionality if you do not allow geolocation. Please refresh the page and allow for your browser to get your location.");
                });
            } else {
                // Browser doesn't support Geolocation
                console.log("Browser doesn't support Geolocation.");
            }
        }


        //a sorting function that compares coordinate objects and sorts them from nearest to furthest for given coordinate object
        function sortingCoordinatesFunction(a, b, pos) {
            let posResult = pos;
            let aResult = a.lat + a.lng;
            let bResult = b.lat + b.lng;
            //if 1 of the sums is positive but the other is negative
            if ((aResult < 0 && bResult > 0) || (aResult > 0 && bResult < 0)) {
                let posResultPositive;
                if (posResult < 0)
                    posResultPositive = posResult * -1;
                else
                    posResultPositive = posResult;

                if (aResult < 0) {
                    let aResultPositive = aResult * -1;
                    if (aResultPositive > posResultPositive) {
                        if (bResult > posResultPositive) {
                            if (aResultPositive - posResultPositive < bResult - posResultPositive)
                                return -1;
                            else
                                return 1;
                        } else {
                            if (aResultPositive - posResultPositive < posResultPositive - bResult)
                                return -1;
                            else
                                return 1;
                        }
                    } else {
                        if (bResult > posResultPositive) {
                            if (posResultPositive - aResultPositive < bResult - posResultPositive)
                                return -1;
                            else
                                return 1;
                        } else {
                            if (posResultPositive - aResultPositive < posResultPositive - bResult)
                                return -1;
                            else
                                return 1;
                        }
                    }
                } else {
                    let bResultPositive = bResult * -1;
                    if (aResult > posResultPositive) {
                        if (bResultPositive > posResultPositive) {
                            if (aResult - posResultPositive < bResultPositive - posResultPositive)
                                return -1;
                            else
                                return 1;
                        } else {
                            if (aResult - posResultPositive < posResultPositive - bResultPositive)
                                return -1;
                            else
                                return 1;
                        }
                    } else {
                        if (bResultPositive > posResultPositive) {
                            if (posResultPositive - aResult < bResultPositive - posResultPositive)
                                return -1;
                            else
                                return 1;
                        } else {
                            if (posResultPositive - aResult < posResultPositive - bResultPositive)
                                return -1;
                            else
                                return 1;
                        }
                    }
                }
            }
            //if position is negative and both of the sums are negative OR positive
            if (posResult < 0) {
                if (aResult > 0 && bResult > 0) {
                    if (aResult < bResult)
                        return -1;
                    else
                        return 1;
                } else if (aResult < 0 && bResult < 0) {
                    let aResultPositive = aResult * -1;
                    let bResultPositive = bResult * -1;
                    let posResultPositive = posResult * -1;
                    if (aResultPositive > posResultPositive) {
                        if (bResultPositive > posResultPositive) {
                            if (aResultPositive - posResultPositive < bResultPositive - posResultPositive)
                                return -1;
                            else
                                return 1
                        } else {
                            if (aResultPositive - posResultPositive < posResultPositive - bResultPositive)
                                return -1;
                            else
                                return 1;
                        }
                    } else {
                        if (bResultPositive > posResultPositive) {
                            if (posResultPositive - aResultPositive < bResultPositive - posResultPositive)
                                return -1;
                            else
                                return 1;
                        } else {
                            if (posResultPositive - aResultPositive < posResultPositive - bResultPositive)
                                return -1;
                            else
                                return 1;
                        }
                    }
                }
            }
            //if position is positive and both sums are positive
            if (aResult > posResult) {
                if (bResult > posResult) {
                    if (aResult - posResult < bResult - posResult)
                        return -1;
                    else
                        return 1;
                }
                else {
                    if (aResult - posResult < posResult - bResult)
                        return -1;
                    else
                        return 1;
                }
            } else {
                if (bResult > posResult) {
                    if (posResult - aResult < bResult - posResult)
                        return -1;
                    else
                        return 1;
                }
                else {
                    if (posResult - aResult < posResult - bResult)
                        return -1;
                    else
                        return 1;
                }
            }
        }
    });
}