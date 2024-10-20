<?php
namespace Dsw\Rolgame;

class Clerigo extends Personaje implements Curable{
  public $poderCurativo;
  public function __construct($nombre, $nivel, $puntosDeVida, $poderCurativo)
  {
    parent::__construct($nombre, $nivel, $puntosDeVida);
    $this->poderCurativo = $poderCurativo;
  }
  function atacar(){
    return $this->poderCurativo * 2;
  }
  function defender($daño){
    $dañoFinal = $daño - $this->poderCurativo /2;
    return $dañoFinal > 0 ? $dañoFinal : 0;
  }

  function curar()
  {
    return $this->poderCurativo * 3;   
  }
}
?>