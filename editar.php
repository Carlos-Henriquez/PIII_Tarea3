<?php
require("Template/plantilla.php");
plantilla::aplicar();

$editar = $_GET['editar'];

if ($_POST) {
    if (is_dir("DB") == false) {
        mkdir("DB");
    }

    $json = json_encode($_POST);

    file_put_contents("DB/" . rand(1, 999999999) . ".json", $json);

    header("Location: eliminar.php?eliminar=" . $editar);
};

if (file_exists("DB/" . $editar)) {
    $json = file_get_contents("DB/" . $editar);
    $datos = json_decode($json);
?>
    <title>Editar - Robos RD</title>

    <div class="container">
        <div style="text-align: center;">
            <h4><b>Editar robo</b></h4>
        </div>

        <form method="POST">
            <div class="row">
                <div class="col m3 l3">
                    <input class="validate" type="text" name="cedula" placeholder="Cédula" value="<?= $datos->cedula ?>" required>
                    <label for="cedula">Cédula</label>
                </div>
                <div class="col m6 l6">
                    <input class="validate" type="text" name="nombre" placeholder="Nombre" value="<?= $datos->nombre ?>" required>
                    <label for="nombre">Nombre</label>
                </div>
                <div class="col m3 l3">
                    <input class="validate" type="date" name="fecha" placeholder="Fecha" value="<?= $datos->fecha ?>" required>
                    <label for="fecha">Fecha</label>
                </div>
                <div class="row">
                    <div class="col m9 l9">
                        <input class="validate" type="text" name="robo" placeholder="¿Qué se robaron?" value="<?= $datos->robo ?>" required>
                        <label for="robo">¿Qué se robaron?</label>
                    </div>
                    <div class="col m3 l3">
                        <input class="validate" type="number" name="valor_perdido" min="0" placeholder="Valor perdido en RD$" value="<?= $datos->valor_perdido ?>" required>
                        <label for="robo">Valor perdido en RD$</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col m12 l12">
                        <input class="validate" type="text" name="donde_ocurrio" placeholder="¿Dónde ocurrió?" value="<?= $datos->donde_ocurrio ?>" required>
                        <label for="donde_ocurrio">¿Dónde ocurrió?</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col m6 l6">
                        <input class="validate" type="text" name="latitud" placeholder="Latitud" value="<?= $datos->latitud ?>" required>
                        <label for="latitud">Latitud</label>
                    </div>
                    <div class="col m6 l6">
                        <input class="validate" type="text" name="longitud" placeholder="Longitud" value="<?= $datos->longitud ?>" required>
                        <label for="longitud">Longitud</label>
                    </div>
                </div>

                <div style="text-align: center;">
                    <button class="btn">Guardar</button>
                    <a onclick="return confirm('¿Está seguro que desea cancelar?')" class='btn red' href='registro.php'>Cancelar</a>
                </div>
            </div>
        </form>
    </div>
<?php
};
/*
Carlos Henriquez
20202-10203
*/