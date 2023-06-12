<?php
session_start();

if (!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] !== true) {
  header('Location: index.php');
  exit;
}

include 'conexao.php';

$query = "SELECT id_categoria, nome_categoria FROM tb_categoria";
$result = $pdo->query($query);

?>
<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-abrir-chamado {
        padding: 30px 0 0 0;
        width: 100%;
        margin: 0 auto;
      }
    </style>
  </head>

  <body>

    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        App Help Desk
      </a>
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-abrir-chamado">
          <div class="card">
            <div class="card-header">
              Abertura de chamado
            </div>
            <div class="card-body">
               <?php if (isset($_GET['msg']) && $_GET['msg'] === 'sucesso'): ?>
                <div class="alert alert-success" role="alert">
                  Chamado registrado com sucesso!
                </div>
              <?php endif; ?>
              <div class="row">
                <div class="col">
                  
                  <form method="post" action="registrar_chamado.php">
                    <div class="form-group">
                      <label>Título</label>
                      <input name="titulo" type="text" class="form-control" placeholder="Título">
                    </div>
                    
                   <div class="form-group">
                        <label>Categoria</label>
                        <select class="form-control" name="categoria">
                            <?php
                               while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                                echo '<option value="' . $row['id_categoria'] . '">' . $row['nome_categoria'] . '</option>';
                              }
                            ?>
                        </select>
                    </div>

                    <div class="form-group">
                      <label>Descrição</label>
                      <textarea name="descricao" class="form-control" rows="3"></textarea>
                    </div>

                    <div class="row mt-5">
                      <div class="col-6">
                        <a href="home.php" class="btn btn-lg btn-warning btn-block">Voltar</a>
                      </div>

                      <div class="col-6">
                        <button class="btn btn-lg btn-info btn-block" type="submit">Abrir</button>
                      </div>
                    </div>
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>