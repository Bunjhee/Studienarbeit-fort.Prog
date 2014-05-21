$(function () {
    navigator.geolocation.getCurrentPosition(
        locationOK,
        locationError
    );
});

function locationError() {
    alert('Leider ist die Bestimmung deiner Position nicht möglich');
    window.location.href = 'index.php';
}

function locationOK(position) {
    $('#addPointForm input[name="lat"]').val(position.coords.latitude);
    $('#addPointForm input[name="lng"]').val(position.coords.longitude);

    var geocoder = new google.maps.Geocoder();
    var userPos = new google.maps.LatLng(
        position.coords.latitude,
        position.coords.longitude
    );

    geocoder.geocode(
        {
            latLng: userPos
        },
        function (results, status) {
            if (status == 'OK') {
                $('#geocodedAddress').text(results[0].formatted_address);
            } else {
                $('#geocodedAddress').text('Addresse konnte nicht ermittelt werden.');
            }
        }
    );
}












