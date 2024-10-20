<?php
namespace Dsw\Rolgame;

class Clerigo extends Personaje implements Curable
{
  public $poderCurativo;
  public function __construct($nombre, $nivel, $puntosDeVida, $poderCurativo)
  {
    parent::__construct($nombre, $nivel, $puntosDeVida);
    $this->poderCurativo = $poderCurativo;
  }

  public function atacar()
  {
    return $this->poderCurativo * 2;   
  }

  public function defender($daño)
  {
    $daño = $daño - ($this->poderCurativo / 2);
    return $daño > 0 ? $daño : 0;   
  }

  public function curar()
  {
    return $this->poderCurativo * 3;   
  }
}

?>