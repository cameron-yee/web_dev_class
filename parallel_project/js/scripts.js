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
    var pname = location.pathname.toString;
    if (pname.includes('index')) {
        $('#homebtn').addClass('active');
    } else if (pname.includes('products')) {
        $('#productbtn').addClass('active');
    } else if (pname.includes('about')) {
        $('#aboutbtn').addClass('active');
    }
}

$(document).ready(function () {
    initMap();
    activeBtn();
});
