<?php
namespace Dsw\Rolgame;

class Partida{
  public $personajes;
  function __construct(){
    $this->personajes = [];
  }

  function agregarPersonaje(Personaje $p){
    if($p instanceof Personaje){
      array_push($this->personajes, $p);
    }
  }

  function obtenerPersonajes(){
    return $this->personajes;
  }

  function eliminarPersonaje(Personaje $p){
    $posicion = array_search($p, $this->personajes);
    
    if($posicion !== false){
      array_splice($this->personajes, $posicion, 1);
    }
  }

  function obtenerPersonajesPorClase($class){
    return array_filter($this->personajes, function($p) use ($class){
      return $p instanceof $class;
    });
  }

  function eliminarMuertos() : void {
    $this->personajes = array_filter($this->personajes, function ($p){
      return $p->puntosDeVida > 0;
    });
  }

}

?>