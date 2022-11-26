<?php
class plantilla
{
    private $plantilla = null;
    public static $instancia = null;
    public static function aplicar()
    {
        if (self::$instancia == null) {
            self::$instancia = new plantilla();
        }

        return self::$instancia->plantilla;
    }

    public function __construct()
    {
?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
            <link rel="stylesheet" href="CSS/plantilla.css">
            <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.1/dist/leaflet.css" integrity="sha256-sA+zWATbFveLLNqWO2gtiw3HL/lh1giY/Inf1BJ0z14=" crossorigin="">
            <script src="https://unpkg.com/leaflet@1.9.1/dist/leaflet.js" integrity="sha256-NDI0K41gVbWqfkkaHj15IzU7PtMoelkzyKp8TOaFQ3s=" crossorigin=""></script>
        </head>

        <body>
            <nav>
                <div class="container">
                    <div class="nav-wrapper">
                        <a href="./" class="left brand-logo"><img width="60px" height="55px" alt="Imagen del ladron" src="https://www.pngarts.com/files/9/Thief-Robber-PNG-Picture.png" /><b>ROBOS RD</b></a>
                        <ul class="right">
                            <li><a class="no-print" href="./">INICIO</a></li>
                            <li><a class="no-print" href="registro.php">REGISTRO</a></li>
                            <li><a class="no-print" href="agregar.php">AGREGAR</a></li>
                            <li><a class="no-print" href="mapa.php">MAPA</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        <?php
    }

    public function __destruct()
    {
        ?>
            <footer class="page-footer">
                <div class="center footer-copyright">
                    <div class="container">
                        Carlos Henriquez - 2020-10203 &copy; 2022
                    </div>
                </div>
            </footer>
        </body>

        </html>
<?php
    }
}

/*
Carlos Henriquez
2020-10203
*/