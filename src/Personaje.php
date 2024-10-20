<?php
namespace Dsw\Rolgame;

abstract class Personaje
{
  public $nombre;
  public $nivel;
  public $puntosDeVida;
  public function __construct($nombre, $nivel, $puntosDeVida)
  {
    $this->nombre = $nombre;
    $this->nivel = $nivel;
    $this->puntosDeVida = $puntosDeVida;
  }

  abstract function atacar();

  abstract function defender($daño);

  public function subirNivel(){
    $this->nivel++; 
  }

  public static function lucha(Personaje $p1, Personaje $p2){
    $p2->puntosDeVida -= $p2->defender($p1->atacar());
    $p1->puntosDeVida -= $p1->defender($p2->atacar()); 
  }
}
?>