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

$(document).ready(function () {
    initMap();
    activeBtn();
});
