<?php
namespace Dsw\Rolgame;

class Guerrero extends Personaje{
  public $fuerza;
  function __construct($nombre, $nivel, $puntosDeVida, $fuerza)
  {
    parent::__construct($nombre, $nivel, $puntosDeVida);
    $this->fuerza = $fuerza;
  }
  function atacar()
  {
    return $this->nivel * $this->fuerza; 
  }

  function defender($daño)
  {
    $dañoFinal =  $daño - ($this->fuerza / 2);
    return $dañoFinal > 0 ? $dañoFinal : 0;
  }
}

?>