<html>
<head></head>
<body>
<h1>location:</h1>
<button onclick="getLocation()">get loca:</button>
<div id="output"></div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script>
var x=document.getElementById('output');
	function getLocation(){
	if(navigator.geolocation){
	navigator.geolocation.getCurrentPosition(showposition);
	}
	else{
	x.innerHTML="BROWSER NOT SUPPORTING";
	}
	}
	function showposition(position){
		var latitude=position.coords.latitude;
		var longitude=position.coords.longitude;
		x.innerHTML=position.coords.latitude;
		var locapi="http://maps.googleapis.com/maps/api/geocode/json?latlng="+position.coords.latitude+","+position.coords.longitude+"&sensor=true";
		x.innerHTML=locapi;
	}
</script>
</body>
</html>