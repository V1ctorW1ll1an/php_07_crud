<main class="bg-gray-50 dark:bg-gray-900 flex-1">
  <div class="flex flex-col items-center justify-start px-6 py-8 mx-auto lg:py-0">
    <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
      <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
        <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
          <?php
          echo $id ? 'Editar chamado' : 'Cadastrar chamado';
          ?>
        </h1>
        <form class="space-y-4 md:space-y-6" method="post" action="<?php echo $id_chamado ? '/help_desk_poo/atualizar_chamado.php' : '/help_desk_poo/inserir_chamado.php'; ?>">
          <div>
            <input value="<?= isset($chamado) ? $chamado['id_chamado'] : '' ?>" type="hidden" name="id_chamado" id="id">
          </div>
          <div>
            <label for="nome" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Titulo</label>
            <input value="<?= isset($chamado) ? $chamado['titulo_chamado'] : '' ?>" type="text" name="titulo_chamado" id="nome" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg  block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@company.com" required="true">
          </div>
          <div>
            <label for="descricao_chamado" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Descrição</label>
            <input value="<?= isset($chamado) ? $chamado['descricao_chamado'] : '' ?>" type="text" name="descricao_chamado" id="nome" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg  block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@company.com" required="true">
          </div>
          <div>
            <div>
              <label for="categoria" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Categoria</label>
              <select name="id_categoria" id="categoria" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option selected>Selecione uma opçāo</option>
                <?php
                require_once 'conexao.php';
                $stmt = $pdo->query('SELECT * FROM tb_categoria');
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                  if ($row['id_categoria'] == $chamado['id_categoria'])
                    echo '<option selected value="' . $row['id_categoria'] . '">' . $row['nome_categoria'] . '</option>';
                  else
                    echo '<option value="' . $row['id_categoria'] . '">' . $row['nome_categoria'] . '</option>';
                }
                ?>
              </select>
            </div>
          </div>
          <div class="flex justify-between gap-3 flex-row-reverse flex-wrap md:flex-nowrap">
            <button type="submit" class="border border-gray-700 dark:border-gray-50 w-full text-gray-800 dark:text-gray-50 bg-gray-50 dark:bg-gray-800 dark:hover:bg-gray-950 hover:bg-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
              <?php
              echo $id ? 'Salvar' : 'Enviar';
              ?>
            </button>

            <a href="/help_desk_poo/home.php" class="min-w-[50%] w-[100%]">
              <button type="button" class="border border-red-700 dark:border-red-50 w-full text-red-800 dark:text-red-50 bg-red-50 dark:bg-red-800 dark:hover:bg-red-950 hover:bg-red-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                Voltar
              </button>
            </a>
          </div>

        </form>
      </div>
    </div>
  </div>
</main>