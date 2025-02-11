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

    <form action="" class="w-full mt-6">
      <input type="text" class="bg-white border border-violet-300 rounded-md text-sm focus:outline-none px-2 py-1" placeholder="Search..." name="search">
      <button type="submit" class="cursor-pointer">🏸</button>
    </form>

    <section class="grid flex gap-4 grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
      <!-- Livro -->
      <div class="p-2 rounded border-2 border-violet-500 rounded-md bg-white">
        <div class="flex">
          <div class="w-1/3">Imagem</div>
          <div class="w-2/3">
            <div class="font-semibold hover:underline"><a href="/livro.php?">Titulo</a></div>
            <div class="text-xs font-italic">Autor</div>
            <div class="text-xs font-italic"> ⭐⭐⭐⭐⭐(X Avaliação)</div>
          </div>
        </div>
        <div class="">Descrição</div>
      </div>
      <div class="p-2 rounded border-2 border-violet-500 rounded-md">
        <div class="flex">
          <div class="w-1/3">Imagem</div>
          <div class="w-2/3">
            <div class="font-semibold hover:underline"><a href="/livro.php?">Titulo</a></div>
            <div class="text-xs font-italic">Autor</div>
            <div class="text-xs font-italic"> ⭐⭐⭐⭐⭐(X Avaliação)</div>
          </div>
        </div>
        <div class="">Descrição</div>
      </div>
      <div class="p-2 rounded border-2 border-violet-500 rounded-md">
        <div class="flex">
          <div class="w-1/3">Imagem</div>
          <div class="w-2/3">
            <div class="font-semibold hover:underline"><a href="/livro.php?">Titulo</a></div>
            <div class="text-xs font-italic">Autor</div>
            <div class="text-xs font-italic"> ⭐⭐⭐⭐⭐(X Avaliação)</div>
          </div>
        </div>
        <div class="">Descrição</div>
      </div>
      <div class="p-2 rounded border-2 border-violet-500 rounded-md">
        <div class="flex">
          <div class="w-1/3">Imagem</div>
          <div class="w-2/3">
            <div class="font-semibold hover:underline"><a href="/livro.php?">Titulo</a></div>
            <div class="text-xs font-italic">Autor</div>
            <div class="text-xs font-italic"> ⭐⭐⭐⭐⭐(X Avaliação)</div>
          </div>
        </div>
        <div class="">Descrição</div>
      </div>
      <div class="p-2 rounded border-2 border-violet-500 rounded-md">
        <div class="flex">
          <div class="w-1/3">Imagem</div>
          <div class="w-2/3">
            <div class="font-semibold hover:underline"><a href="/livro.php?">Titulo</a></div>
            <div class="text-xs font-italic">Autor</div>
            <div class="text-xs font-italic"> ⭐⭐⭐⭐⭐(X Avaliação)</div>
          </div>
        </div>
        <div class="">Descrição</div>
      </div>

    </section>
    <div>Lista final</div>
  </main>
</body>

</html>