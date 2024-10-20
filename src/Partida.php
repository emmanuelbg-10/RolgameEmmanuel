<?php
namespace Dsw\Rolgame;

class Partida
{
  private $personajes;
  public function __construct(){
    $this->personajes = [];
  }

  public function agregarPersonaje(Personaje $p){
    if($p instanceof Personaje){
      array_push($this->personajes, $p);
    }
  }
  public function obtenerPersonajes(){
    return $this->personajes;
  }

  public function eliminarPersonaje(Personaje $p){
    $pos = array_search($p, $this->personajes);
    if($pos !== false){
      array_splice($this->personajes, $pos, 1);
    }
  }

  public function obtenerPersonajesPorClase($class){
    return array_filter($this->personajes, function($personaje) use ($class){
      return $personaje instanceof $class;
    });
  }

  public function eliminarMuertos(){
    $this->personajes = array_filter($this->personajes, function($personaje){
      if($personaje->puntosDeVida > 0){
        return $personaje;
      }
      
    });
  }
}

?>