<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Fastgo.com</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <style>
        /* Always set the map height explicitly to define the size of the div
        * element that contains the map. */
        #map {
            height: 100%;
        }
        /* Optional: Makes the sample page fill the window. */
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
    </style>
</head>
<body>
    <div id="map"></div>
    <script>
        // Note: This example requires that you consent to location sharing when
        // prompted by your browser. If you see the error "The Geolocation service
        // failed.", it means you probably did not give permission for the browser to
        // locate you.
        var map, infoWindow;
        function initMap() {
            map = new google.maps.Map(document.getElementById('map'), {
                center: { lat: -34.397, lng: 150.644 },
                zoom: 6
            });
            infoWindow = new google.maps.InfoWindow;

            // Try HTML5 geolocation.
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function (position) {
                    var pos = {
                        lat: position.coords.latitude,	
                        lng: position.coords.longitude,
                    };
                    alert("Copy latitude and longitude one by one provide during calling mechanic, latitude is " + pos['lat'] + ",longitude is " + pos['lng']);
                    <?php
					$content1="<script> document.write(pos[lat]) </script>";
					$content2="<script> document.write(pos[lng]) </script>";
					$latitudes=$_SESSION['$content1'];
					$longitudes=$_SESSION['$content2'];
					header('location:http://localhost/fast go/vehicle_form.php');
					?>
					infoWindow.setPosition(pos);
                    infoWindow.setContent('Location found.');
                    infoWindow.open(map);
                    map.setCenter(pos);
                }, function () {
                    handleLocationError(true, infoWindow, map.getCenter());
					
                });
            } else {
                // Browser doesn't support Geolocation
                handleLocationError(false, infoWindow, map.getCenter());
				
            }
        }

        function handleLocationError(browserHasGeolocation, infoWindow, pos) {
            infoWindow.setPosition(pos);
            infoWindow.setContent(browserHasGeolocation ?
                'Error: The Geolocation service failed.' :
                'Error: Your browser doesn\'t support geolocation.');
            infoWindow.open(map);
        }
    </script>
    pos['lat'];
	var latitude=pos['lat'] ;
	var longitude=pos['lng'];
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB-7ZXxK_X_sk7-7SPZE7ZrRzpH-qj0p7I &callback=initMap">
    </script>
	<?php
	session_start();
	$content1="<script> document.write(latitude) </script>";
	$content2="<script> document.write(latitude) </script>";
	$latitudes=$_SESSION['$content1'];
	$longitudes=$_SESSION['$content1'];
	?>
</body>
</html>
