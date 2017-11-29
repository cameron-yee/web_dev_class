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
    var fullPath = window.location.pathname;
    // var currentPage = fullPath.substr(fullPath.lastIndexOf('/'));
    $('.top-menu a[href="'+fullPath+'"]').addClass('active');
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
            break;
        case counter < 21: 
            document.getElementById('img-placeholder').setAttribute('src', images[1]);
            break;
        case counter < 31: 
            document.getElementById('img-placeholder').setAttribute('src', images[2]);
            break;
        case counter < 41: 
            document.getElementById('img-placeholder').setAttribute('src', images[3]);
            break;
        case counter < 51: 
            document.getElementById('img-placeholder').setAttribute('src', images[4]);
            break;
        case counter < 60: 
            document.getElementById('img-placeholder').setAttribute('src', images[5]);
            break;
    }
}

var time = function() {
    var h = new Date().getHours().toString();
    var m = new Date().getMinutes().toString();
    var s = new Date().getSeconds().toString();

    var timeElement = document.getElementById('time');
    timeElement.textContent = h + ":" + m + ":" + s;
}

window.onload = function() {
    var fullPath = window.location.pathname;
    var currentPage = fullPath.substr(fullPath.lastIndexOf('/'));
    if(currentPage === "/index.php") {
        initMap();
        var pictures = window.setInterval(rotatePictures, 1000);
    }
    var setTime = window.setInterval(time, 1000);
    activeBtn();
};
