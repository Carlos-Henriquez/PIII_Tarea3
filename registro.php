<?php

require("Template/plantilla.php");
plantilla::aplicar();


if ($_POST) {
    if (is_dir("DB") == false) {
        mkdir("BD");
    }

    $json = json_encode($_POST);

    file_put_contents("DB/" . rand(1, 999999999) . ".json", $json);
};
?>

<title>Registro - Robos RD</title>

<div class="container">
    <div style="text-align:center;">
        <h4><b>Registro de robos</b></h4>
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
                                <a class='btn blue' href='editar.php?editar={$archivo}'>Editar</a>
                                </td>
                                <td>
                                <a onclick="return confirm('¿Está seguro que desea eliminar esta fila?')" class="btn red" href="eliminar.php?eliminar={$archivo}">Eliminar</a>
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