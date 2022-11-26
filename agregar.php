<?php
require("Template/plantilla.php");
plantilla::aplicar();

if ($_POST) {
    if (is_dir("DB") == false) {
        mkdir("DB");
    }

    $json = json_encode($_POST);

    file_put_contents("DB/" . rand(1, 999999999) . ".json", $json);

    header("Location: index.php");
}
?>

<title>Agregar - Robos RD</title>

<div class="container">
    <div style="text-align: center;">
        <h4><b>Agregar robo</b></h4>
    </div>

    <form method="POST">
        <div class="row">
            <div class="col m3 l3">
                <input class="validate" type="text" name="cedula" placeholder="Cédula" required>
                <label for="cedula">Cédula</label>
            </div>
            <div class="col m6 l6">
                <input class="validate" type="text" name="nombre" placeholder="Nombre" required>
                <label for="nombre">Nombre</label>
            </div>
            <div class="col m3 l3">
                <input class="validate" type="date" name="fecha" placeholder="Fecha" required>
                <label for="fecha">Fecha</label>
            </div>
            <div class="row">
                <div class="col m9 l9">
                    <input class="validate" type="text" name="robo" placeholder="¿Qué se robaron?" required>
                    <label for="robo">¿Qué se robaron?</label>
                </div>
                <div class="col m3 l3">
                    <input class="validate" type="number" name="valor_perdido" min="0" placeholder="Valor perdido en RD$" required>
                    <label for="robo">Valor perdido en RD$</label>
                </div>
            </div>
            <div class="row">
                <div class="col m12 l12">
                    <input class="validate" type="text" name="donde_ocurrio" placeholder="¿Dónde ocurrió?" required>
                    <label for="donde_ocurrio">¿Dónde ocurrió?</label>
                </div>
            </div>
            <div class="row">
                <div class="col m6 l6">
                    <input class="validate" type="text" name="latitud" placeholder="Latitud" required>
                    <label for="latitud">Latitud</label>
                </div>
                <div class="col m6 l6">
                    <input class="validate" type="text" name="longitud" placeholder="Longitud" required>
                    <label for="longitud">Longitud</label>
                </div>
            </div>

            <div style="text-align: center;">
                <button class="btn">Guardar</button>
            </div>
        </div>
    </form>
</div>

<?php
/*
Carlos Henriquez
2020-10203
*/