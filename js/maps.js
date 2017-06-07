// Load the function init when DOM is ready
$(window).on('load', initialize);

function initialize() {
    loadMap();
}

function loadMap(){
    var myLatlng = new google.maps.LatLng(51.907710, 4.512314);

    var mapOptions = {
        zoom: 14,
        center: myLatlng,
        scrollwheel: false
    };

    var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

    var contentString = '<div class="adres">' +
        '<strong>Groothandel</strong> <br>' +
        'Piekstraat 45 <br>' +
        '3071 EL Rotterdam' +
        '</div>';

    var infowindow = new google.maps.InfoWindow({
        content: contentString
    });

    var marker = new google.maps.Marker({
        position: myLatlng,
        map: map,
        title: 'Muscle Factory'
    });

    google.maps.event.addListener(marker, 'click', function() {
        infowindow.open(map,marker);
    });

    infowindow.open(map,marker);
}
