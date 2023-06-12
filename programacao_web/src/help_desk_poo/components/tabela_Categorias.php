<main class="flex-1 flex flex-col p-5 gap-5">
  <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <?php if (isset($_GET['status_code']) && $_GET['status_code'] != 'e016') : ?>
      <div class="w-full bg-green-500 text-white p-5">
        <p class="text-center"><?= $status_code[$_GET['status_code']] ?></p>
      </div>
    <?php elseif (isset($_GET['status_code'])) : ?>
      <div class="w-full bg-red-500 text-white p-5">
        <p class="text-center"><?= $status_code[$_GET['status_code']] ?></p>
      </div>
    <?php endif; ?>
    <h1 class="text-gray-700 text-xl dark:text-gray-50 py-3">Categorias</h1>
    <table class="<?php echo !isset($categorias) ? 'hidden' : ''  ?> w-full text-sm text-left text-gray-500 dark:text-gray-400">
      <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
          <th scope="col" class="px-6 py-3">
            Id
          </th>
          <th scope="col" class="px-6 py-3">
            Nome
          </th>
          <th scope="col" class="px-6 py-3">
            Açōes
          </th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($categorias as $categoria) : ?>
          <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
              <?= $categoria['id_categoria'] ?>
            </th>
            <td class="px-6 py-4">
              <?= $categoria['nome_categoria'] ?>
            </td>
            <td class="px-6 py-4 flex gap-4">
              <a href="/help_desk_poo/editar_categoria.php/?id=<?= $categoria['id_categoria'] ?>" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">editar</a>
              <a href="/help_desk_poo/excluir_categoria.php/?id=<?= $categoria['id_categoria'] ?>" class="font-medium text-red-600 dark:text-red-500 hover:underline">excluir</a>
            </td>
          </tr>
        <?php endforeach ?>
      </tbody>
    </table>
    <div class="<?php echo isset($categorias) ? 'hidden' : ''  ?> flex justify-center items-center h-32">
      <p class="text-gray-500 dark:text-gray-400 p-5">Nenhuma categoria encontrada</p>
    </div>
  </div>
  <div class="flex justify-between gap-5 pt-5">
    <a href="/help_desk_poo/" class="px-4 py-2 rounded-md text-gray-800 dark:text-gray-50 border border-gray-800 dark:border-gray-50 dark:hover:bg-gray-950 hover:bg-gray-200 transition-all">Voltar</a>
    <a href="/help_desk_poo/cadastrar_categoria.php" class="px-4 py-2 rounded-md text-gray-50 bg-gray-800 hover:bg-gray-950 dark:text-gray-800 dark:bg-gray-50 dark:hover:bg-gray-200 transition-colors">Criar nova categoria</a>
  </div>
</main>