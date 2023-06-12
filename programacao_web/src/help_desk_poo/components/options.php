<main class="w-full h-full flex justify-center items-center flex-1 p-4">

  <!-- cards -->
  <div class="container flex justify-center items-center">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-10">

      <a href="/help_desk_poo/usuarios.php" class="<?php echo isset($_SESSION['perfil_id']) && $_SESSION['perfil_id'] === 1 ? '' : 'hidden' ?> max-w-sm rounded overflow-hidden shadow-lg dark:shadow-black flex flex-col items-center cursor-pointer">
        <i class="ph ph-users-three text-6xl dark:text-gray-400"></i>
        <div class="px-6 py-4 flex items-center flex-col">
          <div class="font-bold text-xl mb-2 dark:text-gray-400">Usuários</div>
          <p class="text-gray-700 dark:text-gray-400  text-base">
            Aqui você pode gerenciar os usuários do sistema. (visualizar, cadastrar, editar, excluir)
          </p>
        </div>
      </a>

      <a href="/help_desk_poo/chamados.php" class="max-w-sm rounded overflow-hidden shadow-lg dark:shadow-black flex flex-col items-center cursor-poiter">
        <i class="ph ph-chat-circle-text text-6xl dark:text-gray-400"></i>
        <div class="px-6 py-4 flex items-center flex-col">
          <div class="font-bold text-xl mb-2 dark:text-gray-400">Chamados</div>
          <p class="text-gray-700 dark:text-gray-400  text-base">
            Aqui você pode gerenciar os chamados do sistema. (visualizar, cadastrar, editar, excluir)
          </p>
        </div>
      </a>

      <a href="/help_desk_poo/categorias.php" class="<?php echo isset($_SESSION['perfil_id']) && $_SESSION['perfil_id'] === 1 ? '' : 'hidden' ?> max-w-sm rounded overflow-hidden dark:shadow-black shadow-lg flex flex-col items-center cursor-poiter">
        <i class="ph ph-tag text-6xl dark:text-gray-400"></i>
        <div class="px-6 py-4 flex items-center flex-col">
          <div class="font-bold text-xl mb-2 dark:text-gray-400">Categorias</div>
          <p class="text-gray-700  dark:text-gray-400 text-base">
            Aqui você pode gerenciar as categorias do sistema. (visualizar, cadastrar, editar, excluir)
          </p>
        </div>
      </a>
    </div>
  </div>
</main>