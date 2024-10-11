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

  abstract public function atacar();
  abstract public function defender($dañoInicial);

  public function subirNivel() 
  {
    $this->nivel++;
  }
}