<?php
namespace Dsw\Rolgame;

class Mago extends Personaje{
  public $mana;
  function __construct($nombre, $nivel, $puntosDeVida, $mana)
  {
    parent::__construct($nombre, $nivel, $puntosDeVida);
    $this->mana = $mana;
  }
  function atacar()
  {
    return $this->mana / 2; 
  }

  function defender($daño)
  {
    $dañoFinal =  $daño - ($this->mana / 5);
    return $dañoFinal > 0 ? $dañoFinal : 0;
  }
}

?>