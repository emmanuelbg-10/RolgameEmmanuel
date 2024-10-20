<?php
namespace Dsw\Rolgame;

abstract class Personaje {
  public $nombre;
  public $nivel;
  public $puntosDeVida;

  public function __construct($nombre, $nivel, $puntosDeVida){
    $this->nombre = $nombre;
    $this->nivel = $nivel;
    $this->puntosDeVida = $puntosDeVida;
  }

  abstract function atacar();

  abstract function defender($daño);

  function subirNivel(){
    $this->nivel++;
  }

  public static function lucha(Personaje $personaje1, Personaje $personaje2) {
    $personaje2->puntosDeVida -= $personaje2->defender($personaje1->atacar());
    $personaje1->puntosDeVida -= $personaje1->defender($personaje2->atacar());
  }
}
?>