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

        </tbody>
    </table>
</div>

<?php
/*
Carlos Henriquez
20202-10203
*/