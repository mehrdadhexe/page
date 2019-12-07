<!DOCTYPE html>
<html>
<head>
    <meta charset=utf-8 />
    <title>A simple map</title>
    <meta name='viewport' content='initial-scale=1,maximum-scale=1,user-scalable=no' />
    <script src='https://api.mapbox.com/mapbox.js/v3.2.0/mapbox.js'></script>
    <link href='https://api.mapbox.com/mapbox.js/v3.2.0/mapbox.css' rel='stylesheet' />
    <style>
        body { margin:0; padding:0; }
        #map { position:absolute; top:0; bottom:0; width:100%; }
    </style>
</head>
<body>

<div id='map'></div>
<script>
    L.mapbox.accessToken = 'pk.eyJ1IjoibWVocmRhZGhleGUiLCJhIjoiY2p4bG5ydHRnMDgyMjN5bnVzbWQ0bGd0NyJ9.a3YeBVPewDXN8ZTHapWNNQ';
    var map = L.mapbox.map('map')
        .setView([27.1816419,56.2673693], 9)
        .addLayer(L.mapbox.styleLayer('mapbox://styles/mapbox/streets-v11'));

    var myFeatureLayer = L.mapbox.featureLayer('{{url('/assets/data/sf_locations.geojson')}}')
        .addTo(map);

    myFeatureLayer.on('click', function(e) {
        map.panTo(e.layer.getLatLng());
    });



</script>

</body>
</html>

