<?php
require('dados.php');

$id = $_REQUEST['id'];

$filtro =
  array_filter($livros, function ($f_livro) use ($id) {
    return $f_livro['id'] == $id;
  });

$livro = array_pop($filtro);

view('livro', ['livro' => $livro]);
