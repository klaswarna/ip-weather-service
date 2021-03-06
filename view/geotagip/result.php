<?php

namespace Anax\View;

?>

<p>Resultatet av inmatat ip-nummer är som följer:</p>
<table class="lilltabell">
<?php


foreach ($res as $key => $value) { ?>
    <tr>
        <td><?=$key?></td>
        <td><?=$value?></td>
    </tr>

<?php } ?>

</table>


<div class="osynlig">
    <div id="longitude"><?=$res["longitude"]?></div>
    <div id="latitude"><?=$res["latitude"]?></div>
</div>

<br>


<div id="demoMap" style="height:250px; width:250px"></div>
<script src="http://www.openlayers.org/api/OpenLayers.js"></script>
<script>
    var latitude = document.getElementById("latitude").innerText;
    var longitude = document.getElementById("longitude").innerText;
    console.log("latitude: ");
    console.log(latitude);
    map = new OpenLayers.Map("demoMap");
    map.addLayer(new OpenLayers.Layer.OSM());
    map.zoomToMaxExtent();


    var lonLat = new OpenLayers.LonLat( longitude, latitude  )
          .transform(
            new OpenLayers.Projection("EPSG:4326"), // transform from WGS 1984
            map.getProjectionObject() // to Spherical Mercator Projection
        );

    var zoom=12;

    var markers = new OpenLayers.Layer.Markers( "Markers" );
    map.addLayer(markers);

    markers.addMarker(new OpenLayers.Marker(lonLat));

    map.setCenter (lonLat, zoom);

</script>
