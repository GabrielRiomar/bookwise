<?= $livro['titulo'] ?>
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