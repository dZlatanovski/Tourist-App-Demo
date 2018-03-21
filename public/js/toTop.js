// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        //close the open divs
        var mapDiv = document.getElementById("map");
        var historyDiv = document.getElementById("historyDiv");
        var photosDiv = document.getElementById("morePhotos");
    
        mapDiv.style.display = "none";
        historyDiv.style.display = "none";
        photosDiv.style.display = "none";
    
    
        //smooth scrolling
        document.querySelector('#top').scrollIntoView({ 
            behavior: 'smooth' 
        });
    }