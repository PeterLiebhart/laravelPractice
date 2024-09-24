
function initMap() {

    const mapElement = $('#map');

    if (mapElement.length) {
        if(coordinates === null) {
            coordinates = {lat: 0, lng: 0};
        }
        const map = new google.maps.Map(mapElement[0], {
            zoom: 15,
            center: coordinates
        });

        new google.maps.Marker({
            position: coordinates,
            map: map
        });
    } else {
        console.error('Map element not found.');
    }
}

function initAutocomplete() {
    const autocomplete = new google.maps.places.Autocomplete($('#autocomplete')[0], {
        componentRestrictions: {country: ["DE", "AT", "CH"]}
    });

    // Add listener to capture the user's address selection
    autocomplete.addListener('place_changed', function() {
        const place = autocomplete.getPlace();

        // Check if the place has a geometry (location)
        if (place.geometry.location) {
            const lat = place.geometry.location.lat();
            const lng = place.geometry.location.lng();

            coordinates = {lat: lat, lng: lng};
            initMap();
        } else {
            console.log("No details available for input: '" + place.name + "'");
        }
    });
}

$(document).ready(function () {
    initAutocomplete();
})

