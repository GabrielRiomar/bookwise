<?php
require('dados.php');
$id = $_REQUEST['id'];
$filtro =
  array_filter($livros, function ($f_livro) use ($id) {
    return $f_livro['id'] == $id;
  });
$livro = array_pop($filtro)
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
  <title>Book Wise</title>
</head>

<body class="bg-violet-300 text-stone-700">
  <header class="bg-white text-violet-400 border border-violet-300 rounded-md mx-auto max-w-screen-lg font-bold">
    <nav class="flex justify-between px-8 py-4">
      <h1 class="tracking-wide text-xl">Book Wise</h1>
      <ul class="flex space-x-4">
        <li class="text-teal-500 hover:text-teal-700 hover:underline transition-colors duration-300"><a href="" target="#_blank">Explore</a></li>
        <li><a href="" target="#_blank" class="hover:underline">My Books</a></li>
      </ul>
      <ul>
        <li class="hover:scale-110 hover:font-semibold transition-all duration-300"><a href="">Login</a></li>
      </ul>
    </nav>
  </header>

  <main class="mx-auto max-w-screen-lg space-y-6">
    <div class="p-2 rounded border-2 border-violet-500 rounded-md bg-white">
      <div class="flex">
        <div class="w-1/3">Imagem</div>
        <div class="w-2/3">
          <div class="font-semibold hover:underline"><a href="/livro.php?id=<?= $livro['id'] ?>"><?= $livro['titulo'] ?></a></div>
          <div class="text-xs font-italic"><?= $livro['autor'] ?></div>
          <div class="text-xs font-italic"> ⭐⭐⭐⭐⭐(X Avaliação)</div>
        </div>
      </div>
      <div class=""><?= $livro['descricao'] ?></div>
    </div>
  </main>
</body>

</html>