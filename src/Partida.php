<?php

namespace Dsw\Rolgame;

class Partida
{
  private $personajes = [];

  public function agregarPersonaje(Personaje $p): void
  {
    $this->personajes[] = $p;
  }

  public function obtenerPersonajes(): array
  {
    return $this->personajes;
  }

  public function eliminarPersonaje(Personaje $p): void
  {
    $pos = array_search($p, $this->personajes);
    if ($pos !== false) {
      array_splice($this->personajes, $pos, 1);
    }
  }

  public function obtenerPersonajesPorClase($class): array
  {
    return array_filter($this->personajes, function($p) use ($class) {
      return $p instanceof $class;
    });
  }

  public function eliminarMuertos() : void {
    $this->personajes = array_filter($this->personajes, function($p) {
      return $p->puntosDeVida > 0;
    });
  }
}