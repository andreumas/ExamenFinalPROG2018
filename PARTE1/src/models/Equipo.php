<?php
namespace Daw\models;

/**
 *
 */
class Equipo extends Db
{

  function __construct()
  {
  parent::__construct();

  }

  //funcion que muestra datos de tabla registro

function listarEquipos(){

$consulta="SELECT * FROM equipo";
$listadoEquipos=parent::realizarConsultas($consulta);
return $listadoEquipos;

}

function insertarEquipo($nombre,$participantes){

$consulta="INSERT INTO equipo (nombre,participantes)
           VALUES ('".$nombre."','".$participantes."')";
$listadoEquipos=parent::realizarConsultas($consulta);
return $listadoEquipos;

}




}









?>
