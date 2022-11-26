<?php
require("Template/plantilla.php");
plantilla::aplicar();

if (is_dir("DB") == false) {
    mkdir("BD");
}
?>

<title>Robos RD</title>

<div class="container">
    <div style="text-align:center;">
        <h4><b>Lista de robos</b></h4>
    </div>

    <table class="highlight">
        <thead>
            <tr>
                <th>Cédula</th>
                <th>|</th>
                <th>Nombre</th>
                <th>|</th>
                <th>Fecha</th>
                <th>|</th>
                <th>¿Qué se robaron?</th>
                <th>|</th>
                <th>Valor perdido</th>
                <th>|</th>
                <th>¿Dónde ocurrió?</th>
                <th>|</th>
                <th>Latitud</th>
                <th>Longitud</th>
            </tr>
        </thead>
        <tbody>
        <?php
            if (is_dir("DB")) {
                $archivos = scandir("DB");

                foreach ($archivos as $archivo) {
                    if ($archivo != "." && $archivo != "..") {
                        $json = file_get_contents("DB/" . $archivo);
                        $datos = json_decode($json);
                        echo <<<TABLA
                            <tr>
                                <td>{$datos->cedula}</td>
                                <td>|</td>
                                <td>{$datos->nombre}</td>
                                <td>|</td>
                                <td>{$datos->fecha}</td>
                                <td>|</td>
                                <td>{$datos->robo}</td>
                                <td>|</td>
                                <td>RD$ {$datos->valor_perdido}</td>
                                <td>|</td>
                                <td>{$datos->donde_ocurrio}</td>
                                <td>|</td>
                                <td>{$datos->latitud}</td>
                                <td>{$datos->longitud}</td>
                                <td>|</td>
                                <td>
                                    <a class="btn" href="informe.php?informe={$archivo}">Imprimir</a>
                                </td>
                            </tr>
                        TABLA;
                    }
                }
            }
            ?>
        </tbody>
    </table>
</div>

<?php
/*
Carlos Henriquez
20202-10203
*/