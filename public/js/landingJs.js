function initMap() {
  $(() => {
    $.ajax({
      type: "GET",
      url: "http://localhost/Tourist-App-Demo-master/public/api/destinations",
      dataType: "json",
      success: function (data) {
        generateEventsForButtons(3, data);
      },
      error: function () {
        console.log("Couldn't get data from API.");
        return;
      }
    });

    //Back to top button when history is showing BUG HERE(FIX);
    $('#backToTop').on('click', () => {
      document.getElementById('landing').scrollIntoView({
        behavior: 'smooth'
      });
    });

    //Directions buttons logic starts here
    function directionsHandlerGenerator(directionsBtn, coordinates) {
      directionsBtn.on("click", (e) => {
        e.preventDefault();
        directionsBtn.blur();

        var map = new google.maps.Map(document.getElementById('map'), {
          center: coordinates,
          zoom: 13
        });

        var marker = new google.maps.Marker({
          position: coordinates,
          map: map,
          title: "Click to zoom"
        });

        map.addListener('center_changed', function () {
          window.setTimeout(function () {
            map.panTo(marker.getPosition());
          }, 3000);
        });

        marker.addListener("click", function () {
          map.setZoom(8);
          map.setCenter(marker.getPosition());
        });

        $('#historyDiv').css('display', 'none');
        $('#morePhotos').css('display', 'none');
        $('#map').css('display', 'block');
        document.getElementById('map').scrollIntoView({
          behavior: 'smooth'
        });
      });
    }
    //Directions buttons logic ends here

    //History buttons logic starts here    
    function historyHandlerGenerator(historyBtn, historyData) {
      historyBtn.on('click', (e) => {
        e.preventDefault();
        historyBtn.blur();
         
        let about = $('#aboutP');
        let legacy = $('#legacyP');
        let present = $('#presentP');
        let trivia = $('#triviaP');

        $('#morePhotos').css('display', 'none');
        $('#map').css('display', 'none');
        about.html(historyData.about);
        legacy.html(historyData.legacy);
        present.html(historyData.present);
        trivia.html(historyData.trivia);
        $('#historyDiv').css('display', 'block');
        document.getElementById('historyDiv').scrollIntoView({
          behavior: 'smooth'
        });
      });
    }
    //History buttons logic ends here    

    //More-Photos buttons logic starts here        
    function photosHandlerGenerator(photosBtn, imageSrcs) {
      photosBtn.on('click', (e) => {
               
        e.preventDefault();
        photosBtn.blur();
        let image0 = $('#xtra_image_0');
        let image1 = $('#xtra_image_1');
        let image2 = $('#xtra_image_2');
        let image3 = $('#xtra_image_3');

        $('#historyDiv').css('display', 'none');
        $('#map').css('display', 'none');
        image0.attr('src', imageSrcs[0]);
        image1.attr('src', imageSrcs[1]);
        image2.attr('src', imageSrcs[2]);
        image3.attr('src', imageSrcs[3]);
        $('#morePhotos').css('display', 'block');

        document.getElementById('morePhotos').scrollIntoView({
          behavior: 'smooth'
        });
        
      });
    }
    //More-Photos buttons logic ends here            

    //This function is responsible for setting the events on all the buttons
    //using the functions above
    function generateEventsForButtons(numOfButtons, data) {
      for (let i = 0; i < numOfButtons; i++) {
        let coords = {
          lat: parseFloat(data[i].lat),
          lng: parseFloat(data[i].lon)
        }

        let history = {
          about: data[i].about,
          legacy: data[i].legacy,
          present: data[i].present,
          trivia: data[i].trivia,
        }

        let photos = [
          data[i].img_1.toString(),
          data[i].img_2.toString(),
          data[i].img_3.toString(),
          data[i].img_4.toString(),
        ]
        
        directionsHandlerGenerator($(`#show_map_${i}`), coords);
        historyHandlerGenerator($(`#load_history_content_${i}`), history);
        photosHandlerGenerator($(`#load_photos_${i}`), photos);
      }
    }
  });
}

