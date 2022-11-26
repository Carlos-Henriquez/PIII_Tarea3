<?php
$eliminar = $_GET['eliminar'];

if (file_exists("DB/" . $eliminar)) {
    unlink("DB/" . $eliminar);
}

header("Location: registro.php");
