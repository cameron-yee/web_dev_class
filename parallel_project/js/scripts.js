var initMap = function() {
    var map;
    map = new google.maps.Map(document.getElementById('map'), {
        center: { lat: 38.894338, lng: -104.802753 },
        zoom: 10
    })
    var marker = new google.maps.Marker({
        position: { lat: 38.894338, lng: -104.802753 },
        map: map
    });
}

var activeBtn = function () {
    $(document).removeClass('active');
    var pathname = window.location.pathname;
    // var pname = url.substr(url.lastIndexOf('/') + 1);
    $('.top-menu a[href="'+pathname+'"]').addClass('active');
}

var rotatePictures = function () {
    var prefix = "images/home-bike-";
    var images = [];
    var counter = new Date().getSeconds();

    for(var i = 1; i < 7; i++) {
        images.push(prefix + i + ".jpg");
    }

    switch(true) {
        case counter < 11: 
            document.getElementById('img-placeholder').setAttribute('src', images[0]);
            console.log("case 1");
            break;
        case counter < 21: 
            document.getElementById('img-placeholder').setAttribute('src', images[1]);
            console.log("case 2");
            break;
        case counter < 31: 
            document.getElementById('img-placeholder').setAttribute('src', images[2]);
            console.log("case 3");
            break;
        case counter < 41: 
            document.getElementById('img-placeholder').setAttribute('src', images[3]);
            console.log("case 4");
            break;
        case counter < 51: 
            document.getElementById('img-placeholder').setAttribute('src', images[4]);
            console.log("case 5");
            break;
        case counter < 60: 
            document.getElementById('img-placeholder').setAttribute('src', images[5]);
            console.log("case 6");
            break;
    }
}

$(document).ready(function () {
    rotatePictures();
    initMap();
    activeBtn();
});
