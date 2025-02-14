<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
  <title>Book Wise</title>
</head>

<body class="bg-indigo-400 text-stone-700">
  <header class="bg-white text-indigo-500 border border-indigo-400 rounded-md mx-auto max-w-screen-lg font-bold">
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
    <?php require "views/{$view}.view.php"; ?>
  </main>
</body>

</html>