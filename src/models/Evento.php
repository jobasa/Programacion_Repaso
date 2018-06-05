<?php
namespace Daw\models;
/**
 * Plantilla vacia de Db
 */
class Evento extends Db
{

  function __construct()
  {
    parent::__construct();
  }
//funcion que muestra datos de tabla registro
function listarEventos(){
  $consulta="SELECT * FROM registro";
  $listadoEventos=parent::realizarConsultas($consulta);
  return $listadoEventos;
}


}

?>
