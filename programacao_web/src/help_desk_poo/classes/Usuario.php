<?php
class Usuario
{
  private $id_usuario;
  private $nome_usuario;
  private $email_usuario;
  private $senha_usuario;
  private $id_perfil;

  public function __construct($id_usuario, $nome_usuario, $email_usuario, $senha_usuario, $id_perfil)
  {
    $this->id_usuario = $id_usuario;
    $this->nome_usuario = $nome_usuario;
    $this->email_usuario = $email_usuario;
    $this->senha_usuario = $senha_usuario;
    $this->id_perfil = $id_perfil;
  }

  public function getIdUsuario()
  {
    return $this->id_usuario;
  }

  public function getNomeUsuario()
  {
    return $this->nome_usuario;
  }

  public function getEmailUsuario()
  {
    return $this->email_usuario;
  }

  public function getSenhaUsuario()
  {
    return $this->senha_usuario;
  }

  public function getIdPerfil()
  {
    return $this->id_perfil;
  }
}
