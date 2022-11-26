<?php
require("Template/plantilla.php");
plantilla::aplicar();
?>

<title>Mapa - Robos RD</title>

<div id="map" style="width: 100%; height: 820px;">
    <script>
        var map = L.map("map").setView([18.8000000, -70.4000000], 9);

        var tiles = L.tileLayer("https://tile.openstreetmap.org/{z}/{x}/{y}.png", {
            maxZoom: 19
        }).addTo(map);
    </script>
    
</div>

<?php
/*
Carlos Henriquez
2020-10203
*/