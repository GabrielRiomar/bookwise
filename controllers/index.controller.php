<?php
//Model
require('dados.php');
// $view = 'index';
// require('views/template/app.php');
view('index', [
  'livros' => $livros
])
?>
<!--  -->