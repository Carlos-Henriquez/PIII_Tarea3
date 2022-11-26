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

    <?php
    if (is_dir("DB")) {
        $dir = scandir("DB");

        foreach ($dir as $archivo) {
            $posible = "DB/{$archivo}";

            if (is_file($posible)) {
                $tmp = file_get_contents($posible);
                $tmp = json_decode($tmp);

                echo <<<MARCADOR
                    <script>
                        var marker = L.marker([{$tmp->latitud}, {$tmp->longitud}]).addTo(map)
                        .bindPopup("<b>Fecha:</b><br> {$tmp->fecha}<br> <b>¿Qué se robaron?</b><br> {$tmp->robo}<br> <b>Valor perdido:</b><br> RD$ {$tmp->valor_perdido}<br> <a href='informe.php?informe={$archivo}'>Imprimir</a>")
                    </script>
                MARCADOR;
            }
        }
    }
    ?>
</div>

<?php
/*
Carlos Henriquez
2020-10203
*/