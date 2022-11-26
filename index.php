<?php
require("Template/plantilla.php");
plantilla::aplicar();

if (is_dir("DB") == false) {
    mkdir("BD");
}
?>