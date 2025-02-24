<form action="" class="w-full mt-6">
  <input type="text" class="bg-white border border-violet-300 rounded-md text-sm focus:outline-none px-2 py-1" placeholder="Search..." name="search">
  <button type="submit" class="cursor-pointer">🏸</button>
</form>

<section class="grid flex gap-4 grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
  <!-- Livro -->
  <?php foreach ($livros as $livro): ?>
    <div class="p-2 rounded border-2 border-violet-500 rounded-md bg-white">
      <div class="flex">
        <div class="w-1/3">Imagem</div>
        <div class="w-2/3">
          <div class="font-semibold hover:underline"><a href="/livro?id=<?= $livro['id'] ?>"><?= $livro['titulo'] ?></a></div>
          <div class="text-xs font-italic"><?= $livro['autor'] ?></div>
          <div class="text-xs font-italic"> ⭐⭐⭐⭐⭐(X Avaliação)</div>
        </div>
      </div>
      <div class=""><?= $livro['descricao'] ?></div>
    </div>
  <?php endforeach; ?>
</section>
<div>Lista final</div>