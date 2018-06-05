<?php
require_once __DIR__.'/../vendor/autoload.php';
use Daw\models\Evento;
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Pagina home del proyecto</title>
  </head>
  <body>
    <?php
    //Ejemplo de uso de modelos
    $e = new Evento();
    $resultado=$e->listarEventos();

    foreach ($resultado as $evento) {
      echo "Evento:".$evento['nombre']."<br>";
    }
    ?>
  </body>
</html>
