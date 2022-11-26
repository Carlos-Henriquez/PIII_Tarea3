<?php
require("Template/plantilla.php");
plantilla::aplicar();

$informe = $_GET["informe"];

$datos = file_get_contents("DB/" . $informe);
$datos = json_decode($datos);
?>

<title><?= $datos->cedula ?> - Robos RD</title>

<div class="container">
    <div class="row">
        <div class="col m6">
            <h4><b>Cédula</b></h4>
        </div>
        <div class="col m6">
            <h4><?= $datos->cedula ?></h4>
        </div>
    </div>
    <div class="row">
        <div class="col m6">
            <h4><b>Nombre</b></h4>
        </div>
        <div class="col m6">
            <h4><?= $datos->nombre ?></h4>
        </div>
    </div>
    <div class="row">
        <div class="col m6">
            <h4><b>Fecha</b></h4>
        </div>
        <div class="col m6">
            <h4><?= $datos->fecha ?></h4>
        </div>
    </div>
    <div class="row">
        <div class="col m6">
            <h4><b>¿Qué se robaron?</b></h4>
        </div>
        <div class="col m6">
            <h4><?= $datos->robo ?></h4>
        </div>
    </div>
    <div class="row">
        <div class="col m6">
            <h4><b>Valor perdido</b></h4>
        </div>
        <div class="col m6">
            <h4>RD$ <?= $datos->valor_perdido ?></h4>
        </div>
    </div>
    <div class="row">
        <div class="col m6">
            <h4><b>¿Dónde ocurrió?</b></h4>
        </div>
        <div class="col m6">
            <h4><?= $datos->donde_ocurrio ?></h4>
        </div>
    </div>
    <div class="row">
        <div class="col m6">
            <h4><b>Latitud</b></h4>
        </div>
        <div class="col m6">
            <h4><?= $datos->latitud ?></h4>
        </div>
    </div>
    <div class="row">
        <div class="col m6">
            <h4><b>Longitud</b></h4>
        </div>
        <div class="col m6">
            <h4><?= $datos->longitud ?></h4>
        </div>
    </div>

    <div style="text-align: center;">
        <button onclick="print();" class="btn no-print">Imprimir</button>
    </div>
</div>

<?php
/*
Carlos Henriquez
2020-10203
*/