<?php
require_once __DIR__.'/../vendor/autoload.php';
use Daw\models\Equipo;
?>
<!DOCTYPE html>
<html>
  <head>
    <script src="comprobar.js" charset="utf-8"></script>

    <meta charset="utf-8">
    <title>Equipos</title>
  </head>
  <body>

    <?php
    //Ejemplo de uso de modelos
    $e=new Equipo();

    $ei=new Equipo();
    $resultado=$ei->insertarEquipo($_POST['nombre'],$_POST['participantes']);

    $resultado=$e->listarEquipos();
    foreach($resultado as $equipo){
      echo "Equipo:" . $equipo['nombre'] . $equipo['participantes'] ."<br>";
                                  }


            if ($_POST['participantes']>5) {
           echo "<h1>"."El maximo numero de participantes es 5" . "</h1>";
          }elseif ($_POST['participantes']<=0){
            echo "<h1>"."Eppp! El minimo de participantes es 1" . "</h1>";
          }elseif (empty($_POST['participantes'] && $_POST['nombre'])) {
          echo "<h1>"."Rellene por favor todos los campos" . "</h1>";}else{
        echo "<h1>"."Todo correcto y insertado" . "</h1>";

                                  }









    if (isset($_GET['listarEquipos'])) {
          listarEquipos();
       }else if(isset($_GET['insertarEquipo'])){
      insertarEquipos();
      }



    ?>


  </body>
</html>
