<?php
class Chamado
{
  private $id_chamado;
  private $titulo_chamado;
  private $descricao_chamado;
  private $id_categoria;
  private $id_usuario;

  public function __construct($id_chamado, $titulo_chamado, $descricao_chamado, $id_categoria, $id_usuario)
  {
    $this->id_chamado = $id_chamado;
    $this->titulo_chamado = $titulo_chamado;
    $this->descricao_chamado = $descricao_chamado;
    $this->id_categoria = $id_categoria;
    $this->id_usuario = $id_usuario;
  }

  public function getIdChamado()
  {
    return $this->id_chamado;
  }

  public function getTituloChamado()
  {
    return $this->titulo_chamado;
  }

  public function getDescricaoChamado()
  {
    return $this->descricao_chamado;
  }

  public function getIdCategoria()
  {
    return $this->id_categoria;
  }

  public function getIdUsuario()
  {
    return $this->id_usuario;
  }
}
