<?php
class Perfil
{
  private $id_perfil;
  private $nome_perfil;

  public function __construct($id_perfil, $nome_perfil)
  {
    $this->id_perfil = $id_perfil;
    $this->nome_perfil = $nome_perfil;
  }

  public function getIdPerfil()
  {
    return $this->id_perfil;
  }

  public function getNomePerfil()
  {
    return $this->nome_perfil;
  }
}
