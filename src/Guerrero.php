<?php
namespace Dsw\Rolgame;

class Guerrero extends Personaje
{
  public $fuerza;
  public function __construct($nombre, $nivel, $puntosDeVida, $fuerza)
  {
    parent::__construct($nombre, $nivel, $puntosDeVida);
    $this->fuerza = $fuerza;
  }

  public function atacar()
  {
    return $this->nivel * $this->fuerza;   
  }

  public function defender($daño)
  {
    $daño = $daño - ($this->fuerza / 2);
    return $daño > 0 ? $daño : 0;   
  }
}

?>