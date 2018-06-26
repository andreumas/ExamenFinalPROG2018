<?php
namespace Daw\models;
/**
 * Plantilla vacia de Db
 */
class evento extends Db
{

  function __construct()
  {
    parent::__construct();
  }

  //Buscamos a un asistente
  public function buscarAsistente($dni){
    $consulta="SELECT 'dni' FROM registro WHERE dni = '$dni'";
    $listadoEventos=parent::consulta($$sql);
    return $listadoEventos;
  }

}

?>
