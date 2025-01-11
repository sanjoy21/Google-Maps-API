<!DOCTYPE html>
<html lang="en">
<head>
    <title>Google Maps</title>
    <script src="https://maps.googleapis.com/maps/api/js?key={{ config('services.google_maps.key') }}"></script>
</head>
<body>
    <div id="map" style="height: 500px; width: 100%;"></div>
    <script>
        function initMap() {
            const location = { lat: 23.54844, lng: 90.47439 }; // Example coordinates
            const map = new google.maps.Map(document.getElementById('map'), {
                zoom: 14,
                center: location,
            });
            new google.maps.Marker({
                position: location,
                map: map,
            });
        }

        window.onload = initMap;
    </script>
</body>
</html>
