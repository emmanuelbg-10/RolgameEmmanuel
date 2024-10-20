<?php
namespace Dsw\Rolgame;

class Mago extends Personaje
{
  public $mana;
  public function __construct($nombre, $nivel, $puntosDeVida, $mana)
  {
    parent::__construct($nombre, $nivel, $puntosDeVida); 
    $this->mana = $mana; 
  }

  public function atacar()
  {
    return $this->mana / 2; 
  }

  public function defender($daño)
  {
    $daño = $daño - ($this->mana / 5);
    return $daño > 0 ? $daño : 0;   
  }
}

?>