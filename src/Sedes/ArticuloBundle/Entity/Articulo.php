<?php
namespace Sedes\ArticuloBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="se_tst_publicaciones")
 */

Class Articulo
{
 /** @ORM\Id
 * @ORM\Column(type="integer")
 * @ORM\GeneratedValue
 */
 protected $id;
 
 public function getId(){
     return $this->id;
 }
 
 /** @ORM\Column() */
 protected $titulo;

 public function setTitulo(){
     $this->titulo = $titulo;
 }
 public function getTitulo(){
     return $this->titulo;
 }
  public function __toString(){
     return $this->getTitulo();
 }
}