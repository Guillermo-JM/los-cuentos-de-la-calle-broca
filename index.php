<?php include_once 'app/config.php';?>
<!-- Hola este es un ejemplo de un branch-1 -->
<!DOCTYPE html>
<html lang="es-MX" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="author" content="Guillermo Jiménez">
        <meta name="keywords" content="los cuentos de la calle broca">
        <meta name="description" content="los cuentos de la calle broca">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Los cuentos de la calle broca</title>
        <link rel="shortcut icon" type="image/jpg" href="¡Aquí va dirección!">
        <?php include_once 'app/dependencies.php';?>
        <!-- Es la primera vez que utilizo Git y Github -->
    </head>
    <body>
        <?php   
            if(isset($_GET['requested_view'])) {
                switch($_GET['requested_view']) {
                    case 'capitulo1': {
                        require_once 'view/el-cochinito-listo.php';
                        break;
                    }
                    case 'capitulo2': {
                        require_once 'view/el-hada-de-la-llave-de-agua.php';
                        break;
                    }
                    case 'capitulo3': {
                        require_once 'view/el-diablito-bueno.php';
                        break;
                    }
                    case 'capitulo4': {
                        require_once 'view/no-se-quien-no-se-que.php';
                        break;
                    }
                    case 'capitulo5': {
                        require_once 'view/la-bruja-del-armario-de-escobas.php';
                        break;
                    }
                    case 'capitulo6': {
                        require_once 'view/el-diablo-de-cabellos-blancos.php';
                        break;
                    }
                    default: {
                        require_once 'view/menu.php';
                        break;
                    }
                }
            } else {
                require 'view/menu.php';
            }
        ?>
        <div id="div-chapter"></div>
    </body>
</html>